<?php

namespace Modules\Payment\app\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\School\app\Models\EiClass;
use Modules\Payment\app\Services\PaymentService;
use Modules\Payment\app\Http\Resources\HistoryResource;
use Modules\Payment\app\Http\Resources\PaymentCredentialResource;

class PaymentController extends Controller
{
    public function __construct(protected PaymentService $service)
    {
        parent::__construct();
    }


    public function history()
    {
        return Inertia::render('Payment::QuizTab/HistoryTab', []);
    }
}
