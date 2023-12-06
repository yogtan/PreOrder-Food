<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Pembuatan;
use Illuminate\Http\Request;

class MerchantDashboardController extends Controller
{
    public function index()
    {
        $totalEarn =0;
        $orders = Order::join('pembuatans', 'orders.pembuatan_id', '=', 'pembuatans.id')
                        ->join('users', 'orders.user_id', '=', 'users.id')
                        ->join('produks', 'pembuatans.produk_id', '=', 'produks.id')
                        ->select('orders.*', 'produks.nama_produk', 'users.name')
                        ->where('produks.user_id', '=', auth()->user()->id)
                        ->take(5)->get();
        //Total Pendapatan
        $Earn = Order::join('pembuatans', 'orders.pembuatan_id', '=', 'pembuatans.id')
                                ->join('users', 'orders.user_id', '=', 'users.id')
                                ->join('produks', 'pembuatans.produk_id', '=', 'produks.id')
                                ->select('orders.*', 'produks.nama_produk', 'users.name')
                                ->where('produks.user_id', '=', auth()->user()->id)
                                // ->whereMonth('tanggal_pemesanan', '=', now()->month)
                                ->get();
        foreach($Earn as $order){
            $totalEarn += $order->harga_pembayaran;
        }
        //Pesanan terbaru
        $orderToday = Order::join('pembuatans', 'orders.pembuatan_id', '=', 'pembuatans.id')
                                ->join('users', 'orders.user_id', '=', 'users.id')
                                ->join('produks', 'pembuatans.produk_id', '=', 'produks.id')
                                ->select('orders.*', 'produks.nama_produk', 'users.name')
                                ->whereDay('tanggal_pemesanan', '=', now()->day)
                                ->where('produks.user_id', '=', auth()->user()->id)
                                ->get();
        $totalOrder = $orderToday->count();
        //TOTAL Product
        $produks = Pembuatan::join('produks', 'pembuatans.produk_id', '=', 'produks.id')
                            ->join('users', 'produks.user_id', '=', 'users.id')
                            ->select('pembuatans.*', 'produks.*', 'users.name')
                            ->where('produks.user_id', '=', auth()->user()->id)
                            ->where('pembuatans.tanggal_jadi', '>=', now())
                            ->where('produks.user_id', '=', auth()->user()->id)
                            ->get();
        // $produks = Produk::where('user_id', $userId)->get();
        $totalProducts = $produks->count();

        return view('penjual.dashboard', compact('orders', 'totalEarn', 'totalOrder', 'totalProducts'));

    }
}
