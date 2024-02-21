<?php

namespace Database\Seeders;

use App\Enums\EducationInstitutions\EducationInstitutionsOccupationsEnum;
use App\Models\Occupation;
use Illuminate\Database\Seeder;

class OccupationsSeeder extends Seeder
{
    public function run(): void
    {
        $this->base()->each(fn ($occupation) => Occupation::create($occupation));
    }


    protected function base(): \Illuminate\Support\Collection
    {
        $available = EducationInstitutionsOccupationsEnum::Active()->value;

        return collect([
            ['name' => 'Design', 'status' => $available],
            ['name' => 'Math', 'status' => $available],
            ['name' => 'Science', 'status' => $available],
            ['name' => 'Language', 'status' => $available],
            ['name' => 'Health & Fitness', 'status' => $available],
            ['name' => 'Lifestyle', 'status' => $available],
            ['name' => 'Marketing', 'status' => $available],
            ['name' => 'Management', 'status' => $available],
            ['name' => 'Web Development', 'status' => $available],
            ['name' => 'Mobile Development', 'status' => $available],
        ]);
    }
}
