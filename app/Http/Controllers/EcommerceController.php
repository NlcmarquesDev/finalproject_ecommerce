<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Color;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EcommerceController extends Controller
{

    public function index()
    {

        $products = Product::inRandomOrder()->take(3)->get();


        return view('welcome', compact('products'));
    }

    public function products()
    {
        $products = Product::with('photos', 'colors')->paginate(12);

        return view('ecommerce.products', compact('products'));
    }
    public function singleProduct(Product $product)
    {
        $wishlistProduct = Wishlist::where('products', 'like', '%"id": "' . $product->id . '"%')->first();

        $wishlistProductIds = [];

        if ($wishlistProduct) {
            $wishlistProductData = $wishlistProduct['products'];

            foreach ($wishlistProductData as $item) {
                $wishlistProductIds[] = $item['id'];
            }
        }

        $product = Product::findOrFail($product->id);
        $products = Product::inRandomOrder()->take(3)->get();



        $color = Color::pluck("name", "id")->all();
        return view("ecommerce.single-product", compact("product", 'products', 'color', 'wishlistProduct', 'wishlistProductIds'));;
    }
    public function contact()
    {
        return view('ecommerce.contact');
    }
    public function about()
    {
        return view('ecommerce.about');
    }
    public function faq()
    {
        $faqs = Faq::all();
        return view('ecommerce.faq', compact('faqs'));
    }
    public function checkout()
    {

        return view('ecommerce.checkout');
    }
    public function cart()
    {
        return view('ecommerce.cart');
    }
}
