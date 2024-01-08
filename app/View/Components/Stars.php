<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Stars extends Component
{
    public function __construct(
        public float $value = 0.0,
        public bool $simple = false
    )
    {

    }


    public function render(): View
    {
        return view('components.stars');
    }
}
