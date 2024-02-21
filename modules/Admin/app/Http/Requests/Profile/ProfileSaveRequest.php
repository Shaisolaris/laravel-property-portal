<?php

namespace Modules\Admin\app\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

/**
 *
 * @property-read string $first_name
 * @property-read string $last_name
 * @property-read string $address
 * @property-read string $country
 * @property-read string $state
 * @property-read string $city
 * @property-read string $phone
 * @property-read string $bio
 *
 */
class ProfileSaveRequest extends FormRequest
{
    public function rules(): array
    {

        return [

            'first_name'       => ['required', 'string', 'max:255'],
            'last_name'        => ['required', 'string', 'max:255'],
            'address'          => ['required', 'string', 'max:255'],
            'country'          => ['required', 'string', 'max:255'],
            'state'            => ['nullable', 'string', 'max:255'],
            'city'             => ['required', 'string', 'max:255'],
            'phone'            => ['nullable', 'string', 'max:255'],
            'bio'              => ['nullable', 'string'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
