<?php

namespace Modules\Quiz\app\Services\AnswerService\Type;

use Modules\Quiz\app\Models\EiQuizType;
use Modules\Quiz\app\Models\EiQuizQuestion;
use Modules\General\app\Models\StudentHomework;
use Modules\Quiz\app\Services\AnswerService\Core;
use Modules\Quiz\app\Models\StudentHomeworkQuizAnswer;
use Modules\Quiz\app\Services\AnswerService\AnswerTypeInterface;

class Short extends Core implements AnswerTypeInterface
{
    public function __construct(protected array $data, protected string $typeValue){}

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
                'user_id' => auth()->id()
            ])->first();

            $item['correct_answers'] = null;
            $item['current_answers'] = $item['answer'];

            $item['question_id'] = $quizQuestion->id;
            $item['homework_id'] = $studentHomework->id;
            $item['quiz_id'] = $quizQuestion->quiz->id;
            $item['quiz_type_id'] = EiQuizType::whereValue($this->typeValue)->value('id');
            $item['uuid'] = StudentHomeworkQuizAnswer::whereHomeworkId($studentHomework->id)->get()->get($index)?->uuid;
            $item['is_correct'] = null;

            unset($item['answer']);

            $this->data[$index] = $item;
        }

        return $this;
    }

    public function save(): static
    {
        $this->saveAnswer($this->data);

        return $this;
    }
}