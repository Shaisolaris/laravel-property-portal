<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class AvatarGroup extends Component
{
    public function __construct(
        public array $avatars,
        public int $plusAmount = 0
    )
    {

    }

    public function render(): View
    {
        return view('components.avatar-group');
    }
}
