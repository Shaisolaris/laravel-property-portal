<?php

namespace Database\Seeders;

use App\Enums\EducationInstitutions\EducationInstitutionsEnum;
use App\Models\EducationInstitution;
use App\Models\EducationInstitutionCategories;
use App\Models\EducationInstitutionList;
use App\Models\EducationInstitutionUser;
use App\Models\User;
use Illuminate\Database\Seeder;
use Modules\Academy\app\Models\EducationInstitutionCourse;
use Modules\Academy\app\Models\EducationInstitutionCourseRefersInstitution;

class EducationsSeeder extends Seeder
{
    public function run(): void
    {
        collect(EducationInstitutionsEnum::institutions())->each(function ($institute) {
            EducationInstitution::create([
                'name' => $institute->value,
                'status' => '1', //todo: Need to definitions the statuses.
            ]);
        });

        EducationInstitutionCategories::factory()->createMany([
            [
                'parent_id' => null,
                'category' => ucfirst(fake()->title),
            ],
            [
                'parent_id' => null,
                'category' => ucfirst(fake()->title),
            ],
            [
                'parent_id' => null,
                'category' => ucfirst(fake()->title),
            ],
            [
                'parent_id' => null,
                'category' => ucfirst(fake()->title),
            ],
        ]);

        EducationInstitutionCategories::factory()->count(100)->create();

        EducationInstitutionList::factory()->count(10)->create();
        EducationInstitutionCourse::factory()->count(500)->create();

        EducationInstitutionCourseRefersInstitution::factory()->count(1000)->create();

        User::all()->each(function ($user) {

            if($user->email != 'admin@gmail.com') {
                if($user->email == 'studentSchool@gmail.com' || $user->email == 'instructorSchool@gmail.com' || $user->email == 'organizer@gmail.com') {
                    $institution_id = 1;
                } elseif($user->email === 'studentAcademy@gmail.com' || $user->email === 'instructorAcademy@gmail.com') {
                    $institution_id = 2;
                }

                EducationInstitutionUser::factory()->createOne([
                    'education_institution_list_id' => EducationInstitutionList::whereEducationInstitutionId($institution_id)->inRandomOrder()->value('id'),
                    'user_id' => $user->id,
                ]);
            }
        });
    }
}
