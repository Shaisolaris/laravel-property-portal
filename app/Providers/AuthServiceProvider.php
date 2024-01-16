<?php

namespace App\Providers;

use App\Models\UserSetting;
use App\Policies\UserSettingPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        UserSetting::class => UserSettingPolicy::class,
    ];


    public function boot(): void
    {
        //
    }
}
