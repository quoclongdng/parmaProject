<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\AdminUserLogin;
use App\Models\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
{
    public function loginAdmin()
    {
        return  view('login');
    }

    public function login(AdminUserLogin $request)
    {
        $data = $request->only('email' , 'password');

        $checklogin = Auth::guard('useradmin')->attempt($data);
        if($checklogin){
            $user = Auth::guard('useradmin')->user();
            if($user->is_block == 1){
                return response()->json('status' == true );
            }else{
                return response()->json('status' == false );
            }
        }else{
            toastr()->error('Email hoặc mật khẩu không chính xác');
            return redirect('/admin/login');
        }

    }

    public function logout()
    {
        Auth::guard('useradmin')->logout();

        return redirect('/admin/login');
    }
}
