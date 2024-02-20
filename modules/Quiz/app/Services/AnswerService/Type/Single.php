<?php

namespace Modules\Quiz\app\Services\AnswerService\Type;

use Illuminate\Support\Arr;
use Modules\Quiz\app\Models\EiQuiz;
use Modules\Quiz\app\Models\EiQuizQuestion;
use Modules\General\app\Models\StudentHomework;
use Modules\Quiz\app\Services\AnswerService\General;
use Modules\General\app\Models\StudentHomeworkAnswer;
use Modules\Quiz\app\Services\AnswerService\AnswerTypeInterface;

class Single extends General implements AnswerTypeInterface
{
    public function __construct(protected array $data){}

    public function transformData(): static
    {
        $this->data = $this->transform($this->data);

        return $this;
    }

    public function calculatePoint(): static
    {
        $this->data = $this->simpleCalculatePoint($this->data);
        return $this;
    }

    public function save(): static
    {
        foreach ($this->data as $item) {
            StudentHomeworkAnswer::updateOrCreate([
                'homework_id' => $item['homework_id'],
                'model_id' => $item['model_id'],
                'model_type' => $item['model_type'],
                'question_id' => $item['question_id'],
                'question_type' => $item['question_type']
            ], $item);
        }

        return $this;
    }
}