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

    }

    public function isOccupations(): bool
    {
        return $this->occupations() && $this->occupations()->get()->isNotEmpty();
    }

    public function isUserHaveAvatarBio(): bool
    {
        return $this->bio && $this->profile_photo_url;
    }

    public function isDetailData(): bool
    {
        return $this->detail && $this->detail()->get()->isNotEmpty();
    }
}
