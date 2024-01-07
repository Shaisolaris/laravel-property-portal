<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class FileInput extends Component
{
    public function __construct(
        public string $name,
        public string $icon = '',
        public string $label = '',
        public string $placeholder = '',
        public string|array $error = '',
        public bool $required = true,
        public bool $isMultiple = false,
    ) {}


    public function render(): \Illuminate\Contracts\View\View
    {
        return view('components.form.file-input');
    }
}
