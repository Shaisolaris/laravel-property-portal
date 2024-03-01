<?php

namespace Modules\General\app\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Processor\Processor;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class GeneralController extends Controller
{
    public function dashboard(Request $request): Response
    {
        return Processor::build($request)->render('dashboard');
    }

    public function schedule(Request $request): Response
    {
        return Processor::build($request)->render('schedule');
    }

    public function grade(): Response
    {
        return Inertia::render('General::Grade');
    }
}
