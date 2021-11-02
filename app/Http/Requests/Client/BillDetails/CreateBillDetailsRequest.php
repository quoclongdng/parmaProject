<?php

namespace App\Http\Requests\Client\BillDetails;

use Illuminate\Foundation\Http\FormRequest;

class CreateBillDetailsRequest extends FormRequest
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
            'bill_id'       => 'required',
            'product_id'    => 'required',
            'quantity'      => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'bill_id' => 'Mã hóa đơn chi tiết',
            'product_id' => 'Mã sản phẩm',
            'quantity' => 'Số lượng',
        ];
    }
}
