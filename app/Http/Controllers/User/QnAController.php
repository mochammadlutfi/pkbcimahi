<?php

namespace App\Http\Controllers\User;

use App\Models\QKategori;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jawaban;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class QnAController extends Controller
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
        $title = 'Tanya Fraksi PKB Kota Cimahi';
        $pertanyaan = Pertanyaan::latest()->get();
        $kategori = QKategori::latest()->get();
        return view('frontend/QnA/index', compact('pertanyaan', 'title', 'kategori'));
    }

    public function detail($slug)
    {
        $title = 'Tanya Fraksi PKB Kota Cimahi';
        $tanya = Pertanyaan::where('slug', $slug)->first();
        $kategori = QKategori::latest()->get();
        $jawab = Jawaban::where('pertanyaan_id', $tanya->id)->first();
        return view('frontend.QnA.detail', compact('title', 'tanya', 'jawab', 'kategori'));
    }

    public function kategori($slug)
    {
        $title = 'Tanya Fraksi PKB Kota Cimahi';
        $kategori = QKategori::where('slug', $slug)->first();
        $pertanyaan = Pertanyaan::where('kategori_id', $kategori->id)->get();
        $kategori = QKategori::latest()->get();
        // dd($kategori);
        return view('frontend.QnA.kategori', compact('title', 'pertanyaan', 'kategori'));
    }

    public function tambah()
    {
        $title = 'Tanya Fraksi PKB Kota Cimahi';
        $pertanyaan = Pertanyaan::latest()->limit(5)->get();
        $kategori = QKategori::latest()->get();
        return view('frontend.QnA.tambah', compact('title', 'kategori', 'pertanyaan'));
    }

    public function cari()
    {
        $title = 'Tanya Fraksi PKB Kota Cimahi';
        return view('frontend/QnA/cari', ['title' => $title]);
    }

    public function simpan(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'pertanyaan' => 'required',
            'kategori' => 'required',
        ];

        $pesan = [
            'judul.required' => 'Judul Topik Pertanyaan Wajib Diisi!',
            'kategori.required' => 'Kategori Pertanyaan Wajib Diisi!',
            'pertanyaan.required' => 'Deskripsi Pertanyaan Wajib Diisi!'
        ];

        $validator = Validator::make($request->all(), $rules, $pesan);
        if($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }else{
            $data = new Pertanyaan();
            $data->judul = $request->judul;
            $data->slug = Str::slug($request->judul, '-');
            $data->deskripsi = $request->pertanyaan;
            $data->kategori_id = $request->kategori;
            $data->status = 0;
            $data->user_id = auth()->user()->id;
            if($data->save())
            {
                return redirect()->route('QA')->with('success','Product created successfully.');
            }
        }
    }
}
