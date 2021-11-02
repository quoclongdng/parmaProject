<?php

namespace App\Http\Requests\Client\ProductDetail;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductDetailRequest extends FormRequest
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
            'id'            => 'required|exists:product_details,id',
            'product_id'       =>'required||unique:product_details,product_id,'. $this->id,
            'mfg_date'         =>'required',
            'exp_date'         =>'require',
            'price'            =>'require',
        ];
    }
}
