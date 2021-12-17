<?php

namespace App\Http\Requests\Client\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|max:20',
            'last_name'  => 'required|max:20',
            'email'      => 'required|email|unique:users,email',
            'password'   => 'required|min:8|max:30',
            're-password'=> 'required|min:8|max:30,same:password',
            'address'    => 'required|max:50',
            'phone'      => 'required|numeric',
            'is_admin'   => 'required',
            'is_master'  => 'required|boolean',
            'gender'  => 'required|boolean',
        ];
    }

    public function attributes()
    {
        return [
            'first_name' => 'Tên người dùng',
            'last_name' => 'Họ người dùng',
            'email' => 'Email',
            'password' => 'Mật Khẩu',
            'address' => 'Địa chỉ',
            'avatar' => 'Hình ảnh',
            're-password'=>'Nhập lại mật khẩu',
            'phone'=>'Số điện thoại',
            'is_admin'=>'Tài khoản Admin',
            'is_master'=>'Master Admin'
        ];
    }
}
