<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class MerchantLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $thisMonthEarn = 0;
        $lastMonthEarn = 0;
        $lastMonth = now()->subMonth(); // Get the date of the last month
        // $orders = Order::take(10)->get();
        $orderThisMonth = Order::join('pembuatans', 'orders.pembuatan_id', '=', 'pembuatans.id')
                                ->join('users', 'orders.user_id', '=', 'users.id')
                                ->join('produks', 'pembuatans.produk_id', '=', 'produks.id')
                                ->select('orders.*', 'produks.nama_produk', 'users.name')
                                ->where('produks.user_id', '=', auth()->user()->id)
                                ->whereMonth('tanggal_pemesanan', '=', now()->month)
                                ->get();

        $orderLastMonth = Order::join('pembuatans', 'orders.pembuatan_id', '=', 'pembuatans.id')
                                ->join('users', 'orders.user_id', '=', 'users.id')
                                ->join('produks', 'pembuatans.produk_id', '=', 'produks.id')
                                ->whereMonth('tanggal_pemesanan', '=', $lastMonth->format('m'))
                                ->where('produks.user_id', '=', auth()->user()->id)
                                ->select('harga_pembayaran')
                                ->get();
        foreach($orderThisMonth as $order){
            $thisMonthEarn += $order->harga_pembayaran;
        }
        foreach ($orderLastMonth as $order) {
            $lastMonthEarn += $order->harga_pembayaran;
        }
        $totalOrdersThisMonth = $orderThisMonth->count();
        $totalOrdersLastMonth = $orderLastMonth->count();

        $earningsByMonth = [];
        $months = [];

        // Fetch data for the entire year
        for ($i = 1; $i <= 12; $i++) {
            $earningsByMonth[$i] = Order::join('pembuatans', 'orders.pembuatan_id', '=', 'pembuatans.id')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->join('produks', 'pembuatans.produk_id', '=', 'produks.id')
            ->whereMonth('tanggal_pemesanan', '=', $i)
            ->where('produks.user_id', '=', auth()->user()->id)
            ->sum('harga_pembayaran');
            $months[] = date("F", mktime(0, 0, 0, $i, 1));
        }
        // dd($thisMonthEarn);
        return view('penjual.laporanBulanan', compact('earningsByMonth', 'months', 'thisMonthEarn', 'lastMonthEarn', 'totalOrdersThisMonth', 'totalOrdersLastMonth', 'orderThisMonth'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
