<?php

namespace App\Http\Requests\Client\ProductCategory;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductCategoryRequest extends FormRequest
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
            'id'            => 'required|exists:product_categories,id',
            'name'          => 'required|max:50|min:6' . $this->id,
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
