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
            'txtUsername' => 'required|unique:company,username',
            'txtPass'=>'required',
            'txtName'=>'required',
            'txtAddress'=>'required',
            'txtEmail'=>'required',
            'txtPhone'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'txtUsername.required' => 'Vui lòng nhập tên Đăng Nhập',
            'txtUsername.unique'  => 'Tên đăng nhập đã tồn tại',
            'txtPass.required'=>'Vui lòng nhập password',
            'txtName.required'=>'Vui lòng nhập tên công ty',
            'txtAddress.required'=>'Vui lòng nhập địa chỉ',
            'txtEmail.required'=>'Vui lòng nhập Email',
            'txtPhone.required'=>'Vui lòng nhập số điện thoại'

        ];
    }
}
