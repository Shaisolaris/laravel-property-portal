<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Points extends Component
{
    public function __construct(
        public int $amount,
        public string $bgColor = 'dim-gray'
    )
    {
    }


    public function render(): View
    {
        return view('components.points');
    }
}
