<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class DropZone extends Component
{
    public function __construct(
        public string $name,
        public string $label = '',
        public string|array $error = '',
        public bool $required = true,
    ) {}

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('components.form.dropzone');
    }
}
