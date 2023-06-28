<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class WishlistController extends Controller
{
    //

    public function addToWishlist(Request $request)
    {
        // Obtenha os detalhes do produto do request...
        $productId = $request->input('id');
        $productName = $request->input('name');
        $productImage = $request->input('image');
        $productPrice = $request->input('price');

        $wishlist = session()->get('wishlist') ?? new Wishlist();

        if (!$wishlist instanceof Wishlist) {
            $wishlist = new Wishlist();
        }

        $wishlist->addToWishlist($productId, $productName, $productImage, $productPrice);

        session()->put('wishlist', $wishlist);
        Alert::success('Added to you Wishlist Successfully', 'Thank for your choice!');
        return redirect()->back();
    }

    public function removeFromWishlist(Request $request, $productId)
    {

        $wishlist = session('wishlist');

        if ($wishlist instanceof Wishlist) {
            $updatedProducts = [];

            foreach ($wishlist->products as $product) {
                if ($product['id'] != $productId) {
                    $updatedProducts[] = $product;
                }
            }

            $wishlist->products = $updatedProducts;

            session(['wishlist' => $wishlist]);
        }
        Alert::warning('Deleted from your Wishlist Successfully');
        return redirect()->back();
    }
}
