<?php

namespace App\Providers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\ServiceProvider;

class InertiaServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        RedirectResponse::macro('flash', function ($type, string $text) {
            session()->flash($type, [
                'text' => $text,
                'options' => [
                    'position' => 'top-right',
                    'hideProgressBar' => true,
                    'className' => "bg-$type text-white",
                ]
            ]);

            return $this;
        });

        RedirectResponse::macro('info', function (string $text) {
            return $this->flash('primary', $text);
        });

        RedirectResponse::macro('success', function (string $text) {
            return $this->flash('success', $text);
        });

        RedirectResponse::macro('warning', function (string $text) {
            return $this->flash('warning', $text);
        });

        RedirectResponse::macro('error', function (string $text) {
            return $this->flash('danger', $text);
        });
    }


    public function boot(): void
    {

    }
}
