<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Product;
use Illuminate\Http\Request;

class AddCartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function addtocart($id){

        $product = Product::findOrFail($id);
        $cart = session()->get('cart');

        $photoUrl = $product->photos->first()->file;

// Atribua $photoUrl ao campo 'photo' no carrinho

        $cart[$id] = [
            'name' => $product->name,
            'price' => $product->price,
            'stock' => 1,
            'photo' => $photoUrl
        ];

        session()->put('cart', $cart);
        return redirect()->back()->with('status', 'Product added');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //


        $products = Product::findOrFail($id);
        return view("ecommerce.single-product", compact("products"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //


        $cart = $request->session()->get('cart');

        if (isset($cart[$id])) {
            $cart[$id]['stock'] = $request->input('stock');
            $request->session()->put('cart', $cart);
        }

        return redirect()->back()->withCookie(cookie('keepOffcanvas', 'true', 60));
    }

    /**
     * Remove the specified resource from storage.
     */

        //
        public function destroy(Request $request, $id)
    {
        $cart = $request->session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            $request->session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product removed successfully');
    }



}

