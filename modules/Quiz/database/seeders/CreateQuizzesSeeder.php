<?php

namespace Modules\Quiz\database\seeders;

use Illuminate\Database\Seeder;
use Modules\Quiz\app\Models\EiQuiz;
use Modules\Quiz\app\Models\EiQuizQuestion;
use Modules\Quiz\app\Models\EiQuizQuestionAnswer;

class CreateQuizzesSeeder extends Seeder
{
    public function run(): void
    {
        EiQuiz::factory()->count(50)->create()->each(function ($eiQuiz) {
            EiQuizQuestion::factory()->count(50)->create([
                'quiz_id' => $eiQuiz->id
            ])->each(function ($eiQuizQuestion) {
                EiQuizQuestionAnswer::factory()->count(50)->create([
                    'quiz_question_id' => $eiQuizQuestion->id
                ]);
            });
        });
    }
}
