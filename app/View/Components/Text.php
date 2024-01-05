<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Text extends Component
{
    public function __construct(public string $key)
    {
    }

    public function render(): View
    {
        return view('components.text');
    }
}
