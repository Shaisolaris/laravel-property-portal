<?php

namespace App\Traits;

use Illuminate\Support\Facades\Session;
use Modules\Auth\Notifications\HandlerSendOtpCode;

trait MustVerifyOtpCode
{
    public function hasVerifiedOtpCode(): bool
    {
        //        return is_null($this->otp_code);
        return true;
    }

    public function sendSendOtpCodeNotification(): void
    {
        Session::put(auth()->user()->uuid, ['otp_code' => rand(100000, 999999)]); // TODO:: on the time
        //        $this->notify(new HandlerSendOtpCode());
    }
}
