<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class DynamicFields extends Component
{
    public function __construct(
        public string $name,
        public string $label = '',
        public string $placeholder = 'Enter text',
        public array $items = [],
    ) {}

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('components.form.dynamic-fields');
    }
}
