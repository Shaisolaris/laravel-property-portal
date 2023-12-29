<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Filtering extends Component
{
    public function render(): View
    {
        return view('components.table.partials.filtering');
    }
}
