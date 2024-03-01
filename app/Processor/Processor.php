<?php

namespace App\Processor;

use Illuminate\Http\Request;

class Processor
{
    public static function build(null|Request $request): Builder
    {
        return new Builder($request);
    }
}
