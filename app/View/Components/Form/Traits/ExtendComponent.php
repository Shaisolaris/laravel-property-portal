<?php

namespace App\View\Components\Form\Traits;

trait ExtendComponent
{
    public function __construct(
        public string $icon = '',
        public string $label = '',
        public string $type = 'text',
        public bool $required = true,
        public string $placeholder = '',
        public string|array $error = '',
    ) {}
}
