<?php

namespace App\Actions\Fortify;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Enums\User\UserRoleEnum;
use App\Enums\User\UserStatusEnum;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Modules\General\app\Models\EducationInstitution;
use App\Enums\EducationInstitutions\EducationInstitutionTypeEnum;

class CreateNewUser implements CreatesNewUsers
{
    public function create(array $input): ?User
    {
        DB::beginTransaction();

        try {
            $input['password'] = $this->hashedPassword($input);
            $input['status'] = UserStatusEnum::PreActive()->value;
            $input['ip'] = request()->ip();

            $user = User::create($input);

            $institution = EducationInstitution::find($input['institution_id']);

            $user->assignRole($this->initialUserRole($input));

            $institution->peoples()->attach($user->id);

            if ($user->hasRole(UserRoleEnum::Student()->value)) {
                $user->createOrGetStripeCustomer();
            }

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

    //TODO:: need add organizer settings
    private function updateOrCreateNotificationSettings(User $user, EducationInstitution $institution): void
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

        if ($user->hasRole(UserRoleEnum::Organizer()->value)) {
            $data = [
                'notification_settings' => ["payments" => false]
            ];
        }

        if (Str::lower($institution->institutionType()->value('name')) === EducationInstitutionTypeEnum::School()->value) {
            switch ($user->role_name) {
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
