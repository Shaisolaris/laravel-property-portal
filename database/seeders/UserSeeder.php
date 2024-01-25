<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Enums\User\UserRoleEnum;
use App\Enums\User\UserStatusEnum;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $baseData = [
            'email' => 'admin@gmail.com',
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'address' => 'default',
            'country' => 'default',
            'state' => 'default',
            'city' => 'default',
            'timezone' => 'default',
            'password' => Hash::make('password'),
            'email_verified_at' => Carbon::now(),
            'status' => UserStatusEnum::Active()->value,
        ];


        $admin = User::query()->updateOrCreate(['email' => 'admin@gmail.com'], $baseData);

        $baseData['email'] = 'studentSchool@gmail.com';
        $baseData['first_name'] = 'Student';
        $baseData['last_name'] = 'School';
        $studentSchool = User::query()->updateOrCreate(['email' => 'studentSchool@gmail.com'], $baseData);

        $baseData['email'] = 'studentAcademy@gmail.com';
        $baseData['first_name'] = 'Student';
        $baseData['last_name'] = 'Academy';
        $studentAcademy = User::query()->updateOrCreate(['email' => 'studentAcademy@gmail.com'], $baseData);

        $baseData['email'] = 'instructorSchool@gmail.com';
        $baseData['first_name'] = 'Instructor';
        $baseData['last_name'] = 'Academy';
        $instructorSchool = User::query()->updateOrCreate(['email' => 'instructorSchool@gmail.com'], $baseData);

        $baseData['email'] = 'instructorAcademy@gmail.com';
        $baseData['first_name'] = 'Instructor';
        $baseData['last_name'] = 'Academy';
        $instructorAcademy = User::query()->updateOrCreate(['email' => 'instructorAcademy@gmail.com'], $baseData);

        $baseData['email'] = 'organizer@gmail.com';
        $baseData['first_name'] = 'organizer';
        $baseData['last_name'] = '-';
        $organizer = User::query()->updateOrCreate(['email' => 'organizer@gmail.com'], $baseData);

        $adminRole = Role::updateOrCreate(['name' => UserRoleEnum::Admin()->value], ['name' => UserRoleEnum::Admin()->value]);
        $organizerRole = Role::updateOrCreate(['name' => UserRoleEnum::Organizer()->value], ['name' => UserRoleEnum::Organizer()->value]);
        $studentSchoolRole = Role::updateOrCreate(['name' => UserRoleEnum::Student()->value], ['name' => UserRoleEnum::Student()->value]);
        $studentAcademyRole = Role::updateOrCreate(['name' => UserRoleEnum::Student()->value], ['name' => UserRoleEnum::Student()->value]);
        $instructorSchoolRole = Role::updateOrCreate(['name' => UserRoleEnum::Instructor()->value], ['name' => UserRoleEnum::Instructor()->value]);
        $instructorAcademyRole = Role::updateOrCreate(['name' => UserRoleEnum::Instructor()->value], ['name' => UserRoleEnum::Instructor()->value]);

        $admin->assignRole($adminRole);
        $organizer->assignRole($organizerRole);
        $studentSchool->assignRole($studentSchoolRole);
        $studentAcademy->assignRole($studentAcademyRole);
        $instructorSchool->assignRole($instructorSchoolRole);
        $instructorAcademy->assignRole($instructorAcademyRole);
    }
}
