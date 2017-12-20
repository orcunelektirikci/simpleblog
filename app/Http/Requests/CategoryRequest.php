<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            //
            'category'=>'required|min:3|max:35'
        ];
    }

    public function messages()
    {
        return [
            //
            'category.required'=>'Kategori boş bırakılamaz',
            'category.max'=>'Kategori 35 karakterden fazla olamaz',
            'category.min'=>'Kategori 3 karakterden az olamaz'
        ];
    }
}
