<?php

namespace App\Providers;

use Illuminate\Support\Arr;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
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
