<?php

namespace App\Http\Requests\Client\Product;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'name'          => 'required|max:50|min:6|unique:products,name',
            'description'        => 'required | max:1000',
            'content'            => 'required | max:250 | min:6',
            'avatar'             => 'required',
            'productcategory_id' => 'required',
            'price'              => 'required',

        ];
    }

    public function attributes()
    {
        return [
            'name'                  => 'Tên sản phẩm',
            'description'           => 'Mô tả',
            'content'               => 'Nội dụng',
            'avatar'                => 'Hình ảnh',
            'productcategory_id'    => 'Mã danh mục sản phẩm',
            'price'                 => 'Giá',

        ];
    }
}
