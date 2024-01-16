<?php

namespace App\Models;

use Eloquent;
use Spatie\Enum\Enum;
use App\Traits\HasUuidTrait;
use Illuminate\Support\Carbon;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use App\Enums\User\UserStatusEnum;
use Spatie\Permission\Models\Role;
use App\Enums\User\UserGenderEnum;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Models\Permission;
use Laravel\Sanctum\PersonalAccessToken;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Collection;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Modules\Notification\Entities\Notification;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Traits\Models\Attributes\UserAttributesTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Traits\Models\Relationships\UserRelationshipsTrait;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string $uuid
 * @property string $email
 * @property string $password
 * @property Enum|null $status
 * @property string $first_name
 * @property string $last_name
 * @property string|null $gender
 * @property string|null $profile_photo_path
 * @property string $address
 * @property string $country
 * @property string $state
 * @property string $city
 * @property string|null $timezone
 * @property string|null $phone
 * @property string|null $bio
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $birth_at
 * @property Carbon|null $email_verified_at
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read Collection<int, Notification> $notifications
 * @property-read int|null $notifications_count
 * @property-read Collection<int, Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read string $profile_photo_url
 * @property-read Collection<int, Role> $roles
 * @property-read int|null $roles_count
 * @property-read UserSetting|null $settings
 * @property-read Collection<int, PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @property-read Collection<int, Notification> $unreadNotifications
 * @property-read int|null $unread_notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBirthAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTimezone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutRole($roles, $guard = null)
 * @mixin Eloquent
 */
class User extends Authenticatable implements HasMedia, MustVerifyEmail
{
    use HasRoles;
    use HasRoles;
    use HasFactory;
    use Notifiable;
    use HasApiTokens;
    use HasUuidTrait;
    use HasProfilePhoto;
    use InteractsWithMedia;
    use UserAttributesTrait;
    use UserRelationshipsTrait;
    use TwoFactorAuthenticatable;


    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    protected $fillable = [
        'uuid',
        'email',
        'state',
        'city',
        'phone',
        'gender',
        'status',
        'address',
        'country',
        'password',
        'birth_at',
        'timezone',
        'last_name',
        'first_name',
        'remember_token',
        'two_factor_secret',
        'email_verified_at',
        'profile_photo_path',
        'two_factor_recovery_codes',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'email_verified_at' => 'datetime',
        'status' => UserStatusEnum::class,
        'gender' => UserGenderEnum::class
    ];

    protected $appends = [
        'profile_photo_url',
        'full_name',
    ];


    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class)->latest();
    }


    public function unreadNotifications(): HasMany
    {
        return $this->notifications()->whereNull('read_at');
    }
}
