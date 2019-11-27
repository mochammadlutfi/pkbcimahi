<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TentangController  extends Controller
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

    public function sejarah()
    {
        $title = 'Sejarah Pendirian PKB';
        return view('frontend/Tentangpkb/sejarah', ['title' => $title]);
    }

    public function NaskahDeklarasi()
    {
        $title = 'Naskah Deklarasi';
        return view('frontend/Tentangpkb/NaskahDeklarasi', ['title' => $title]);
    }

    public function ADARTPKB2014()
    {
        $title = 'AD ART PKB 2014KB';
        return view('frontend/Tentangpkb/ADARTPKB2014', ['title' => $title]);
    }

    public function MaknaLogoPKB()
    {
        $title = 'Makna Logo PKB';
        return view('frontend/Tentangpkb/MaknaLogoPKB', ['title' => $title]);
    }

    public function VisidanMisi()
    {
        $title = 'Visi dan Misi';
        return view('frontend/Tentangpkb/VisidanMisi', ['title' => $title]);
    }

    public function MabdaSiyasi()
    {
        $title = 'Mabda Siyasi';
        return view('frontend/Tentangpkb/MabdaSiyasi', ['title' => $title]);
    }
}
