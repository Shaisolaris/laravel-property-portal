<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Input extends Component
{
    public function __construct(
        public string $name,
        public string $icon = '',
        public string $label = '',
        public string $type = 'text',
        public bool $required = true,
        public string $placeholder = '',
        public string|array $error = '',
    )
    {
        //
    }

    public function render(): \Illuminate\Contracts\View\View|string|\Closure
    {
        return view('components.form.input');
    }
}
