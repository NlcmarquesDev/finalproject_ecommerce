<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
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
        return view('admin.orders.index', compact('orders'));
    }

    public function show(string $id)
    {
        $user = User::findOrFail($id);
        $orders = Order::where('user_id', $id)->get();

        return view('ecommerce.orders', compact('orders', 'user'));
    }
}