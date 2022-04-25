<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
#For managing site
Route::get('/manage',function () {
    return view('manage');
})->name('manage');

Route::post('/manage/store', [App\Http\Controllers\HomeController::class, 'store'])->name('');

#商品観覧
Route::get('/item/{gender}/{categories?}/{designers?}', [App\Http\Controllers\HomeController::class, 'show_men'])->name('item_list');

Route::get('/item_menu/{id}', [App\Http\Controllers\HomeController::class, 'item_show'])->name('show_item');


#For cart
Route::get('/cart', [App\Http\Controllers\HomeController::class, 'show_cart'])->name('cart');

Route::post('/cart/insert_wish', [App\Http\Controllers\HomeController::class, 'insert_wish']);

Route::post('/cart/insert_cart', [App\Http\Controllers\HomeController::class, 'insert_cart']);

Route::post('/cart/delete', [App\Http\Controllers\HomeController::class, 'delete_cart_item']);

#決済
Route::get('/charge', [App\Http\Controllers\PaymentController::class, 'index'])->name('stripe.charge');
Route::post('/charge', [App\Http\Controllers\PaymentController::class, 'charge'])->name('stripe.charge');
