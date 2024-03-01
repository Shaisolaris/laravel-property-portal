<?php

namespace App\Traits\Models\Functions;

use App\Enums\User\UserRoleEnum;
use App\Enums\User\UserStatusEnum;
use Illuminate\Support\Facades\Session;

trait UserFunctionsTrait
{
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

    public function onReview(): bool
    {
        return $this->status->value === UserStatusEnum::Review()->value;
    }

    public function submitToInspection(): void
    {
        $this->update(['status' => UserStatusEnum::Review()->value]);
    }

    public function activated(): void
    {
        $this->update(['status' => UserStatusEnum::Active()->value]);
    }

    public function thereAreDocument(): bool
    {
        if ($this->detail) {

            $status = false;

            if($this->isStudent()) {
                $status = $this->detail->media()->whereJsonContains('custom_properties->is_transcript', true)->exists();
            }

            if($this->isInstructor()) {
                $status = $this->detail->media()->whereJsonContains('custom_properties->is_diploma_certificate', true)->exists()
                    && $this->detail->media()->whereJsonContains('custom_properties->is_diploma_certificate', true)->exists()
                    && $this->detail->media()->whereJsonContains('custom_properties->is_previous_employment_education', true)->exists()
                    && $this->detail->media()->whereJsonContains('custom_properties->is_teaching_experience', true)->exists()
                    && $this->detail->media()->whereJsonContains('custom_properties->is_additional_licences_permits', true)->exists();
            }

            return $this->detail->media()->whereJsonContains('custom_properties->is_registration_scan', true)->exists() && $status;
        }

        return false;
    }

    public function isNeedPay(): bool
    {
        return $this->hasRole(UserRoleEnum::Student()->value)
            && $this->status == UserStatusEnum::Active()->value
            && !$this->country->is_free
            && !is_null($this->myClass)
            && is_null($this->paymentEntity);
    }

    public function isOrganizer(): bool
    {
        return $this->hasRole(UserRoleEnum::Organizer()->value);
    }

    public function isInstructor(): bool
    {
        return $this->hasRole(UserRoleEnum::Instructor()->value);
    }

    public function isStudent(): bool
    {
        return $this->hasRole(UserRoleEnum::Student()->value);
    }

    public function isAdmin(): bool
    {
        return $this->hasRole(UserRoleEnum::Admin()->value);
    }


    public function hasStatus(string|array $statuses): bool
    {
        if (is_string($statuses)) {
            return $this->status == $statuses;
        }

        if (is_array($statuses)) {
            foreach ($statuses as $status) {
                if ($this->hasStatus($status)) {
                    return true;
                }
            }

            return false;
        }

        throw new \TypeError('Unsupported type for $status parameter to hasStatus().');
    }
}
