<?php

namespace Modules\Quiz\app\Services\AnswerService\Type;

use Modules\Quiz\app\Models\EiQuizQuestionAnswer;
use Modules\Quiz\app\Services\AnswerService\General;
use Modules\General\app\Models\StudentHomeworkAnswer;
use Modules\Quiz\app\Services\AnswerService\AnswerTypeInterface;

class Multiple extends General implements AnswerTypeInterface
{
    public function __construct(protected array $data){}

    public function transformData(): static
    {
        $this->data = $this->transform($this->data);

        return $this;
    }

    public function calculatePoint(): static
    {
        foreach ($this->data as $index => $item) {
            foreach ($item['answer']['origin_answer'] as $indexAnswer => $originAnswer) {
                if (in_array($originAnswer, $item['answer']['origin_answer'])) {
                    $item['point'] += EiQuizQuestionAnswer::find($item['answer']['answer_id'][$indexAnswer])->point;
                }
            }

            $item['answer']['is_correct'] = $this->compareArrays($item['answer']['origin_answer'], $item['answer']['origin_answer']);

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


    private function compareArrays(array $array1, array $array2): string
    {
        sort($array1);
        sort($array2);

        if ($array1 === $array2) {
            return 'yes';
        } elseif (count(array_intersect($array1, $array2)) > 0) {
            return 'part';
        } else {
            return 'no';
        }
    }
}