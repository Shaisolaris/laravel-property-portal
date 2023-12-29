<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class PartialIcon extends Component
{
    public function __construct(
        public string $icon
    )
    {
    }

    public function render(): View
    {
        return view('components.partial-icon');
    }
}
