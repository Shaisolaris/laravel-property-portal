<?php

namespace Modules\Auth\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;

class HandlerSendOtpCode extends Notification
{
    public function via(): array
    {
        return ['mail'];
    }

    public function toMail(): MailMessage
    {
        return $this->buildMailMessage();
    }

    protected function buildMailMessage(): MailMessage
    {
        //        return (new MailMessage)->view(
        //            'mail.invoice.paid', ['invoice' => $this->invoice]
        //        );

        return (new MailMessage())
            ->subject(Lang::get('Verify Email Address'))
            ->line(Lang::get('Please using the otp code below to verify your email address.'))
            ->line(Lang::get('Otp code: ' . $this->generateOtpCode()));
    }

    protected function generateOtpCode(): int
    {
        $code = rand(100000, 999999);

        Session::put(auth()->user()->uuid, [
//            'otp_code' => Hash::make($code),
            'otp_code' => $code,
        ]);

        return $code;
    }
}
