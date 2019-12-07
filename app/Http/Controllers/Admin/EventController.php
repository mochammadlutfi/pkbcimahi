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
        if ($request->ajax()) {
            $data = Event::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('tgl', function($row){
                        return date('d-m-Y', strtotime($row->tgl));
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
                                <a class="dropdown-item" href="'. route('admin.event.edit', $row->id) .'">
                                    <i class="si si-note mr-5"></i>Edit Event
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)" onClick="hapus('.$row->kategori_id.')">
                                    <i class="si si-trash mr-5"></i>Hapus Event
                                </a>
                            </div>
                        </div></center>';

                    return $btn;
                })
                ->rawColumns(['action', 'status', 'tgl'])
                ->make(true);
        }
        return view('backend.event.index', compact(''));

    }

    public function tambah()
    {

        return view('backend.event.form', compact(''));
    }

    public function simpan(Request $request)
    {

        $rules = [
            'judul' => 'required',
            'slug' => 'required',
            'foto' => 'required',
            'status' => 'required'
        ];

        $pesan = [
            'judul.required' => 'Nama Event Wajib Diisi!',
            'slug.required' => 'Slug Event Wajib Diisi!',
            'foto.required' => 'Gambar Event Wajib Diisi!',
            'status.required' => 'Status Event Wajib Diisi!'
        ];

        $validator = Validator::make($request->all(), $rules, $pesan);
        if ($validator->fails()){
            return response()->json([
                'fail' => true,
                'errors' => $validator->errors()
            ]);
        }else{
            $foto_file = $request->file('foto');
            $foto = Storage::disk('public')->put('events', $foto_file);

            $data = new Event();
            $data->judul = $request->judul;
            $data->slug = $request->slug;
            $data->deskripsi = $request->deskripsi;
            $data->featured_img = $foto;
            $data->tgl = date('Y-m-d', strtotime($request->tgl));
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

    public function edit($event_id)
    {
        $event = Event::find($event_id);

        return view('backend.event.edit', compact('event'));
    }

    public function update(Request $request)
    {

        $rules = [
            'judul' => 'required',
            'slug' => 'required',
            'status' => 'required'
        ];

        $pesan = [
            'judul.required' => 'Nama Event Wajib Diisi!',
            'slug.required' => 'Slug Event Wajib Diisi!',
            'status.required' => 'Status Event Wajib Diisi!'
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
                $foto_file = $request->file('foto');
                $foto = Storage::disk('public')->put('events', $foto_file);
            }

            $data = Event::find($request->event_id);
            $data->judul = $request->judul;
            $data->slug = $request->slug;
            $data->deskripsi = $request->deskripsi;
            if($request->hasfile('foto'))
            {
            $data->featured_img = $foto;
            }
            $data->tgl = date('Y-m-d', strtotime($request->tgl));
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
