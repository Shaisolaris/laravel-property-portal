<?php

namespace App\View\Components\Card;

use Illuminate\View\Component;

class Card extends Component
{
    public function __construct(
        public string $type = 'default'
    )
    {

    }


    public function render(): \Illuminate\Contracts\View\View
    {
        return view('components.card.card');
    }
}
