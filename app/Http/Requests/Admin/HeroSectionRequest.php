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
        $heroSectionId = $this->route('hero_section') ? $this->route('hero_section')->id : null; // Get job title ID if updating

        $rules = [
            'en.h1' => [
                'required',
                'string',
                'max:255',
                Rule::unique('hero_section_translations', 'h1')
                    ->ignore($heroSectionId, 'hero_section_id')
                    ->where('locale', 'en')
            ],
            'ar.h1' => [
                'required',
                'string',
                'max:255',
                Rule::unique('hero_section_translations', 'h1')
                    ->ignore($heroSectionId, 'hero_section_id')
                    ->where('locale', 'ar')
            ],

            'en.h2' => [
                'required',
                'string',
                'max:255',
                Rule::unique('hero_section_translations', 'h2')
                    ->ignore($heroSectionId, 'hero_section_id')
                    ->where('locale', 'en')
            ],
            'ar.h2' => [
                'required',
                'string',
                'max:255',
                Rule::unique('hero_section_translations', 'h2')
                    ->ignore($heroSectionId, 'hero_section_id')
                    ->where('locale', 'ar')
            ],

            'en.p' => [
                'required',
                'string',
                'max:255',
                Rule::unique('hero_section_translations', 'p')
                    ->ignore($heroSectionId, 'hero_section_id')
                    ->where('locale', 'en')
            ],
            'ar.p' => [
                'required',
                'string',
                'max:255',
                Rule::unique('hero_section_translations', 'p')
                    ->ignore($heroSectionId, 'hero_section_id')
                    ->where('locale', 'ar')
            ],

        ];

        return $rules;
    }

    public function attributes()
    {
        return [
            'en.h1' => 'h1 [En]',
            'en.h2' => 'h2 [En]',
            'en.p' =>'p [En]',

            'ar.h1' => 'h1 [Ar]',
            'ar.h2' => 'h2 [Ar]',
            'ar.p' =>'p [Ar]',
        ];
    }
}
