<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ColorsController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('product/{slug}', [Product::class, 'show'])->name('product.show');
Route::get('/singleproduct', [EcommerceController::class, 'singleProduct'])->name('single.product');
//contact page
Route::get('/contactus', [EcommerceController::class, 'contact'])->name('contact');
//About page
Route::get('/aboutus', [EcommerceController::class, 'about'])->name('about');
//FAQ page
Route::get('/faq', [EcommerceController::class, 'faq'])->name('faq');
////Checkoutpage
//
//Route::get('/checkout', [EcommerceController::class, 'checkout'])->name('checkout')->middleware('customer');




//Cart page
Route::get('/cart', [EcommerceController::class, 'cart'])->name('cart');


Route::get('/category/{category:slug}',[CategoriesController::class,'category'])->name('category.category');

Auth::routes();

/* C0STUMER ROUTES*/


/*BACKEND ROUTES*/
    Route::prefix('admin')->middleware(['admin'])->group(function(){
//Route::group(['prefix' => 'admin', 'middleware'=>'auth','admin' ], function (){
        Route::get('/checkout', [EcommerceController::class, 'checkout']);
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
    Route::resource('faq',faqController::class);
    //
    Route::resource('products', ProductController::class);
    //Categories Page
    Route::resource('categories',CategoriesController::class);
    Route::post("categories/restore/{category}", [
        CategoriesController::class,
        "categoryRestore",
    ])->name("categories.restore");
    //Colors Page
    Route::resource('colors',ColorsController::class);
    Route::post("colors/restore/{color}", [
        ColorsController::class,
        "colorRestore",
    ])->name("colors.restore");

//        //Checkoutpage
//
//        Route::get('/checkout', [EcommerceController::class, 'checkout'])->name('checkout')->middleware('customer');



});


