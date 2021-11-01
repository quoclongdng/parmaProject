<?php

namespace App\Http\Requests\Client\ProductDetail;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductDetailRequest extends FormRequest
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
            'product_id'       =>'required||unique:product_details,product_id',
            'mfg_date'         =>'required',
            'exp_date'         =>'require',
            'price'            =>'require',
        ];
    }

    public function attributes()
    {
        return [
            'product_id' => 'Mã sản phẩm',
            'mfg_date' => 'Ngày sản xuất',
            'exp_date' => 'Ngày hết hạn',
            'price' => 'Giá',
        ];
    }
}
