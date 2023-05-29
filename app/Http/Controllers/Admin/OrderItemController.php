<?php

namespace App\Http\Controllers\Admin;

use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderItemController extends Controller
{
    //

    public function orderItems()
    {
        $orderItems = OrderItem::all();

        return view('admin.orders.orderItems', compact('orderItems'));
    }
}
