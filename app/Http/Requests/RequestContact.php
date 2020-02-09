<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestContact extends FormRequest
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
            'c_name' => 'required|unique:contacts,c_name,'.$this->id,
            'c_email' => 'required',
            'c_content' => 'required',
            'c_title' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'c_name.required' => 'Trường này không được để trống',
            'c_name.unique' => 'Tên bài viết đã tồn tại',
            'c_email.required' => 'Trường này không được để trống',
            'c_content.required' => 'Trường này không được để trống',
            'c_title.required' => 'Trường này không được để trống'
        ];
    }
}
