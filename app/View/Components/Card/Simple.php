<?php

namespace App\View\Components\Card;

use Illuminate\View\Component;

class Simple extends Component
{
    public function __construct(
        public string $type = 'default',
        public string $classes = ''
    ) {}

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('components.card.simple');
    }
}
