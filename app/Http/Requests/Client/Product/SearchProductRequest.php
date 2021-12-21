<?php

namespace App\Http\Requests\Client\Product;

use Illuminate\Foundation\Http\FormRequest;

class SearchProductRequest extends FormRequest
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
            'search'        => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'search'        => 'Mục tìm kiếm'
        ];
    }

    public function messages()
    {
        return [
            'required'        => 'Không được để trống'
        ];
    }
}
