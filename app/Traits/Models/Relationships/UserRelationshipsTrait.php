<?php

namespace App\Traits\Models\Relationships;

use App\Models\Occupation;
use App\Models\UserDetail;
use App\Models\UserSetting;

trait UserRelationshipsTrait
{
    public function settings(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(UserSetting::class, 'user_id');
    }

    public function detail(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(UserDetail::class, 'user_id');
    }

    public function occupations(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Occupation::class);
    }
}
