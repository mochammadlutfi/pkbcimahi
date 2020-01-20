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

    public function detail($id)
    {
    	$title = 'Profile';
        $data = Admin::where('id', $id)->first();
        return view('frontend.fraksi.detail', compact('title', 'data'));
    }

}
