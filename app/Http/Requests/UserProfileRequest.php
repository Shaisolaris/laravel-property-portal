<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserProfileRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'uuid' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required'],
            'first_name' => ['required'],
            'last_name' => ['required'],
            'profile_photo_path' => ['nullable'],
            'address' => ['required'],
            'country' => ['required'],
            'state' => ['required'],
            'city' => ['required'],
            'timezone' => ['nullable'],
            'phone' => ['nullable'],
            'two_factor_secret' => ['nullable'],
            'two_factor_recovery_codes' => ['nullable'],
            'birth_at' => ['nullable'],
            'email_verified_at' => ['nullable', 'date'],
            'remember_token' => ['nullable'],
            'bio' => ['nullable'],
            'two_factor_confirmed_at' => ['nullable', 'date'],
            'registerMediaConversionsUsingModelInstance' => ['boolean'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
