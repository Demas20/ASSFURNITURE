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

Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about.about');
});
Route::get('/shop', function () {
    return view('shop.shop');
});
Route::get('/services', function () {
    return view('services.services');
});
Route::get('/blog', function () {
    return view('blog.blog');
});
Route::get('/contact', function () {
    return view('contact.contact');
});
Route::get('/cart', function () {
    return view('cart');
});