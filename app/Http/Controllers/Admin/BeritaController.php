<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\BKategori;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;
use App\Helpers\GeneralHelp;
class BeritaController extends Controller
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

    public function index(Request $request)
    {
        if ($request->ajax()) {
            if(!empty($request->filter_status))
            {
                $data = Berita::where('status', $request->filter_status)->latest()->get();
            }else{
                $data = Berita::latest()->get();
            }
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('judul', function($row){
                        return $row->judul;
                })
                ->addColumn('auth', function($row){
                        return $row->admin->name;
                })
                ->addColumn('kategori', function($row){
                        return $row->bkategori->name;
                })
                ->addColumn('status', function($row){

                        if($row->status == 1)
                        {
                            $status = '<span class="badge badge-success">Publist</span>';
                        }else{
                            $status = '<span class="badge badge-danger">Draft</span>';
                        }

                        return $status;
                })
                ->addColumn('tgl', function($row){
                    return GeneralHelp::tgl_indo($row->created_at);

                })
                ->addColumn('action', function($row){

                    $btn = '<center><div class="btn-group" role="group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" id="btnGroupVerticalDrop3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 34px, 0px);">
                                <a class="dropdown-item" href="'. route('admin.berita.edit', $row->id) .'">
                                    <i class="si si-note mr-5"></i>Edit Berita
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)" onClick="hapus('.$row->id.')">
                                    <i class="si si-trash mr-5"></i>Hapus Berita
                                </a>
                            </div>
                        </div></center>';

                    return $btn;
                })
                ->rawColumns(['action', 'status', 'judul', 'kategori'])
                ->make(true);
        }
        $kategori = BKategori::latest()->get();
        return view('backend.berita.index', compact('kategori'));

    }

    public function check_slug(Request $request)
    {
        // Old version: without uniqueness
        // $slug = str_slug($request->judul);

        // New version: to generate unique slugs
        $slug = SlugService::createSlug(Berita::class, 'slug', $request->judul);

        return response()->json(['slug' => $slug]);
    }

    public function tambah()
    {
        $kategori = BKategori::latest()->get();
        return view('backend.berita.form', compact('kategori'));
    }

    public function edit($event_id)
    {
        $berita = Berita::find($event_id);
        $kategori = BKategori::latest()->get();
        return view('backend.berita.edit', compact('berita', 'kategori'));
    }

    public function simpan(Request $request)
    {

        $rules = [
            'judul' => 'required',
            'slug' => 'required',
            'foto' => 'required',
            'status' => 'required',
            'deskripsi' => 'required',
            'foto_desk' => 'required',
            'b_kategori_id' => 'required'
        ];

        $pesan = [
            'judul.required' => 'Judul Berita Wajib Diisi!',
            'slug.required' => 'Slug Berita Wajib Diisi!',
            'foto.required' => 'Cover Berita Wajib Diisi!',
            'status.required' => 'Status Berita Wajib Diisi!',
            'deskripsi.required' => 'deskripsi Berita Wajib Diisi!',
            'foto_desk.required' => 'Deskripsi Foto Wajib Diisi!',
            'b_kategori_id.required' => 'Kategori Berita Wajib Diisi!'
        ];

        $validator = Validator::make($request->all(), $rules, $pesan);
        if ($validator->fails()){
            return response()->json([
                'fail' => true,
                'errors' => $validator->errors()
            ]);
        }else{
            $foto_file = $request->file('foto');
            $foto = Storage::disk('public')->put('berita', $foto_file);

            $data = new Berita();
            $data->judul = $request->judul;
            $data->slug = $request->slug;
            $data->foto_desk = $request->foto_desk;
            $data->admin_id = auth()->user()->id;
            $data->foto = $foto;
            $data->b_kategori_id = $request->b_kategori_id;
            $data->seo_keyword = $request->seo_keyword;
            $data->deskripsi = $request->deskripsi;
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

    public function update(Request $request)
    {
        if($request->foto == null){
            $rules = [
                'judul' => 'required',
                'slug' => 'required',
                'status' => 'required',
                'deskripsi' => 'required',
                'foto_desk' => 'required',
                'b_kategori_id' => 'required'
            ];

            $pesan = [
                'judul.required' => 'Judul Berita Wajib Diisi!',
                'slug.required' => 'Slug Berita Wajib Diisi!',
                'status.required' => 'Status Berita Wajib Diisi!',
                'deskripsi.required' => 'deskripsi Berita Wajib Diisi!',
                'foto_desk.required' => 'Deskripsi Foto Wajib Diisi!',
                'b_kategori_id.required' => 'Kategori Berita Wajib Diisi!'
            ];
        }else{
            $rules = [
                'judul' => 'required',
                'slug' => 'required',
                'foto' => 'required',
                'status' => 'required',
                'deskripsi' => 'required',
                'foto_desk' => 'required',
                'b_kategori_id' => 'required'
            ];

            $pesan = [
                'judul.required' => 'Judul Berita Wajib Diisi!',
                'slug.required' => 'Slug Berita Wajib Diisi!',
                'foto.required' => 'Cover Berita Wajib Diisi!',
                'status.required' => 'Status Berita Wajib Diisi!',
                'deskripsi.required' => 'deskripsi Berita Wajib Diisi!',
                'foto_desk.required' => 'Deskripsi Foto Wajib Diisi!',
                'b_kategori_id.required' => 'Kategori Berita Wajib Diisi!'
            ];
        }

        $validator = Validator::make($request->all(), $rules, $pesan);
        if ($validator->fails()){
            return response()->json([
                'fail' => true,
                'errors' => $validator->errors()
            ]);
        }else{
            if($request->foto !== null){
                if($request->hasfile('foto'))
                {
                    $berita = Berita::find($request->id);
                    $file = public_path().'/uploads/'.$berita->foto;
                    if (is_file($file)){
                        $del_thumb = unlink($file);
                        if($del_thumb)
                        {
                            $foto_file = $request->file('foto');
                            $foto = Storage::disk('public')->put('berita', $foto_file);
                        }
                    }
                }
            }


            $data = Berita::find($request->id);
            $data->judul = $request->judul;
            $data->slug = $request->slug;
            $data->foto_desk = $request->foto_desk;
            $data->admin_id = auth()->user()->id;
            if($request->foto !== null){
                $data->foto = $foto;
            }
            $data->b_kategori_id = $request->b_kategori_id;
            $data->seo_keyword = $request->seo_keyword;
            $data->deskripsi = $request->deskripsi;
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

    public function hapus($id)
    {
        $berita = Berita::find($id);
        $path = public_path().'/uploads/'.$berita->foto;
        // dd($file);
        if (is_file($path)){
            $del_path = unlink($path);
            if($del_path)
            {
                $hapus_db = Berita::destroy($berita->id);
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
?>
