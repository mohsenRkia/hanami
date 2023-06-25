<?php

namespace Modules\Tour\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuickStoreTourRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'sometimes|max:125',
            'description' => 'sometimes|max:125'
        ];
    }

    public function messages()
    {
        return [
            'name.max' => 'تعداد حرف عنوان بیشتر از حد مجاز',
            'description.max' => 'تعداد حرف توضیحات بیشتر از حد مجاز',
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
