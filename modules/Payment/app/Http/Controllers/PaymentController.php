<?php

namespace Modules\Payment\app\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function success(mixed $model): Response
    {
        return Inertia::render('Payment::Success');
    }


    public function fail(mixed $model): Response
    {
        return Inertia::render('Payment::Fail');
    }
}
