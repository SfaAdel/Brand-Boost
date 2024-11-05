<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:3',
            'email' => 'required|string|email|unique:admins,email,'.optional($this->admin)->id,
            // 'password' => $this->method() === 'POST' ? 'required|string|min:6|' : '',
            'password' => 'required|string|confirmed|min:8',
            'role' => 'required|in:admin,super_admin,data_entry',
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => 'الاسم',
            'email' => 'البريد الالكتروني',
            'password' => 'كلمة المرور',
        ];
    }
}
