<?php

namespace Modules\Admin\app\Http\Resources;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\MediaResource;
use App\Http\Resources\UserRoleResource;
use App\Http\Resources\UserDetailResource;
use App\Http\Resources\UserSettingResource;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin User
 * @property mixed $fullName
 */
class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'uuid'         => $this->uuid,
            'first_name'   => $this->first_name,
            'last_name'    => $this->last_name,
            'email'        => $this->email,
            'avatar'       => $this->profile_photo_url,
            'full_name'    => $this->fullName,
            'birth_at'     => $this->birth_at?->format('d M, Y'),
            'gender'       => $this->gender,
            'gender_label' => $this->gender?->label,
            'bio'          => $this->bio,
            'status'       => $this->status,
            'status_label' => $this->status->label,
//            'balance'      => Number::format($this->balance),

            'address'  => $this->address,
            'country'  => $this->country->name,
            'state'    => $this->state,
            'city'     => $this->city,
            'timezone' => $this->timezone,
            'phone'    => $this->phone,
            //            'teaching_level' => $this->teaching_level,

            'institution_type' => $this->institution_type,
            'institution_name' => $this->institution_name,

            'can_resend_password_link' => !$this->password && $this->password_set_token,

            //            'notifications' => NotificationResource::collection($this->whenLoaded('unreadNotifications')),
            'media'            => MediaResource::collection($this->whenLoaded('media')),
            'settings'         => UserSettingResource::make($this->whenLoaded('settings')),
            'detail'           => UserDetailResource::make($this->whenLoaded('detail')),
            'role'             => $this->whenLoaded('roles', function () {
                return UserRoleResource::make($this->roles()->with('permissions')->first());
            }),
        ];
    }
}
