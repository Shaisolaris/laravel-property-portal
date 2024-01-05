<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BaseSwitch extends Component
{
    public function __construct(
        public string $name = '',
        public string $size = '',
        public string $label = '',
        public bool $checked = false,
    )
    {

    }


    public function render(): \Illuminate\Contracts\View\View
    {
        return view('components.base-switch');
    }
}
