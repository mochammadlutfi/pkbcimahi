<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
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
    public function index()
    {
        $title = 'Login';
        return view('frontend/auth/index', ['title' => $title]);
    }

    public function daftar()
    {
        $title = 'Daftar';
        return view('frontend/Event/detail', ['title' => $title]);
    }

    public function lupa()
    {
        $title = 'Lupa Password';
        return view('frontend/Event/detail', ['title' => $title]);
    }

    public function verifikasi()
    {
        $title = 'Verifikasi Email';
        return view('frontend/Event/detail', ['title' => $title]);
    }

    public function profile()
    {
        $title = 'Profile';
        return view('frontend/Event/detail', ['title' => $title]);
    }
}
