<?php

namespace App\Processor\Renders;

use Inertia\Inertia;
use Inertia\Response;

class FormsRender
{
    public function render($data): Response
    {
        return Inertia::render('General::HandlerSteps/Forms', $data);
    }
}
