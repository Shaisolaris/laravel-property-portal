<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSetting extends Model
{
    protected $table = 'user_settings';
    protected $fillable = [
        'user_id',
        'notification_settings',
    ];
    public $timestamps = false;
}
