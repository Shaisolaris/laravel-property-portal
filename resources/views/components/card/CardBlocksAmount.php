<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CardBlocksAmount extends Component
{
    public function __construct(
        public string $cols,
        public array $items,
    )
    {

    }

    public function render(): View
    {
        return view('components.card-blocks-amount');
    }
}
