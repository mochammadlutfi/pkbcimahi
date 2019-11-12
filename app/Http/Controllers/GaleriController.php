<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriController extends Controller
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
        $title = 'Galeri';
        return view('frontend/Galeri/index', ['title' => $title]);
    }

    public function detail()
    {
        $title = 'Album konoha';
        return view('frontend/Galeri/detail', ['title' => $title]);
    }
}
