<?php

namespace Modules\Admin\app\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Modules\Admin\app\Events\UserCreatedByAdmin;
use Modules\Admin\app\Listeners\SendUserSetPasswordLink;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        UserCreatedByAdmin::class => [
            SendUserSetPasswordLink::class,
        ],
    ];

    /**
     * The subscriber classes to register.
     *
     * @var array
     */
    protected $subscribe = [
    ];



    public function boot(): void
    {

    }


    public function shouldDiscoverEvents(): bool
    {
        return false;
    }

}
