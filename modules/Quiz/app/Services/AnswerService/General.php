<?php

namespace Modules\Quiz\app\Services\AnswerService;

use Modules\Quiz\app\Models\EiQuizQuestion;
use Modules\General\app\Models\StudentHomework;

class General
{
    protected function transform(array $data): array
    {
        foreach ($data as $index => $item) {
            unset($item['title']);
            unset($item['variants_answers']);
            $item['point'] = 0;

            $quizQuestion = EiQuizQuestion::find($item['question_id']);
            $studentHomework = StudentHomework::where([
                'model_type' => $quizQuestion->quiz->getMorphClass(),
                'model_id' => $quizQuestion->quiz->id,
            ])->first();

            $answers = $quizQuestion->answers->where('is_correct', true);

            if ($answers->count() > 1) {
                $item['answer'] = [
                    'question_id' => $item['question_id'],
                    'answer_id' => $answers->pluck('id'),
                    'origin_answer' => $item['answer'],
                    'correct_answer' => $answers->pluck('answer'),
                ];
            } else {
                $item['answer'] = [
                    'question_id' => $item['question_id'],
                    'answer_id' => $answers->first()?->id,
                    'origin_answer' => $item['answer'],
                    'correct_answer' => $answers->first()?->answer,
                ];
            }

            $item['model_type'] = $quizQuestion->quiz->getMorphClass();
            $item['question_type'] = $quizQuestion->getMorphClass();
            $item['model_id'] = $quizQuestion->quiz->id;
            $item['question_id'] = $quizQuestion->id;
            $item['homework_id'] = $studentHomework->id;

            $data[$index] = $item;
        }

        return $data;
    }

    protected function simpleCalculatePoint(array $data): array
    {
        foreach ($data as $index => $item) {
            if ($item['answer']['origin_answer'] === $item['answer']['correct_answer']) {
                $item['point'] += EiQuizQuestion::find($item['answer']['question_id'])->value('point');

                $item['answer']['is_correct'] = 'yes';
            } else {
                $item['answer']['is_correct'] = 'no';
            }

            $data[$index] = $item;
        }

        return $data;
    }

    protected function saveAnswer()
    {

    }
}