<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get("/admin", function () {
    return view("admin/dashboard");
});
Route::get('/product', function () {
    return view('product/index'); // 'product.index' merujuk ke nama file blade.php
});

Route::get('/login', function () {
    return view('login'); // 'product.index' merujuk ke nama file blade.php
});
Route::get('/register-merchant', function () {
    return view('register-merchant'); // 'product.index' merujuk ke nama file blade.php
});
Route::get('/register', function () {
    return view('register'); // 'product.index' merujuk ke nama file blade.php
});

Route::get('/outlet', function () {
    return view('outlet/index'); // 'product.index' merujuk ke nama file blade.php
});
Route::get('/orders', function () {
    return view('orders/index'); // 'product.index' merujuk ke nama file blade.php
});
Route::get('/history', function () {
    return view('history/index'); // 'product.index' merujuk ke nama file blade.php
});
