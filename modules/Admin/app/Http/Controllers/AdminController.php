<?php

namespace Modules\Admin\app\Http\Controllers;

use Inertia\Inertia;
use App\Http\Controllers\Controller;
use Modules\Admin\app\Services\DashboardService;

class AdminController extends Controller
{
    public function __construct(protected DashboardService $dashboardService)
    {
        parent::__construct();
    }

    public function dashboard()
    {

        return Inertia::render('Admin::Dashboard/Dashboard', [
            'widgets' => $this->dashboardService->widgetStatistics()
        ]);
    }
}
