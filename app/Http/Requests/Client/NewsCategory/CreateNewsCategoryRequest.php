<?php

namespace App\Http\Requests\Client\NewsCategory;

use Illuminate\Foundation\Http\FormRequest;

class CreateNewsCategoryRequest extends FormRequest
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
            'name'      => 'required|max:50|min:6|unique:news_categories,name',
            'is_open'   => 'required|boolean',

        ];
    }

    public function attributes()
    {
        return [
            'name'      => 'Tin tức sản phẩm',
            'is_open'   => 'Tình trạng',

        ];
    }

}
