<?php

namespace App\Actions\Fortify;

use App\Models\Role;
use App\Models\User;
use App\Enums\User\UserRoleEnum;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    /**
     * @throws ValidationException
     */
    public function create(array $input): ?User
    {
        DB::beginTransaction();
        try {

            $input['password'] = Hash::make($input['password']);

            $user = User::create($input);
            $user->assignRole($this->initialUserRole($input));
            //            $user->detail()->updateOrCreate(['user_id' => $user->id]); // TODO:: Нужно добавить таблицу в базу
            $user->settings()->updateOrCreate(['user_id' => $user->id]);

            DB::commit();

            return $user;
        } catch (\Exception $exception) {
            DB::rollBack();
            return null;
        }
    }

    protected function initialUserRole($input)
    {
        // TODO:: я думаю можно найти пример по лучше под запрос из Spatie
        return Role::whereName(
            $input['role'] !== UserRoleEnum::Organizer()->value
                ? $input['role'] . "_" . $input['educational_level']
                : $input['role']
        )->first();
    }
}
