<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        // masuk error nya kedalam variable error bukan ke flash message 
        // return back()->withErrors();
        
        // cara ini pesan errr nya masuk ke flash message
        return back()->with('loginError', 'Login Failed!');
    }

    // fungsi logout ada 2
    // ini yang pertama
    // public function logout(Request $request)
    // {
    //         Auth::logout();
    //         $request->session()->invalidate();
    //         $request->session()->regenerateToken();
    //         return redirect('/');
    // }
    

    // ini yang kedua

     public function logout()
    {
            Auth::logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
            return redirect('/');
    }
}
