<?php

namespace App\Providers;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Number;
use Illuminate\Support\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Resources\Json\JsonResource;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {

    }


    public function boot(): void
    {
        $this->macros();

        JsonResource::withoutWrapping();
    }


    private function macros(): void
    {
        /* ARR */
        Arr::macro('renameKey', function (array $keys, string $oldKey, string $newKey) {
            if (isset($keys[$oldKey])) {
                $keys[$newKey] = $keys[$oldKey];

                unset($keys[$oldKey]);
            }

            return $keys;
        });

        Arr::macro('renameKeys', function (array $keys, array $oldKeys, array $newKeys) {
            if (!empty($oldKeys) && !empty($newKeys) && count($oldKeys) == count($newKeys)) {
                for ($i = 0; $i < count($oldKeys); $i++) {
                    if (isset($keys[$oldKeys[$i]])) {
                        $keys[$newKeys[$i]] = $keys[$oldKeys[$i]];
                        unset($keys[$oldKeys[$i]]);
                    }

                    continue;
                }
            }

            return $keys;
        });

        Arr::macro('unique', function (array $data) {
            return array_unique($data);
        });

        Arr::macro('randStr', function (array $keys) {
            $randomKey = array_rand($keys);

            return $keys[$randomKey];
        });
        /**/


        /* NUMBER */
        Number::macro('percentage_', function (int|float $number, int|float $percent) {
            return ($number * $percent) / 100;
        });

        Number::macro('random', function ($length = 16) {
            $numbers = '1234567890';
            $number = '';

            for ($i = 0; $i < $length; $i++) {
                $number .= $numbers[rand(0, strlen($numbers) - 1)];
            }

            return $number;
        });

        Number::macro('round', function (int|float|null $number) {
            if (is_null($number)) {
                return 0;
            }

            $base = floor($number);

            $fraction = $number - $base;

            if ($fraction < 0.5) {
                return $base;
            } elseif ($fraction > 0.5) {
                return $base + 1;
            } else {
                return $base + 0.5;
            }
        });
        /**/


        /* STR */
        Str::macro('randomLetters', function ($length = 16) {
            $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
            $str = '';

            for ($i = 0; $i < $length; $i++) {
                $str .= $letters[rand(0, strlen($letters) - 1)];
            }

            return $str;
        });


        Str::macro('generateID', function (string $firstLetters, $length = 1) {
            $now = Carbon::now()->format('ymd');
            $random = Number::random($length);

            return "$firstLetters$now$random";
        });
        /**/
    }
}
