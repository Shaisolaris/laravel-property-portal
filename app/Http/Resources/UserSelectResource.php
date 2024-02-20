<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin User */
class UserSelectResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'value' => $this->id,
            'label' => $this->full_name,
        ];
    }
}
