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
 
Route::prefix('user')->group(function() {
    Route::get('/', function() {
        return view('user.index');
    })->name('index');
    
    Route::get('/product', function() {
        return view('user.product');
    })->name('product');
    
    Route::get('/blog', function() {
        return view('user.blog');
    })->name('blog');
    
    Route::get('/about', function() {
        return view('user.about');
    })->name('about');
    
    Route::get('/contact', function() {
        return view('user.contact');
    })->name('contact');
});
 