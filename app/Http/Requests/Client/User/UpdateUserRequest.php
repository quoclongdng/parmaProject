<?php

namespace App\Http\Requests\Client\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'id'         => 'required|exists:user,id',
            'first_name' => 'required|max:20',
            'last_name'  => 'required|max:20',
            'email'      => 'required|email|exists:users,email',
            'password'   => 'required|min:8|max:30',
            're-password'=> 'required|min:8|max:30,same:password',
            'address'    => 'required|max:50',
            'phone'      => 'required|numeric|min:10',
            'is_admin'   => 'required|boolean',
            'is_master'  => 'required|boolean'
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
            'phone' =>'Số điện thoại',
            'is_admin'=>'Tài khoản Admin',
            'is_master'=>'Master Admin'
        ];
    }
}
