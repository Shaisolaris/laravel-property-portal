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
        $studentSchool = User::query()->updateOrCreate(['email' => 'studentSchool@gmail.com'], $baseData);

        $baseData['email'] = 'studentAcademy@gmail.com';
        $studentAcademy = User::query()->updateOrCreate(['email' => 'studentAcademy@gmail.com'], $baseData);

        $baseData['email'] = 'instructorSchool@gmail.com';
        $instructorSchool = User::query()->updateOrCreate(['email' => 'instructorSchool@gmail.com'], $baseData);

        $baseData['email'] = 'instructorAcademy@gmail.com';
        $instructorAcademy = User::query()->updateOrCreate(['email' => 'instructorAcademy@gmail.com'], $baseData);

        $baseData['email'] = 'organizer@gmail.com';
        $organizer = User::query()->updateOrCreate(['email' => 'organizer@gmail.com'], $baseData);


        $adminRole = Role::create(['name' => UserRoleEnum::Admin()->value]);
        $organizerRole = Role::create(['name' => UserRoleEnum::Organizer()->value]);
        $studentSchoolRole = Role::create(['name' => UserRoleEnum::StudentSchool()->value]);
        $studentAcademyRole = Role::create(['name' => UserRoleEnum::StudentAcademy()->value]);
        $instructorSchoolRole = Role::create(['name' => UserRoleEnum::InstructorSchool()->value]);
        $instructorAcademyRole = Role::create(['name' => UserRoleEnum::InstructorAcademy()->value]);

        $admin->assignRole($adminRole);
        $organizer->assignRole($organizerRole);
        $studentSchool->assignRole($studentSchoolRole);
        $studentAcademy->assignRole($studentAcademyRole);
        $instructorSchool->assignRole($instructorSchoolRole);
        $instructorAcademy->assignRole($instructorAcademyRole);
    }
}
