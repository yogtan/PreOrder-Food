<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MerchantRegisterController;
use App\Http\Controllers\RegisterController;

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
    return view('home', ['title' => 'Pre-Order']);
});
Route::get('/home', function () {
    return view('home', ['title' => 'Pre-Order']);
});

// Penjual
Route::get("/penjual", function () {
    return view("penjual/dashboard");
});

Route::get("/penjual/product",function() {
    return view("/penjual/Products");
});
Route::get("/penjual/product/edit",function() {
    return view("/penjual/editProducts");
});

Route::get("/penjual/kelolaPesanan",function(){
    return view("/penjual/pesanan");
});

Route::get('/penjual/laporanBulanan', function(){
    return view("/penjual/laporanBulanan");
});

Route::get('/penjual/editProfile',function(){
    return view("/penjual/editPenjual");
});
Route::get('/penjual/tambahProduk',function(){
    return view("/penjual/tambahProduct");
});


Route::get('/product', function () {
    return view('product/index'); // 'product.index' merujuk ke nama file blade.php
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register-merchant',  [MerchantRegisterController::class, 'index']);
Route::post('/register-merchant',  [MerchantRegisterController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/outlet', function () {
    return view('outlet/index'); // 'product.index' merujuk ke nama file blade.php
});
Route::get('/orders', function () {
    return view('orders/index'); // 'product.index' merujuk ke nama file blade.php
});
Route::get('/history', function () {
    return view('history/index'); // 'product.index' merujuk ke nama file blade.php
});

Route::get('/Admin/',function(){
    return view('Admin/PersetujuanAkun');
});
Route::get('/Admin/hapusproduk',function(){
    return view('Admin/HapusProduk');
});

