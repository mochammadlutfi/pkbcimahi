<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function login()
    {
        $title = 'Login';
        return view('frontend/auth/login', ['title' => $title]);
    }

    public function daftar()
    {
        $title = 'Daftar';
        return view('frontend/auth/daftar', ['title' => $title]);
    }

    public function lupa()
    {
        $title = 'Lupa Password';
        return view('frontend/auth/forgot', ['title' => $title]);
    }

    public function verifikasi()
    {
        $title = 'Verifikasi Email';
        return view('frontend/auth/verifikasi', ['title' => $title]);
    }

    public function profile()
    {
        $title = 'Profile';
        return view('frontend/auth/profile', ['title' => $title]);
    }
}
