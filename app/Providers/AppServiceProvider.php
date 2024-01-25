<?php

namespace App\Providers;

use Illuminate\Support\Arr;
use Laravel\Cashier\Cashier;
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
    }
}
