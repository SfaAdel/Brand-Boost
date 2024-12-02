<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NotEmailOrPhone implements Rule
{
    public function passes($attribute, $value): bool
    {
        // Regular expression to match email and phone numbers
        $emailPattern = '/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}/';
        $phonePattern = '/(\+?\d{1,4}[\s-])?(\(?\d+\)?[\s-]?\d+[\s-]?\d+(\s?\d+)?)/';

        // Check if value matches the pattern for email or phone number
        if (preg_match($emailPattern, $value) || preg_match($phonePattern, $value)) {
            return false; // Return false if email or phone is found in the value
        }

        return true;
    }

    public function message(): string
    {
        return __('validation.no_email_or_phone');
    }
}
