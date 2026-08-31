<?php

namespace App\Models;

use Eloquent;
use Spatie\Enum\Enum;
use App\Traits\HasUuidTrait;
use Laravel\Cashier\Billable;
use App\Traits\HasFileUploads;
use Illuminate\Support\Carbon;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use App\Traits\MustVerifyOtpCode;
use Laravel\Cashier\Subscription;
use App\Enums\User\UserStatusEnum;
use App\Enums\User\UserGenderEnum;
use Database\Factories\UserFactory;
use App\Enums\User\UserSubStatusEnum;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Jetstream\HasProfilePhoto;
use Modules\School\app\Models\EiClass;
use Modules\Payment\app\Models\Payment;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Models\Permission;
use Laravel\Sanctum\PersonalAccessToken;
use App\Enums\User\UserTeachingLevelEnum;
use Illuminate\Database\Eloquent\Builder;
use Modules\Schedule\app\Models\Schedule;
use App\Traits\Models\Scope\UserScopeTrait;
use Illuminate\Database\Eloquent\Collection;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Modules\Notification\app\Models\Notification;
use Modules\Payment\app\Models\PaymentCredential;
use Modules\Payment\app\Traits\Stripe\StripeTrait;
use App\Traits\Models\Functions\UserFunctionsTrait;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\General\app\Models\EducationInstitution;
use App\Traits\Models\Attributes\UserAttributesTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Modules\General\app\Models\EducationInstitutionUser;
use App\Traits\Models\Relationships\UserRelationshipsTrait;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string $uuid
 * @property string|null $stripe_id
 * @property string $email
 * @property string $password
 * @property Enum $status
 * @property mixed|null $sub_status
 * @property string $first_name
 * @property string $last_name
 * @property Enum|null $gender
 * @property array|null $languages
 * @property string|null $profile_photo_path
 * @property string $address
 * @property int $country_id
 * @property string $state
 * @property string $city
 * @property string|null $zip_code
 * @property string|null $timezone
 * @property string|null $phone
 * @property Enum|null $teaching_level
 * @property string|null $ip
 * @property string|null $bio
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $pm_type
 * @property string|null $pm_last_four
 * @property string|null $remember_token
 * @property Carbon|null $birth_at
 * @property string|null $trial_ends_at
 * @property Carbon|null $email_verified_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $password_set_token
 * @property Carbon|null $password_set_until
 * @property-read Country|null $country
 * @property-read UserDetail|null $detail
 * @property-read mixed $institution_id
 * @property-read mixed $institution_name
 * @property-read string $institution_type
 * @property-read EducationInstitutionUser|null $institution
 * @property-read Collection<int, EducationInstitution> $institutions
 * @property-read int|null $institutions_count
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read EiClass|null $myClass
 * @property-read Collection<int, EiClass> $myClasses
 * @property-read int|null $my_classes_count
 * @property-read Collection<int, Notification> $notifications
 * @property-read int|null $notifications_count
 * @property-read Collection<int, Occupation> $occupations
 * @property-read int|null $occupations_count
 * @property-read Collection<int, PaymentCredential> $paymentCredentials
 * @property-read int|null $payment_credentials_count
 * @property-read Payment|null $paymentEntity
 * @property-read Collection<int, Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read string $profile_photo_url
 * @property-read Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read Collection<int, Schedule> $schedule
 * @property-read int|null $schedule_count
 * @property-read UserSetting|null $settings
 * @property-read Collection<int, Subscription> $subscriptions
 * @property-read int|null $subscriptions_count
 * @property-read Collection<int, PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @property-read Collection<int, Notification> $unreadNotifications
 * @property-read int|null $unread_notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static Builder|User hasExpiredGenericTrial()
 * @method static Builder|User newModelQuery()
 * @method static Builder|User newQuery()
 * @method static Builder|User onGenericTrial()
 * @method static Builder|User onlyOrganisers()
 * @method static Builder|User permission($permissions, $without = false)
 * @method static Builder|User query()
 * @method static Builder|User role($roles, $guard = null, $without = false)
 * @method static Builder|User whereAddress($value)
 * @method static Builder|User whereBio($value)
 * @method static Builder|User whereBirthAt($value)
 * @method static Builder|User whereCity($value)
 * @method static Builder|User whereCountryId($value)
 * @method static Builder|User whereCreatedAt($value)
 * @method static Builder|User whereEmail($value)
 * @method static Builder|User whereEmailVerifiedAt($value)
 * @method static Builder|User whereFirstName($value)
 * @method static Builder|User whereGender($value)
 * @method static Builder|User whereId($value)
 * @method static Builder|User whereIp($value)
 * @method static Builder|User whereLanguages($value)
 * @method static Builder|User whereLastName($value)
 * @method static Builder|User wherePassword($value)
 * @method static Builder|User wherePasswordSetToken($value)
 * @method static Builder|User wherePasswordSetUntil($value)
 * @method static Builder|User wherePhone($value)
 * @method static Builder|User wherePmLastFour($value)
 * @method static Builder|User wherePmType($value)
 * @method static Builder|User whereProfilePhotoPath($value)
 * @method static Builder|User whereRememberToken($value)
 * @method static Builder|User whereState($value)
 * @method static Builder|User whereStatus($value)
 * @method static Builder|User whereStripeId($value)
 * @method static Builder|User whereSubStatus($value)
 * @method static Builder|User whereTeachingLevel($value)
 * @method static Builder|User whereTimezone($value)
 * @method static Builder|User whereTrialEndsAt($value)
 * @method static Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static Builder|User whereTwoFactorSecret($value)
 * @method static Builder|User whereUpdatedAt($value)
 * @method static Builder|User whereUuid($value)
 * @method static Builder|User whereZipCode($value)
 * @method static Builder|User withoutPermission($permissions)
 * @method static Builder|User withoutRole($roles, $guard = null)
 * @mixin Eloquent
 */
class User extends Authenticatable implements HasMedia, MustVerifyEmail
{
    use Billable;
    use HasRoles;
    use HasFactory;
    use Notifiable;
    use StripeTrait;
    use HasApiTokens;
    use HasUuidTrait;
    use HasFileUploads;
    use UserScopeTrait;
    use HasProfilePhoto;
    use MustVerifyOtpCode;
    use UserFunctionsTrait;
    use UserAttributesTrait;
    use UserRelationshipsTrait;
    use TwoFactorAuthenticatable;


    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_secret',
        'two_factor_recovery_codes',
    ];

    protected $fillable = [
        'bio',
        'uuid',
        'email',
        'state',
        'city',
        'phone',
        'gender',
        'status',
        'address',
        'password',
        'zip_code',
        'birth_at',
        'timezone',
        'stripe_id',
        'last_name',
        'languages',
        'country_id',
        'sub_status',
        'first_name',
        'teaching_level',
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
        'birth_at' => 'date',
        'languages' => 'array',
        'sub_status' => UserSubStatusEnum::class || null,
        'gender' => UserGenderEnum::class,
        'status' => UserStatusEnum::class,
        'teaching_level' => UserTeachingLevelEnum::class,
        'password_set_until' => 'datetime',
    ];

    protected $appends = [
        'profile_photo_url',
        'full_name',
    ];

    protected $with = ['detail', 'settings'];


    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class)->latest();
    }


    public function unreadNotifications(): HasMany
    {
        return $this->notifications()->whereNull('read_at');
    }


    protected function defaultProfilePhotoUrl(): string
    {
        return '';
    }
}
