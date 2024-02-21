<?php

namespace App\Facades;

use App\Models\AppSetting;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Collection;

class Settings
{
    public const USER_INVITE_LIFETIME = 'user_invite_lifetime';    // hours
    public const PERCENTAGE_PAYMENT_ORGANIZATION = 'percentage_payment_organization'; //money

    /** @var Collection|null */
    protected static $settings = null;


    public static function __callStatic(string $name, array $arguments)
    {
        return AppSetting::where('key', Str::snake($name))->value('value');
    }

    protected static function loadSettings(): void
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
}
