<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function welcome(Request $request)
    {
        $nama_depan = $request->nama_depan;
        $nama_belakang = $request->nama_belakang;


        return view('welcomee', ['nama_depan' => $nama_depan, 'nama_belakang' => $nama_belakang]);
    }
}
