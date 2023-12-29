<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Date extends Component
{
    public function __construct(
        public mixed $value,
        public string $format = 'Y-m-d'
    )
    {

    }

    public function render(): View
    {
        return view('components.date');
    }
}
