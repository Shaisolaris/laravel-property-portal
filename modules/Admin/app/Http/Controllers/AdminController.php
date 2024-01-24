<?php

namespace Modules\Admin\app\Http\Controllers;

use Inertia\Inertia;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin::Dashboard');
    }
}
