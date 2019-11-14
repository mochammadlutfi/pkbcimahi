<?php

namespace App\Http\Controllers\User\Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SignupController extends Controller
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
        $title = 'Daftar';
        return view('frontend/auth/daftar', ['title' => $title]);
    }
}
