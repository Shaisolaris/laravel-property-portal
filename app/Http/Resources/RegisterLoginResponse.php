<?php

namespace App\Http\Resources;

use App\Enums\User\UserRoleEnum;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\RedirectResponse;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class RegisterLoginResponse implements LoginResponseContract
{
    public function toResponse($request): RedirectResponse
    {
        $user = $request->user();

        if ($user->hasRole(UserRoleEnum::adminRoles())) {
            return redirect()->route('admin.dashboard');
        }

        if (!$user->hasRole(UserRoleEnum::adminRoles())) {
            URL::defaults(['institution' => $user->institution_type, 'role' => $user->role_name]);
        }

        return redirect()->route('general.dashboard');
    }
}
