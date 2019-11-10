<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function beranda()
    {
        $title = 'Beranda';
        return view('frontend/beranda', ['title' => $title]);
    }

    public function galeri()
    {
        $title = 'Galeri';
        return view('frontend/galeri', ['title' => $title]);
    }

    public function detail_galeri()
    {
        $title = 'Galeri Acara xx1';
        return view('frontend/detail_galeri', ['title' => $title]);
    }

    public function forum()
    {
        $title = 'Tanya Fraksi';
        return view('frontend/forum', ['title' => $title]);
    }

    public function detail_forum()
    {
        $title = 'Ari Dokter teh sehat?';
        return view('frontend/detail_forum', ['title' => $title]);
    }

    public function pertanyaan()
    {
        $title = 'Tanya Fraksi?';
        return view('frontend/pertanyaan', ['title' => $title]);
    }

    public function event()
    {
        $title = 'Event';
        return view('frontend/Event/event', ['title' => $title]);
    }

    public function event_detail()
    {
        $title = 'Event bla bla';
        return view('frontend/Event/event_detail', ['title' => $title]);
    }
}
