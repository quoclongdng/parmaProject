<?php

namespace App\Http\Requests\Client\Bill;

use Illuminate\Foundation\Http\FormRequest;

class CreateBillRequest extends FormRequest
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
            'hash'      =>'required|unique:bills,hash',
            'user_id'   =>'required',
            'comment'   =>'max:1000',
            'type'      =>'require',
        ];
    }

    public function attributes()
    {
        return [
            'hash' => 'Mã hóa đơn',
            'user_id' => 'Mã người dùng',
            'comment' => 'Bình luận',
            'type' => 'Thể loại',
        ];
    }
}
