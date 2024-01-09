<?php

namespace App\View\Components;

use Illuminate\View\View;
use Illuminate\View\Component;

class Modal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $title,
        public readonly string $target,
        public string $method = 'post',
        public bool $action = false,
        public bool $isTopic = false,
    ) {}


    public function render(): View
    {
        return view('components.modal');
    }
}
