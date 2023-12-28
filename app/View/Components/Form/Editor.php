<?php

namespace App\View\Components\Form;

use App\View\Components\Form\Traits\ExtendComponent;
use Illuminate\View\Component;

class Editor extends Component
{
    use ExtendComponent;

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.editor');
    }
}
