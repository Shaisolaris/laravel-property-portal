<?php

namespace Modules\Quiz\app\Services\AnswerService;

use App\Facades\Data;
use Modules\Quiz\app\Models\EiQuizType;
use Modules\Quiz\app\Models\EiQuizQuestion;
use Modules\General\app\Models\StudentHomework;
use Modules\Quiz\app\Models\StudentHomeworkQuizAnswer;
use Modules\Quiz\app\Enums\StudentHomeworkQuizAnswerIsCorrectEnum;

class Core
{
    protected function transform(array $data, string $typeValue): array
    {
        foreach ($data as $index => $item) {
            $item['point'] = 0;

            $quizQuestion = EiQuizQuestion::find($item['question_id']);
            $studentHomework = StudentHomework::where([
                'model_type' => $quizQuestion->quiz->getMorphClass(),
                'model_id' => $quizQuestion->quiz->id,
                'user_id' => auth()->id()
            ])->first();

            $answers = $quizQuestion->answers->where('is_correct', true);

            if ($answers->count() > 1) {
                $item['correct_answers'] = $answers->pluck('uuid')->toArray();
                $item['current_answers'] = $answers->pluck('uuid')->toArray();
            } else {
                $item['correct_answers'] = [$answers->first()?->uuid];
                $item['current_answers'] = [$answers->first()?->uuid];
            }

            $item['question_id'] = $quizQuestion->id;
            $item['homework_id'] = $studentHomework->id;
            $item['quiz_id'] = $quizQuestion->quiz->id;
            $item['quiz_type_id'] = EiQuizType::whereValue($typeValue)->value('id');
            $item['uuid'] = StudentHomeworkQuizAnswer::whereHomeworkId($studentHomework->id)->get()->get($index)?->uuid;

            unset($item['title']);
            unset($item['variants_answers']);
            unset($item['student_answer']);
            unset($item['answer']);
            unset($item['answers']);

            $data[$index] = $item;
        }

        return $data;
    }

    protected function simpleCalculatePoint(array $data): array
    {
        foreach ($data as $index => $item) {
            if ($item['current_answers'][0] === $item['correct_answers'][0]) {
                $item['point'] += EiQuizQuestion::find($item['question_id'])->value('point');

                $item['is_correct'] = StudentHomeworkQuizAnswerIsCorrectEnum::Yes()->value;
            } else {
                $item['is_correct'] = StudentHomeworkQuizAnswerIsCorrectEnum::No()->value;
            }

            $data[$index] = $item;
        }

        return $data;
    }

    protected function saveAnswer($data): void
    {
        foreach ($data as $item) {
            StudentHomeworkQuizAnswer::updateOrCreate(['uuid' => $item['uuid']], $item);
        }
    }
}