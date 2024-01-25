<?php

namespace Database\Seeders;

use App\Enums\EducationInstitutions\EducationInstitutionsEnum;
use App\Models\EducationInstitution;
use App\Models\EducationInstitutionCategories;
use App\Models\EducationInstitutionList;
use Illuminate\Database\Seeder;
use Modules\Academy\app\Models\EducationInstitutionCourse;

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

    }
}
