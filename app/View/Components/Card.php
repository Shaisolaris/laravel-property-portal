<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public function __construct(
        public string $type = 'default'
    )
    {

    }


    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Support\Htmlable|\Closure|string|\Illuminate\Contracts\Foundation\Application
    {
        return view('components.card');
    }
}
