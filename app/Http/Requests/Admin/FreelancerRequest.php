<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Rules\NotEmailOrPhone;

class FreelancerRequest extends FormRequest
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
        $freelancerId = $this->freelancer ? $this->freelancer->id : null;

        $rules = [
            'en.name' => [
                'required',
                'string',
                'min:3',
                'max:32',
                new NotEmailOrPhone,
                Rule::unique('freelancer_translations', 'name')
                    ->ignore($freelancerId, 'freelancer_id')
                    ->where('locale', 'en'),
            ],
            'ar.name' => [
                'required',
                'string',
                'min:3',
                'max:32',
                new NotEmailOrPhone,
                Rule::unique('freelancer_translations', 'name')
                    ->ignore($freelancerId, 'freelancer_id')
                    ->where('locale', 'ar'),
            ],
            'ar.bio' => [
                'required',
                'min:5',
                new NotEmailOrPhone,
            ],
            'ar.bio' => [
                'required',
                'min:5',
                new NotEmailOrPhone,
            ],

            'phone' => [
                'required',
                'string',
                'regex:/^01[0-2,5]{1}[0-9]{8}$/', 
                Rule::unique('business_owners', 'phone')->ignore($businessOwnerId),
            ],
            'email' => [
                'required',
                'string',
                'email', 
                Rule::unique('business_owners', 'email')->ignore($businessOwnerId),
            ],

            'password' => $this->method() === 'POST' ? 'required|string|min:6' : 'nullable|string|min:6',
            
            'job_title_id' => 'required|numeric|exists:job_titles,id',
            'date_of_birth' => ['required', 'date', 'before:' . now()->subYears(12)->format('Y-m-d')],


            // Only require 'icon' and 'banner' for store requests (POST method)
            'profile_image' => $this->isMethod('post')
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
            'en.name' => __('forms.en_name'),
            'ar.name' => __('forms.ar_name'),
            'en.bio' => __('forms.bio'),
            'ar.bio' => __('forms.bio'),
            'phone' => __('forms.phone'),
            'email' => __('forms.email'),
            'password' => __('forms.password'),
            'profile_image' => __('forms.icon'),
            'date_of_birth' => __('forms.date_of_birth'),
        ];
    }
}