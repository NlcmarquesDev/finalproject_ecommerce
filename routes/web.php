<?php

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ColorsController;
use App\Http\Controllers\FrontEnd\CheckoutController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\AddCartController;
use App\Http\Controllers\MollieController;
use App\Http\Controllers\Frontend\WishlistController;

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
//Route::get('/', function () {
//    return view('welcome');
//})->name('welcome');
Route::get('/', [EcommerceController::class, 'index'])->name('welcome');
//Page All products
Route::get('/products', [EcommerceController::class, 'products'])->name('products');
//Single Product Page
Route::get('admin/products/{product}', 'ProductController@show')->name('products.show');
Route::get('/singleproduct', [EcommerceController::class, 'singleProduct'])->name('single.product');
//contact page
Route::get('/contactus', [EcommerceController::class, 'contact'])->name('contact');
//About page
Route::get('/aboutus', [EcommerceController::class, 'about'])->name('about');
//FAQ page
Route::get('/faq', [EcommerceController::class, 'faq'])->name('faq');
//Add To Cart
Route::resource('addcart', AddCartController::class);
Route::delete('/cart/{productId}', [AddCartController::class, 'removeProduct'])->name('cart.remove');
Route::patch('/cart/update', [AddCartController::class, 'updateCart'])->name('cart.update');
//wishlist
Route::post('/wishlist', [WishlistController::class, 'addToWishlist'])->name('add.wishlist');
Route::delete('/wishlist/{productId}', [WishlistController::class, 'removeFromWishlist'])->name('wish.remove');

Route::match(['get', 'post'], '/addcart', [AddCartController::class, 'addProduct'])->name('addproduct');

//chekout product
Route::post('/checkout', [CheckoutController::class, 'store'])->name('store.checkout');


//MOLLIE PAYMENT
Route::get('payment-success/{order}', [MollieController::class, 'paymentSuccess'])->name('payment.success');
Route::get('payment-cancel', [MollieController::class, 'paymentCanceled'])->name('payment.cancel');


Route::middleware(['role:administrator,customer'])->group(function () {
    //CHECKOUT
    Route::get('/checkout', [EcommerceController::class, 'checkout'])->name('checkout');

    //Cart page
    Route::get('/cart', [EcommerceController::class, 'cart'])->name('cart');
});


Route::get('/category/{category:slug}', [CategoriesController::class, 'category'])->name('category.category');

Auth::routes();

/* C0STUMER ROUTES*/





/*BACKEND ROUTES*/
Route::prefix('admin')->middleware(['role:administrator'])->group(function () {
    //Route::group(['prefix' => 'admin', 'middleware'=>'auth','admin' ], function (){

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
    //
    Route::resource('products', ProductController::class);
    //Categories Page
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
});
