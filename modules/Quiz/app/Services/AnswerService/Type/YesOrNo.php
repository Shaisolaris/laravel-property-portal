<?php

namespace Modules\Quiz\app\Services\AnswerService\Type;

use Modules\Quiz\app\Services\AnswerService\General;
use Modules\General\app\Models\StudentHomeworkAnswer;
use Modules\Quiz\app\Services\AnswerService\AnswerTypeInterface;

class YesOrNo extends General implements AnswerTypeInterface
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
            StudentHomeworkAnswer::create($item);
        }

        return $this;
    }
}