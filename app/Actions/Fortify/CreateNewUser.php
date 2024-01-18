<?php

namespace App\Actions\Fortify;

use Throwable;
use App\Models\Role;
use App\Models\User;
use App\Services\AuthService;
use App\Enums\User\UserRoleEnum;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    public function __construct(protected AuthService $authService)
    {
    }


    /**
     * @throws ValidationException
     * @throws Throwable
     */
    public function create(array $input): ?User
    {
        return $this->authService->createUser($input);
    }
}
