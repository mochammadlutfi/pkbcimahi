<?php

namespace App\Http\Controllers\User\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Profile;
use Illuminate\Http\Request;
use Storage;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = 'Profile';
        return view('frontend/auth/profile', ['title' => $title]);
    }

    public function update(Request $request, Profile $profile)
    {
        $id = $request->id;
        $data = Profile::find($id);
        $lama = $data->email;
        $baru =  $request->input('email');
        $pass =  $request->input('password');
        $c_pas =  $request->input('password_confirmation');
        $data->update();

        if ($pass == "" or $c_pas == "") {
            if ($lama <> $baru) {
                $request->validate([
                    'name' => 'required',
                    'email' => 'required|unique:users',
                ]);

                $data->update([
                    'email_verified_at' =>  null,
                ]);
            }else{
                $request->validate([
                    'name' => 'required',
                ]);
            }
        }else{
            if ($lama <> $baru) {
                $request->validate([
                    'name' => 'required',
                    'email' => 'required|unique:users',
                    'password' => 'required',
                    'password_confirmation' => 'required|same:password',
                ]);

                $data->update([
                    'email_verified_at' =>  null,
                    'password' =>Hash::make($request->password),
                ]);
            }else{
                $request->validate([
                    'name' => 'required',
                    'password' => 'required',
                    'password_confirmation' => 'required|same:password',
                ]);
                $data->update([
                    'password' =>Hash::make($request->password),
                ]);
            }
        }

        $foto_file = $request->file('avatar');
        if ($foto_file == "") {
            $data->update([
                'name' =>$request->name,
                'email' =>  $request->email,
            ]);
        }else{
            $foto = Storage::disk('public')->put('avatars', $foto_file);
            $data->update([
                'avatar' => $foto,
                'name' =>$request->name,
                'email' =>  $request->email,
            ]);
        }
        dd($data);
        return redirect('/profile');
    }

}
