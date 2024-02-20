<?php

namespace Modules\School\database\factories;

use Carbon\Carbon;
use App\Enums\LanguageEnum;
use Modules\School\app\Models\EiClass;
use Modules\School\app\Enums\EiClassStatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\General\app\Models\EducationInstitution;

class EiClassFactory extends Factory
{
    protected $model = EiClass::class;


    public function definition(): array
    {
        return [
            'ei_id' => EducationInstitution::inRandomOrder()->value('id'),
            'name' => fake()->name(),
            'description' => fake()->text(),
            'status' => EiClassStatusEnum::Inactive()->value,
            'language' => fake()->randomElement(LanguageEnum::getLabelsValues())['value'],
            'price' => fake()->numberBetween(10, 1000),
            'hourly_rate' => fake()->numberBetween(10, 1000),
            'capacity' => fake()->numberBetween(1, 100),
            'duration_lesson' => fake()->numberBetween(10, 45),
            'gradation_age_to' => fake()->numberBetween(5, 15),
            'gradation_age_from' => fake()->numberBetween(1, 5),
            'start_date_at' => Carbon::now()->addDay(),
            'end_date_at' => Carbon::now()->addDays(2),
        ];
    }
}
