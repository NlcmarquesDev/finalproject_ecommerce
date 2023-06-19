<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderItemController extends Controller
{
    //

    // public function orderItems(Order $order)
    // {
    //     $order = Order::with('products')->findOrFail($order->id);

    //     return view('admin.orders.orderItems', compact('order'));
    // }
}
