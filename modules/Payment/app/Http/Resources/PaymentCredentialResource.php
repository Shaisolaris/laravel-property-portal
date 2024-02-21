<?php

namespace Modules\Payment\app\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Payment\app\Models\PaymentCredential;

/** @mixin PaymentCredential */
class PaymentCredentialResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'uuid' => $this->uuid,
            'user_id' => $this->user_id,
            'card_number' => $this->card_number,
            'expiry_year' => $this->expiry_year,
            'expiry_month' => $this->expiry_month,
            'card_holder_name' => $this->card_holder_name,
        ];
    }
}
