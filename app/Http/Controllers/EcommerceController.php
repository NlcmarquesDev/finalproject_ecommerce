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
}
