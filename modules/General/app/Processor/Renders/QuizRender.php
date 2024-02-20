<?php

namespace Modules\General\app\Processor\Renders;

use Inertia\Inertia;
use App\Models\User;
use Inertia\Response;
use Illuminate\Support\Str;

class QuizRender
{
    public function render(array $data): Response
    {
        return Inertia::render('Quiz::Index', $data);
    }
}