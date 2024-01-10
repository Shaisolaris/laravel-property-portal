<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Modules\Notification\Entities\Notification;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements HasMedia
{
    use HasRoles;
    use HasUuidTrait;
    use HasFactory;
    use Notifiable;
    use HasApiTokens;
    use TwoFactorAuthenticatable;
    use HasRoles;
    use HasProfilePhoto;
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'email_verified_at' => 'datetime',
    ];


    protected $appends = [
        'profile_photo_url',
        'full_name',
    ];

    public function fullName(): Attribute
    {
        return Attribute::get(fn () => "$this->first_name $this->last_name");
    }

    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class)->orderByDesc('created_at');
    }

    public function unreadNotifications(): HasMany
    {
        return $this->notifications()->whereIsSeen(false);
    }
}
