<?php
// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        // arah pertama kita saat akses
        return view('login');
    }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

       



        if (Auth::attempt($credentials)) {
            // Get the authenticated user
            $user = Auth::user();
    
            // Redirect user based on their role
            switch ($user->role) {
                case 'super_admin':
                    return redirect()->route('backoffice.index');
                    break;
                case 'user':
                    return redirect()->route('backoffice.barang.index');
                    case 'admin':
                        return redirect()->route('layouts.index-1');
                    break;
                default:
                    return redirect()->route('layouts.index-2');
            }
            // public_view/index.html
        }

        // Authentication failed, redirect back to login with error
        return redirect()->route('login')->with('error', 'tidak valid');
    }

   

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('logout_alert', 'Anda telah berhasil keluar.');
    }

    
}


