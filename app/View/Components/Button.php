<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{

    public function __construct(
        public readonly string $type = 'button',
        public readonly string $variable = 'light-blue',
        public readonly string $viewType = 'default',
        public readonly string $text = '',
        public readonly string $icon = ''
    ) {}


    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Support\Htmlable|string|\Closure|\Illuminate\Contracts\Foundation\Application
    {
        return view('components.button');
    }
}
