<?php

namespace App\Traits;

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
        $this->notify(new HandlerSendOtpCode());
    }
}
