<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function masukDaftar() {
        return view('register');
    }
    public function daftarAkun(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $password = $request->password;
        $hashed = Hash::make($password);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $hashed,
        ]);
        return redirect('/hasils')->with('pesan', "Akun telah berhasil ditambahkan");
    }
}
