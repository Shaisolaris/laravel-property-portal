<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Dropdown extends Component
{
    public function render(): View
    {
        return view('components.button.dropdown');
    }
}
