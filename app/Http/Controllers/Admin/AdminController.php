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
class AdminController extends Controller
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
            $data = Admin::role('admin')->latest()->get();
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
                                <a class="dropdown-item" href="'. route('admin.pengguna.edit', $row->id) .'">
                                    <i class="si si-note mr-5"></i>Edit Admin
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)" onClick="hapus('.$row->id.')">
                                    <i class="si si-trash mr-5"></i>Hapus Admin
                                </a>
                            </div>
                        </div></center>';

                    return $btn;
                })
                ->rawColumns(['img', 'action', 'status', 'tgl'])
                ->make(true);
        }
        return view('backend.admin.index');

    }

    public function tambah()
    {
        return view('backend.admin.tambah');
    }

    public function simpan(Request $request)
    {
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
                $foto = Storage::disk('public')->put('admin', $foto_file);
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
                $data->assignRole('Admin');
                return response()->json([
                    'fail' => false,
                    'url' => route('admin.pengguna')
                ]);
            }
        }
    }

    public function update(Request $request)
    {
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
                $foto = Storage::disk('public')->put('admin', $foto_file);
            }

            $data = Admin::find($request->admin_id);
            $data->name = $request->nama;
            $data->username = $request->username;
            $data->email = $request->email;
            if($request->hasfile('foto'))
            {
                $data->avatar = $foto;
            }
            if($data->save())
            {
                $data->assignRole('Admin');
                return response()->json([
                    'fail' => false,
                    'url' => route('admin.pengguna')
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

    public function pengaturan(Request $request)
    {
        if($request->isMethod('get')){
            return view('pengguna.pengaturan');
        }else{
            $rules = [
                'nip' => [
                    'required',
                    Rule::unique('users')->ignore(Auth::user()->id),
                ],
                'nama' => 'required',
                'username' => [
                    'required',
                    Rule::unique('users')->ignore(Auth::user()->id),
                ],
                'email' => [
                    'required',
                    Rule::unique('users')->ignore(Auth::user()->id),
                ],
            ];

            $pesan = [
                'nip.required' => 'NIP Wajib Diisi!',
                'nip.unique' => 'NIP Sudah Digunakan. Gunakan NIP Lain!',
                'nama.required' => 'Nama Lengkap Wajib Diisi!',
                'username.required' => 'Username Wajib Diisi!',
                'username.unique' => 'Username Sudah Digunakan. Gunakan Username Lain!',
                'email.required' => 'Email Wajib Diisi!',
                'email.unique' => 'Email Sudah Digunakan. Gunakan Email Lain!',
            ];

            $validator = Validator::make($request->all(), $rules, $pesan);
            if ($validator->fails()){
                return response()->json([
                    'fail' => true,
                    'errors' => $validator->errors()
                ]);
            }else{

                $data = User::find(Auth::user()->id);
                $data->nip = $request->nip;
                $data->nama = $request->nama;
                $data->username = $request->username;
                $data->email = $request->email;
                if($data->save())
                {
                    return response()->json([
                        'fail' => false,
                    ]);
                }
            }


        }
    }

    public function ubah_pw(Request $request)
    {

        $rules = [
            'pw_lama' => 'required',
            'pw_baru' => 'min:6|required_with:konf_pw_baru|same:konf_pw_baru',
            'konf_pw_baru' => 'min:6',
        ];

        $pesan = [
            'pw_lama.required' => 'Kata Sandi Lama Wajib Diisi!',
            'pw_baru.required' => 'Kata Sandi Baru Wajib Diisi!',
            'konf_pw_baru.required' => 'Konfirmasi Kata Sandi Baru Wajib Diisi!',
            'pw_baru.same' => 'Kata Sandi Baru Tidak Sama!',
            'pw_baru.min' => 'Kata Sandi Baru Kurang Dari 6 Karakter!',
            'konf_pw_baru.min' => 'Konfirmasi Kata Sandi Baru Kurang Dari 6 Karakter!',
        ];

        $validator = Validator::make($request->all(), $rules, $pesan);
        if ($validator->fails()){
            return response()->json([
                'fail' => true,
                'errors' => $validator->errors()
            ]);
        }else{
            if (Hash::check($request->pw_lama, Auth::user()->password)) {
                $data = User::find(Auth::user()->id);
                $data->password = Hash::make($request->pw_baru);
                if($data->save())
                {
                    return response()->json([
                        'fail' => false,
                    ]);
                }
            }else{
                return response()->json([
                    'fail' => true,
                    'errors' => [
                        'pw_lama' => ['Kata Sandi Lama Tidak Sama']
                    ]
                ]);
            }

        }
    }

}
