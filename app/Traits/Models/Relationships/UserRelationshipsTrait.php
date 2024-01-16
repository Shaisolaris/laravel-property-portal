<?php

namespace App\Traits\Models\Relationships;

use App\Models\UserSetting;

trait UserRelationshipsTrait
{
    public function settings()
    {
        return $this->hasOne(UserSetting::class, 'user_id', 'id');
    }
}