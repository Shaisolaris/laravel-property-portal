<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserProfilePhotoRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'photo' => 'nullable|mimes:jpg,jpeg,png|max:1024'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
