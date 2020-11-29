<?php

use Illuminate\Support\Facades\Route;

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


//Frontend
Route::get('/','App\Http\Controllers\Homecontroller@index');
Route::get('/trang-chu','App\Http\Controllers\HomeController@index');
Route::post('/tim-kiem','App\Http\Controllers\HomeController@search');

//detail
Route::get('/detail/{id}','App\Http\Controllers\HomeController@detail');

//category
Route::get('/category/{id}','App\Http\Controllers\HomeController@category_product');
Route::get('/all-product','App\Http\Controllers\HomeController@all_product');

//Cart
Route::post('/save-cart','App\Http\Controllers\CartController@save_cart');
Route::post('/update-cart-quantity','App\Http\Controllers\CartController@update_cart_quantity');
Route::get('/show-cart','App\Http\Controllers\CartController@show_cart');
Route::get('/delete-item-cart/{rowId}','App\Http\Controllers\CartController@delete_item_cart');

//Checkout
Route::get('/login-checkout','App\Http\Controllers\CheckOutController@login_checkout');
Route::get('/logout-checkout','App\Http\Controllers\CheckOutController@logout_checkout');
Route::post('/add-customer','App\Http\Controllers\CheckOutController@add_customer');
Route::post('/login-customer','App\Http\Controllers\CheckOutController@login_customer');
Route::get('/checkout','App\Http\Controllers\CheckOutController@checkout');
Route::post('/save-checkout-customer','App\Http\Controllers\CheckOutController@save_checkout_customer');

Route::post('/confirm-order','App\Http\Controllers\CheckOutController@confirm_order');
Route::get('/payment','App\Http\Controllers\CheckOutController@payment');
Route::get('/infor','App\Http\Controllers\CheckOutController@infor');
