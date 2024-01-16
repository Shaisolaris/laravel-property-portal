<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TimezoneResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->resource,
            'value' => $this->resource,
            'disabled' => false,
            'active' => true
        ];
    }
}
