<?php

namespace Modules\Quiz\app\Services\AnswerService;

interface AnswerTypeInterface
{
    public function calculatePoint();
    public function transformData();
    public function save();
}