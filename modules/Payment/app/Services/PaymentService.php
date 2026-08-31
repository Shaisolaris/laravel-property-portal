<?php

namespace Modules\Payment\app\Services;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class PaymentService
{
    public function getHistory(User $user, int $perPage): LengthAwarePaginator|Collection
    {
        dd($user->institution->institution->transactions());
        return collect();
        return $user->institution->institution->transactions()->latest()->paginate($perPage);
    }
}
