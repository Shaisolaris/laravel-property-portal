<?php

namespace App\Traits\Models\Relationships;

use App\Models\Occupation;
use App\Models\UserDetail;
use App\Models\UserSetting;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait UserRelationshipsTrait
{
    public function settings(): HasOne
    {
        return $this->hasOne(UserSetting::class, 'user_id');
    }


    public function detail(): HasOne
    {
        return $this->hasOne(UserDetail::class, 'user_id');
    }


    public function occupations(): BelongsToMany
    {
        return $this->belongsToMany(Occupation::class);
    }

    public function institution()
    {

    }
}
