<?php

namespace Modules\Role\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRoleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:125',
            'name_fa' => 'required|min:3|max:125'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'فیلد نام فارسی نقش اجباری',
            'name.min' => 'تعداد حرف نام فارسی نقش کمتر از حد مجاز',
            'name.max' => 'تعداد حرف نام فارسی نقش بیشتر از حد مجاز',
            'name_fa.required' => 'فیلد نام انگلیسی نقش اجباری',
            'name_fa.min' => 'تعداد حرف نام انگلیسی نقش کمتر از حد مجاز',
            'name_fa.max' => 'تعداد حرف نام انگلیسی نقش بیشتر از حد مجاز',
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
