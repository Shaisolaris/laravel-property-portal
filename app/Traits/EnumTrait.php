<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait EnumTrait
{
    protected static function values(): \Closure
    {
        return fn (string $value) => Str::snake($value);
    }


    protected static function labels(): \Closure
    {
        return fn (string $value) => Str::ucfirst($value);
    }
}