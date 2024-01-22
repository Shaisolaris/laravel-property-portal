<?php

namespace Modules\Landing\app\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Http\Controllers\Controller;

class LandingSchoolController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Landing::School/Index');
    }
}
