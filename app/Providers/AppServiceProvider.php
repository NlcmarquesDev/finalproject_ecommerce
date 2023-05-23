<?php

namespace App\Providers;

use App\Models\Cart;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
//use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

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
        //
        Paginator::useBootstrapFive();
        $this->registerShowCart();

        $userId = Auth::id();
        $cart = Cart::where('user_id', $userId)->first();

        $numberOfProducts = 0;

        if ($cart && $cart->products) {
            $products = json_decode($cart->products, true);

            if (is_array($products)) {
                $numberOfProducts = count($products);
            }
        }

        view()->share('numberOfProducts', $numberOfProducts);



//        $cartProductCount = $cart ? count($cart->products) : 0;
//        view()->share('cartProductCount', $cartProductCount);


    }
    private function registerShowCart()
    {
        view()->share('showCart', function () {
            $userId = Auth::id();
            $cart = Cart::where('user_id', $userId)->first();

            if ($cart && is_string($cart->products)) {
                $products = json_decode($cart->products, true);
                $cart->products = $products;
            }

            return $cart;
        });
    }

}
