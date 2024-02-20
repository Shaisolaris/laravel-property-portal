<?php

namespace App\Providers;

use Modules\School\app\Models\EiClass;
use App\Policies\EiClassSubjectPolicy;
use Modules\School\app\Models\EiClassSubject;
use Modules\School\app\Policies\EiClassPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
//        EiClass::class => EiClassPolicy::class,
//        EiClassSubject::class => EiClassSubjectPolicy::class,
    ];


    public function boot(): void
    {
        //
    }
}
