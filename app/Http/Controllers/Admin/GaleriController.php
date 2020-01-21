<?php

namespace App\Http\Controllers\Admin;

use App\Models\Foto;
use App\Models\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class GaleriController extends Controller
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
        if ($request->ajax()) {
            $data = Album::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('jml_foto', function($row){
                        return $row->fotonya->count(). ' Foto';
                })
                ->addColumn('status', function($row){

                        if($row->status == 1)
                        {
                            $status = '<span class="badge badge-success">Publikasi</span>';
                        }else{
                            $status = '<span class="badge badge-danger">Tidak Publikasi</span>';
                        }

                        return $status;
                })
                ->addColumn('action', function($row){
                    $btn = '<center><div class="btn-group" role="group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" id="btnGroupVerticalDrop3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 34px, 0px);">
                                <a class="dropdown-item" href="'. route('admin.galeri.foto', $row->id) .'"">
                                    <i class="si si-note mr-5"></i>Detail Album
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)" onClick="edit('.$row->id.')">
                                    <i class="si si-note mr-5"></i>Edit Album
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)" onClick="hapus('.$row->id.')">
                                    <i class="si si-trash mr-5"></i>Hapus Album
                                </a>
                            </div>
                        </div></center>';
                    return $btn;
                })
                ->rawColumns(['action', 'status', 'jumlah'])
                ->make(true);
        }

        return view('backend.galeri.album');
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

    public function edit($id){
        $album = Album::find($id);
        $res = Collect([
            'id' => $album->id,
            'nama' => $album->nama,
            'slug' => $album->slug,
            'foto' => asset('uploads/'.$album->foto),
            'seo_keyword' => $album->seo_keyword,
            'seo_description' => $album->seo_description,
            'seo_tags' => $album->seo_tags,
            'status' => $album->status
        ]);
        return response()->json($res);
    }

    public function update(Request $request)
    {

        $rules = [
            'nama' => 'required',
            'slug' => 'required',
            // 'foto' => 'required',
            'status' => 'required'
        ];

        $pesan = [
            'nama.required' => 'Nama Album Wajib Diisi!',
            'slug.required' => 'Slug Album Wajib Diisi!',
            // 'foto.required' => 'Cover Album Wajib Diisi!',
            'status.required' => 'Status Album Wajib Diisi!'
        ];

        $validator = Validator::make($request->all(), $rules, $pesan);
        if ($validator->fails()){
            return response()->json([
                'fail' => true,
                'errors' => $validator->errors()
            ]);
        }else{
            if($request->hasfile('foto'))
            {
                $album = Album::find($id);
                $file = public_path().'/uploads/'.$album->foto;
                if (is_file($thumbnail)){
                    $del_thumb = unlink($thumbnail);
                    if($del_thumb)
                    {
                        $foto_file = $request->file('foto');
                        $foto = Storage::disk('public')->put('galeri/album', $foto_file);
                    }
                }
            }

            $data = Album::find($request->album_id);
            $data->nama = $request->nama;
            $data->slug = $request->slug;
            $data->seo_keyword = $request->seo_keyword;
            $data->seo_description = $request->seo_description;
            $data->seo_tags = $request->seo_tags;
            $data->status = $request->status;
            if($request->hasfile('foto'))
            {
                $data->foto = $foto;
            }
            if($data->save())
            {
                return response()->json([
                    'fail' => false,
                ]);
            }
        }
    }

    public function check_slug(Request $request)
    {
        // Old version: without uniqueness
        // $slug = str_slug($request->judul);

        // New version: to generate unique slugs
        $slug = SlugService::createSlug(Album::class, 'slug', $request->nama);

        return response()->json(['slug' => $slug]);
    }


    public function hapus($id)
    {
        $album = Album::find($id);
        $foto = Foto::where('album_id', $album->id)->get();
        $del_album_img = unlink(public_path().'/uploads/'.$album->foto);
        if($del_album_img)
        {
            $del_album = Album::destroy($album->id);
            if($del_album)
            {
                foreach($foto as $f)
                {
                    $path = public_path().'/uploads/'.$f->path;
                    if (is_file($path)){
                        $del_path = unlink($path);
                        if($del_path)
                        {
                            $hapus_db = Foto::destroy($f->id);
                        }
                    }
                }
            }
            return response()->json([
                'fail' => false,
            ]);
        }
    }
}
