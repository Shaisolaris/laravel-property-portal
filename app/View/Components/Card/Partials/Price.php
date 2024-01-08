<?php

namespace App\View\Components\Card\Partials;

use Illuminate\View\Component;

class Price extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $value= '0',
        public string $classes = ''
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(): \Illuminate\Contracts\View\View|string|\Closure
    {
        return view('components.card.partials.price');
    }
}
