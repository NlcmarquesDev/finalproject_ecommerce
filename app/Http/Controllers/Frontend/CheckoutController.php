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

        request()->validate(
            [
                'name' => ['required', 'between:2,255'],
                'address' => ['required', 'between:2,255'],
                'postcode' => ['required', 'beetween:2,6'],
                'city' => ['required', 'between:2,255'],
                'email' => ['required', 'between:2,255'],
            ],
            [
                'name.required' => 'name is required',
                //                'title.between' => 'Product name between 3 and 255 characters required',

                //                'keywords.required'=>'Please check minimum one keyword'
            ]
        );

        $userId = Auth::id();

        $cart = session('cart');

        if (!is_null($cart) && is_array($cart->products)) {


            $shipment = $request->ship_price;

            $order = new Order();
            $order->user_id = $userId;
            $order->shipment_id = $request->shipment;
            $order->order_email = $request->email;
            $order->order_name = $request->name;
            $order->order_adress = $request->adress;
            $order->order_bus = $request->bus;
            $order->order_postcode = $request->postcode;
            $order->order_city = $request->city;
            $order->order_taxes = $cart->taxes();
            $order->order_total = $cart->total();
            $order->order_total_with_ship = $cart->totalWithShip($shipment);
            $order->save();

            foreach ($cart->content() as $cartItem) {
                $orderItem = new OrderItem();
                $orderItem->order_id = $order->id;
                $orderItem->quantity = $cartItem->quantity();
                $orderItem->product_name = $cartItem->product()->name;
                $orderItem->product_price = $cartItem->product()->price;
                $orderItem->product_taxes = $cartItem->product()->taxes();
                $orderItem->save();
            }
        }

        // Criação dos dados de pagamento (Payment)
        $molliController = new MollieController();
        $molliController->preparePayment($order);
    }
}
