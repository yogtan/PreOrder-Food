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

Route::get("/penjual", function () {
    return view("penjual/dashboard");
});

Route::get("/penjual/product",function() {
    return view("/penjual/Products");
});

Route::get("/penjual/kelolaPesanan",function(){
    return view("/penjual/pesanan");
});

Route::get('/product', function () {
    return view('product/index'); // 'product.index' merujuk ke nama file blade.php
});

Route::get('/login', function () {
    return view('login'); // 'product.index' merujuk ke nama file blade.php
});
Route::get('/daftar', function () {
    return view('daftar'); // 'product.index' merujuk ke nama file blade.php
});
