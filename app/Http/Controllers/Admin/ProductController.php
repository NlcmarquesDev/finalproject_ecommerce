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
                //            'keywords' => ['required', Rule::exists('keywords', 'id')],
                'price' => 'required',
            ],
            [
                'name.required' => 'Product name is required',
                //                'title.between' => 'Product name between 3 and 255 characters required',
                'price.required' => 'Price is required',
                //                'keywords.required'=>'Please check minimum one keyword'
            ]
        );

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->rating = $request->rating;
        $product->quantity = $request->quantity;


        $product->save();
        $colorIds = collect($request->input('colors', []))->pluck($product->color)->all();
        $ids = [];
        foreach ($colorIds as $item) {
            $obj = json_decode($item);
            $ids[] = $obj->id;
        }
        $product->colors()->sync($ids);

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
        $product = Product::find($id);
        return view('admin.products.edit', compact('product', 'colors'));
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
            ],
            [
                'name.required' => 'Title is required',
                'name.between' => 'Title between 2 and 255 characters required',
            ]
        );
        $product = Product::findOrFail($id);
        $input = $request->all();
        if ($request->hasFile('photo_id')) {
            $oldPhoto = $product->photo; // de huidige foto van de gebruiker
            if ($files = $request->file("photo_id")) {
                foreach ($files as $file) {
                    $path = $file
                        ->store("products");
                    $photo = Photo::create(["file" => $path, "product_id" => $product->id]);
                }
            }
            if ($oldPhoto) {
                unlink(public_path($oldPhoto->file));
                // $oldPhoto->delete();
                $oldPhoto->update(['file' => $path]);
                $input['photo_id'] = $oldPhoto->id;
            } else {
                $photo = Photo::create(['file' => $path]);
                $input['photo_id'] = $photo->id;
            }
        }
        $product->update($input);


        $colorIds = collect($request->input('colors', []))->pluck($product->color)->all();
        $ids = [];

        foreach ($colorIds as $item) {
            $obj = json_decode($item);
            $ids[] = $obj->id;
        }
        $product->colors()->sync($ids);

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
        // herstel ook alle posts van de gebruiker
        $product = Product::withTrashed()->where('id', $id)->first();
        $product->save();
        Alert::info('Product restore Successfully');
        return redirect()->route('products.index');
    }
}
