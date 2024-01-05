<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Icon extends Component
{
    public function __construct(public string $iconClass = '')
    {
    }


    public function render(): \Illuminate\Contracts\View\View
    {
        return view('components.icon');
    }
}
