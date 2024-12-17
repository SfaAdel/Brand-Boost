<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FieldRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $fieldId = $this->route('field') ? $this->route('field')->id : null; // Get job title ID if updating

        $rules = [
            'en.name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('job_title_translations', 'name')
                    ->ignore($fieldId, 'job_title_id')
                    ->where('locale', 'en')
            ],
            'ar.name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('job_title_translations', 'name')
                    ->ignore($fieldId, 'job_title_id')
                    ->where('locale', 'ar')
            ],
            'type' => [
                'required',
                Rule::in(['business_owner', 'freelancer', 'both']),
            ],
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
            'type' => __('forms.type'),
            'icon' => __('forms.icon'),

        ];
    }
}
