<?php

namespace Modules\School\app\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Support\Number;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\School\app\Models\EiClass;

/** @mixin EiClass */
class EiClassSelectResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'value' => $this->id,
            'label' => $this->name,
        ];
    }
}
