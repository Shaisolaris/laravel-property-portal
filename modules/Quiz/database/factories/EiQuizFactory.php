<?php

namespace Modules\Quiz\database\factories;

use App\Models\User;
use App\Enums\LanguageEnum;
use Illuminate\Support\Carbon;
use Modules\Quiz\app\Models\EiQuiz;
use Modules\Quiz\app\Enums\EiQuizGradeEnum;
use Modules\School\app\Models\EiClassSubject;
use Modules\General\app\Models\EiSectionLecture;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\General\app\Models\EducationInstitution;

class EiQuizFactory extends Factory
{
    protected $model = EiQuiz::class;

    public function definition(): array
    {
        return [
            'lecture_id' => EiSectionLecture::inRandomOrder()->value('id'),
            'model_type' => (new EiClassSubject())->getMorphClass(),
            'model_id' => EiClassSubject::inRandomOrder()->value('id'),
            'name' => fake()->name(),
            'language' => fake()->randomElement(LanguageEnum::getLabelsValues())['value'],
            'grade' => fake()->randomElement(EiQuizGradeEnum::getLabelsValues())['value'],
            'total_score' => rand(10, 100),
            'description' => fake()->text(),
            'pass_mark' => rand(10, 100),
            'duration_minutes' => rand(15, 35),
            'attempts' => rand(1, 3),
            'points_no_answer' => 0,
            'points_wrong_answer' => 0,
            'start_work_datetime' => Carbon::now()->addDays(2),
            'end_work_datetime' => Carbon::now()->addDays(3),
        ];
    }
}
