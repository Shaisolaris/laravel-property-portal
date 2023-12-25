<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class IconBorder extends Component
{
    public function __construct(
        public int $size = 12,
        public int $rounded = 12,
        public string $icon = '',
        public string $iconType = 'default',
    )
    {

    }

    public function render(): View
    {
        return view('components.icon-border');
    }
}
