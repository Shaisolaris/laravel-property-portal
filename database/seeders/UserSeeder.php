<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Country;
use Illuminate\Support\Arr;
use App\Enums\LanguageEnum;
use Illuminate\Database\Seeder;
use App\Enums\User\UserRoleEnum;
use App\Enums\User\UserStatusEnum;
use Spatie\Permission\Models\Role;
use App\Enums\User\UserGenderEnum;
use Illuminate\Support\Facades\Hash;
use App\Enums\User\UserPermissionEnum;
use Spatie\Permission\Models\Permission;
use App\Enums\User\UserTeachingLevelEnum;
use App\Enums\EducationInstitutions\EducationInstitutionTypeEnum;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $baseData = [
            'email' => 'admin@gmail.com',
            'first_name' => 'Default',
            'last_name' => 'Admin',
            'address' => 'default',
            'country_id' => Country::inRandomOrder()->value('id'),
            'state' => 'default',
            'bio' => 'default',
            'city' => 'default',
            'zip_code' => 51500,
            'gender' => fake()->randomElement(UserGenderEnum::getLabelsValues())['value'],
            'languages' => fake()->randomElement(LanguageEnum::getLabelsValues())['value'],
            'teaching_level' => fake()->randomElement(UserTeachingLevelEnum::getLabelsValues())['value'],
            'timezone' => 'default',
            'password' => Hash::make('password'),
            'email_verified_at' => Carbon::now(),
            'status' => UserStatusEnum::Active()->value,
        ];

        $admin = User::updateOrCreate(['email' => 'admin@gmail.com'], $baseData);

        $baseData['email'] = 'superAdmin@gmail.com';
        $baseData['first_name'] = 'Super';
        $baseData['last_name'] = 'Admin';
        $superAdmin = User::updateOrCreate(['email' => 'superAdmin@gmail.com'], $baseData);

        /* SCHOOL */

        $baseData['email'] = 'organizerSchool@gmail.com';
        $baseData['first_name'] = 'Organizer';
        $baseData['last_name'] = 'School';
        $organizerSchool = User::updateOrCreate(['email' => 'organizerSchool@gmail.com'], $baseData);

        $baseData['email'] = 'instructorSchool@gmail.com';
        $baseData['first_name'] = 'Instructor';
        $baseData['last_name'] = 'School';
        $instructorSchool = User::updateOrCreate(['email' => 'instructorSchool@gmail.com'], $baseData);

        $baseData['email'] = 'studentSchool@gmail.com';
        $baseData['first_name'] = 'Student';
        $baseData['last_name'] = 'School';
        $studentSchool = User::updateOrCreate(['email' => 'studentSchool@gmail.com'], $baseData);

        /**/


        /* ACADEMY */
        $baseData['email'] = 'organizerAcademy@gmail.com';
        $baseData['first_name'] = 'Organizer';
        $baseData['last_name'] = 'Academy';
        $organizerAcademy = User::updateOrCreate(['email' => 'organizerAcademy@gmail.com'], $baseData);

        $baseData['email'] = 'instructorAcademy@gmail.com';
        $baseData['first_name'] = 'Instructor';
        $baseData['last_name'] = 'Academy';
        $instructorAcademy = User::updateOrCreate(['email' => 'instructorAcademy@gmail.com'], $baseData);

        $baseData['email'] = 'studentAcademy@gmail.com';
        $baseData['first_name'] = 'Student';
        $baseData['last_name'] = 'Academy';
        $studentAcademy = User::updateOrCreate(['email' => 'studentAcademy@gmail.com'], $baseData);
        /**/

        /* ROLES */
        $superAdminRole = Role::updateOrCreate(['name' => UserRoleEnum::SuperAdmin()->value], ['name' => UserRoleEnum::SuperAdmin()->value]);
        $adminRole = Role::updateOrCreate(['name' => UserRoleEnum::Admin()->value], ['name' => UserRoleEnum::Admin()->value]);
        $organizerRole = Role::updateOrCreate(['name' => UserRoleEnum::Organizer()->value], ['name' => UserRoleEnum::Organizer()->value]);
        $studentRole = Role::updateOrCreate(['name' => UserRoleEnum::Student()->value], ['name' => UserRoleEnum::Student()->value]);
        $instructorRole = Role::updateOrCreate(['name' => UserRoleEnum::Instructor()->value], ['name' => UserRoleEnum::Instructor()->value]);
        /**/

        $this->syncPermissionWithSettings($superAdminRole, $superAdmin);
        $this->syncPermissionWithSettings($adminRole, $admin);
        $this->syncPermissionWithSettings($organizerRole, $organizerSchool, EducationInstitutionTypeEnum::School()->value);
        $this->syncPermissionWithSettings($organizerRole, $organizerAcademy, EducationInstitutionTypeEnum::Academy()->value);
        $this->syncPermissionWithSettings($studentRole, $studentSchool, EducationInstitutionTypeEnum::School()->value);
        $this->syncPermissionWithSettings($studentRole, $studentAcademy, EducationInstitutionTypeEnum::Academy()->value);
        $this->syncPermissionWithSettings($instructorRole, $instructorSchool, EducationInstitutionTypeEnum::School()->value);
        $this->syncPermissionWithSettings($instructorRole, $instructorAcademy, EducationInstitutionTypeEnum::Academy()->value);

        $admin->assignRole($adminRole);
        $superAdmin->assignRole($superAdminRole);
        $organizerAcademy->assignRole($organizerRole);
        $organizerSchool->assignRole($organizerRole);
        $studentSchool->assignRole($studentRole);
        $studentAcademy->assignRole($studentRole);
        $instructorSchool->assignRole($instructorRole);
        $instructorAcademy->assignRole($instructorRole);

        $users = User::factory()->count(50)->configured()->create();

        $users->each(function ($user) {
            $this->syncPermissionWithSettings($user->roles->first(), $user, Arr::randStr([EducationInstitutionTypeEnum::School()->value, EducationInstitutionTypeEnum::Academy()->value]));
        });
    }


    private function syncPermissionWithSettings(Role $role, User $user, string $institutionType = ''): void
    {
        switch ($role->name) {
            //            case UserRoleEnum::SuperAdmin()->value:
            //
            //                break;
            //            case UserRoleEnum::Admin()->value:
            //
            //                break;
            case UserRoleEnum::Instructor()->value:
                $permissions = [
                    Permission::updateOrCreate(['name' => UserPermissionEnum::UPDATE_CLASS_SUBJECT], ['name' => UserPermissionEnum::UPDATE_CLASS_SUBJECT]),
                    Permission::updateOrCreate(['name' => UserPermissionEnum::CREATE_CLASS_SUBJECT_SECTION], ['name' => UserPermissionEnum::CREATE_CLASS_SUBJECT_SECTION]),
                    Permission::updateOrCreate(['name' => UserPermissionEnum::UPDATE_CLASS_SUBJECT_SECTION], ['name' => UserPermissionEnum::UPDATE_CLASS_SUBJECT_SECTION]),
                    Permission::updateOrCreate(['name' => UserPermissionEnum::DELETE_CLASS_SUBJECT_SECTION], ['name' => UserPermissionEnum::DELETE_CLASS_SUBJECT_SECTION]),
                ];

                $role->syncPermissions($permissions);

                if ($institutionType === EducationInstitutionTypeEnum::School()->value) {
                    $user->settings()->updateOrCreate(['user_id' => $user->id], ['notification_settings' => ["payments" => false, "classes" => false, "schedule" => false, "assignments" => false, "quizzes" => false]]);
                } else {
                    $user->settings()->updateOrCreate(['user_id' => $user->id], ['notification_settings' => ["payments" => false, "courses" => false, "schedule" => false, "assignments" => false]]);
                }

                break;
            case UserRoleEnum::Student()->value:
                if ($institutionType === EducationInstitutionTypeEnum::School()->value) {
                    $user->settings()->updateOrCreate(['user_id' => $user->id], ['notification_settings' => ["schedule" => false, "classes" => false, "assignments" => false, "mentors" => false]]);
                } else {
                    $user->settings()->updateOrCreate(['user_id' => $user->id], ['notification_settings' => ["schedule" => false, "curses" => false, "assignments" => false, "mentors" => false]]);
                }

                break;
            case UserRoleEnum::Organizer()->value:
                $permissions = [
                    Permission::updateOrCreate(['name' => UserPermissionEnum::CREATE_CLASS], ['name' => UserPermissionEnum::CREATE_CLASS]),
                    Permission::updateOrCreate(['name' => UserPermissionEnum::UPDATE_CLASS], ['name' => UserPermissionEnum::UPDATE_CLASS]),
                    Permission::updateOrCreate(['name' => UserPermissionEnum::DELETE_CLASS], ['name' => UserPermissionEnum::DELETE_CLASS]),
                    Permission::updateOrCreate(['name' => UserPermissionEnum::CREATE_CLASS_SUBJECT], ['name' => UserPermissionEnum::CREATE_CLASS_SUBJECT]),
                    Permission::updateOrCreate(['name' => UserPermissionEnum::UPDATE_CLASS_SUBJECT], ['name' => UserPermissionEnum::UPDATE_CLASS_SUBJECT]),
                    Permission::updateOrCreate(['name' => UserPermissionEnum::DELETE_CLASS_SUBJECT], ['name' => UserPermissionEnum::DELETE_CLASS_SUBJECT]),
                ];

                $role->syncPermissions($permissions);

                if ($institutionType === EducationInstitutionTypeEnum::School()->value) {
                    $user->settings()->updateOrCreate(['user_id' => $user->id], ['notification_settings' => ["schedule" => false, "classes" => false]]);
                } else {
                    $user->settings()->updateOrCreate(['user_id' => $user->id], ['notification_settings' => ["schedule" => false]]);
                }

                break;
        }

        $detail = $user->detail()->updateOrCreate(['user_id' => $user->id], ['extra_information' => 'TEST']);

        $rand = rand(1, 10);
        $user->update(['profile_photo_path' => resource_path("assets/images/users/avatar-$rand.jpg")]);

        if (!$user->hasRole(UserRoleEnum::adminRoles())) {
            $detail->saveMediaFromUrls('https://img.freepik.com/free-photo/forest-landscape_71767-127.jpg', 'detail', [
                'is_business_document' => true,
                'user_id' => auth()->id()
            ]);

            $detail->saveMediaFromUrls('https://img.freepik.com/free-photo/forest-landscape_71767-127.jpg', 'detail', [
                'is_registration_scan' => true,
                'user_id' => auth()->id()
            ]);
        }
    }
}
