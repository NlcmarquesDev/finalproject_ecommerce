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
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $userId = Auth::id();
        $cart = Cart::firstOrNew(['user_id' => $userId]);

        // $productCart = $cart->products;

        $taxes = 0;
        $total = 0;

        // Obtenha os itens do carrinho
        $cartItems = $cart->content();

        foreach ($cartItems as $cartItem) {
            //  $taxes += $cartItem->taxes(); // Adicione as taxes de cada item
            $total += $cartItem->total(); // Some o valor total de cada item
        }

        $order = new Order();
        $order->user_id = $cart->id;
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

        $products = $cart->products; // Supondo que você tenha os dados dos produtos em um array chamado "products"

        foreach ($products as $product) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->quantity = $product['quantity'];
            // $orderItem->product_name = 'nuno';
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
