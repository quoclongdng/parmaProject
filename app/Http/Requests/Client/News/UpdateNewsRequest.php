<?php

namespace App\Http\Requests\Client\News;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsRequest extends FormRequest
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
            'id' => 'required|exists:news,id',
            'name' => 'required|max:50|min:6',
            'avatar' => 'required',
            'description' => 'required|max:1000|min:20',
            'keyword' => 'required',
            'content' => 'required|min:100',
            'is_open' => 'required',
            'newcategory_id' => 'required'
        ];
    }

    public function attribute()
    {
        return [
            'name' => 'Tên tin tức',
            'avatar' => 'Hình ảnh',
            'description' => 'Mô tả',
            'keyword' => 'Từ khóa',
            'content' => 'Nội dụng',
            'is_open' => 'Tình trạng',
            'user_id' => 'Mã người dùng',
            'newcategory_id' => 'Mã tin tức'
        ];
    }
}
