<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QnAController extends Controller
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
        $title = 'QnA dengan Fraksi';
        return view('frontend/QnA/index', ['title' => $title]);
    }

    public function detail()
    {
        $title = 'Ini Judul';
        return view('frontend/QnA/detail', ['title' => $title]);
    }

    public function pertanyaan()
    {
        $title = 'Tanya Fraksi?';
        return view('frontend/QnA/pertanyaan', ['title' => $title]);
    }

    public function cari()
    {
        $title = 'QnA dengan Fraksi';
        return view('frontend/QnA/cari', ['title' => $title]);
    }
}
