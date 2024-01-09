<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Multiselect extends Component
{
    public function __construct(
        public string $name = '',
        public string $label = '',
        public string $placeholder = '',
        public array $options = [],
        public bool $required = true,
    ) {}

    public function render()
    {
        return view('components.form.multiselect');
    }
}
