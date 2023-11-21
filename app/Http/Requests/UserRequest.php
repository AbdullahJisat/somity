<?php

namespace App\Http\Requests;

use App\Rules\BDPhoneNumber;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            "email" => "required|unique:users,email",
            'nid' => "required|string|unique:users,nid",
            'phone' => ['required', new BDPhoneNumber, 'unique:users,phone'],
        ];

        if ($this->isMethod('POST') || $this->isMethod('PATCH')) {
            $rules["email"] = "required|unique:users,email," . $this->id;
            $rules["nid"] = "required|unique:users,nid," . $this->id;
            $rules["phone"] = "required|unique:users,phone," . $this->id;
        }

        return $rules;
    }
}
