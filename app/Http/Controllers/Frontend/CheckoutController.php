<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MollieController;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $userId = Auth::id();
        $cart = Cart::firstOrNew(['user_id' => $userId]);

        $taxes = 0;
        $total = 0;

        // Products from the Cart
        $cartItems = $cart->content();

        foreach ($cartItems as $cartItem) {
            $total += $cartItem->total();
        }

        $order = new Order();
        $order->user_id = $userId;
        $order->order_email = $request->email;
        $order->order_name = $request->name;
        $order->order_adress = $request->adress;
        $order->order_bus = $request->bus;
        $order->order_postcode = $request->postcode;
        $order->order_city = $request->city;
        $order->order_taxes = $cart->taxes();
        $order->order_total = $total + $taxes;
        $order->save();


        //CREATE THE DATA ON ORDER_ITEM

        $products = $cart->products;

        foreach ($products as $product) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->quantity = $product['quantity'];
            $orderItem->product_name = $product['name'];
            $orderItem->product_price = $product['price'];
            // $orderItem->product_taxes = $product['taxes'];
            $orderItem->save();
        }

        // //CREATE THE DATA ON PAYMENT TABLE
        $orderID = Order::where('id', $order->id)->first();

        //DELETE CART ITEMS
        Cart::where('user_id', $userId)->delete();

        $molliController = new MollieController();
        $molliController->preparePayment($order);
    }
}
