<?php

// use TCG\Voyager\Voyager;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\SubOrderController;
use App\Http\Controllers\Seller\OrderController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/home');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/listings/search', [App\Http\Controllers\ListingsController::class, 'search'])->name('listings.search');
Route::resource('listings',\App\Http\Controllers\ListingsController::class);

Route::get('/add-to-favorite/{listing}', [App\Http\Controllers\CartController::class, 'add'])->name('favorite.add')->middleware('auth');
Route::get('/favorite', [App\Http\Controllers\CartController::class, 'index'])->name('favorite.index')->middleware('auth');
Route::get('/favorite/destroy/{itemId}', [App\Http\Controllers\CartController::class, 'destroy'])->name('favorite.destroy')->middleware('auth');
Route::get('/favorite/checkout/{listing}', [App\Http\Controllers\OrderController::class, 'checkout'])->name('favorite.checkout')->middleware('auth');

Route::resource('orders', \App\Http\Controllers\OrderController::class)->middleware('auth');
Route::resource('shops', \App\Http\Controllers\ShopController::class)->middleware('auth');

Route::get('paypal/checkout/{listing}', [PayPalController::class, 'handlePayment'])->name('paypal.checkout');
Route::get('paypal/checkout-success/{order}', [PayPalController::class, 'paymentSuccess'])->name('paypal.success');
Route::get('paypal/checkout-cancel', [PayPalController::class,'paymentCancel'])->name('paypal.cancel');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::get('/order/pay/{suborder}', [SubOrderController::class, 'pay'])->name('order.pay');
});


Route::group(['prefix' => 'seller', 'middleware' => 'auth', 'as' => 'seller.'], function () {

    Route::redirect('/', 'seller/orders');

    Route::resource('orders', OrderController::class);

    Route::get('orders/delivered/{suborder}', [OrderController::class, 'markCompleted'])->name('order.delivered');
});





