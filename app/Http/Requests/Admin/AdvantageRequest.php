<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdvantageRequest extends FormRequest
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
        $rules = [
            'en.title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('advantage_translations', 'title')
                    ->ignore($this->advantage ? $this->advantage->id : null, 'advantage_id')
                    ->where('locale', 'en')
            ],
            'ar.title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('advantage_translations', 'title')
                    ->ignore($this->advantage ? $this->advantage->id : null, 'advantage_id')
                    ->where('locale', 'ar')
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
            'en.title' => __('forms.en_name'),
            'ar.title' => __('forms.ar_name'),
            'icon' => __('forms.icon'),
        ];
    }
}
