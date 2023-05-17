<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Product;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        return view('welcome');
    }

    public function products(){
        $products = Product::all();
        return view('ecommerce.products', compact('products'));
    }
    public function singleProduct(){
        return view('ecommerce.single-product');
    }
    public function contact(){
        return view('ecommerce.contact');
    }
    public function about(){
        return view('ecommerce.about');
    }
    public function faq(){
        $faqs = Faq::all();
        return view('ecommerce.faq', compact('faqs'));
    }
    public function checkout(){
        return view('ecommerce.checkout');
    }
    public function cart(){
        return view('ecommerce.cart');
    }
}
