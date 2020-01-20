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
use DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
class PengaturanController extends Controller
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

    public function umum(Request $request)
    {
        if($request->isMethod('get')){
            return view('backend.pengaturan.umum');
        }else{
            $rules = [
                'app_name' => 'required',
                'app_description' => 'required',
            ];
            $pesan = [
                'app_name.required' => 'Nama S Wajib Diisi!',
                'app_description.required' => 'Slug Movie Wajib Diisi!',
            ];
            $validator = Validator::make($request->all(), $rules, $pesan);
            if ($validator->fails()){
                return response()->json([
                    'fail' => true,
                    'errors' => $validator->errors()
                ]);
            }else{
                $app_name = DB::table('settings')
                    ->where('key', 'app_name')
                    ->update(['value' => $request->app_name]);

                $app_description = DB::table('settings')
                    ->where('key', 'app_description')
                    ->update(['value' => $request->app_description]);

                $app_description = DB::table('settings')
                    ->where('key', 'app_url')
                    ->update(['value' => $request->app_url]);

                if(!empty($request->file('app_logo')))
                {
                    File::delete(settings()->get('app_logo'));
                    $img = $request->file('app_logo');
                    $logo = Storage::disk('public')->put('logo', $img);

                    $app_logo = DB::table('settings')
                        ->where('key', 'app_logo')
                        ->update(['value' => 'uploads/'.$logo]);
                }

                if(!empty($request->file('app_favicon')))
                {
                    File::delete(settings()->get('app_favicon'));
                    $icon = $request->file('app_favicon');
                    $favicon = Storage::disk('public')->put('logo', $icon);

                    $app_favicon = DB::table('settings')
                    ->where('key', 'app_favicon')
                    ->update(['value' => 'uploads/'.$favicon]);
                }
                return response()->json([
                    'fail' => false,
                ]);
            }
        }
    }

}
