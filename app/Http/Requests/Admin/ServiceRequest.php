<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ServiceRequest extends FormRequest
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
        $rules = [
            'en.name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('service_translations', 'name')
                    ->ignore($this->service ? $this->service->id : null, 'service_id')
                    ->where('locale', 'en')
            ],
            'ar.name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('service_translations', 'name')
                    ->ignore($this->service ? $this->service->id : null, 'service_id')
                    ->where('locale', 'ar')
            ],

            'en.description' => 'required|string',
            'ar.description' => 'required|string',
            'en.unit_of_price' => 'required|string',
            'ar.unit_of_price' => 'required|string',
        ];

        // Only require 'icon' for store requests (POST method)
        if ($this->isMethod('post')) {
            $rules['icon'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        } else {
            $rules['icon'] = 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'en.name' => __('forms.en_name'),
            'ar.name' => __('forms.ar_name'),
            'en.description' => __('forms.en_description'),
            'ar.description' => __('forms.ar_description'),
            'en.unit_of_price' => __('forms.en_unit_of_price'),
            'ar.unit_of_price' => __('forms.ar_unit_of_price'),
            'icon' => __('forms.service_icon'),
        ];
    }
}
