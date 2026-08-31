<?php

namespace Modules\Payment\app\Http\Resources;

use App\Facades\MorphChoice;
use Illuminate\Support\Number;
use Modules\Payment\app\Models\Transaction;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Payment\app\Enums\TransactionStatusEnum;

/* @mixin Transaction */
class HistoryResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'fee' => $this->fee,
            'model_name' => $this->paymentEntity?->model?->value('name'),
            'model_link' => MorphChoice::switchRoute($this->paymentEntity?->model),
            'student' => $this->paymentEntity?->student?->full_name,
            'amount' => '$' . Number::format($this->amount, 2),
            'payment_id' => $this->transaction_id,
            'status' => $this->status->label,
            'badgeClass' => TransactionStatusEnum::getBadgeClass($this->status->label),
            'created' => $this->created_at->format('M j, Y'),
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'created_ago' => $this->created_at->diffForHumans()
        ];
    }
}
