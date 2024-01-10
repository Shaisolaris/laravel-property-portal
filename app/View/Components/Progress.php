<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Progress extends Component
{
    public function __construct(
        public int $min = 0,
        public int $max = 100,
        public float $percentage = 0,
        public string $variable = 'primary',
    )
    {

    }


    public function render(): View
    {
        return view('components.progress');
    }
}
