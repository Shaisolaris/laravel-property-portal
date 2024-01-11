<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;


    public function create(array $input): User
    {
        Validator::make($input, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'timezone' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'phone' => [$input['phone'] ? 'max:16' : 'null'],
            'email' => 'required|string|max:40|email|email:rfc,dns|unique:users',
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create($input);
    }
}
