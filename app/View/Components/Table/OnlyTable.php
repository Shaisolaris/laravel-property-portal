<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class OnlyTable extends Component
{
    public function __construct(
        public string $keyHeader,
        public string $align = '',
        public mixed  $body = null,
        public array  $headItems = [],
        public mixed  $pagination = null,
        public mixed  $filterSort = null,
        public string $variable = '',
        public string $type = 'rounded-tr-border',
    )
    {
        $this->headItems = $this->setHeadItems();
    }


    private function setHeadItems(): array
    {
        $keys = [];

        foreach (trans("translation.table.headers.$this->keyHeader") as $index => $item) {
            $keys[] = "$this->keyHeader.$index";
        }

        return $keys;
    }

    public function render(): View
    {
        return view('components.table.only-table');
    }
}
