<?php

namespace App\Http\Controllers\Admin;


use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Storage;

class VideoController extends Controller
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
            $data = Video::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
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

                                <a class="dropdown-item" href="javascript:void(0)" onClick="edit('.$row->id.')">
                                    <i class="si si-note mr-5"></i>Edit Video
                                </a>

                                <a class="dropdown-item" href="javascript:void(0)" onClick="hapus('.$row->id.')">
                                    <i class="si si-trash mr-5"></i>Hapus Video
                                </a>
                            </div>
                        </div></center>';

                    return $btn;
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }
        return view('backend.video.index');
    }

    public function simpan(Request $request)
    {

        $rules = [
            'judul' => 'required',
            'slug' => 'required',
            'url' => 'required',
            'status' => 'required'
        ];

        $pesan = [
            'judul.required' => 'Judul Video Wajib Diisi!',
            'slug.required' => 'Slug Video Wajib Diisi!',
            'url.required' => 'URL Video Wajib Diisi!',
            'status.required' => 'Status Video Wajib Diisi!'
        ];

        $validator = Validator::make($request->all(), $rules, $pesan);
        if ($validator->fails()){
            return response()->json([
                'fail' => true,
                'errors' => $validator->errors()
            ]);
        }else{
            
            $data = new Video();
            $data->judul = $request->judul;
            $data->slug = $request->slug;
            $data->url = $request->url;
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
        $data = Video::find($id);
        $res = Collect([
            'id' => $data->id,
            'judul' => $data->judul,
            'slug' => $data->slug,
            'url' => $data->url,
            'seo_keyword' => $data->seo_keyword,
            'seo_description' => $data->seo_description,
            'seo_tags' => $data->seo_tags,
            'status' => $data->status
        ]);
        return response()->json($res);
    }

    public function update(Request $request)
    {

        $rules = [
            'judul' => 'required',
            'slug' => 'required',
            'url' => 'required',
            'status' => 'required'
        ];

        $pesan = [
            'judul.required' => 'Judul Video Wajib Diisi!',
            'slug.required' => 'Slug Video Wajib Diisi!',
            'url.required' => 'URL Video Wajib Diisi!',
            'status.required' => 'Status Video Wajib Diisi!'
        ];

        $validator = Validator::make($request->all(), $rules, $pesan);
        if ($validator->fails()){
            return response()->json([
                'fail' => true,
                'errors' => $validator->errors()
            ]);
        }else{
           
            $data = Video::find($request->id);
            $data->judul = $request->judul;
            $data->slug = $request->slug;
            $data->url = $request->url;
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

    public function hapus($id)
    {
        $data = Video::destroy($id);
        if($data){
            return response()->json(
                $data
            );
        }
    }
}
