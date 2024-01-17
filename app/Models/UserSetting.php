<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserSetting
 *
 * @property int $id
 * @property int $user_id
 * @property array|null $notification_settings
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereNotificationSettings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereUserId($value)
 * @mixin Eloquent
 */
class UserSetting extends Model
{
    protected $table = 'user_settings';
    protected $fillable = [
        'user_id',
        'notification_settings',
    ];

    protected $casts = [
        'notification_settings' => 'array'
    ];

    public $timestamps = false;
}
