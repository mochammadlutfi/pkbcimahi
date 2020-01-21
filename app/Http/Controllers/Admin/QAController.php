<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pertanyaan;
use App\Models\Jawaban;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Cviebrock\EloquentSluggable\Services\SlugService;

use App\Helpers\GeneralHelp;
class QAController extends Controller
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
    public function pertanyaan(Request $request)
    {
        if ($request->ajax()) {
            if(!empty($request->filter_status))
            {
                $data = Pertanyaan::where('status', $request->filter_status)->latest()->get();
            }else{
                $data = Pertanyaan::latest()->get();
            }
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('judul', function($row){
                        return $row->judul;
                })
                ->addColumn('penanya', function($row){
                        return $row->user->name;
                })
                ->addColumn('kategori', function($row){
                        return $row->qkategori->nama;
                })
                ->addColumn('status', function($row){

                        if($row->status == 1)
                        {
                            $status = '<span class="badge badge-success">Sudah Dijawab</span>';
                        }else{
                            $status = '<span class="badge badge-danger">Belum Dijawab</span>';
                        }

                        return $status;
                })
                ->addColumn('tgl', function($row){
                    return GeneralHelp::tgl_indo($row->created_at);

                })
                ->addColumn('action', function($row){
                    if($row->status == 0)
                    {
                        $btn = '<center><div class="btn-group" role="group">
                        <button type="button" class="btn btn-secondary dropdown-toggle" id="btnGroupVerticalDrop3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 34px, 0px);">
                            <a class="dropdown-item" href="'. route('admin.QA.jawab', $row->id) .'">
                                <i class="si si-note mr-5"></i>Jawab Pertanyaan
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)" onClick="hapus('.$row->id.')">
                                <i class="si si-trash mr-5"></i>Hapus Pertanyaan
                            </a>
                        </div>
                    </div></center>';
                    }else{
                        $btn = '<center><div class="btn-group" role="group">
                        <button type="button" class="btn btn-secondary dropdown-toggle" id="btnGroupVerticalDrop3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 34px, 0px);">
                            <a class="dropdown-item" href="'. route('QA.detail', $row->slug) .'">
                                <i class="si si-eye mr-5"></i>Detail Pertanyaan
                            </a>
                            <a class="dropdown-item" href="'. route('admin.QA.edit', $row->id) .'">
                                <i class="si si-note mr-5"></i>Edit Jawaban
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)" onClick="hapus('.$row->id.')">
                                <i class="si si-trash mr-5"></i>Hapus Pertanyaan
                            </a>
                        </div>
                    </div></center>';
                    }

                    return $btn;
                })
                ->rawColumns(['action', 'status', 'judul', 'kategori'])
                ->make(true);
        }
        return view('backend.QA.pertanyaan');

    }

    public function jawab($id)
    {
        $q = Pertanyaan::find($id);

        return view('backend.QA.jawab', compact('q'));

    }

    public function simpan(Request $request)
    {
        // dd($request->all());
        $data = new Jawaban();
        $data->deskripsi = $request->deskripsi;
        $data->admin_id = auth()->guard('admin')->user()->id;
        $data->pertanyaan_id = $request->pertanyaan_id;
        if($data->save())
        {
            $pertanyaan = Pertanyaan::find($request->pertanyaan_id);
            $pertanyaan->status = 1;
            if($pertanyaan->save())
            {
                return response()->json([
                    'fail' => false,
                ]);
            }

        }
    }

    public function edit($id)
    {
        $q = Pertanyaan::find($id);
        $a = Jawaban::where('pertanyaan_id', $q->id)->first();

        return view('backend.QA.edit_jawab', compact('q', 'a'));

    }

    public function update(Request $request)
    {
        $data = Jawaban::find($request->jawaban_id);
        $data->deskripsi = $request->deskripsi;
        $data->admin_id = auth()->guard('admin')->user()->id;
        $data->pertanyaan_id = $request->pertanyaan_id;
        if($data->save())
        {
            return response()->json([
                'fail' => false,
            ]);
        }
    }
}
