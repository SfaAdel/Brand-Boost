<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Rules\NotEmailOrPhone;

class FreelancerProjectRequest extends FormRequest
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
        $projectId = $this->route('id');

        $rules = [
            'en.title' => [
                'required',
                'string',
                'min:3',
                'max:32',
                new NotEmailOrPhone,
            ],
            'ar.title' => [
                'required',
                'string',
                'min:3',
                'max:32',
                new NotEmailOrPhone,
            ],
            'ar.description' => [
                'nullable',
                'min:10',
                new NotEmailOrPhone,
            ],
            'en.description' => [
                'nullable',
                'min:10',
                new NotEmailOrPhone,
            ],


            // Only require 'icon' and 'banner' for store requests (POST method)
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240',
        ];

        if ($this->isMethod('post')) {
            $rules['video'] = 'required|mimes:mp4,mov,avi,wmv';
        } else {
            $rules['video'] = 'nullable|mimes:mp4,mov,avi,wmv';;
        }

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
            'en.description' => __('forms.en_description'),
            'ar.description' => __('forms.ar_description'),
            'image' => __('forms.image'),
            'video' => __('forms.video'),
        ];
    }
}
