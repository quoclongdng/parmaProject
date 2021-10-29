<?php

namespace App\Http\Requests\Client\Customer;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
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
            'id'            => 'required|exists:customers,id',
            'name'          => 'required|max:50|min:6|unique:customers,name,' . $this->id,
            'phone'         => 'required',
            'address'       => 'required|max:50',
            'email'         => 'email|exists:customers,email',
            'description'   => 'max:1000',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên khách hàng',
            'phone' => 'Số điện thoại',
            'address' => 'Địa chỉ',
            'email' => 'Email',
            'description' => 'Mô tả',
        ];
    }
}
