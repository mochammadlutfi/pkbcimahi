<?php

namespace App\Http\Controllers\Admin;
use App\Models\Event;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pertanyaan;

class HomeController extends Controller
{
    /**
     * Only Authenticated users for "admin" guard
     * are allowed.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show Admin Dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $user = User::latest()->count();
        $acara = Event::latest()->count();
        $pertanyaan_baru = Pertanyaan::latest()->count();

        return view('backend.beranda', compact('user', 'acara', 'pertanyaan_baru'));
    }
}
