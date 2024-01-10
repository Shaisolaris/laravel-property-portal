<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Simple extends Component
{
    public function __construct(
        public string $key = '',
        public string $href = '',
        public string $icon = '',
        public string $type = 'submit'
    )
    {
    }

    public function render(): View
    {
        return view('components.button.simple');
    }
}
