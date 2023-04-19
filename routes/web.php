<?php

use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
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
Route::get('/singleproduct', [EcommerceController::class, 'singleProduct'])->name('single.product');

Auth::routes();





/*BACKEND ROUTES*/
Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function (){
    //BACKEND HOMEPAGE
    Route::get('/', [HomeController::class, 'index'])->name('home');
    //USERS PAGE
    Route::resource('users', UsersController::class);


});


