<?php

namespace Modules\Quiz\app\Services\AnswerService\Type;

use Modules\Quiz\app\Models\EiQuiz;
use Modules\Quiz\app\Models\EiQuizQuestionAnswer;
use Modules\Quiz\app\Services\AnswerService\Core;
use Modules\Quiz\app\Services\AnswerService\AnswerTypeInterface;
use Modules\Quiz\app\Enums\StudentHomeworkQuizAnswerIsCorrectEnum;

class Multiple extends Core implements AnswerTypeInterface
{
    public function __construct(protected array $data, protected string $typeValue){}

    public function transformData(): static
    {
        $this->data = $this->transform($this->data, $this->typeValue);

        return $this;
    }

    public function calculatePoint(): static
    {
        foreach ($this->data as $index => $item) {
            foreach ($item['current_answers'] as $indexAnswer => $originAnswer) {
                if (in_array($originAnswer, $item['correct_answers'])) {
                    $item['point'] += EiQuizQuestionAnswer::whereUuid($originAnswer)->first()->point;
                } else {
                    $item['point'] += EiQuiz::find($item['model_id'])->points_wrong_answer;
                }
            }

            if ($item['point'] < 0) {
                $item['point'] = 0;
            }

            $item['is_correct'] = $this->compareArrays($item['current_answers'], $item['correct_answers']) ?? false;

            $this->data[$index] = $item;
        }

        return $this;
    }

    public function save(): static
    {
        $this->saveAnswer($this->data);

        return $this;
    }

    private function compareArrays(array $array1, array $array2): string
    {
        sort($array1);
        sort($array2);

        if ($array1 === $array2) {
            return StudentHomeworkQuizAnswerIsCorrectEnum::Yes()->value;
        } elseif (count(array_intersect($array1, $array2)) > 0) {
            return StudentHomeworkQuizAnswerIsCorrectEnum::Partially()->value;
        } else {
            return StudentHomeworkQuizAnswerIsCorrectEnum::No()->value;
        }
    }
}