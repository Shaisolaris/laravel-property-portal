<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Link extends Component
{
    public function __construct(
        public string $key,
        public string $href,
        public string $icon = '',
        public readonly string $variable = 'royal-blue',
    )
    {

    }


    public function render(): \Illuminate\Contracts\View\View
    {
        return view('components.link');
    }
}
