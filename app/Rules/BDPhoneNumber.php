<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class BDPhoneNumber implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $pattern = '/(^(\+8801|8801|01|008801))[1-9]{1}(\d){8}$/';
        if (empty($value) && preg_match($pattern, $value)) {
            $fail('The :attribute number is not valid. Please enter a valid Bangladeshi phone number.');
        } elseif (strlen($value) != 11) {
            $fail('The :attribute number length is less than 11.');
        }
    }
}
