<?php

namespace App\View\Components\Card;

use Illuminate\View\Component;

class Little extends Component
{
    public function __construct()
    {
        //
    }


    public function render(): \Illuminate\Contracts\View\View
    {
        return view('components.card.little');
    }
}
