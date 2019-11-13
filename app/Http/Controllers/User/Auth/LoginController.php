<?php

namespace App\Http\Controllers\User\Auth;
use App\Http\Controllers\Controller;

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
        return view('frontend/auth/login', ['title' => $title]);
    }
}
