<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|string|min:3',
            'email' => 'required|string|email',
            'phone' => 'required|string|min:10',
            'title' => 'required|string|min:3',
            'message' => 'required|string|min:5',
        ];
    }
    public function attributes()
    {
        return [
            'name' => __('forms.name'),
            'email' => __('forms.email'),
            'phone' => __('forms.phone'),
            'title' => __('forms.message_title'),
            'message' => __('forms.message'),
        ];
    }
}
