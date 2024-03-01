<?php

namespace Modules\Quiz\database\factories;

use Modules\Quiz\app\Models\EiQuizQuestion;
use Modules\Quiz\app\Models\EiQuizQuestionAnswer;
use Illuminate\Database\Eloquent\Factories\Factory;

class EiQuizQuestionAnswerFactory extends Factory
{
    protected $model = EiQuizQuestionAnswer::class;

    public function definition(): array
    {
        return [
            'quiz_question_id' => EiQuizQuestion::inRandomOrder()->value('id'),
            'answer' => fake()->word(),
            'is_correct' => fake()->boolean(),
            'point' => 0,
        ];
    }
}
