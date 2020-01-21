<?php

namespace App\Http\Controllers\User;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Storage;

class FraksiController extends Controller
{
    
    public function index()
    {
    	$title = 'Fraksi DPC PKB Kota Cimahi';
        $fraksi = Admin::latest()->get();
        return view('frontend.fraksi.index', compact('title', 'fraksi'));
    }

    public function acepjamaludin()
    {
    	$title = 'Profile';
        return view('frontend.fraksi.acepjamaludin', compact('title'));
    }

    public function dedelatif()
    {
        $title = 'Profile';
        return view('frontend.fraksi.dedelatif', compact('title'));
    }

    public function asepsutisna()
    {
        $title = 'Profile';
        return view('frontend.fraksi.asepsutisna', compact('title'));
    }

}
