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
        // $this->middleware('auth');
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
        
        if ($pass == "" or $c_pas == "") {
            if ($lama <> $baru) {
                $request->validate([
                    'name' => 'required',
                    'email' => 'required|unique:users',
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
            }else{
                $request->validate([
                    'name' => 'required',
                    'password' => 'required',
                    'password_confirmation' => 'required|same:password',
                ]);
            }
        }

        $foto_file = $request->file('avatar');
        $foto = Storage::disk('public')->put('avatars', $foto_file);

        $data->update([
            'avatar' => $foto,
            'password' =>Hash::make($request->password),
            'name' =>$request->name,
            'email' =>  $request->email,
        ]);
        return redirect('/profile');
    }

}
