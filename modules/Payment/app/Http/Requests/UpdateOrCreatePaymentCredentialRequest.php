<?php

namespace Modules\Payment\app\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class UpdateOrCreatePaymentCredentialRequest extends FormRequest
{
    public function rules(): array
    {
        $year = Carbon::now()->year;

        return [
            'cards' => 'required|array',
            'cards.*.card_number' => 'required|string|max:21',
            'cards.*.card_holder_name' => 'required|string',
            'cards.*.expiry_month' => 'required|numeric|min:1|max:12',
            'cards.*.expiry_year' => "required|numeric|min:$year|max:" . $year + 40,
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
