<?php

namespace App\View\Components\Form;

use Illuminate\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    public function __construct(
        public string $name,
        public array $options,
        public string $label = '',
        public mixed $modalValue = null,
        public string $placeholder = 'Select Element',
    )
    {
    }


    public function render(): View
    {
        return view('components.form.select');
    }
}
