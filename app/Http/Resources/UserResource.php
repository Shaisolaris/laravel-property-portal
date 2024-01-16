<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Notification\Http\Resources\NotificationResource;

/** @mixin User */
class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'uuid' => $this->uuid,
            'firstName' => $this->first_name,
            'lastName' => $this->last_name,
            'email' => $this->email,
            'fullName' => "$this->first_name $this->last_name",
            'avatar' => $this->profile_photo_url,
            'notifications' => NotificationResource::collection($this->whenLoaded('unreadNotifications')),
            'media' => MediaResource::collection($this->whenLoaded('media')),
            'role' => $this->whenLoaded('roles', function () {
                return new UserRoleResource($this->roles()->with('permissions')->first());
            }),
        ];
    }
}
