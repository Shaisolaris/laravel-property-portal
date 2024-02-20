<?php

namespace Modules\General\app\Processor\Actions\Forms;

use Modules\General\app\Http\Requests\CreatingStepsRequest;
use Modules\General\app\Processor\Actions\Forms\Handler\Subject;
use Modules\General\app\Processor\Actions\Forms\Handler\Course;

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
