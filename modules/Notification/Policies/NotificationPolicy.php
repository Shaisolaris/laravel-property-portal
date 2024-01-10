<?php

namespace Modules\Notification\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Notification\Entities\Notification;

class NotificationPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user, Notification $notification = null): Response|bool
    {
        //        return $notification?->user_id === $user->id ? $this->allow() : $this->denyAsNotFound();
        return true;
    }

    public function view(User $user, Notification $notification): Response|bool
    {
        return $notification->user_id === $user->id ? $this->allow() : $this->denyAsNotFound();
    }
}
