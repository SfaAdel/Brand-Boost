<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class HeroSectionRequest extends FormRequest
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
        $heroSectionId = $this->route('hero_sections') ? $this->route('hero_sections')->id : null; // Get job title ID if updating

        $rules = [
            'en.h11' => [
                'nullable',
                'string',
                'max:255',
                // Rule::unique('hero_section_translations', 'h1')
                //     ->ignore($heroSectionId, 'hero_section_id')
                //     ->where('locale', 'en')
            ],
            'ar.h11' => [
                'nullable',
                'string',
                'max:255',
                // Rule::unique('hero_section_translations', 'h1')
                //     ->ignore($heroSectionId, 'hero_section_id')
                //     ->where('locale', 'ar')
            ],

            'en.h21' => [
                'required',
                'string',
                'max:255',
                // Rule::unique('hero_section_translations', 'h2')
                //     ->ignore($heroSectionId, 'hero_section_id')
                //     ->where('locale', 'en')
            ],
            'ar.h21' => [
                'required',
                'string',
                'max:255',
                // Rule::unique('hero_section_translations', 'h2')
                //     ->ignore($heroSectionId, 'hero_section_id')
                //     ->where('locale', 'ar')
            ],

            'en.h12' => [
                'nullable',
                'string',
                'max:255',
                // Rule::unique('hero_section_translations', 'h1')
                //     ->ignore($heroSectionId, 'hero_section_id')
                //     ->where('locale', 'en')
            ],
            'ar.h12' => [
                'nullable',
                'string',
                'max:255',
                // Rule::unique('hero_section_translations', 'h1')
                //     ->ignore($heroSectionId, 'hero_section_id')
                //     ->where('locale', 'ar')
            ],

            'en.h22' => [
                'required',
                'string',
                'max:255',
                // Rule::unique('hero_section_translations', 'h2')
                //     ->ignore($heroSectionId, 'hero_section_id')
                //     ->where('locale', 'en')
            ],
            'ar.h22' => [
                'required',
                'string',
                'max:255',
                // Rule::unique('hero_section_translations', 'h2')
                //     ->ignore($heroSectionId, 'hero_section_id')
                //     ->where('locale', 'ar')
            ],


            'en.h13' => [
                'nullable',
                'string',
                'max:255',
                // Rule::unique('hero_section_translations', 'h1')
                //     ->ignore($heroSectionId, 'hero_section_id')
                //     ->where('locale', 'en')
            ],
            'ar.h13' => [
                'nullable',
                'string',
                'max:255',
                // Rule::unique('hero_section_translations', 'h1')
                //     ->ignore($heroSectionId, 'hero_section_id')
                //     ->where('locale', 'ar')
            ],

            'en.h23' => [
                'required',
                'string',
                'max:255',
                // Rule::unique('hero_section_translations', 'h2')
                //     ->ignore($heroSectionId, 'hero_section_id')
                //     ->where('locale', 'en')
            ],
            'ar.h23' => [
                'required',
                'string',
                'max:255',
                // Rule::unique('hero_section_translations', 'h2')
                //     ->ignore($heroSectionId, 'hero_section_id')
                //     ->where('locale', 'ar')
            ],


            'en.p' => [
                'nullable',
                'string',
                'max:255',
                // Rule::unique('hero_section_translations', 'p')
                //     ->ignore($heroSectionId, 'hero_section_id')
                //     ->where('locale', 'en')
            ],
            'ar.p' => [
                'nullable',
                'string',
                'max:255',
                // Rule::unique('hero_section_translations', 'p')
                //     ->ignore($heroSectionId, 'hero_section_id')
                //     ->where('locale', 'ar')
            ],

        ];

        return $rules;
    }

    public function attributes()
    {
        return [
            'en.h11' => 'h1 [En]',
            'en.h21' => 'h2 [En]',
            'en.p' =>'p [En]',

            'ar.h11' => 'h1 [Ar]',
            'ar.h21' => 'h2 [Ar]',
            'ar.p' =>'p [Ar]',

            'en.h12' => 'h1 [En]',
            'en.h22' => 'h2 [En]',

            'ar.h12' => 'h1 [Ar]',
            'ar.h22' => 'h2 [Ar]',

            'en.h13' => 'h1 [En]',
            'en.h23' => 'h2 [En]',

            'ar.h13' => 'h1 [Ar]',
            'ar.h23' => 'h2 [Ar]',
        ];
    }
}
