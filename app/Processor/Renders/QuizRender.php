<?php

namespace App\Processor\Renders;

use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class QuizRender
{
    public function render(array $data): Response
    {
        return Inertia::render('Quiz::'. Str::ucfirst(auth()->user()->role_name) .'/Index', $data);
    }
}
