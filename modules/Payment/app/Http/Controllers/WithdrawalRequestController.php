<?php

namespace Modules\Payment\app\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Http\Controllers\Controller;
use Modules\Payment\app\Services\WithdrawalRequestService;

class WithdrawalRequestController extends Controller
{
    public function __construct(protected WithdrawalRequestService $service)
    {
        parent::__construct();
    }

    public function index(): Response
    {
        return Inertia::render('Payment::Tabs/WithdrawalRequestsTab', []);
    }

    public function create()
    {

    }

    public function update()
    {

    }
}
