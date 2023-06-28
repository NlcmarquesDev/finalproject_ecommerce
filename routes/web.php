<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MollieController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\Admin\ColorsController;
use App\Http\Controllers\Admin\HastagController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Frontend\AddCartController;
use App\Http\Controllers\FrontEnd\CheckoutController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Frontend\SettingUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteSecontact.blade.phprviceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*FRONTEND ROUTES*/
//HOMEPAGE
Route::get('/', [EcommerceController::class, 'index'])->name('welcome');
//ALL PRODUCTS
Route::get('/products', [EcommerceController::class, 'products'])->name('products');
//SINGLE PRODUCTS Page
Route::get('/singleproduct/{product}', [EcommerceController::class, 'singleProduct'])->name('single.product');
//CONTACT page
Route::get('/contactus', [EcommerceController::class, 'contact'])->name('contact');
//ABOUTpage
Route::get('/aboutus', [EcommerceController::class, 'about'])->name('about');
//FAQ page
Route::get('/faq', [EcommerceController::class, 'faq'])->name('faq');

//ADD TO CART
Route::resource('addcart', AddCartController::class);
Route::delete('/cart/{productId}', [AddCartController::class, 'removeProduct'])->name('cart.remove');
Route::patch('/cart/update', [AddCartController::class, 'updateCart'])->name('cart.update');
Route::match(['get', 'post'], '/addcart', [AddCartController::class, 'addProduct'])->name('addproduct');
//WISHLIST
Route::post('/wishlist', [WishlistController::class, 'addToWishlist'])->name('add.wishlist');
Route::delete('/wishlist/{productId}', [WishlistController::class, 'removeFromWishlist'])->name('wish.remove');

//MOLLIE PAYMENT
Route::get('payment-success/{order}', [MollieController::class, 'paymentSuccess'])->name('payment.success');
Route::get('payment-cancel', [MollieController::class, 'paymentCanceled'])->name('payment.cancel');

//MAILCHIMP ROUTE
Route::post('mailchimp', [EcommerceController::class, 'subscriber'])->name('mailchimp.subscribe');

//GOOGLE LOGIN ACCOUNT
Route::get('/auth/google/redirect', [GoogleController::class, 'googleRedirect'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'googleCallback']);

//CONTACT MESSAGE
Route::post('/contact', [EcommerceController::class, 'contactMail'])->name('send.mail');



//ROUTE JUST FOR CUSTOMERS AND ADMIN
Route::middleware(['role:administrator,customer'])->group(function () {
    //CHECKOUT
    Route::get('/checkout', [EcommerceController::class, 'checkout'])->name('checkout'); //chekout product - to go make the payment final
    Route::post('/checkout', [CheckoutController::class, 'store'])->name('store.checkout');

    //MY ORDERS PAGE
    Route::get('orders', [OrderController::class, 'orders'])->name("orders.index");
    Route::get('/myorders/{id}', [OrderController::class, 'show'])->name('my.orders');
    //MY SETTINGS USER PAGE
    Route::resource('/mysettings', SettingUserController::class);
});

Auth::routes();


//BACKEND ROUTES AND ADMIN ROUTES
Route::prefix('admin')->middleware(['role:administrator'])->group(function () {

    //BACKEND HOMEPAGE
    Route::get('/', [HomeController::class, 'index'])->name('home');
    //USERS PAGE
    Route::resource('users', UsersController::class);
    //users restore
    Route::post("users/restore/{user}", [
        UsersController::class,
        "usersRestore",
    ])->name("users.restore");
    //FAQ page
    Route::resource('faq', faqController::class);
    Route::post("faq/restore/{faq}", [
        faqController::class,
        "faqRestore",
    ])->name("faqs.restore");
    //PRODUCTS PAGE
    Route::resource('products', ProductController::class);
    Route::post("products/restore/{id}", [
        ProductController::class,
        "productRestore",
    ])->name("products.restore");
    //CATEGORIES PAGE
    Route::resource('categories', CategoriesController::class);
    Route::post("categories/restore/{category}", [
        CategoriesController::class,
        "categoryRestore",
    ])->name("categories.restore");
    //Colors Page
    Route::resource('colors', ColorsController::class);
    Route::post("colors/restore/{color}", [
        ColorsController::class,
        "colorRestore",
    ])->name("colors.restore");
    //Hastags Page
    Route::resource('hastags', HastagController::class);
    Route::post("hastags/restore/{hastag}", [
        HastagController::class,
        "hastagRestore",
    ])->name("hastags.restore");
    //ORDERS PAGE
    Route::get('orderItems/{order}', [OrderController::class, 'orderItems'])->name("orders.items");
    //PAYMENT PAGE
    Route::get('payments', [PaymentController::class, 'payment'])->name("payment");
    //SETTINGS ADMIN
    Route::get('settings', [SettingsController::class, 'favicon'])->name("settings.admin");
    Route::post('settings/favicon', [SettingsController::class, 'addFavicon'])->name("add.favicon");
    Route::post('settings/socialmedia', [SocialMediaController::class, 'socialMedia'])->name('social.media');
});
