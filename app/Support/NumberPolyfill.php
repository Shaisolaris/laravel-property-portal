<?php

namespace Illuminate\Support;

use Illuminate\Support\Traits\Macroable;

if (! class_exists(Number::class)) {
    /**
     * Temporary polyfill for Illuminate\Support\Number, which was introduced
     * in Laravel 10. Provides the subset of the API used by this application
     * so it can run on Laravel 8 and 9. Safe to delete once the application
     * runs on Laravel 10 or newer, the class_exists guard prevents any
     * redeclaration once the real class is available.
     */
    class Number
    {
        use Macroable;

        public static function format(int|float $number, int $precision = 0, ?int $maxPrecision = null, ?string $locale = null): string
        {
            return number_format($number, $precision, '.', ',');
        }

        public static function percentage(int|float $number, int $precision = 0): string
        {
            return static::format($number, $precision).'%';
        }
    }
}
