<?php

namespace App\Http\Resources;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Country */
class CountryResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'value' => $this->id,
            'code' => $this->code,
            'name' => $this->name,
            'label' => $this->name,
            'local_name' => $this->local_name,
            'is_free' => $this->is_free,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
