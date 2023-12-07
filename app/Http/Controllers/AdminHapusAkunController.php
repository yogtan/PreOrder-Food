<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminHapusAkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $merchants = User::where('role', '=', 'merchant')->get();
        $merchantSales = [];
        
        foreach ($merchants as $merchant) {
            $totalSales = $merchant->orders->sum('total_amount');
            $merchantSales[$merchant->id] = $totalSales;
        }
        // dd($merchantSales);
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
