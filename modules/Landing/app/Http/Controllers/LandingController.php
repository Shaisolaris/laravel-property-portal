<?php

namespace Modules\Landing\app\Http\Controllers;


use Inertia\Inertia;
use Inertia\Response;
use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function indexAcademy(): Response
    {
        return Inertia::render('Landing::Academy/Index');
    }


    public function indexSchool(): Response
    {
        return Inertia::render('Landing::School/Index');
    }


    public function courses(): Response
    {
        return Inertia::render('Landing::Academy/Course/Index');
    }
}
