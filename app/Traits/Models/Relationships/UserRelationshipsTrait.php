<?php

namespace App\Traits\Models\Relationships;

use App\Models\UserSetting;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait UserRelationshipsTrait
{
    public function settings(): HasOne
    {
        return $this->hasOne(UserSetting::class, 'user_id', 'id');
    }
}
