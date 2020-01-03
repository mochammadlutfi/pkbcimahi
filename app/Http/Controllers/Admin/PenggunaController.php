<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class PenggunaController extends Controller
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
            $data = User::latest()->get();
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
                                <a class="dropdown-item" href="javascript:void(0)" onClick="edit('.$row->id.')">
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
        return view('backend.pengguna.index');

    }


    public function simpan(Request $request)
    {
        $rules = [
            'nip' => 'required',
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'konf_password' => 'required',
            'jabatan' => 'required',
        ];

        $pesan = [
            'nip.required' => 'NIP Wajib Diisi!',
            'nama.required' => 'Nama Lengkap Wajib Diisi!',
            'username.required' => 'Username Wajib Diisi!',
            'email.required' => 'Email Wajib Diisi!',
            'password.required' => 'Password Wajib Diisi!',
            'konf_password.required' => 'Konfirmasi Password Wajib Diisi!',
            'jabatan.required' => 'Jabatan Wajib Diisi!',
        ];

        $validator = Validator::make($request->all(), $rules, $pesan);
        if ($validator->fails()){
            return response()->json([
                'fail' => true,
                'errors' => $validator->errors()
            ]);
        }else{

            $data = new User();
            $data->nip = $request->nip;
            $data->nama = $request->nama;
            $data->username = $request->username;
            $data->email = $request->email;
            $data->password = bcrypt($request->password);
            $data->status = $request->status;
            if($data->save())
            {
                $data->assignRole($request->jabatan);
                return response()->json([
                    'fail' => false,
                    'url' => route('pengguna')
                ]);
            }
        }
    }

    public function update(Request $request)
    {
        // dd($request->all());

        $rules = [
            'edit_nip' => 'required',
            'edit_nama' => 'required',
            'edit_username' => 'required',
            'edit_email' => 'required',
            'edit_jabatan' => 'required',
        ];

        $pesan = [
            'edit_nip.required' => 'NIP Wajib Diisi!',
            'edit_nama.required' => 'Nama Lengkap Wajib Diisi!',
            'edit_username.required' => 'Username Wajib Diisi!',
            'edit_email.required' => 'Email Wajib Diisi!',
            'edit_jabatan.required' => 'Jabatan Wajib Diisi!',
        ];

        $validator = Validator::make($request->all(), $rules, $pesan);
        if ($validator->fails()){
            return response()->json([
                'fail' => true,
                'errors' => $validator->errors()
            ]);
        }else{

            $data = User::find($request->edit_user_id);
            $data->nip = $request->edit_nip;
            $data->nama = $request->edit_nama;
            $data->username = $request->edit_username;
            $data->email = $request->edit_email;
            $data->status = $request->edit_status;
            return response()->json([
                'fail' => false,
                'url' => route('penyewa')
            ]);
        }
    }

    public function edit($id){

        $data = User::find($id);
        if($data){

            $user = collect([
                'id' => $data->id,
                'nip' => $data->nip,
                'nama' => $data->nama,
                'username' => $data->username,
                'email' => $data->email,
                'jabatan' => $data->getRoleNames()->first(),
                'pasar' => $data->pasar,
            ]);

            return response()->json($user);
        }
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
