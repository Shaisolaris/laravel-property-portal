<?php

namespace App\Http\Requests\UserSetting;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserEmailPasswordRequest extends FormRequest
{
    public function rules(): array
    {
        if ($this->request->has('email')) {
            return [
                'email' => [
                    'required',
                    'max:40',
                    'email',
                    'email:rfc,dns',
                    Rule::unique('users')->ignore(auth()->id())
                ],
            ];
        }

        return [
            'current_password' => 'required|current_password|string|min:8|max:32',
            'new_password' => 'required|different:current_password|string|min:8|max:32|confirmed',
            'new_password_confirmation' => 'required|string|min:8|max:32',
        ];
    }


    public function authorize(): bool
    {
        return true;
    }
}
