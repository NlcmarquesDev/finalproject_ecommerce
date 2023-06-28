<?php

namespace App\Http\Controllers\Admin;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function payment()
    {

        $payments = Payment::all();
        $totalPayments = Payment::count();
        return view('admin.payment.index', compact('payments', 'totalPayments'));
    }
}
