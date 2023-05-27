<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Product;
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
    public function singleProduct(Product $product, $id)
    {

        $SingleProduct = Product::findOrFail($id);
        return view('ecommerce.single-product', compact('SingleProduct'));
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
