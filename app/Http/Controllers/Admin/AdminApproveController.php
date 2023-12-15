<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminApproveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $merchants = User::where('role', '=', 'merchant')
        ->where('status', '=', 'Belum Verifikasi')->get();
        $notApp = $merchants->count();
        $Approved = User::where('role', '=', 'merchant')
        ->where('status', '!=', 'Belum Verifikasi')->get();
        $App = $Approved->count();
        $merch = User::where('role', '=', 'merchant')->get();
        $total = $merch->count();
        // dd($Approved);
        return view('Admin.PersetujuanAkun', compact('merchants', 'notApp', 'App', 'total'));
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
    public function update(Request $request, $id)
    {
        $User = User::find($id);
        if (!$User) {
            return redirect()->back()->with('error', 'Data Akun tidak ditemukan.');
        }

        $User->status = 'Verifikasi';
        $User->save();

        return redirect('/Admin')->with('success', 'Akun Sewa Lunas!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
