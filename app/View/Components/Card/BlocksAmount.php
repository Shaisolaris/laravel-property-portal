<?php

namespace App\View\Components\Card;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class BlocksAmount extends Component
{
    public function __construct(
        public string $cols,
        public array $items,
    )
    {

    }

    public function render(): View
    {
        return view('components.card.blocks-amount');
    }
}
