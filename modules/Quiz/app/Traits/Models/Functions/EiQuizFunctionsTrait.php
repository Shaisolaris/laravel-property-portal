<?php

namespace Modules\Quiz\app\Traits\Models\Functions;

use Modules\Quiz\app\Models\EiQuiz;
use Modules\Quiz\app\Models\EiQuizType;
use Modules\Quiz\app\Enums\EiQuizTypeEnum;
use Modules\Quiz\app\Models\StudentHomeworkQuizAnswer;
use Modules\Quiz\app\Http\Resources\QuestionAnswerResource;

trait EiQuizFunctionsTrait
{
    public function answerGroup($type = 'default'): array
    {
        $result = [];

        if ($type == 'simple') {
            $this->questions->each(function ($question) use (&$result) {
                $result[] = QuestionAnswerResource::make($question);
            });
        }

        if ($type == 'default') {
            $grouped = $this->questions->groupBy('quiz_type_id');

            $grouped->get(EiQuizType::whereValue(EiQuizTypeEnum::Single()->value)->value('id'), collect())->each(function ($item) use (&$result) {
                $result['single'][] = [
                    'title' => $item['question'],
                    'answer' => '',
                    'variants_answers' => $item->answers->pluck('uuid'),
                    'answers' => $item->answers->pluck('answer'),
                    'question_id' => $item['id'],
                    'student_answer' => StudentHomeworkQuizAnswer::whereQuestionId($item['id'])->first()
                ];
            });

            $grouped->get(EiQuizType::whereValue(EiQuizTypeEnum::Multiple()->value)->value('id'), collect())->each(function ($item) use (&$result) {
                $result['multiple'][] = [
                    'title' => $item['question'],
                    'answer' => [],
                    'variants_answers' => $item->answers->pluck('uuid'),
                    'answers' => $item->answers->pluck('answer'),
                    'question_id' => $item['id'],
                    'student_answer' => StudentHomeworkQuizAnswer::whereQuestionId($item['id'])->first()
                ];
            });

            $grouped->get(EiQuizType::whereValue(EiQuizTypeEnum::YesOrNo()->value)->value('id'), collect())->each(function ($item) use (&$result) {
                $result['yes_or_no'][] = [
                    'title' => $item['question'],
                    'answer' => '',
                    'answers' => [
                        $item->answers[0]->answer,
                        $item->answers[1]->answer
                    ],
                    'variants_answers' => [
                        $item->answers[0]->uuid,
                        $item->answers[1]->uuid
                    ],
                    'question_id' => $item['id'],
                    'student_answer' => StudentHomeworkQuizAnswer::whereQuestionId($item['id'])->first()
                ];
            });

            $grouped->get(EiQuizType::whereValue(EiQuizTypeEnum::Short()->value)->value('id'), collect())->each(function ($item) use (&$result) {
                $result['short'][] = [
                    'title' => $item['question'],
                    'answer' => '',
                    'question_id' => $item['id'],
                    'student_answer' => StudentHomeworkQuizAnswer::whereQuestionId($item['id'])->first()
                ];
            });
        }

        return $result;
    }


    public function getHomework()
    {
        if(auth()->user()->isStudent()) {
            return $this->homework;
        } else {
            return $this->homework?->homework;
        }
    }
}