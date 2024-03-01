<?php

namespace Modules\Admin\app\Http\Requests\Profile;

use App\Models\Country;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 *
 * @property-read string $first_name
 * @property-read string $last_name
 * @property-read string $address
 * @property-read string $country_id
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
            'country_id'       => ['required', 'integer', Rule::exists(Country::class, 'id')],
            'state'            => ['nullable', 'string', 'max:255'],
            'city'             => ['required', 'string', 'max:255'],
            'phone'            => ['nullable', 'string', 'max:255'],
            'bio'              => ['nullable', 'string'],
        ];
    }

    public function attributes()
    {
        return [
            'country_id' => 'country',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
