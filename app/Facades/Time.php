<?php

namespace App\Facades;

use Carbon\Carbon;
use Illuminate\Support\Facades\Facade;

class Time extends Facade
{
    public static function timeLimit(string|null $startedAt, int $durationMinutes): float|int
    {
        $now = Carbon::now();
        $time = 0;

        if ($startedAt) {
            $expirationTime = Carbon::parse($startedAt)->addMinutes($durationMinutes);

            if ($expirationTime->isFuture()) {
                $time = $expirationTime->diffInSeconds($now);
            }
        }

        return $time;
    }



    protected static function getFacadeAccessor(): string
    {
        return 'Time';
    }
}