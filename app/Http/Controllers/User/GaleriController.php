<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

use App\Models\Foto;
use App\Models\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Storage;

class GaleriController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }

    public function index()
    {

        $galeri = Album::where('status', 1)->latest()->get();
        $title = 'Galeri';

        return view('frontend.galeri.index', compact('galeri', 'title'));
    }

    public function detail($slug)
    {
        $album = Album::where('slug', $slug)->first();
        // dd($album->nama);
        $title = $album->nama;

        return view('frontend.galeri.detail', compact('album', 'title'));
    }

}
