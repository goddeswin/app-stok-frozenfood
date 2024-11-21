<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Pastikan ini ada untuk memanggil model User
use Illuminate\Support\Facades\Hash; // Pastikan ini ada untuk menggunakan Hash
use Illuminate\Support\Facades\Auth; // Pastikan Auth facade ini diimpor

class AuthController extends Controller
{
    // Menampilkan halaman registrasi
    public function signup(){
        return view('auth.signup');
    }

    // Menyimpan data registrasi
    public function storeSignup(Request $request){
        // Validasi input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users', // Pastikan format email valid
            'password' => 'required|min:8|confirmed', // Menambahkan validasi konfirmasi password
        ]);

        // Membuat pengguna baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Menggunakan Hash untuk menyimpan kata sandi secara aman
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('signin')->with('success', 'Pendaftaran berhasil! Silakan login.');
    }

    // Menampilkan halaman login
    public function signin(){
        return view('auth.signin');
    }

    // Menyimpan data login
    public function storeSignin(Request $request){
        // Validasi input
        $request->validate([
            'email' => 'required|email', // Pastikan email valid
            'password' => 'required',    // Pastikan password diisi
        ]);

        // Mencoba login dengan email dan password
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->to('/')->with('success', 'Login berhasil!');
        }

        // Menangani kegagalan login
        return redirect()->back()->withErrors([
            'email' => 'Gagal login'
        ])->withInput();
    }
}
