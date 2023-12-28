<?php

namespace App\View\Components\Form;

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

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(): \Illuminate\Contracts\View\View|string|\Closure
    {
        return view('components.form.date-time-picker');
    }
}
