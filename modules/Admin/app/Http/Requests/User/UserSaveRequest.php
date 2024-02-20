<?php

namespace Modules\Admin\app\Http\Requests\User;

use App\Models\Role;
use App\Models\User;
use Illuminate\Validation\Rule;
use App\Enums\User\UserRoleEnum;
use App\Enums\User\UserStatusEnum;
use App\Enums\User\UserGenderEnum;
use Illuminate\Foundation\Http\FormRequest;
use Modules\General\app\Models\EducationInstitution;

/**
 *
 * @property-read string $email
 * @property-read string $first_name
 * @property-read string $last_name
 * @property-read string $gender
 * @property-read string $address
 * @property-read string $country
 * @property-read string $state
 * @property-read string $city
 * @property-read string $phone
 * @property-read string $bio
 * @property-read string $role_name
 * @property-read string $institution_uuid
 *
 */
class UserSaveRequest extends FormRequest
{
    public function rules(): array
    {
        $user = $this->route('user');

        $institutionRequired = !$user && in_array($this->role_name, [UserRoleEnum::Student()->value, UserRoleEnum::Instructor()->value]);

        return [
            'email'            => ['nullable', 'string', 'max:255', !$user ? Rule::unique(User::class, 'email') : ''],
            'first_name'       => ['required', 'string', 'max:255'],
            'last_name'        => ['required', 'string', 'max:255'],
            'gender'           => ['required', 'string', Rule::in(UserGenderEnum::toValues())],
            'address'          => ['required', 'string', 'max:255'],
            'country'          => ['required', 'string', 'max:255'],
            'state'            => ['nullable', 'string', 'max:255'],
            'city'             => ['required', 'string', 'max:255'],
            'phone'            => ['nullable', 'string', 'max:255'],
            'status'           => ['nullable', 'string', Rule::in(UserStatusEnum::toValues())],
            'bio'              => ['nullable', 'string'],
            'role_name'        => ['required', 'string', Rule::exists(Role::class, 'name')],
            'institution_uuid' => ['nullable', 'string', Rule::requiredIf($institutionRequired), Rule::exists(EducationInstitution::class, 'uuid')],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
