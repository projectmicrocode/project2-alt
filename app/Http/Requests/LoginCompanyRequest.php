<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginCompanyRequest extends FormRequest
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
            'txtUsername'=>'required',
            'txtPass'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'txtUsername.required' => 'Vui lòng nhập tên đăng nhập',
            
            'txtPass.required'=>'Vui lòng nhập password'
        ];
    }
}
