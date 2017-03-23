<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DangKiSinhVienRequest extends FormRequest
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
            'txtTenSV'=>'required',
            'txtMssv'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'txtTenSV.required' => 'Vui lòng nhập tên Sinh Viên',
            
            'txtMssv.required'=>'Vui lòng nhập mssv',
            
        ];
    }
}
