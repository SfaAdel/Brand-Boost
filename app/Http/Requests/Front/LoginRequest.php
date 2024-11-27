<?php
namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'phone' => ['required', 'string'],
            'password' => ['required', 'string'],
        ];
    }

    public function authenticate()
    {
        $credentials = $this->only('phone', 'password');

        if (!Auth::guard('customer')->attempt($credentials, $this->filled('remember'))) {
            throw ValidationException::withMessages([
                'phone' => [trans('auth.failed')],
            ]);
        }

        // Retrieve the authenticated customer
        $customer = Auth::guard('customer')->user();

        // Check if the customer's phone is verified
        if (!$customer->phone_verified_at) {
            Auth::guard('customer')->logout();
            throw ValidationException::withMessages([
                'phone' => 'لم يتم توثيق هذا الرقم بعد',
            ]);
        }
    }
}
