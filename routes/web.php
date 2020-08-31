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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/faqs', function () {
    return view('faqs');
});
Route::get('/all-plants', function () {
    return view('all-plants');
});
Route::get('/all-pots', function () {
    return view('all-pots');
});
Route::get('/address', function () {
    return view('address');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/shipping-and-delivery-policy', function () {
    return view('shipping-delivery-policy');
});
Route::get('/my-cart', function () {
    return view('my-cart');
});
Route::get('/my-orders', function () {
    return view('my-orders');
});
Route::get('/my-profile', function () {
    return view('my-profile');
});
Route::get('/notifications',function(){
    return view('notifications');
});
Route::get('/offers',function(){
    return view('offers');
});
Route::get('/cancellation-and-return',function(){
    return view('cancellation-and-return');
});
Route::get('/ordered-product',function(){
    return view('ordered-product');
});
Route::get('/privacy-policy',function(){
    return view('privacy-policy');
});
Route::get('/product',function(){
    return view('product');
});
Route::get('/search',function(){
    return view('search');
});
Route::get('/terms-and-conditions',function(){
    return view('terms-and-conditions');
});
Route::get('/wishlist',function(){
    return view('wishlist');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//because all delay profile hide