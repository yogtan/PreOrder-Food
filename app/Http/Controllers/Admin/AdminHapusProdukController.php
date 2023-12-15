<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Produk;
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
                            ->select('pembuatans.*', 'produks.nama_produk','produks.foto_produk','produks.harga', 'users.name')
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
            $pembuatan = Pembuatan::find($id);
            $produkId = $pembuatan->produk_id;
            if ($order) {
                return redirect('/Admin/hapus-produk')->with('error', 'Data masih memiliki order.');
            } else {
                Pembuatan::destroy($id);
                Pembuatan::destroy($produkId);
                return redirect('/Admin/hapus-produk')->with('success', 'Data berhasil dihapus.');
            }
            
        } catch (\Exception $e) {
            return redirect('/Admin/hapus-produk')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
