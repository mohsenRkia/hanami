<?php

namespace Modules\Slider\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSliderRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'فیلد عنوان اجباری می باشد.',
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
