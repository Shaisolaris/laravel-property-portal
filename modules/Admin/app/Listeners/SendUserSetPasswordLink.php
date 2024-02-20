<?php

namespace Modules\Admin\app\Listeners;

use Modules\Admin\app\Events\UserCreatedByAdmin;
use Modules\Admin\app\Services\UserService;

class SendUserSetPasswordLink
{
    /**
     * Create the event listener.
     */
    public function __construct(protected UserService $userService)
    {

    }

    /**
     * Handle the event.
     */
    public function handle(UserCreatedByAdmin $event): void
    {
        $this->userService->sendSetPasswordLink($event->user, true);
    }

}
