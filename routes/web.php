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
Route::get('dashboard', function () {
    return view('admin.dashboard');
});
Route::get('attributes.delete/{id}','App\Http\Controllers\AttributeGroupController@delete')->name('attributes.delete');
Route::resource('/attributes','App\Http\Controllers\AttributeGroupController');
Route::get('/datatables', 'App\Http\Controllers\PagesController@datatables');
Route::get('/ktdatatables', 'App\Http\Controllers\PagesController@ktDatatables');
Route::get('/select2', 'App\Http\Controllers\PagesController@select2');
Route::get('/jquerymask', 'App\Http\Controllers\PagesController@jQueryMask');
Route::get('/icons/custom-icons', 'App\Http\Controllers\PagesController@customIcons');
Route::get('/icons/flaticon', 'App\Http\Controllers\PagesController@flaticon');
Route::get('/icons/fontawesome', 'App\Http\Controllers\PagesController@fontawesome');
Route::get('/icons/lineawesome', 'App\Http\Controllers\PagesController@lineawesome');
Route::get('/icons/socicons', 'App\Http\Controllers\PagesController@socicons');
Route::get('/icons/svg', 'App\Http\Controllers\PagesController@svg');

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'App\Http\Controllers\PagesController@quickSearch')->name('quick-search');


