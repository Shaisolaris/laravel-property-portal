<?php

namespace Database\Seeders;

use App\Enums\EducationInstitutions\EducationInstitutionsEnum;
use App\Models\EducationInstitution;
use App\Models\EducationInstitutionList;
use Illuminate\Database\Seeder;

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

        EducationInstitutionList::factory()->count(10)->create();

    }
}
