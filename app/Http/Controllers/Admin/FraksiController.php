<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Storage;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class FraksiController extends Controller
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
            $jabatan = array('Fraksi');
            $data = Admin::role('Fraksi')->latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                // ->addColumn('img', function($row){

                //     $img = '<center><img src="'. asset('uploads/'.$row->foto).'" width="40px"/></center>';

                //         return $img;
                // })
                ->addColumn('status', function($row){

                        return '1';
                })
                ->addColumn('action', function($row){

                    $btn = '<center><div class="btn-group" role="group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" id="btnGroupVerticalDrop3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 34px, 0px);">
                                <a class="dropdown-item" href="'. route('admin.fraksi.edit', $row->id) .'">
                                    <i class="si si-note mr-5"></i>Edit Pengguna
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)" onClick="hapus('.$row->id.')">
                                    <i class="si si-trash mr-5"></i>Hapus Pengguna
                                </a>
                            </div>
                        </div></center>';

                    return $btn;
                })
                ->rawColumns(['img', 'action', 'status', 'tgl'])
                ->make(true);
        }
        return view('backend.fraksi.index');

    }

    public function tambah()
    {

        return view('backend.fraksi.tambah');
    }

    public function simpan(Request $request)
    {
        // dd($request->all());
        $rules = [
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'konf_password' => 'required',
            'foto' => 'required|image',
        ];

        $pesan = [
            'nama.required' => 'Nama Lengkap Wajib Diisi!',
            'username.required' => 'Username Wajib Diisi!',
            'email.required' => 'Email Wajib Diisi!',
            'password.required' => 'Password Wajib Diisi!',
            'konf_password.required' => 'Konfirmasi Password Wajib Diisi!',
            'foto.required' => 'Foto Pengguna Wajib Diisi!',
            'foto.image' => 'Foto Pengguna Bukan Format Gambar!',
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
                $foto = Storage::disk('public')->put('fraksi', $foto_file);
            }

            $data = new Admin();
            $data->name = $request->nama;
            $data->username = $request->username;
            $data->email = $request->email;
            $data->password = bcrypt($request->password);
            if($request->hasfile('foto'))
            {
                $data->avatar = $foto;
            }
            if($data->save())
            {
                $data->assignRole('Fraksi');
                return response()->json([
                    'fail' => false,
                    'url' => route('admin.fraksi')
                ]);
            }
        }
    }

    public function update(Request $request)
    {
        // dd($request->all());

        $rules = [
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required',
            'foto' => 'required|image',
        ];

        $pesan = [
            'nama.required' => 'Nama Lengkap Wajib Diisi!',
            'username.required' => 'Username Wajib Diisi!',
            'email.required' => 'Email Wajib Diisi!',
            'foto.required' => 'Foto Pengguna Wajib Diisi!',
            'foto.image' => 'Foto Pengguna Bukan Format Gambar!',
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
                $foto = Storage::disk('public')->put('fraksi', $foto_file);
            }

            $data = new Admin();
            $data->name = $request->nama;
            $data->username = $request->username;
            $data->email = $request->email;
            $data->password = bcrypt($request->password);
            if($request->hasfile('foto'))
            {
                $data->avatar = $foto;
            }
            if($data->save())
            {
                $data->assignRole('Fraksi');
                return response()->json([
                    'fail' => false,
                    'url' => route('admin.fraksi')
                ]);
            }
        }
    }

    public function edit($id){

        $data = Admin::find($id);

        return view('backend.admin.edit', compact('data'));
    }

    public function hapus($id)
    {
        $user = User::destroy($id);
        if($user){
            return response()->json([
                'fail' => false,
            ]);
        }
    }

}
