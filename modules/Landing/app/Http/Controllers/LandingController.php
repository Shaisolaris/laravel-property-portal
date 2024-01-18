<?php

namespace Modules\Landing\app\Http\Controllers;


use Inertia\Inertia;
use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function index()
    {
        return Inertia::render('Landing::Index');
    }
}
