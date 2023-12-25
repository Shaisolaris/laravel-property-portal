<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Link extends Component
{
    public function __construct(
        public string $href,
        public string $text,
        public readonly string $variable = 'primary',
    )
    {

    }


    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Support\Htmlable|string|\Closure|\Illuminate\Contracts\Foundation\Application
    {
        return view('components.link');
    }
}
