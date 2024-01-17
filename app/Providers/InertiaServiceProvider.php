<?php

namespace App\Providers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\ServiceProvider;

class InertiaServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        RedirectResponse::macro('flash', function ($type, string $text) {
            session()->flash($type, ['type' => $type, 'text' => $text]);

            return $this;
        });

        RedirectResponse::macro('info', function (string $text) {
            return $this->flash('info', $text);
        });

        RedirectResponse::macro('success', function (string $text) {
            return $this->flash('success', $text);
        });

        RedirectResponse::macro('warning', function (string $text) {
            return $this->flash('warning', $text);
        });

        RedirectResponse::macro('error', function (string $text) {
            return $this->flash('error', $text);
        });
    }


    public function boot(): void
    {

    }
}
