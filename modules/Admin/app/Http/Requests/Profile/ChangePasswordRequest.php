<?php

namespace Modules\Admin\app\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

/**
 *
 * @property-read string $current_password
 * @property-read string $new_password
 * @property-read string $new_password_confirmation
 *
 */
class ChangePasswordRequest extends FormRequest
{
    public function rules(): array
    {

        return [

            'current_password' => ['required', 'string', 'current_password'],
            'new_password'     => ['required', 'string', 'confirmed', Password::default()],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
