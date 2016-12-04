<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckCreateRequest extends FormRequest
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
            'ma' => 'required', 
            'ho_ten' => 'required', 
            'email' => 'required|email',
            'loai_tai_khoan' => 'required' 
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
          'ma.required' => 'bạn chưa nhập mã ',
          'ho_ten.required' => ' bạn cần nhập họ tên',
          'email.required' => ' bạn cần nhập email',
          'email.email' => ' bạn cần nhập đúng dạng email',
          'loai_tai_khoan.required'=>' bạn cần chọn loại tài khoản',
        ];
    }
}
