<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
        
            // Check if the user is authenticated before accessing the role
            if (auth()->check()) {
                if (auth()->user()->role == "Admin") {
                    return redirect('/Admin');
                }elseif(auth()->user()->role == "merchant"){
                    return redirect('/penjual');
                }
                
                return redirect()->intended('/home');
            }
        } 
        
        return back()->with('loginError', 'Login gagal!');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
