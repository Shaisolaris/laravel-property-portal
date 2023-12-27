<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Badge extends Component
{
    public function __construct(
        public string $key,
        public string $size = '',
        public string $type = '',
        public readonly string $variable = 'beige',
    )
    {
        $this->type = $this->type === 'bordered' ? 'border border-gainsboro' : '';
    }


    public function render(): \Illuminate\Contracts\View\View
    {
        return view('components.badge');
    }
}
