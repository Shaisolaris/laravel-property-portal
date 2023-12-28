<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Date extends Component
{
    public function __construct(
        public string $value,
        public string $format,
    )
    {

    }


    public function render(): \Illuminate\Contracts\View\View|string|\Closure
    {
        return view('components.date');
    }
}
