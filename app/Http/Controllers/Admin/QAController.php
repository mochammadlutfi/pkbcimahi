<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
            $data = QKategori::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('jumlah', function($row){
                        return '0 Pertanyaan';
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
                                <a class="dropdown-item" href="javascript:void(0)" onClick="edit('.$row->kategori_id.')">
                                    <i class="si si-note mr-5"></i>Edit Kategori
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)" onClick="hapus('.$row->kategori_id.')">
                                    <i class="si si-trash mr-5"></i>Hapus Kategori
                                </a>
                            </div>
                        </div></center>';

                    return $btn;
                })
                ->rawColumns(['action', 'status', 'jumlah'])
                ->make(true);
        }
        return view('backend.QA.kategori', compact(''));

    }

    public function dijawab(Request $request)
    {
        if ($request->ajax()) {
            $data = QKategori::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('jumlah', function($row){
                        return '0 Pertanyaan';
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
                                <a class="dropdown-item" href="javascript:void(0)" onClick="edit('.$row->kategori_id.')">
                                    <i class="si si-note mr-5"></i>Edit Kategori
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)" onClick="hapus('.$row->kategori_id.')">
                                    <i class="si si-trash mr-5"></i>Hapus Kategori
                                </a>
                            </div>
                        </div></center>';

                    return $btn;
                })
                ->rawColumns(['action', 'status', 'jumlah'])
                ->make(true);
        }
        return view('backend.QA.kategori', compact(''));

    }

}
