<?php

namespace App\Http\Controllers;

use App\Http\Requests\Client\User\CreateUserRequest;
use App\Http\Requests\User\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= User::paginate(10);

        return view('pages.user.index',compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loginAdmin()
    {
        return view('login');
    }

    public function store(CreateUserRequest $request)
    {
        $data = $request->all();

        $data["is_master"]=false;

        User::create($data);

        toastr()->success('Đã thêm mới dữ liệu thành công');

        return redirect('/user/create');

    }

    public function login(LoginRequest $request)
    {
        $data = $request->only(['email', 'password']);

        $user = Auth::guard('user')->attempt($data);

        if($user){
            $user = Auth::guard('user')->user();
            if($user->is_master){
                return redirect('');
            } else if($user->is_admin){
                return redirect('');
            } else {
                return redirect('');
            }
        } else {
            toastr()->error('Tài khoản hoặc mật khẩu không chính xác');
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = User::find($id);

        return view('pages.user.edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $data = User::find($request->id);

        $data->update($request->all());

        toastr()->success('Đã cập nhật dữ liệu thành công');

        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $data = User::find($id);
        $data->delete();

        return redirect('/user');
    }

    public function logout()
    {
        Auth::guard('user')->logout();
    }
}
