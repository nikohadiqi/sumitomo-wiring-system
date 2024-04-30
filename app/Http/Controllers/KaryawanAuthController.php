<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KaryawanAuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('karyawan')->attempt($credentials)) {
            return redirect()->route('karyawan.dashboard');
        }

        // Jika kredensial tidak valid, kembalikan ke halaman login dengan pesan kesalahan
        return redirect()->route('login')->withErrors(['email' => 'Invalid email or password']);
    }

    public function logout()
    {
        Auth::guard('karyawan')->logout();
        return redirect()->route('login');
    }
}
