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

    public static function getTimezoneDate(string|null $date, string $format = 'Y-m-d H:i'): string|null
    {
        if (!$date) {
            return $date;
        }

        $timezone = auth()->user()->timezone;

        if(!$timezone || $timezone == 'default') {
            $timezone = date_default_timezone_get();
        }

        return Carbon::parse($date)->timezone($timezone)->format($format);
    }

    protected static function getFacadeAccessor(): string
    {
        return 'Time';
    }
}
