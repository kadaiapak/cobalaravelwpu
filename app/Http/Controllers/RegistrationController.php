<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    //
    public function index()
    {
        return view('auth.registration', [
            'title' => 'Registration'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required_with:password_confirmation|same:password_confirmation|min:5|max:255',
            'password_confirmation' => 'min:6'
        ]);
        // untuk enkripsi password bisa menggunakan 2 cara
        // pakai ini
        // $validatedData['password'] = bcrypt($validatedData['password']);
        
        // atau pakai ini
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/login')->with('sukses', 'Registration sukses!!');
        }
}
