<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
   public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } else {
                Auth::logout();
                return back()->with('error', 'Akses hanya untuk admin.');
            }
        }

        return back()->with('error', 'Login gagal. Cek email dan password.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
