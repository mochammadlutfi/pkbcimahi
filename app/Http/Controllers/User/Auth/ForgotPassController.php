<?php

namespace App\Http\Controllers\User\Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ForgotPassController extends Controller
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
        $title = 'Lupa Password';
        return view('frontend/auth/forgot', ['title' => $title]);
    }
}
