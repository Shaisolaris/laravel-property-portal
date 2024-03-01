<?php

namespace Modules\Admin\app\Http\Requests\User;

use App\Models\Country;
use App\Models\Role;
use App\Models\User;
use Closure;
use Illuminate\Database\Eloquent\Builder;
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

        $institutionRequired = !$user && in_array($this->role_name, [
            UserRoleEnum::Student()->value,
            UserRoleEnum::Instructor()->value,
            UserRoleEnum::Organizer()->value,
            ]);

        return [
            'email' => ['nullable', 'email', 'max:255', !$user ? Rule::unique(User::class, 'email') : ''],
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'gender' => ['required', 'string', Rule::in(UserGenderEnum::toValues())],
            'address' => ['required', 'string', 'max:255'],
            'country_id' => ['required', 'integer', 'exists:countries,id'],
            'state' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'status' => ['nullable', 'string', Rule::in(UserStatusEnum::toValues())],
            'bio' => ['nullable', 'string'],
            'role_name' => ['required', 'string', Rule::exists(Role::class, 'name')],
            'institution_uuid' => ['nullable', 'string', Rule::requiredIf($institutionRequired), Rule::exists(EducationInstitution::class, 'uuid')],
//            'organizer_uuid'                => [
//                'required',
//                'string',
//                Rule::exists(User::class, 'uuid'),
//                function (string $attribute, string $uuid, Closure $fail) {
////                    $user = User::query()->where('uuid', $uuid);
//
//                    $currentInstitution = $this->route('institution');
//                    $institution = EducationInstitution::query()
//                        ->whereHas('organizers', function ($query) use ($uuid) {
//                            /** @var Builder|User $query */
//                            $query->where('users.uuid', $uuid);
//                        })
//                        ->first();
//
//                    if ($currentInstitution && $institution && $currentInstitution->id != $institution->id) {
//                        $fail("Already is an organizer.");
//                    }
//                },
//            ],
        ];
    }

    public function attributes()
    {
        return [
            'country_id' => 'country',
            'institution_uuid' => 'institution',
            'role_name' => 'role',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
