<?php

namespace Modules\Landing\app\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LandingAcademyController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Landing::Academy/Index');
    }


    public function courses(): Response
    {
        return Inertia::render('Landing::Academy/Course/Index');
    }
}
