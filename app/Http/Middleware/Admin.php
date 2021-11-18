<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
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
        if(env('APP_ROLE')) {
            $user = Auth::guard('user')->check();
            $account = Auth::guard('user')->user();
            if($user && $account->is_admin){
                return $next($request);
            }
            toastr()->error('Bạn không đủ quyền truy cập chức năng này!');
            return redirect('/');
        } else {
            return $next($request);
        }
    }
}
