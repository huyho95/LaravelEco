<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestUser extends FormRequest
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
            'email' => 'required|unique:Users,email',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'You have not entered the name of email yet',
            'email.unique' => 'The name of email have already existed',
        ];
    }
}