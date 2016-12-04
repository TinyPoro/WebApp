<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Route;
class CheckUploadRequest extends FormRequest
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
        $var = \Route::input('file');
        echo "a";
        return [
            // var_dump($this->route);
            'file' => 'required|mimes:xlsx,xls', 
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
          'file.required' => 'bạn chưa chọn file',
          'file.mimes' => ' bạn cần chọn file excel',
          'loai_tai_khoan.required'=>' bạn cần chọn loại tài khoản',
        ];
    }
}
