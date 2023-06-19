<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //
    public function orders()
    {
        $orders = Order::withTrashed()->paginate(10);
        $totalOrders = Order::count();
        return view('admin.orders.index', compact('orders', 'totalOrders'));
    }

    public function show($id)
    {
        $user = auth()->user();;
        $orders = Order::where('user_id', $user->id)->get();
        return view('ecommerce.orders', compact('orders', 'user'));
    }
    public function orderItems(Order $order)
    {
        $orderDetail = OrderItem::where('order_id', $order->id)->get();

        return view('admin.orders.orderItems', compact('orderDetail'));
    }
}
