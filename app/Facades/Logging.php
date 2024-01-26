<?php

namespace App\Facades;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Facade;

/** Facade for centralize all errors in project. */
class Logging extends Facade
{
    public static function createStripeLog(string $message): void
    {
        Log::channel('stripe')->error($message);
    }


    public static function createChargeLog(string $message): void
    {
        Log::channel('charge')->error($message);
    }


    public static function createBalanceLog(string $message): void
    {
        Log::channel('balance')->error($message);
    }


    public static function createErrorLog(string $message): void
    {
        Log::channel('error')->error($message);
    }


    public static function createDefaultLog(string $message): void
    {
        Log::error($message);
    }

    protected static function getFacadeAccessor(): string
    {
        return 'Logging';
    }
}
