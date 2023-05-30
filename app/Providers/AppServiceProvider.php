<?php

namespace App\Providers;

use Carbon\Carbon;
use App\Models\Cart;
use App\Models\Order;
use App\Helpers\Price;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\View\View;
//use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        //CART VARIABLE
        view()->composer('*', function ($view) {
            $cart = session()->get('cart', []);
            $view->with('cart', $cart);
        });
        //WISHLIST VARIABLE
        view()->composer('*', function ($view) {
            $wishlist = session()->get('wishlist', []);
            $view->with('wishlist', $wishlist);
        });

        app()->bind('price', function () {
            return new Price();
        });
        view()->composer('*', function ($view) {
            $userId = Auth::id();
            $wish = Wishlist::where('user_id', $userId)->first();
            $view->with('wish', $wish);
        });

        //orderid

        view()->composer('*', function ($view) {
            $userId = Auth::id();
            $order = Order::where('user_id', $userId)->first();
            $view->with('order', $order);
        });
        //Wishlist Product id
        view()->composer('*', function ($view) {
            $products = Product::all();
            $wishlistProductIds = [];

            foreach ($products as $product) {
                $wishlistProduct = Wishlist::where('products', 'like', '%"id": "' . $product->id . '"%')->first();

                if ($wishlistProduct) {
                    $wishlistProductData = $wishlistProduct['products'];

                    foreach ($wishlistProductData as $item) {
                        $wishlistProductIds[] = $item['id'];
                    }
                }
            }

            $view->with('wishlistProductIds', $wishlistProductIds);
        });
    }
}
