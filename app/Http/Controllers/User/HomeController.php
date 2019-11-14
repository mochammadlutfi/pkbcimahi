<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

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
