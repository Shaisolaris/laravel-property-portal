<?php

namespace Modules\Notification\Observers;

use Illuminate\Support\Str;
use Modules\Notification\Entities\Notification;

class NotificationObserver
{
    public function creating(Notification $notification): void
    {
        $notification->uuid = Str::uuid()->toString();
    }
}
