<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Tabs extends Component
{
    public function __construct(
        public array $tabNavItems,
        public mixed $tabContent = null,

    )
    {

    }


    public function render(): \Illuminate\Contracts\View\View|string|\Closure
    {
        return view('components.tabs');
    }
}
