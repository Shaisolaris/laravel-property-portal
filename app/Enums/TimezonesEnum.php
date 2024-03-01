<?php

namespace App\Enums;

use App\Traits\EnumTrait;
use DateTime;
use DateTimeZone;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Africa()
 * @method static self America()
 * @method static self Antarctica()
 * @method static self Aisa()
 * @method static self Atlantic()
 * @method static self Europe()
 * @method static self Indian()
 * @method static self Pacific()
 */
class TimezonesEnum extends Enum
{
    use EnumTrait;

    protected static function values(): array
    {
        return [
            'Africa' => DateTimeZone::AFRICA,
            'America' => DateTimeZone::AMERICA,
            'Antarctica' => DateTimeZone::ANTARCTICA,
            'Aisa' => DateTimeZone::ASIA,
            'Atlantic' => DateTimeZone::ATLANTIC,
            'Europe' => DateTimeZone::EUROPE,
            'Indian' => DateTimeZone::INDIAN,
            'Pacific' => DateTimeZone::PACIFIC,
        ];
    }

    /**
     * @throws \Exception
     */
    public static function list($groped = false): array
    {
        $timezones = [];
        $regions = self::values();

        foreach ($regions as $name => $mask) {
            $zones = DateTimeZone::listIdentifiers($mask);
            foreach($zones as $timezone) {
                $time = new DateTime(null, new DateTimeZone($timezone));
                $ampm = $time->format('H') > 12 ? ' ('. $time->format('g:i a'). ')' : '';
                $timezones[$name][$timezone] = substr($timezone, strlen($name) + 1) . ' - ' . $time->format('H:i') . $ampm;
            }
        }

        return !$groped ? collect($timezones)->flatMap(fn ($timezone) => $timezone)->all() : $timezones;
    }
}
