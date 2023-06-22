<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormContactUsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'firstname' => 'required',
            'lastname' => 'required',
            'mobile' => 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'firstname.required' => 'فیلد نام اجباری می باشد',
            'lastname.required' => 'فیلد نام خانوادگی اجباری می باشد',
            'mobile.required' => 'فیلد شماره تماس اجباری می باشد',
            'mobile.numeric' => 'فیلد شماره تماس را با فرمت درست وارد کنید',
        ];
    }
}
