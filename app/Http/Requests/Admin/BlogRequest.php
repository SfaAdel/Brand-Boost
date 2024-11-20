<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BlogRequest extends FormRequest
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

      



            'en.main_title' => [
                'required',
                'string',
                'min:3',
                Rule::unique('blog_translations', 'main_title')
                    ->ignore($this->blog ? $this->blog->id : null, 'blog_id')
                    ->where('locale', 'en')
            ],
            'ar.main_title' => [
                'required',
                'string',
                'min:3',
                Rule::unique('blog_translations', 'main_title')
                    ->ignore($this->blog ? $this->blog->id : null, 'blog_id')
                    ->where('locale', 'ar')
            ],

            'tags' => 'array|required',
            'tags.*' => 'exists:tags,id',

            'en.short_description' => 'required|string|min:10',
            'ar.short_description' => 'required|string|min:10',

            'en.long_description' => 'required|string|min:10',
            'ar.long_description' => 'required|string|min:10',
        
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
            'en.short_description' => __('forms.en_short_description'),
            'ar.short_description' => __('forms.ar_short_description'),
            'en.long_description' => __('forms.en_long_description'),
            'ar.long_description' => __('forms.ar_long_description'),
            'icon' => __('forms.blog_icon'),
            'tag' => __('forms.tag'),
        ];
    }
}
