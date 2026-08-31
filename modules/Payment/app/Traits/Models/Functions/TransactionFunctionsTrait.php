<?php

namespace Modules\Payment\app\Traits\Models\Functions;

use App\Models\User;
use Modules\Payment\app\Models\Payment;

trait TransactionFunctionsTrait
{
    public static function getBalance(User $user)
    {
        if ($user->isOrganizer()) {
            $ids = Payment::where('organizer_id', $user->id)->pluck('id');
            return self::whereIn('model_id', $ids)->sum('amount');
        }

        return 0;
    }
}
