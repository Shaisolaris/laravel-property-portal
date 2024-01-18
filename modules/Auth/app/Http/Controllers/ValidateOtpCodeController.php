<?php

namespace Modules\Auth\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Modules\Auth\app\Http\Requests\VerifyOtpCode;

class ValidateOtpCodeController extends Controller
{
    public function create(Request $request): \Inertia\Response|\Inertia\ResponseFactory
    {
        return inertia('Auth::VerifyOtpCode', [
            'otp_code' => $request->user()->getOtpCode(),
        ]);
    }

    /**
     * @throws ValidationException
     */
    public function verify(VerifyOtpCode $request)
    {
        $data = $request->validated();

        if ($request->user()->validateOtp($data['otp'])) {
            $request->user()->markEmailAsVerified();
        } else {
            throw ValidationException::withMessages(['otp' => 'The code was entered incorrectly']);
        }

        return response()->json(true);
    }

    public function resend(Request $request)
    {
        $request->user()->sendSendOtpCodeNotification();

        return response()->json(true);
    }

    public function cancel(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
}
