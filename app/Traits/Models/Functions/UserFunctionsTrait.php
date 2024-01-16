<?php

namespace App\Traits\Models\Functions;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

trait UserFunctionsTrait
{
    public function setFlashSession(string $type, string $title, string $text = null, string $key = 'notification'): void
    {
        Session::flash($key, [
            'id' => rand(),
            'type' => $type,
            'title' => $title,
            'text' => $text,
        ]);
    }

    public function getOtpCode()
    {
        if (Session::has($this->uuid)) {
            return Session::get($this->uuid)['otp_code'];
        }
        return false;

    }

    public function validateOtp($otp): bool
    {
        if (Hash::check($this->getOtpCode(), $otp)) {
            return true;
        } else {
            return false;
        }
    }
}
