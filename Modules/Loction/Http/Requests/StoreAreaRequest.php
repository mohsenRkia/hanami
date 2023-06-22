<?php

namespace Modules\Loction\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAreaRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_fa' => 'required|min:3|max:125',
            'name_en' => 'required|min:3|max:125'
        ];
    }
    public function messages()
    {
        return [
            'name_fa.required' => 'فیلد نام فارسی نقش اجباری',
            'name_fa.min' => 'تعداد حرف نام فارسی نقش کمتر از حد مجاز',
            'name_fa.max' => 'تعداد حرف نام فارسی نقش بیشتر از حد مجاز',
            'name_en.required' => 'فیلد نام انگلیسی نقش اجباری',
            'name_en.min' => 'تعداد حرف نام انگلیسی نقش کمتر از حد مجاز',
            'name_en.max' => 'تعداد حرف نام انگلیسی نقش بیشتر از حد مجاز',
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
