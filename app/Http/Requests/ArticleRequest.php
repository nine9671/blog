<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title'         =>  'required|max:250|min:8|unique:articles,title',
            'category_id'   =>  'required',
            'content'       =>  'required|min:10',
            'tags'          =>  'nullable',
            'image'         =>  'required|image'
        ];
    }
}
