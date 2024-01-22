<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserDetail extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'account_type' => $this->account_type,
            'account_holder_name' => $this->account_holder_name,
            'account_number' => $this->account_number,
            'extra_information' => $this->extra_information,
        ];
    }
}
