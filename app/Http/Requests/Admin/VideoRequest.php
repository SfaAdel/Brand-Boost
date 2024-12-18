<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class VideoRequest extends FormRequest
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
        return [
            //
            'video' => 'mimes:mp4,mov,avi,wmv|max:20480',
            'type' => [
                Rule::in(['hero', 'sec1', 'sec2','sec3','sec4']),
            ],
        ];
    }

    public function attributes()
    {
        return [

            'video' => __('forms.video'),
        ];
    }

}
