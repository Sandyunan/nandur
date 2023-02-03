<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function landing(){
        return view('landing');
    }
    public function masuk() {
        return view('login');
    }
    public function data(){
        return view('data');
    }

    public function verifikasi(Request $request) {
        $test = User::where('email', $request->email)->firstOrFail();
        if ($test) {
            if (Hash::check($request->password, $test->password)) {
                session(['berhasil_login' => true]);
                return redirect('/hasils');
            } else {
                session(['berhasil_login' => false]);
                return redirect('/hasils');
            }
        }
    }
    public function keluar(Request $request) {
        $request->session()->flush();
        return redirect('/login');
    }
}
