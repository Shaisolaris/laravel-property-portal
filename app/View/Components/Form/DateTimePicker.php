<?php

namespace App\View\Components\Form;

use Illuminate\View\View;
use Illuminate\View\Component;

class DateTimePicker extends Component
{
    public function __construct(
        public string $icon = '',
        public string $label = '',
        public string $type = 'date',
        public bool $required = true,
        public string $placeholder = '',
        public string|array $error = '',
    ) {}


    public function render(): View
    {
        return view('components.form.date-time-picker');
    }
}
