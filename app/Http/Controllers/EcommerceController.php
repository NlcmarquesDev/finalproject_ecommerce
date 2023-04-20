<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    //
    public function index()
    {

        return view('welcome');
    }

    public function products(){
        return view('ecommerce.products');
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
        return view('ecommerce.faq');
    }
    public function checkout(){
        return view('ecommerce.checkout');
    }
    public function cart(){
        return view('ecommerce.cart');
    }
}
