<?php

namespace App\Models;

use App\Traits\HasUuidTrait;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Modules\Notification\Entities\Notification;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable implements HasMedia
{
    use HasRoles,
        HasRoles,
        HasFactory,
        Notifiable,
        HasApiTokens,
        HasUuidTrait,
        HasProfilePhoto,
        InteractsWithMedia,
        TwoFactorAuthenticatable;

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
