<?php

namespace Modules\Auth\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Auth\app\Http\Requests\VerifyOtpCode;

class ValidateOtpCodeController extends Controller
{
    public function create(Request $request): \Inertia\Response|\Inertia\ResponseFactory
    {
        return inertia('Auth::VerifyOtpCode', [
            'otp_code' => $request->user()->getOtpCode(),
        ]);
    }

    public function verify(VerifyOtpCode $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validated();

        if($request->user()->validateOtp($data['otp'])) {

            $request->user()->update('email_verified_at', time()); // TODO:: не проверял

            return to_route('registration.select-occupations');
        }

        return redirect()->back();
    }

    public function resend(Request $request): \Illuminate\Http\RedirectResponse
    {
        if($request->user()->getOtpCode()) {
            $request->user()->sendSendOtpCodeNotification();
        }
        return redirect()->back();
    }
}
