<?php

namespace App\Processor\Renders;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Str;

class EiClassSubjectRender
{
    public function render(array $data): Response
    {
        return Inertia::render('School::'. Str::ucfirst(auth()->user()->role_name) .'/Subject/Index', $data);
    }
}