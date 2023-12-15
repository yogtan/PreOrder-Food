<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use DB;
use App\Models\User;
use Illuminate\Http\Request;

class AdminHapusAkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $merchants = User::leftJoin('produks', 'produks.user_id', '=', 'users.id')
        ->leftJoin('pembuatans', 'pembuatans.produk_id', '=', 'produks.id')
        ->leftJoin('orders', 'orders.pembuatan_id', '=', 'pembuatans.id')
        ->select('users.id', 'users.name', 'users.email', /* Add all other columns */ \DB::raw('SUM(orders.harga_pembayaran) as total_sales'))
        ->where('users.role', '=', 'merchant')
        ->groupBy('users.id', 'users.name', 'users.email', /* Add all other columns */)
        ->get();
        $merchantSales = [];
        
        foreach ($merchants as $merchant) {
            $totalSales = $merchant->orders->sum('total_amount');
            $merchantSales[$merchant->id] = $totalSales;
        }
        // dd($merchants);
        return view("Admin.HapusAkun", compact('merchants', 'merchantSales'));
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            User::destroy($id);
            
            return redirect('/Admin/hapus-akun')->with('success', 'Data berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect('/Admin/hapus-akun')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
