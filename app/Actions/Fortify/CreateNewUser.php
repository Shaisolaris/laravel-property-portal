<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Enums\User\UserRoleEnum;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;


    /**
     * @throws ValidationException
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'country' => 'required|max:255',
            'state' => 'required|max:255',
            'role' => 'required',
            'timezone' => 'required',
            'educational_level' => 'required',
            'city' => 'required|string|max:255',
            'zip_code' => 'required|string|max:255',
            'phone' => [$input['phone'] ? 'max:16' : 'nullable'],
            'email' => 'required|string|max:40|email|email:rfc,dns|unique:users',
            'password' => $this->passwordRules(),
        ])->validate();

        $role = Role::whereName($input['role'] !== UserRoleEnum::Organizer()->value
            ? $input['role'] . "_" . $input['educational_type']
            : $input['role']
        )->first();

        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($role);

        return $user;
    }
}
