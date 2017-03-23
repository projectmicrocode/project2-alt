<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'username' => 'required|unique:company,username',
            'password'=>'required',
            'company'=>'required',
            'txtAddress'=>'required',
            'txtEmail'=>'required',
            'txtPhone'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'username.required' => 'Vui lòng nhập tên Đăng Nhập',
            'username.unique'  => 'Tên đăng nhập đã tồn tại',
            'password.required'=>'Vui lòng nhập password',
            'company.required'=>'Vui lòng nhập tên công ty',
            'txtAddress.required'=>'Vui lòng nhập địa chỉ',
            'txtEmail.required'=>'Vui lòng nhập Email',
            'txtPhone.required'=>'Vui lòng nhập số điện thoại'

        ];
    }
}
