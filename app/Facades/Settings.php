<?php

namespace App\Facades;

use App\Models\AppSetting;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;


/**
 * @method static userInviteLifetime(): integer
 * @method static percentagePaymentOrganization(): float
 * @method static freeCourses(): integer
 * @method static numberPaymentCredential(): integer
 */

class Settings
{
    public const USER_INVITE_LIFETIME = 'user_invite_lifetime';    // hours
    public const PERCENTAGE_PAYMENT_ORGANIZATION = 'percentage_payment_organization'; //money
    public const FREE_COURSES = 'free_courses'; // number
    public const NUMBER_PAYMENT_CREDENTIAL = 'number_payment_credential'; // number


    /** @var Collection|null */
    protected static $settings = null;

    protected static function loadSettings()
    {
        if(!is_null(self::$settings)) {
            return;
        }

        self::$settings = AppSetting::all()->pluck('value', 'key');
    }

    public static function get(string $key)
    {
        self::loadSettings();

        return self::$settings->get($key) ?? null;
    }

    public static function __callStatic(string $name, array $arguments)
    {
        return self::get(Str::snake($name));
    }

//    public static function userInviteLifetime()
//    {
//        return self::get(self::USER_INVITE_LIFETIME);
//    }

}
