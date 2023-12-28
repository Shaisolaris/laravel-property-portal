<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    public function __construct(
        public string $type,
        public array $headItems,
        public mixed $body = null,
        public mixed $pagination = null,
    )
    {
        //
    }


    public function render(): \Illuminate\Contracts\View\View
    {
        return view('components.table');
    }
}
