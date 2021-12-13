<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasterAdmin
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
            $user = Auth::guard('useradmin')->check();
            $account = Auth::guard('useradmin')->user();
            if($user && $account->is_admin){
                return $next($request);
            }
            toastr()->error('Bạn không đủ quyền truy cập chức năng này!');
            return redirect('/admin/login');
        } else {
            return $next($request);
        }
    }
}
