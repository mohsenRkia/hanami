<?php

namespace Modules\Tour\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourDestinationsStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
//            'keys' => 'required|array',
//            'keys.*.destination_period' => 'required|int',
//            'keys.*.city_id' => 'required|int',
        ];
    }

    public function messages()
    {
        return [
            'key.required' => 'مقدار ورودی اجباریست',
            'keys.*.destination_period.required' => 'مدت اقامت اشتباه است',
            'keys.*.destination_period.int' => 'مدت اقامت اشتباه است',
            'keys.*.city_id.required' => 'مقدار شهر اشتباه است',
            'keys.*.city_id.int' => 'مقدار شهر اشتباه است',
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
