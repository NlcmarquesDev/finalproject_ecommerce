<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Order;
use App\Models\Payment;

use App\Models\Cart;
use App\Models\ColorProduct;
use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;

class MollieController extends Controller
{
    //
    public function  __construct()
    {
        Mollie::api()->setApiKey('test_GnVpmSRdtV2wBqzgmdsAeMWEHHEbv8'); // your mollie test api key
    }

    public function preparePayment(Order $order, Cart $cart)
    {
        $transaction = Mollie::api()->payments()->create([
            'amount' => [
                'currency' => 'EUR',
                'value' => sprintf('%.2f', $order->order_total_with_ship), // Certifique-se de fornecer o valor no formato correto
            ],
            'description' => 'Payment for Order ID: ' . $order->id,
            'redirectUrl' => 'http://127.0.0.1:8000/payment-success/' . $order->id, // route('payment-success')
            'cancelUrl' => 'https://968b-2a02-1811-ec12-ac00-6990-c00f-cd22-452.ngrok-free.app/payment-cancel', // route('payment-cancel')
            'webhookUrl' => 'https://968b-2a02-1811-ec12-ac00-6990-c00f-cd22-452.ngrok-free.app/api/mollie/webhook', // route('api/mollie/web')
            'method' => 'bancontact',
            'metadata' => [
                "order_id" => $order->id,
            ],
        ]);

        $payment = new Payment();
        $payment->order_id = $order->id;
        $payment->transation_id = $transaction->id;
        $payment->payment_status = 'unpaid';
        $payment->payment_gateway = 'mollie';
        $payment->save();

        foreach ($cart->content() as $cartItem) {
            $product = $cartItem->product();
            $colorName = $cartItem->color();
            $color = Color::where('name', $colorName)->first();

            if ($color) {
                $colorProduct = ColorProduct::where('product_id', $product->id)
                    ->where('color_id', $color->id)
                    ->first();

                if ($colorProduct) {
                    $colorProduct->quantity -= $cartItem->quantity();
                    $colorProduct->save();
                }
            }
        }

        header("Location: " . $transaction->getCheckoutUrl(), true, 303);
        exit();
    }

    /**
     * Page redirection after the successfull payment
     *
     * @return Response
     */
    public function paymentSuccess(Order $order)
    {

        if ($order->isPaid()) {

            $order = Order::findOrFail($order->id);

            if ($order) {
                $order->order_status = 'paid';
                $order->save();
                session()->forget('cart');
            }
            // echo 'payment has been received';
            return view('ecommerce.thankyou');
        } else {
            echo $order->payments->last()->payment_status;
        }
    }

    public function checkPaymentStatus()
    {
        $transactionId = strip_tags($_POST['id']);
        $transaction = Mollie::api()->payments->get($transactionId);
        $payment = Payment::where('transation_id', $transactionId)->first();

        if ($transaction->isPaid()) {
            $payment->payment_status = 'paid';
        } elseif ($transaction->isOpen()) {
            $payment->payment_status = 'open';
        } elseif ($transaction->isCanceled()) {
            $payment->payment_status = 'cancelled';
        } elseif ($transaction->isExpired()) {
            $payment->payment_status = 'expired';
        } elseif ($transaction->isPending()) {
            $payment->payment_status = 'pending';
        } elseif ($transaction->isAuthorized()) {
            $payment->payment_status = 'authorized';
        } elseif ($transaction->isFailed()) {
            $payment->payment_status = 'failed';
        }
        $payment->save();
    }
}
