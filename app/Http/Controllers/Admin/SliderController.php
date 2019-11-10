<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Storage;

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
            $foto = Storage::disk('public')->put('slider', $foto_file);

            $data = new Slider();
            $data->path = $foto;
            if($data->save())
            {
                return response()->json([
                    'fail' => false,
                ]);
            }
        }
    }
}
