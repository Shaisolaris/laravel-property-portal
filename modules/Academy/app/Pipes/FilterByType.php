<?php

namespace Modules\Academy\app\Pipes;

use Closure;

class FilterByType
{
    public function handle($courses, Closure $next)
    {
        $type = request('type');
        $courses->when($type,function($query) use ($type) {
            return $query->whereType($type);
        });

        return $next($courses);
    }
}

