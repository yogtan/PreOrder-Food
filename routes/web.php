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

Route::get("/admin", function () {
    return view("admin/dashboard");
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
