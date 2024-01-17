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

    public function validateOtp(int $otp): bool
    {
        return $otp === $this->getOtpCode();
//        return Hash::check((string)$otp, (string)$this->getOtpCode()); // I don`t understand, it`s method can`t be working form me, why?

    }
}
