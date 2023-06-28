<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\User;
use App\Models\Color;
use App\Models\Order;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AddCartController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function addProduct(Request $request)
    {

        $productId = $request->input('id');
        $product = Product::findOrFail($productId);
        $productColor = $request->input('color');
        $productQuantity = $request->input('quantity');


        // recup the cart session or create e new cart
        $cart = session()->get('cart') ?? new Cart();

        // check if cart is object
        if (!$cart instanceof Cart) {
            $cart = new Cart();
        }

        //add product to the cart
        $cart->addProduct($product, $productQuantity, $productColor);


        session()->put('cart', $cart);


        //session wishlist
        $wishlist = session('wishlist');

        if ($wishlist && is_array($wishlist->products)) {
            $products = $wishlist->products;

            foreach ($products as $key => $product) {
                if ($product && isset($product['id']) && $product['id'] == $productId) {
                    unset($products[$key]);
                    break;
                }
            }

            $wishlist->products = $products;
            session()->put('wishlist', $wishlist);
        }
        Alert::success('Added to cart Successfully', 'Thank for your choice!');
        return redirect()->back();
    }

    public function removeProduct(Request $request, $productId)
    {

        $cart = session('cart');

        $color = $request->color;


        if ($cart instanceof Cart) {

            $updatedProducts = [];

            // check the cart product and add whitch dont match with id given
            foreach ($cart->products as $product) {
                if ($product['id'] != $productId || $product['color'] != $color) {
                    $updatedProducts[] = $product;
                }
            }

            // new array with updated products
            $cart->products = $updatedProducts;


            session(['cart' => $cart]);
        }
        Alert::success('Removed from the cart Successfully');
        return redirect()->back();
    }

    public function updateCart(Request $request)
    {
        $cart = session('cart');

        if ($cart instanceof Cart) {
            $products = $cart->products;

            foreach ($products as $index => $product) {
                $productId = $product['id'];
                $quantity = $request->input('quantity_' . $productId);

                if ($quantity) {
                    $products[$index]['quantity'] = $quantity;
                }
            }

            $cart->products = $products;
            session(['cart' => $cart]);
        }

        Alert::success('Cart updated Successfully', 'Thank for your choice!');

        return redirect()->back();
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
    }

    /**
     * Remove the specified resource from storage.
     */

    //
    public function destroy(Request $request, $id)
    {
    }
}
