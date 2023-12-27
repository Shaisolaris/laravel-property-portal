<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Icon extends Component
{
    public string $symbolId;

    public function __construct(public string $name, public readonly string $color = '')
    {
        $this->symbolId = "#icon-$name";
    }


    public function render(): \Illuminate\Contracts\View\View
    {
        return view('components.icon');
    }
}
