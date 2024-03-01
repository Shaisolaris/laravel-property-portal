<?php

namespace Modules\Quiz\database\factories;

use Illuminate\Support\Carbon;
use Modules\Quiz\app\Models\EiQuiz;
use Modules\Quiz\app\Models\EiQuizType;
use Modules\Quiz\app\Models\EiQuizQuestion;
use Illuminate\Database\Eloquent\Factories\Factory;

class EiQuizQuestionFactory extends Factory
{
    protected $model = EiQuizQuestion::class;

    public function definition(): array
    {
        return [
            'quiz_type_id' => EiQuizType::inRandomOrder()->value('id'),
            'quiz_id' => EiQuiz::inRandomOrder()->value('id'),
            'question' => fake()->word(),
            'point' => rand(1, 5),
        ];
    }
}
