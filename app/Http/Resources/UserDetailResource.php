<?php

namespace App\Http\Resources;

use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/* @mixin UserDetail */
class UserDetailResource extends JsonResource
{
    // TODO:: need reconsider this resource
    public function toArray(Request $request): array
    {
        return [
            'extra_information' => $this->extra_information,
            'media' => MediaResource::collection($this->whenLoaded('media')),
        ];
    }
}
