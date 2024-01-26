<?php

namespace App\Actions\Fortify;

use App\Models\EducationInstitutionList;
use Illuminate\Support\Str;
use Throwable;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Arr;
use App\Enums\User\UserRoleEnum;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use App\Enums\EducationInstitutions\EducationInstitutionsEnum;

class CreateNewUser implements CreatesNewUsers
{
    /**
     * @throws ValidationException
     * @throws Throwable
     */
    public function create(array $input): ?User
    {
        DB::beginTransaction();

        try {
            $input['password'] = $this->hashedPassword($input);
            //TODO:: почему статус на регистрации становится active, а не pending или review?
            $input['status'] = 'active'; // TODO::

            $user = User::create($input);

            $institution = EducationInstitutionList::find($input['institution_id']);

            $user->assignRole($this->initialUserRole($input));

            $institution->peoples()->attach($user->id);

//            $user->createOrGetStripeCustomer();
            $this->updateOrCreateNotificationSettings($user, $institution);

            DB::commit();

            return $user;
        } catch (\Exception $exception) {
            DB::rollBack();
            return null;
        }
    }

    public function continue($user, $data): void
    {
        $data['password'] = $this->hashedPassword($data);
        $user->update($data);
    }

    private function initialUserRole($input): \Spatie\Permission\Models\Role
    {
        return Role::whereName($input['role'])->first();
    }

    private function updateOrCreateNotificationSettings(User $user, EducationInstitutionList $institutionList): void
    {
        $data = [];

        if ($user->hasRole(UserRoleEnum::Student()->value)) {
            $data = [
                'notification_settings' => ["schedule" => false, "assignments" => false, "mentors" => false]
            ];
        }

        if ($user->hasRole(UserRoleEnum::Instructor()->value)) {
            $data = [
                'notification_settings' => ["payments" => false, "courses" => false, "schedule" => false, "assignments" => false]
            ];
        }

        if (Str::lower($institutionList->institution()->value('name')) === EducationInstitutionsEnum::School()->value) {
            switch ($user->roleName) {
                case UserRoleEnum::Student()->value:
                    $data['notification_settings'] = Arr::renameKey($data['notification_settings'], 'classes', 'courses');
                    break;
                case UserRoleEnum::Instructor()->value:
                    $data['notification_settings']['quizzes'] = false;
                    break;
            }
        }

        $user->settings()->updateOrCreate(['user_id' => $user->id], $data);
    }


    private function hashedPassword($input): string
    {
        return Hash::make($input['password']);
    }
}
