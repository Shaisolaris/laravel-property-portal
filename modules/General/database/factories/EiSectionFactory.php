<?php

namespace Modules\General\database\factories;

use Modules\General\app\Models\EiSection;
use Modules\School\app\Models\EiClassSubject;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Academy\app\Models\EducationInstitutionCourse;

class EiSectionFactory extends Factory
{
    protected $model = EiSection::class;


    public function definition(): array
    {
        $modelRand = [
            [ (new EiClassSubject())->getMorphClass(), EiClassSubject::inRandomOrder()->value('id') ],
            [ (new EducationInstitutionCourse())->getMorphClass(), EducationInstitutionCourse::inRandomOrder()->value('id')]
        ];

        $randomElement = fake()->randomElement($modelRand);

        return [
            'name' => fake()->name,
            'model_type' => $randomElement[0],
            'model_id' => $randomElement[1],
        ];
    }
}
