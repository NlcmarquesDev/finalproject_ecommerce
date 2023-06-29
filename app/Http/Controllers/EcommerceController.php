<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Faq;
use App\Models\User;
use App\Models\Color;
use App\Models\Product;
use App\Models\Shipment;
use App\Models\Wishlist;
use App\Mail\ContactMail;
use App\Models\Locations;
use Illuminate\Http\Request;
use DrewM\MailChimp\MailChimp;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class EcommerceController extends Controller
{

    public function index()
    {

        $products = Product::inRandomOrder()->take(3)->get();
        // dd($products);
        return view('welcome', compact('products'));
    }

    public function products()
    {

        return view('ecommerce.products');
    }
    public function singleProduct(Product $product)
    {

        $product = Product::findOrFail($product->id);
        $products = Product::inRandomOrder()->take(3)->get();
        $color = Color::pluck("name", "id")->all();
        return view("ecommerce.single-product", compact("product", 'products', 'color'));
    }
    public function contact()
    {
        return view('ecommerce.contact');
    }
    public function contactMail(Request $request)
    {
        $data = $request->all();
        Mail::to(request('email'))->send(new ContactMail($data));
        Alert::success('Email send with Success');
        return  back();
    }
    public function about()
    {
        return view('ecommerce.about');
    }
    public function faq()
    {
        $faqs = Faq::all();
        return view('ecommerce.faq', compact('faqs'));
    }
    public function checkout()
    {
        $userId = Auth::id();

        $location = Locations::where('user_id', $userId)->first();
        $user = User::findOrFail($userId);
        $shipments = Shipment::all();
        $currentDate = Carbon::now();



        return view('ecommerce.checkout', compact('location', 'user', 'shipments', 'currentDate'));
    }
    public function Subscriber(Request $request)
    {

        $MailChimp = new MailChimp(env('API_KEY_MAILCHIMP'));
        $list_id = env('LIST_ID_MAILCHIMP');

        $result = $MailChimp->post("lists/$list_id/members", [
            'email_address' => $request->email,
            'status'        => 'subscribed',
        ]);
        // dd($result);
        Alert::success('Added the our newsletter Successfully', 'Thank for your choice!');

        return back();
    }
}
