<?php

namespace Modules\Admin\app\Http\Resources;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin User
 */
class ProfileResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'first_name'   => $this->first_name,
            'last_name'    => $this->last_name,
            'email'        => $this->email,
            'avatar'       => $this->profile_photo_url,
            'gender'       => $this->gender,
            'gender_label' => $this->gender?->label,
            'bio'          => $this->bio,

            'address'    => $this->address,
            'country_id' => $this->country_id,
            'state'      => $this->state,
            'city'       => $this->city,
            'phone'      => $this->phone,
        ];
    }
}
