<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Laravel\Cashier\Events\WebhookReceived;
use Modules\Payment\app\Listeners\StripeListener;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        WebhookReceived::class => [
            StripeListener::class,
        ],
    ];

    protected $observers = [
    ];


    public function boot(): void
    {
        //
    }


    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
