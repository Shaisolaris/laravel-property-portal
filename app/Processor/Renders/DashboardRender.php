<?php

namespace App\Processor\Renders;

use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class DashboardRender
{
    public function render($data): Response
    {
        return Inertia::render('General::'. Str::ucfirst(auth()->user()->role_name) .'/Dashboard', $data);
    }
}
