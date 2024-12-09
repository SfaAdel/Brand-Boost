<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\NotEmailOrPhone;

class OrderRequest extends FormRequest
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
            'description' => ['required', 'string', 'min:5', new NotEmailOrPhone],
            'expected_receive_date' => 'required|date|after:today',
            'amount' => 'required|numeric|min:1',
          
        ];
    }
    public function attributes()
    {
        return [
            'description' => __('forms.description'),
            'expected_receive_date' => __('forms.date_of_receipt'),
            'amount' => __('forms.amount'),
      
        ];
    }
}
