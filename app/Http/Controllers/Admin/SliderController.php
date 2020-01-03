<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Storage;
use Image;
class SliderController extends Controller
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
        $slider = Slider::latest()->paginate('6');

        return view('backend.slider.index', compact('slider'));
    }

    public function simpan(Request $request)
    {

        $rules = [
            'foto' => 'required',
        ];

        $pesan = [
            'foto.required' => 'Slider Wajib Diisi!',
        ];

        $validator = Validator::make($request->all(), $rules, $pesan);
        if ($validator->fails()){
            return response()->json([
                'fail' => true,
                'errors' => $validator->errors()
            ]);
        }else{
            $foto_file = $request->file('foto');
            $path = Storage::disk('public')->put('slider/original', $foto_file);
            $thumbnail = Storage::disk('public')->put('slider/thumbnail', $foto_file);
            //Resize image here
            $thumbnailpath = public_path('uploads/'.$thumbnail);
            $img = Image::make($thumbnailpath)->resize(120, 80, function($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($thumbnailpath);
            $data = new Slider();
            $data->path = $path;
            $data->thumbnail = $thumbnail;
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
        $slider = Slider::find($id);
        $thumbnail = public_path().'/uploads/'.$slider->thumbnail;
        $path = public_path().'/uploads/'.$slider->path;
        // dd($file);
        if (is_file($thumbnail)){
            $del_thumb = unlink($thumbnail);
            if($del_thumb)
            {
                if (is_file($path)){
                    $del_path = unlink($path);
                    if($del_path)
                    {
                        $hapus_db = Slider::destroy($slider->id);
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
    }
}
