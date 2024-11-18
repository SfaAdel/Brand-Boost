<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TagRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Allow the request to proceed
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $tagId = $this->route('tag') ? $this->route('tag')->id : null; // Get job title ID if updating

        $rules = [
            'en.name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('job_title_translations', 'name')
                    ->ignore($tagId, 'job_title_id')
                    ->where('locale', 'en')
            ],
            'ar.name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('job_title_translations', 'name')
                    ->ignore($tagId, 'job_title_id')
                    ->where('locale', 'ar')
            ],
        ];

        return $rules;
    }

    public function attributes()
    {
        return [
            'en.name' => __('forms.en_name'),
            'ar.name' => __('forms.ar_name'),
        ];
    }
}