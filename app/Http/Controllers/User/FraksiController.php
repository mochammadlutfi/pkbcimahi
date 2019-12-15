<?php

namespace App\Http\Controllers\User;

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
        return view('frontend.fraksi.index', compact('title'));
    }

    public function detail()
    {
    	$title = 'Profile';
        return view('frontend.fraksi.detail', compact('title'));
    }

}
