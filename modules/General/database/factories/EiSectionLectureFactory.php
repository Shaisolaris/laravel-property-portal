<?php

namespace Modules\General\database\factories;

use Modules\General\app\Models\EiSection;
use Modules\General\app\Models\EiSectionLecture;
use Illuminate\Database\Eloquent\Factories\Factory;

class EiSectionLectureFactory extends Factory
{
    protected $model = EiSectionLecture::class;


    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'description' => fake()->text,
            'note' => fake()->text,
            'video' => fake()->url,
            'section_id' => EiSection::inRandomOrder()->value('id')
        ];
    }
}
