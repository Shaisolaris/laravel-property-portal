<?php

namespace App\Processor\Renders;

use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class AssignmentRender
{
    public function render($data): Response
    {
        return Inertia::render('Assignment::'. Str::ucfirst(auth()->user()->role_name), $data);
    }
}
