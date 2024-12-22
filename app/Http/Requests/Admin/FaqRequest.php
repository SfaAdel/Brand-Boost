<?php

namespace App\Http\Requests\Admin;
use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
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
        $faqId = $this->route('faq') ? $this->route('faq')->id : null; // Get job title ID if updating

        $rules = [
            'en.question' => [
                'required',
                'string',
                'max:255',
                Rule::unique('faq_translations', 'question')
                    ->ignore($faqId, 'faq_id')
                    ->where('locale', 'en')
            ],
            'ar.question' => [
                'required',
                'string',
                'max:255',
                Rule::unique('faq_translations', 'question')
                    ->ignore($faqId, 'faq_id')
                    ->where('locale', 'ar')
            ],

            'en.answer' => [
                'required',
                'string',
                'max:255',
                Rule::unique('faq_translations', 'answer')
                    ->ignore($faqId, 'faq_id')
                    ->where('locale', 'en')
            ],
            'ar.answer' => [
                'required',
                'string',
                'max:255',
                Rule::unique('faq_translations', 'answer')
                    ->ignore($faqId, 'faq_id')
                    ->where('locale', 'ar')
            ],

        ];

        return $rules;
    }

    public function attributes()
    {
        return [
            'en.question' => __('forms.en_question'),
            'ar.question' => __('forms.ar_question'),

            'en.answer' => __('forms.en_answer'),
            'ar.answer' => __('forms.ar_answer'),
        ];
    }
}
