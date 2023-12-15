<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Produk;
use App\Models\Pembuatan;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $produk = Pembuatan::join('produks', 'pembuatans.produk_id', '=', 'produks.id')
                            ->join('users', 'produks.user_id', '=', 'users.id')
                            ->join('profile_merchants', 'profile_merchants.user_id', '=', 'users.id')
                            ->select('pembuatans.*', 'produks.nama_produk','produks.foto_produk','produks.harga', 'users.name', 'profile_merchants.nama_bank', 'profile_merchants.rekening')
                            ->where('produks.id', '=', $id)
                            ->first();
        // dd($produk);
        if (is_null($produk)) {
            return redirect()->back()->with('error', 'Penjual Masih Belum Memiliki Rekening.');
        }
        return view('orders.index', compact('produk'));
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
    public function store(StoreOrderRequest $request)
    {
        // dd($request); 
        $validatedData = $request->validate([
            'bukti_pembayaran' => 'image'
        ]);

        if ($request->hasFile('bukti_pembayaran') && $request->file('bukti_pembayaran')->isValid()) {
            $validatedData['bukti_pembayaran'] = $request->file('bukti_pembayaran')->store('post-images');
        }
        $validatedData['tanggal_pemesanan']=$request->input('tanggal_pemesanan');
        $validatedData['pembuatan_id']=$request->input('pembuatan_id');
        $validatedData['user_id']=$request->input('user_id');
        $validatedData['total_produk']=$request->input('total_produk');
        $validatedData['harga_pembayaran']=$request->input('harga_pembayaran');
        $validatedData['keterangan']=$request->input('keterangan');
        Order::create($validatedData);
        return redirect('/history')->with('success', 'Order Success!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $orders = Order::join('pembuatans', 'orders.pembuatan_id', '=', 'pembuatans.id')
        ->where('orders.user_id', Auth::id())
        ->get();
        // dd($orders);
        return view('history.index', compact('orders'));
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
    public function update(UpdateOrderRequest $request, Order $order)
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
