<?php

namespace Modules\Quiz\app\Services\AnswerService\Type;

use Modules\Quiz\app\Services\AnswerService\Core;
use Modules\Quiz\app\Services\AnswerService\AnswerTypeInterface;

class Single extends Core implements AnswerTypeInterface
{
    public function __construct(protected array $data, protected string $typeValue){}

    public function transformData(): static
    {
        $this->data = $this->transform($this->data, $this->typeValue);

        return $this;
    }

    public function calculatePoint(): static
    {
        $this->data = $this->simpleCalculatePoint($this->data);
        return $this;
    }

    public function save(): static
    {
        $this->saveAnswer($this->data);

        return $this;
    }
}