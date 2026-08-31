<?php

namespace Modules\General\app\Processor;

use Illuminate\Http\Request;

class Processor
{
    public static function build(null|Request $request): Builder
    {
        return new Builder($request);
    }
}
