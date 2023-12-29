<?php

namespace App\View\Components\Table\Partials\Td;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Status extends Component
{
    const STATUS_ACTIVE = 'active';
    const STATUS_ACCEPTED = 'accepted';
    const STATUS_NOT_ACCEPTED = 'not_accepted';
    const STATUS_INACTIVE = 'inactive';


    public function __construct(
        public string $key = '',
        public string $variable = ''
    )
    {
        $this->variable = match ($this->key) {
            self::STATUS_ACTIVE => 'light-steel-blue',
            self::STATUS_ACCEPTED => 'thistle',
            self::STATUS_NOT_ACCEPTED, self::STATUS_INACTIVE => 'crimson',
            default => 'beige',
        };
    }


    public function render(): View
    {
        return view('components.table.partials.td.status');
    }
}
