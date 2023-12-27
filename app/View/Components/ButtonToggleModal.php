<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ButtonToggleModal extends Component
{
    public function __construct(
        public string $key,
        public string $target,
        public readonly string $icon = '',
        public readonly string $viewType = 'default',
        public readonly string $variable = 'light-blue',
    )
    {
    }

    public function render(): View
    {
        return view('components.button-toggle-modal');
    }
}
