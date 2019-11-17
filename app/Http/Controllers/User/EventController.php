<?php

namespace App\Http\Controllers\User;

use App\Models\Foto;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Storage;

class EventController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }

    public function index()
    {

        $event = Event::where('status', 1)->latest()->get();

        return view('frontend.event.index', compact('event'));
    }

    public function detail($slug)
    {
        $event = Event::where('slug', $slug)->first();
        // $title = $event->judul;

        return view('frontend.event.detail', compact('event'));
    }
}
