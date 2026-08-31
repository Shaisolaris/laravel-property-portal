<?php

namespace Modules\Quiz\app\Services\AnswerService;

use Illuminate\Support\Str;

class Answer
{
    public static function build(array $types): void
    {
        foreach ($types as $key => $data) {
            $answerTypeClass = __NAMESPACE__ . '\Type\\' . Str::replace('_', '', Str::title($key));

            (new $answerTypeClass($data))->transformData()->calculatePoint()->save();
        }
    }
}