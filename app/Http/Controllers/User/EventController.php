<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EventController extends Controller
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
        $title = 'Event';
        return view('frontend/Event/index', ['title' => $title]);
    }

    public function detail()
    {
        $title = 'Event di gedung martabak';
        return view('frontend/Event/detail', ['title' => $title]);
    }
}
