<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public function __construct(
        public string $key,
        public readonly string $icon = '',
        public readonly string $type = 'button',
        public readonly string $viewType = 'default',
        public readonly string $variable = 'light-blue',
    ) {

    }


    public function render(): \Illuminate\Contracts\View\View
    {
        return view('components.button');
    }
}
