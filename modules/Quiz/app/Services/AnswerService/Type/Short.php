<?php

namespace Modules\Quiz\app\Services\AnswerService\Type;

use Modules\Quiz\app\Models\EiQuizQuestion;
use Modules\General\app\Models\StudentHomework;
use Modules\General\app\Models\StudentHomeworkAnswer;
use Modules\Quiz\app\Services\AnswerService\AnswerTypeInterface;

class Short implements AnswerTypeInterface
{
    public function __construct(protected array $data){}

    public function calculatePoint(): static
    {
        return $this;
    }

    public function transformData(): static
    {
        foreach ($this->data as $index => $item) {
            unset($item['title']);
            $item['point'] = 0;

            $quizQuestion = EiQuizQuestion::find($item['question_id']);
            $studentHomework = StudentHomework::where([
                'model_type' => $quizQuestion->quiz->getMorphClass(),
                'model_id' => $quizQuestion->quiz->id,
            ])->first();

            $item['answer'] = [
                'question_id' => $item['question_id'],
                'origin_answer' => $item['answer'],
            ];

            $item['model_type'] = $quizQuestion->quiz->getMorphClass();
            $item['question_type'] = $quizQuestion->getMorphClass();
            $item['model_id'] = $quizQuestion->quiz->id;
            $item['question_id'] = $quizQuestion->id;
            $item['homework_id'] = $studentHomework->id;

            $this->data[$index] = $item;
        }

        return $this;
    }

    public function save(): static
    {
        foreach ($this->data as $item) {
            StudentHomeworkAnswer::create($item);
        }

        return $this;
    }
}