<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckUpdateRequest extends FormRequest
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
            // 'ma' => 'required', 
            // 'password' => 'required',
            // 'ho_ten' => 'required', 
            // 'khoa_hoc' => 'required',
            // 'ctdt' => 'required', 
            // 'email' => 'required',

            // 'ma_can_bo' => 'required',
            // 'password' => 'required', 
            // 'ho_ten' => 'required',
            // 'don_vi' => 'required', 
            // 'email' => 'required'            
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
         
        ];
    }
}
