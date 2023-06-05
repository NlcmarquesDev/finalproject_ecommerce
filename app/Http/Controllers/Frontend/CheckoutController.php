<?php

namespace App\Http\Controllers\Frontend;


use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Locations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MollieController;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $userId = Auth::id();


        $taxes = 0;
        $total = 0;

        $cart = session('cart');

        if (!is_null($cart) && is_array($cart->products)) {
            $cartItems = $cart->products;

            foreach ($cartItems as $cartItem) {
                $total += $cartItem['price'] * $cartItem['quantity'];
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

            // Criação dos itens do pedido (OrderItem)
            foreach ($cartItems as $cartItem) {

                $orderItem = new OrderItem();
                $orderItem->order_id = $order->id;
                $orderItem->quantity = $cartItem['quantity'];
                $orderItem->product_name = $cartItem['name'];
                $orderItem->product_price = $cartItem['price'];
                $orderItem->product_taxes = ($cartItem['price'] * 0.21);
                $orderItem->save();
            }
        }

        // Criação dos dados de pagamento (Payment)
        $molliController = new MollieController();
        $molliController->preparePayment($order);
    }
}
