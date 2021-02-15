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

Route::get('index', function () {
    return view('users.index');
});

Route::get('login', function () {
    return view('users.login-user');
});
Route::get('about-us', function () {
    return view('users.about-sux');
});
Route::get('cart', function () {
    return view('users.cart');
});
Route::get('checkout', function () {
    return view('users.checkout');
});
Route::get('contact-us', function () {
    return view('users.contact-us');
});
Route::get('product-details', function () {
    return view('users.product-details');
});
Route::get('frequently-questions', function () {
    return view('users.frequently-questions');
});
Route::get('my-account', function () {
    return view('users.my-account');
});
Route::get('shop', function () {
    return view('users.shop');
});

