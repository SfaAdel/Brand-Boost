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

        $titleId = optional($this->route('title'))->id;

        return [
            //
            'title' => [
                'required',
                'string',
                'min:3',
                Rule::unique('titles', 'title')->ignore($titleId),
            ],
            'short_description' => 'required|string|min:3',

            'section' => [
                'required',
                'string',
                Rule::unique('titles', 'section')->ignore($titleId),
            ],
            'icon' => 'image|mimes:jpeg,png,bmp,gif,jpg,svg,webp|max:10240',
            'banner' => 'image|mimes:jpeg,png,bmp,gif,jpg,svg,webp|max:10240',

        ];
    }
    public function attributes()
    {
        return [
            'title' => ' العنوان',
            'short_description' => 'وصف قصير',
            'section' => 'القسم',
            'icon' => 'صورة',
            'banner' => 'صورة البانر',

        ];
    }
}
