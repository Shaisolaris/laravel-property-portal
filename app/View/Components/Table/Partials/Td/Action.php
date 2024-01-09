<?php

namespace App\View\Components\Table\Partials\Td;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Action extends Component
{
    public function __construct(
        public array $items = [],
        public mixed $body = null
    )
    {
    }

    public function render(): View
    {
        return view('components.table.partials.td.action');
    }
}
