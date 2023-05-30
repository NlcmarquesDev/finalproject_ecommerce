<?php

namespace App\Http\Controllers\Admin;

use App\Models\Color;
use App\Models\Photo;
use App\Models\Hastag;
use App\Models\Product;
use App\Traits\Slugify;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //        $brands = Brand::all();
        $products = Product::withTrashed()
            ->paginate(20);

        return view("admin.products.index", [
            "products" => $products,
            //            "brands" => $brands
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        //        $keywords = Keyword::all();
        $colors = Color::all();
        $hastags = Hastag::all();
        return view("admin.products.create", compact("colors", "hastags"));
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
                'description' => 'required',
                'price' => 'required',
            ],
            [
                'name.required' => 'Product name is required',
                //                'title.between' => 'Product name between 3 and 255 characters required',
                'description.required' => 'Description is required',
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

        if ($files = $request->file("photo_id")) {
            foreach ($files as $file) {
                $path = $file
                    ->store("products");
                $photo = Photo::create(["file" => $path, "product_id" => $product->id]);
                //                dd($photo);
            }
        }

        foreach ($request->hastags as $hastag) {
            $hastagFind = Hastag::findOrFail($hastag);
            $product->hastag()->save($hastagFind);
        }

        return redirect()->route('products.index')->with([
            'alert' => [
                'message' => 'Product added',
                'type' => 'success'
            ]
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // $slug = Product::Slugify($product->name);
        $product = Product::findOrFail($product->id);
        $products = Product::inRandomOrder()->take(3)->get();



        $color = Color::pluck("name", "id")->all();
        return view("ecommerce.single-product", compact("product", 'products', 'color'));
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
                'name' => ['required', 'between:5,255'],
                //            'categories' => ['required', Rule::exists('categories', 'id')],
                'description' => 'required',
            ],
            [
                'name.required' => 'Title is required',
                'name.between' => 'Title between 5 and 255 characters required',
                'description.required' => 'Message is required',
                //                'categories.required'=>'Please check minimum one category'
            ]
        );
        $product = Product::findOrFail($id);
        $input = $request->all();
        //        $input['slug'] =  Str::slug($request->title,'-');
        // oude foto verwijderen
        //we kijken eerst of er een foto bestaat
        if ($request->hasFile('photo_id')) {
            $oldPhoto = $product->photo; // de huidige foto van de gebruiker
            if ($files = $request->file("photo_id")) {
                foreach ($files as $file) {
                    $path = $file
                        ->store("products");
                    $photo = Photo::create(["file" => $path, "product_id" => $product->id]);
                }
            }
            //            $path = request()->file('photo_id')->store('users');
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

        return redirect()->route('products.index')->with([
            'alert' => [
                'message' => 'Product updated',
                'type' => 'success'
            ]
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //

        //        $product = Product::findOrFail($id);
        //        foreach ($product->photos as $photo) {
        //            $photo->delete();
        //        }
        //        $product->delete();
        //        return redirect()->route('products.index')->with('status', 'Product deleted!');
        //    }
        //    public function productsPerBrand($id){
        //        $brands = Brand::all();
        //        $products = Product::where('brand_id', $id)->with(['keywords','photo','brand','productcategories'])->paginate(10);
        //        return view('admin.products.index', compact('products', 'brands'));
    }


    public function removacart(Request $request)
    {
    }
}
