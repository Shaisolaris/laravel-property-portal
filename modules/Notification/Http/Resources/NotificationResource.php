<?php

namespace Modules\Notification\Http\Resources;

use Illuminate\Http\Request;
use Modules\Notification\Entities\Notification;
use Modules\Content\Http\Resources\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Notification */
class NotificationResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'uuid' => $this->uuid,
            'text' => $this->text,
            'is_seen' => $this->is_seen,
            'created_at' => $this->created_at->diffForHumans(),
            'user' => new UserResource($this->senderUser),
        ];
    }
}
