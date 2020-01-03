<?php

namespace App\Http\Controllers\Admin;


use App\Models\Foto;
use App\Models\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Image;
use Illuminate\Support\Facades\Storage;

class GaleriFotoController extends Controller
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
    public function index($album_id, Request $request)
    {
        $foto = Foto::where('album_id', $album_id)->latest()->get();
        $album = Album::find($album_id);
        return view('backend.galeri.foto.index', compact('foto', 'album'));
    }

    public function tambah($album_id)
    {
        $album = Album::find($album_id);
        return view('backend.galeri.foto.tambah', compact('foto', 'album'));
    }

    public function simpan(Request $request)
    {

        // $rules = [
        //     'nama' => 'required',
        //     'slug' => 'required',
        //     'foto' => 'required',
        //     'status' => 'required'
        // ];

        // $pesan = [
        //     'nama.required' => 'Nama Album Wajib Diisi!',
        //     'slug.required' => 'Slug Album Wajib Diisi!',
        //     'foto.required' => 'Cover Album Wajib Diisi!',
        //     'status.required' => 'Status Album Wajib Diisi!'
        // ];

        // $validator = Validator::make($request->all(), $rules, $pesan);
        // if ($validator->fails()){
        //     return response()->json([
        //         'fail' => true,
        //         'errors' => $validator->errors()
        //     ]);
        // }else{
            // dd($request->all());
            $album = Album::find($request->album_id);

            if($request->hasfile('foto'))
            {
                // dd($request->album_id);
                foreach($request->file('foto') as $f)
                {
                    $name= $f->getClientOriginalName();
                    $path = Storage::disk('public')->put('galeri/foto/'.$album->id, $f);
                    $file = array(
                        'album_id' => $album->id,
                        'nama' => $name,
                        'path' => $path,
                    );
                    Foto::insert($file);
                }
            }
        // }
    }

    public function hapus($id)
    {
        $foto = Foto::find($id);
        $path = public_path().'/uploads/'.$foto->path;
        // dd($file);
        if (is_file($path)){
            $del_path = unlink($path);
            if($del_path)
            {
                $hapus_db = Foto::destroy($foto->id);
                if($hapus_db)
                {
                    return response()->json([
                        'fail' => false,
                    ]);
                }
            }
        }
    }
}
