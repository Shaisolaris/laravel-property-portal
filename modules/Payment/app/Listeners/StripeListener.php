<?php

namespace Modules\Payment\app\Listeners;

use Laravel\Cashier\Events\WebhookReceived;
use Modules\Payment\app\Jobs\TransactionJob;

class StripeListener
{
    public function handle(WebhookReceived $event): void
    {
        TransactionJob::dispatch($event->payload['type'], $event->payload);
    }
}
