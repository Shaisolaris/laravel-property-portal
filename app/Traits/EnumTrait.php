<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait EnumTrait
{
    protected static function values(): \Closure
    {
        return fn (string $value) => Str::lower(Str::snake($value));
    }


    protected static function labels(): \Closure
    {
        return function (string $value): string {
            if (preg_match('/[A-Z].*[A-Z]/', $value)) {
                return preg_replace_callback('/(.)([A-Z])/', function ($matches) {
                    return $matches[1] . ' ' . Str::ucfirst($matches[2]);
                }, $value);
            } else {
                return Str::ucfirst($value);
            }
        };
    }


    public static function implode(): string
    {
        return collect(self::toValues())->implode(',');
    }


    public static function getLabelsValues(): array
    {
        $values = self::toValues();
        $labels = self::toLabels();

        return array_map(function ($label, $value) {
            return ['label' => $label, 'value' => $value];
        }, $labels, $values);
    }
}
