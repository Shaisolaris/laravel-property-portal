<?php

namespace App\View\Components;

use Illuminate\View\View;
use Illuminate\View\Component;

class Collapse extends Component
{
    public function __construct(
        public string $text,
        public string $target,
        public string $buttonText,
    )
    {

    }


    public function render():View
    {
        return view('components.collapse');
    }
}
