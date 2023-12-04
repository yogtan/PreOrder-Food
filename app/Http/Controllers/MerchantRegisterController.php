<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class MerchantRegisterController extends Controller
{
    public function index()
    {
        return view('register-merchant',[
            'title' => 'Register Merchant'
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255|unique:users',
            'password' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'telepon' => 'required|max:12|unique:users',
            'foto_ktp' => 'image'
        ]);
        // dd($validatedData);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role'] = "merchant";
        
        if ($request->hasFile('foto_ktp') && $request->file('foto_ktp')->isValid()) {
            $validatedData['foto_ktp'] = $request->file('foto_ktp')->store('post-images');
        }


        User::create($validatedData);
        return redirect('/login')->with('success', 'Registration Success! Please Login.');
    }

}
