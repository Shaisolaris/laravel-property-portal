<?php

namespace App\View\Components\Form;

use App\View\Components\Form\Traits\ExtendComponent;
use Illuminate\View\Component;

class Date extends Component
{
    use ExtendComponent;

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(): \Illuminate\Contracts\View\View|string|\Closure
    {
        return view('components.form.date');
    }
}
