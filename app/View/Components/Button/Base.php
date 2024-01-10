<?php

namespace App\View\Components\Button;

use App\View\ExtendComponent;

class Base extends ExtendComponent
{
    public function __construct(
        public string $key = '',
        public mixed $body = null,
        public readonly string $icon = '',
        public readonly string $type = 'button',
        public readonly string $viewType = 'default',
        public readonly string $variable = 'light-blue',
    ) {}

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('components.button.base');
    }
}
