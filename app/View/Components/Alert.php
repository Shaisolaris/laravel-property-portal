<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public function __construct(
        public string $key,
        public string $variable = 'beige'
    )
    {

    }

    public function render(): \Illuminate\Contracts\View\View|string|\Closure
    {
        return view('components.alert');
    }
}
