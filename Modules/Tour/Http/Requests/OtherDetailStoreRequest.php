<?php

namespace Modules\Tour\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OtherDetailStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'key.required' => 'مقدار ورودی اجباریست',
            'key.max' => 'مقدار ورودی نباید بیشتر از 255 کارکتر باشد',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
