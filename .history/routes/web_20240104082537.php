<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\ThuonghieuController;
use App\Http\Controllers\UserController;

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
 
//register&&login&&logout
Route::get('/login', function() {
    return view('user.login_user');
});
Route::get('/register', function() {
    return view('user.register_user');
});
Route::post('/register', [UserController::class, 'store']);
Route::post('/', [UserController::class, 'login']);
 
Route::get('/logout', [UserController::class, 'logout']);
//info_User
Route::get('/info_user/{id_user}', function(){
    return view('user.info_User');
});
// Route::get('/info_user/{id_user}',[UserController::class,'infoUser']) ; 

Route::get('/product_detail', function() {
    return view('user.product-detail');
});
 

route::prefix('admin')->group(   function()
{
    //login
    Route::get('/login',function(){
        return view('/admin.login.login_admin');
    });
    Route::post('/trangchu',[AdminController::class,'login']);
    //logout
    Route::get('/logout',[AdminController::class,'logout']);
    
    //trangchu
    // Route::get('/trangchu',[AdminController::class,'checkLogin']);
    Route::get('/trangchu', function() {
        return view('admin.index');
    });
    Route::get('/productt', function() {
        return view('admin.pages.product_admin.product');
    });
    Route::prefix('bike')->group(function(){
        Route::get('/',[BikeController::class, 'show']);
        Route::get('/create_bike',[BikeController::class, 'create']);
        Route::post('/create_bike',[BikeController::class, 'store']);
    });
    Route::prefix('thuonghieu')->group( function(){
        Route::get('/',[ThuonghieuController::class,'show']);
        Route::get('/create_thuonghieu',[ThuonghieuController::class,'create']);
        Route::post('/create_thuonghieu',[ThuonghieuController::class,'store']);
        Route::get('/edit_thuonghieu/{id_thuonghieu}',[ThuonghieuController::class,'edit']);
        Route::put('/edit_thuonghieu/{id_thuonghieu}',[ThuonghieuController::class,'update']);
        Route::delete('/delete/{$id_thuonghieu}',[ThuonghieuController::class,'destroy']);
    });
    
});