<?php

namespace Modules\General\app\Http\Controllers;

use Inertia\Inertia;
use App\Http\Controllers\Controller;

class GeneralController extends Controller
{
    public function dashboard()
    {
        return Inertia::render('General::Dashboard');
    }


    public function schedule()
    {
        $events = [
            ''
        ];

        return Inertia::render('General::Schedule', [
            'events' => ''
        ]);
    }


    public function grade()
    {
        return Inertia::render('General::Grade');
    }

    public function payments()
    {
        return Inertia::render('General::Grade');
    }
}
