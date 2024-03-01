<?php

namespace App\Processor\Actions\Forms;

use App\Processor\Actions\Forms\Handler\Course;
use App\Processor\Actions\Forms\Handler\Subject;
use Modules\General\app\Http\Requests\CreatingStepsRequest;

class Handler
{
    public Course|Subject $model;

    public function __construct(CreatingStepsRequest $request)
    {
        $handler = __NAMESPACE__ . '\Handler\\' . ucfirst($request->get('program'));
        $this->model = new $handler($request->all());
    }

    public function create(): bool
    {
        return $this->model->handler();
    }
}
