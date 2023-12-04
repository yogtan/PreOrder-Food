<?php

namespace App\Http\Controllers;

use App\Models\Pembuatan;
use App\Models\Produk;
use Illuminate\Http\Request;

class MerchantPembuatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $produk = Produk::findOrFail($id);

        return view('penjual.tambahPembuatan', compact('produk'));
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
        $validatedData = $request->validate([
            'tanggal_pembuatan' => 'required|date',
            'tanggal_jadi' => 'required|date'
        ]);
        $validatedData['produk_id'] = $request->input('produk_id');
        Pembuatan::create($validatedData);
        return redirect('/penjual/Products')->with('success', 'Data Pembuatan berhasil diperbarui.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembuatan $pembuatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembuatan $pembuatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pembuatan $pembuatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembuatan $pembuatan)
    {
        //
    }
}
