<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Submit extends Component
{
    public function __construct(public string $icon = '', public string $key = '')
    {
    }

    public function render(): View
    {
        return view('components.button.submit');
    }
}
