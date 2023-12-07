<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminApproveController;
use App\Http\Controllers\AdminHapusAkunController;
use App\Http\Controllers\AdminHapusProdukController;
use App\Http\Controllers\Merchant\MerchantOrderController;
use App\Http\Controllers\Merchant\MerchantProdukController;
use App\Http\Controllers\Merchant\MerchantLaporanController;
use App\Http\Controllers\Merchant\MerchantRegisterController;
use App\Http\Controllers\Merchant\MerchantDashboardController;
use App\Http\Controllers\Merchant\MerchantPembuatanController;

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

// Route::get('/home', function () {
    //     return view('home', ['title' => 'Pre-Order']);
// });

// Penjual

Route::get('/',  [ProdukController::class, 'index']);
Route::get('/home',  [ProdukController::class, 'index']);

Route::get('/product/{id}', [ProdukController::class, 'show']);
Route::get('/outlet/{id}', [ProdukController::class, 'find']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register-merchant',  [MerchantRegisterController::class, 'index'])->middleware('guest');
Route::post('/register-merchant',  [MerchantRegisterController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
// Route::get("/penjual/product",function() {
    //     return view("/penjual/Products");
    // });
    // Routes accessible only by merchants
Route::middleware(['auth'])->group(function () {
        // Routes accessible only by User
        Route::get('/order/{id}', [OrderController::class, 'index']);
        Route::post('/order', [OrderController::class, 'store']);
        Route::get('/history', [OrderController::class, 'show']);
});
Route::middleware(['merchant'])->group(function () {
    Route::get("/penjual",[MerchantDashboardController::class, 'index']);
    
    Route::get("/penjual/kelolaPesanan",[MerchantOrderController::class, 'index']);
    Route::patch("/penjual/kelolaPesanan/{id}",[MerchantOrderController::class, 'update']);
    
    Route::get('/penjual/laporanBulanan', [MerchantLaporanController::class, 'index']);
    
    Route::get('/penjual/editProfile',function(){
        return view("/penjual/editPenjual");
    });
    Route::get('/penjual/product',[MerchantProdukController::class, 'index']);
    Route::get('/penjual/tambahProduk',[MerchantProdukController::class, 'create']);
    Route::post('/penjual/tambahProduk',[MerchantProdukController::class, 'store']);
    Route::get("/penjual/product/addPembuatan/{id}",[MerchantPembuatanController::class, 'index']);
    Route::post("/penjual/product/addPembuatan",[MerchantPembuatanController::class, 'store']);
    Route::delete('/penjual/product/{id}',[MerchantProdukController::class, 'destroy']);
});

Route::middleware(['admin'])->group(function () {
    // Routes accessible only by admins
    
    Route::get('/Admin', [AdminApproveController::class, 'index']);
    Route::patch('/Admin/{id}', [AdminApproveController::class, 'update']);
    Route::get('/Admin/hapus-akun', [AdminHapusAkunController::class, 'index']);
    Route::delete('/Admin/hapus-akun/{id}',[AdminHapusAkunController::class, 'destroy']);
    Route::get('/Admin/hapus-produk', [AdminHapusProdukController::class, 'index']);
    Route::delete('/Admin/hapus-produk/{id}',[AdminHapusProdukController::class, 'destroy']);
    // Route::get('/Admin/hapusproduk',function(){
    //     return view('Admin/HapusProduk');
    // });
    
    // Route::get("/Admin/hapusakun",function(){
    //     return view("Admin/HapusAkun");
    // });
});

