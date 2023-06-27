<?php

namespace App\Http\Controllers\Admin;

use App\Models\Color;
use App\Models\Photo;
use App\Models\Hastag;
use App\Models\Product;
use App\Traits\Slugify;
use App\Models\Category;
use App\Models\Wishlist;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::withTrashed()
            ->paginate(20);
        $totalProducts = Product::count();

        return view("admin.products.index", [
            "products" => $products,
            "totalProducts" => $totalProducts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $colors = Color::all();
        $hastags = Hastag::all();
        $categories = Category::all();
        return view("admin.products.create", compact("colors", "hastags", "categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        request()->validate(
            [
                'name' => ['required', 'between:3,255'],
                'photo_id' => ['required', 'array', 'min:2', 'max:2'],
                'price' => ['required', 'regex:/^\d+(\.\d{1,2})?$/'],
                'rating' => ['required', 'min:1', 'max:5'],
                'colors' => ['required', 'array', 'min:1'],
                'quantities' => ['nullable', 'array'],
                'quantities.*' => ['nullable', 'integer', 'min:1'],
            ],
            [
                'name.required' => 'Product name is required',
                'price.required' => 'Price is required',
                'price.regex' => 'Invalid price format. Use up to 2 decimal places.',
                'rating.required' => 'Please the minimum is ! and maximum is 5',
                'quantities.*.required_with' => 'The quantity must be provided for the selected color(s).',
            ]
        );

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->rating = $request->rating;


        $product->save();

        $colorQuantities = $request->input('quantities', []);
        $syncData = [];
        foreach ($colorQuantities as $colorId => $quantity) {
            if ($quantity > 0) {
                $syncData[$colorId] = ['quantity' => $quantity];
            }
        }
        $product->colors()->sync($syncData);

        $product->categories()->sync($request->categories, true);

        if ($files = $request->file("photo_id")) {
            foreach ($files as $file) {
                $path = $file
                    ->store("products");
                $photo = Photo::create(["file" => $path, "product_id" => $product->id]);
            }
        }

        $product->hastags()->sync($request->hastags, true);

        Alert::success('Product Created Successfully');
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        $product = Product::findOrFail($product->id);

        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $colors = Color::all();
        $hastags = Hastag::all();
        $categories = Category::all();
        $product = Product::find($id);
        return view('admin.products.edit', compact('product', 'colors', 'hastags', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        request()->validate(
            [
                'name' => ['required', 'between:2,255'],
                'photo_id' => ['nullable', 'array', 'min:0', 'max:2'],
                'photo_id.*' => ['nullable', 'image'],
                'categories' => ['required', 'min:1'],
                'hastags' => ['required', 'min:1'],
                'price' => ['required', 'regex:/^\d+(\.\d{1,2})?$/'],
                'rating' => ['required', 'numeric', 'min:1', 'max:5'],
                'colors' => ['required', 'array', 'min:1'],
                'quantities' => ['nullable', 'array'],
                'quantities.*' => ['nullable', 'integer', 'min:1'],

            ],
            [
                'name.required' => 'Title is required',
                'name.between' => 'Title between 2 and 255 characters required',
                'photo_id.array' => 'Photos must be an array',
                'photo_id.min' => 'At least 0 photos are required',
                'photo_id.max' => 'No more than 2 photos are allowed',
                'photo_id.*.image' => 'Invalid photo format',
                'price.required' => 'Price is required',
                'price.regex' => 'Invalid price format. Use up to 2 decimal places.',
                'rating.required' => 'Rating is required',
                'rating.numeric' => 'Rating must be a number',
                'rating.min' => 'Rating must be at least 1',
                'rating.max' => 'Rating cannot exceed 5',
                'quantities.*.required_with' => 'The quantity must be provided for the selected color(s).',
            ]
        );
        $product = Product::findOrFail($id);
        $input = $request->all();


        if ($request->hasFile('photo_id')) {
            $oldPhotos = $product->photos;

            foreach ($oldPhotos as $oldPhoto) {
                unlink(public_path($oldPhoto->file));
                $oldPhoto->delete();
            }

            $files = $request->file("photo_id");
            foreach ($files as $file) {
                $path = $file->store("products");
                $photo = Photo::create(["file" => $path, "product_id" => $product->id]);
            }
        }
        $product->update($input);

        $selectedColors = $request->input('colors', []);
        $colorQuantities = $request->input('quantities', []);

        $syncData = [];
        foreach ($selectedColors as $colorId) {
            if (isset($colorQuantities[$colorId])) {
                $quantity = $colorQuantities[$colorId];
                if ($quantity !== '' && is_numeric($quantity) && $quantity >= 1) {
                    $syncData[$colorId] = ['quantity' => $quantity];
                } else {
                    $errorMessage = 'Quantity must be a positive number greater than or equal to 1.';
                    return redirect()->back()->withErrors(['quantities.' . $colorId => $errorMessage]);
                }
            } else {
                $errorMessage = 'Quantity is required for the selected color.';
                return redirect()->back()->withErrors(['quantities.' . $colorId => $errorMessage]);
            }
        }

        $product->colors()->sync($syncData);
        $product->hastags()->sync($request->hastags, true);
        $product->categories()->sync($request->categories, true);

        Alert::success('Product updated Successfully');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product = Product::findOrFail($product->id);
        foreach ($product->photos as $photo) {
            $photo->delete();
        }
        $product->delete();
        Alert::success('Product deleted Successfully');
        return redirect()->route('products.index');
    }
    public function productRestore($id)
    {
        Product::onlyTrashed()->where('id', $id)->restore();
        $product = Product::withTrashed()->where('id', $id)->first();
        $product->save();
        Alert::info('Product restore Successfully');
        return redirect()->route('products.index');
    }
}
