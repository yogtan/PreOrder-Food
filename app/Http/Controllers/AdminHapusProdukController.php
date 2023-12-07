<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\Pembuatan;
use Illuminate\Http\Request;

class AdminHapusProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Pembuatan::join('produks', 'pembuatans.produk_id', '=', 'produks.id')
                            ->join('users', 'produks.user_id', '=', 'users.id')
                            // ->join('orders', 'pembuatans.id', '=', 'orders.pembuatan_id')
                            ->select('pembuatans.*', 'produks.*', 'users.name')
                            // ->where('produks.user_id', '=', $userId)
                            // ->where('pembuatans.tanggal_jadi', '>=', now())
                            ->get();
        // dd($produks);
        return view("Admin.HapusProduk", compact('produks'));
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
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $order = Order::where('pembuatan_id', $id)->get();
            // dd($order);
            if (is_null($order)) {
                return redirect('/Admin/hapus-produk')->with('error', 'Data masih memiliki order.');
            } else {
                Pembuatan::destroy($id);
                return redirect('/Admin/hapus-produk')->with('success', 'Data berhasil dihapus.');
            }
            
        } catch (\Exception $e) {
            return redirect('/Admin/hapus-produk')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
