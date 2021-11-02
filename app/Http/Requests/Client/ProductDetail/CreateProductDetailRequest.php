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
            'product_id'       =>   'required|exists:products,id',
            'mfg_date'         =>   'required',
            'exp_date'         =>   'required',
            'price'            =>   'required',
            'qty'              =>   'required|integer|min:1',
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
