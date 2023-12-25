<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Avatar extends Component
{
    public function __construct(
        public string $src,
        public string $rounded = '',
        public readonly string $size = '',
    )
    {

    }


    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Support\Htmlable|\Closure|string|\Illuminate\Contracts\Foundation\Application
    {
        return view('components.avatar');
    }
}
