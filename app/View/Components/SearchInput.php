<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class SearchInput extends Component
{
    public function __construct(
        public string $placeholder
    )
    {
    }

    public function render(): View
    {
        return view('components.search-input');
    }
}
