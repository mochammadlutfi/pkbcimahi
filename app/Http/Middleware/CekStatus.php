<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
class CekStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
        $response = $next($request);
        //Jika Status Tidak Aktif Maka Kembali
        if(Auth::guard('admin')->check())
        {
            if(Auth::guard('admin')->check() && Auth::guard('admin')->user()->status != '1'){
                Auth::guard('admin')->logout();
                return redirect('/admin/login')->with('error_login', 'Your error text');
            }
        }else{
            if(Auth::check() && Auth::user()->status != '1'){
                Auth::logout();
                return redirect('/login')->with('error_login', 'Your error text');
            }
        }
        return $response;

    }

}
