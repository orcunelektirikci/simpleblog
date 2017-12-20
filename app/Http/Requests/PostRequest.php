<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'=>'required|min:5|max:100',
            'body'=>'required',

        ];

    }

    public function messages()
    {
        return [
          'title.required'=>'Başlık boş bırakılamaz!',
          'title.max'=>'Başlık 150 karakterden fazla olamaz!',
            'title.min'=>'Başlık 5 karakterden az olamaz!',
            'body.required'=>'Gönderi metni girmelisiniz!'
        ];
    }
}
