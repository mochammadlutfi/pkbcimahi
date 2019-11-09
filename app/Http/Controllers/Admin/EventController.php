<?php

namespace App\Http\Controllers\Admin;


use App\Models\Foto;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Storage;

class EventController extends Controller
{
    /**
     * Only Authenticated users for "admin" guard
     * are allowed.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show Admin Dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        return view('backend.event.index', compact(''));
    }

    public function tambah()
    {

        return view('backend.event.form', compact(''));
    }

    public function simpan(Request $request)
    {

        $rules = [
            'nama' => 'required',
            'slug' => 'required',
            'foto' => 'required',
            'status' => 'required'
        ];

        $pesan = [
            'nama.required' => 'Nama Album Wajib Diisi!',
            'slug.required' => 'Slug Album Wajib Diisi!',
            'foto.required' => 'Cover Album Wajib Diisi!',
            'status.required' => 'Status Album Wajib Diisi!'
        ];

        $validator = Validator::make($request->all(), $rules, $pesan);
        if ($validator->fails()){
            return response()->json([
                'fail' => true,
                'errors' => $validator->errors()
            ]);
        }else{
            $foto_file = $request->file('foto');
            $foto = Storage::disk('public')->put('galeri/album', $foto_file);

            $data = new Album();
            $data->nama = $request->nama;
            $data->slug = $request->slug;
            $data->foto = $foto;
            $data->seo_keyword = $request->seo_keyword;
            $data->seo_description = $request->seo_description;
            $data->seo_tags = $request->seo_tags;
            $data->status = $request->status;
            if($data->save())
            {
                return response()->json([
                    'fail' => false,
                ]);
            }
        }
    }
}
