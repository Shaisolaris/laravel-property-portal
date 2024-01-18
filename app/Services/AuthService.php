<?php

namespace App\Services;

use Throwable;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Arr;
use App\Enums\User\UserRoleEnum;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    /**
     * @throws Throwable
     */
    public function createUser(array $data)
    {
        DB::beginTransaction();

        try {
            $data['password'] = Hash::make($data['password']);

            $user = User::create($data);
            $user->assignRole($this->initialUserRole($data));

            $this->updateOrCreateNotificationSettings($user);

            DB::commit();

            return $user;
        } catch (\Exception $exception) {
            DB::rollBack();

            return null;
        }
    }


    private function initialUserRole($input): \Spatie\Permission\Models\Role
    {
        return Role::whereName(
            $input['role'] !== UserRoleEnum::Organizer()->value
                ? $input['role'] . "_" . $input['educational_level']
                : $input['role']
        )->first();
    }


    private function updateOrCreateNotificationSettings(User $user): void
    {
        $data = [
            'notification_settings' => ["classes" => false, "schedule" => false, "assignments" => false, "mentors" => false]
        ];

        if ($user->hasRole([UserRoleEnum::StudentAcademy()->value])) {
            $data['notification_settings'] = Arr::renameKey($data['notification_settings'], 'classes', 'courses');
        }

        if ($user->hasRole([UserRoleEnum::InstructorAcademy()->value])) {
            $data = [
                'notification_settings' => ["payments" => false, "courses" => false, "schedule" => false, "assignments" => false]
            ];
        }

        if ($user->hasRole([UserRoleEnum::InstructorSchool()->value])) {
            $data = [
                'notification_settings' => ["payments" => false, "classes" => false, "schedule" => false, "quizzes" => false, "assignments" => false]
            ];
        }

        $user->settings()->updateOrCreate(['user_id' => $user->id], $data);
    }
}
