<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Editor extends Component
{
    public function __construct(public string $name)
    {
        //
    }


    public function render(): \Illuminate\Contracts\View\View
    {
        return view('components.form.editor');
    }
}
