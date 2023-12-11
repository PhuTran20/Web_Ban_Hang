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
 
Route::get('/', function() {
    return view('user.index');
});
Route::get('/product', function() {
    return view('user.product');
});
Route::get('/blog', function() {
    return view('user.blog');
});
Route::get('/about', function() {
    return view('user.about');
});
Route::get('/contact', function() {
    return view('user.contact');
});
Route::get('/login', function() {
    return view('user.login_user');
});
Route::get('/register', function() {
    return view('user.register_user');
});
Route::get('/product_detail', function() {
    return view('user.product-detail');
});
Route::get('/index', function() {
    return view('user.product-detail');
});