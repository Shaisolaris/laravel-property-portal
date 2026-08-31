<?php

namespace Modules\Notification\app\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Modules\Notification\Entities\Notification;
use Illuminate\Auth\Access\HandlesAuthorization;

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
