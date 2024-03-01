<?php

namespace Modules\Admin\app\Notifications;

use App\Models\User;
use App\Models\UserPasswordToken;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\URL;

class UserSetPasswordLinkNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     */
    public function via($notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage())
            ->subject(Lang::get('Registration: set password'))
            ->line(Lang::get('Please set your password and finish registration.'))
            ->action(Lang::get('Set password'), $this->createLink($notifiable))
            ->line(Lang::get('If you did not create an account, no further action is required.'));
        ;
    }

    /**
     * Get the array representation of the notification.
     */
    public function toArray($notifiable): array
    {
        return [];
    }

    protected function createLink(User $user)
    {

        /** @var UserPasswordToken $token */
        $token = $user->passwordToken()->first();

        return URL::temporarySignedRoute(
            'register.set-password.form',
            $token->valid_until,
            [
                'uuid' => $user->uuid,
                'token' => $token->token
            ],
        );
    }
}
