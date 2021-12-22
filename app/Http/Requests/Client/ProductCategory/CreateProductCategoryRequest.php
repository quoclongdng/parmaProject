<?php

namespace App\Http\Requests\Client\ProductCategory;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductCategoryRequest extends FormRequest
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
            'name'          => 'required|max:500|min:6',
            'is_open'       => 'required|boolean',
            'description'   => 'max:1000',
            'avatar'        => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Danh mục sản phẩm',
            'is_open' => 'Tình trạng',
            'description' => 'Mô tả',
            'avatar' => 'Hình ảnh',
        ];
    }
}
