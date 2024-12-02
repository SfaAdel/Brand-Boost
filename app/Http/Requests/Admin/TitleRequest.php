<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TitleRequest extends FormRequest
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

        $titleId = $this->title ? $this->title->id : null;

        $rules = [
            'en.title' => [
                'required',
                'string',
                'min:3',
                Rule::unique('title_translations', 'title')
                    ->ignore($titleId, 'title_id')
                    ->where('locale', 'en'),
            ],
            'ar.title' => [
                'required',
                'string',
                'min:3',
                Rule::unique('title_translations', 'title')
                    ->ignore($titleId, 'title_id')
                    ->where('locale', 'ar'),
            ],
            'en.short_description' => 'required|string|min:5',
            'ar.short_description' => 'required|string|min:5',

            'en.long_description' => 'required|string|min:10',
            'ar.long_description' => 'required|string|min:10',

            'section' => [
                'required',
                'string',
                Rule::unique('titles', 'section')->ignore($titleId),
            ],

            // Only require 'icon' and 'banner' for store requests (POST method)
            'icon' => $this->isMethod('post')
                ? 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240'
                : 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240',
            'banner' => $this->isMethod('post')
                ? 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240'
                : 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240',
        ];

        return $rules;
    }

    /**
     * Custom attribute names for validation errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'en.title' => __('forms.en_title'),
            'ar.title' => __('forms.ar_title'),
            'en.short_description' => __('forms.en_short_description'),
            'ar.short_description' => __('forms.ar_short_description'),
            'en.long_description' => __('forms.en_long_description'),
            'ar.long_description' => __('forms.ar_long_description'),
            'section' => __('forms.section'),
            'icon' => __('forms.icon'),
            'banner' => __('forms.banner'),
        ];
    }
}