<?php

namespace App\View\Components\Table\Partials;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Body extends Component
{
    public function render(): View
    {
        return view('components.table.partials.body');
    }
}
