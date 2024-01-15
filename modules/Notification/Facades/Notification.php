<?php

namespace Modules\Notification\Facades;

use App\Enums\NotificationType;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Facade;
use Modules\Chat\Entities\ChannelMessage;
use Modules\Content\Entities\Offer;
use Modules\Content\Entities\Order;
use Modules\Content\Entities\Post;
use Modules\Content\Entities\Product;
use Modules\Profile\Entities\Follower;

class Notification extends Facade
{
    public static function push(User $user, User $sender, Model $model, string $type): \Modules\Notification\Entities\Notification
    {
        return \Modules\Notification\Entities\Notification::updateOrCreate([
            'user_id' => $user->id,
            'sender_user_id' => $sender->id,
            'model_type' => $model->getMorphClass(),
            'model_id' => $model->uuid,
            'type' => $type
            ], [
            'text' => self::generateText($type),
        ]);
    }

    public static function reject(User $user, User $sender, Model $model, string $type): ?bool
    {
        return \Modules\Notification\Entities\Notification::whereUserId($user->id)
            ->whereSenderUserId($sender->id)
            ->whereModelType($model->getMorphClass())
            ->whereModelId($model->uuid)
            ->whereType($type)
            ->first()
            ->delete();
    }

    public static function generateText(string $type): string
    {
        $types = [
            NotificationType::LIKE => 'liked your post',
            NotificationType::COMMENT => 'commented your post',
            NotificationType::FOLLOWER => 'started following you',
            NotificationType::OFFER => 'sent you an offer',
            NotificationType::ORDER => 'accept your offer',
            NotificationType::CHAT => 'you have a message',
        ];

        return $types[$type];
    }

    public static function routeBinding(\Modules\Notification\Entities\Notification $notification)
    {
        $routes = [
            Post::class => route('post.show', $notification->model_id),
            Product::class => route('product.show', $notification->model_id),
            Follower::class => route('profile.show', $notification->senderUser->username),
            Offer::class => route('profile.offers.show', $notification->model_id),
            Order::class => route('profile.orders.show', $notification->model_id),
            ChannelMessage::class => route('chat.show', $notification->model->channel->uuid),
        ];

        return $routes[$notification->model_type];
    }

    protected static function getFacadeAccessor(): string
    {
        return 'Notification';
    }
}
