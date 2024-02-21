<?php

namespace Modules\Landing\app\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Http\Controllers\Controller;

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
    public function courseDetails(): Response
    {
        return Inertia::render('Landing::Academy/Course/Show');
    }
    public function category(): Response
    {
        return Inertia::render('Landing::Academy/CategoryPage');
    }
    public function helpSupport(): Response
    {
        return Inertia::render('Landing::Academy/HelpSupportPage');
    }
}
