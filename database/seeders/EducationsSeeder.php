<?php

namespace Database\Seeders;

use App\Enums\EducationInstitutions\EducationInstitutionsEnum;
use App\Models\EducationInstitution;
use Illuminate\Database\Seeder;

class EducationsSeeder extends Seeder
{
    public function run(): void
    {
        collect(EducationInstitutionsEnum::toArray())->each(function ($institute) {
            EducationInstitution::create([
                'type' => $institute,
                'status' => '1', //todo: Need to definitions the statuses.
            ]);
        });
    }
}
