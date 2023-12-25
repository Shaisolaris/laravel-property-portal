<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Badge extends Component
{
    public function __construct(
        public string $size = '',
        public readonly string $text = '',
        public string $type = '',
        public readonly string $variable = 'beige',
    )
    {
        $this->type = $this->type === 'bordered' ? 'border border-gainsboro' : '';
    }


    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Support\Htmlable|\Closure|string|\Illuminate\Contracts\Foundation\Application
    {
        return view('components.badge');
    }
}
