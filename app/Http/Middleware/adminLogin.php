<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::guard('useradmin')->check()){
            return $next($request);
        }elseif(Auth::guard('users')->check()){
            return $next($request);
        }
        toastr()->error('Vui lòng đăng nhập hệ thống');

        return redirect('/admin/login');
    }
}
