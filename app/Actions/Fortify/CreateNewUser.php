<?php

namespace App\Actions\Fortify;

use Throwable;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Arr;
use App\Enums\User\UserRoleEnum;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;

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

            $user = User::create($input);

            $user->update(['status' => 'active']);
            $user->assignRole($this->initialUserRole($input));

            $this->updateOrCreateNotificationSettings($user);
            $this->createInstitution($user);

            DB::commit();

            return $user;
        } catch (\Exception $exception) {
            DB::rollBack();
            return null;
        }
    }

    public function recreated($user, $data): void
    {
        $data['password'] = $this->hashedPassword($data);
        $user->update($data);
    }

    protected function createInstitution($user)
    {

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

    private function hashedPassword($input): string
    {
        return Hash::make($input['password']);
    }
}
