<?php

namespace App\Http\Controllers\User;

use App\Models\Foto;
use App\Models\Album;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

        $galeri = Album::where('status', 1)->latest()->paginate(6);
        $title = 'Galeri Foto DPC PKB Kota Cimahi';

        return view('frontend.galeri.index', compact('galeri', 'title'));
    }

    public function instagram()
    {
        $title = 'Galeri Foto Instagram';
        return view('frontend.galeri.instagram', compact('title'));
    }

    public function video()
    {

        $video = Video::where('status', 1)->latest()->paginate(6);
        $title = 'Video DPC PKB Kota Cimahi';

        return view('frontend.galeri.video', compact('video', 'title'));
    }

    public function detail($slug)
    {
        $album = Album::where('slug', $slug)->first();
        $title = $album->nama;
        $foto = Foto::where('album_id', $album->id)->paginate(8);

        return view('frontend.galeri.detail', compact('album', 'title', 'foto'));
    }


}
