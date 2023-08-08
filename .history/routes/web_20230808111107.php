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
        return view('index');
    })->name('index');
    
    Route::get('/product', function() {
        return view(product');
    })->name('product');
    
    Route::get('/blog', function() {
        return view(blog');
    })->name('blog');
    
    Route::get('/about', function() {
        return view(about');
    })->name('about');
    
    Route::get('/contact', function() {
        return view(contact');
    })->name('contact');
});
 