<?php

namespace App\View\Components\Form;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Select extends Component
{
    public function __construct(
        public string $name,
        public string $random = ''
    )
    {
        $this->random = Str::random(6);
    }


    public function render(): \Illuminate\Contracts\View\View|string|\Closure
    {
        return view('components.form.select');
    }
}
