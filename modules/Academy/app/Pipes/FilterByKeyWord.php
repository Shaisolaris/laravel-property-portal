<?php

namespace Modules\Academy\app\Pipes;

use Closure;

class FilterByKeyWord
{
    public function handle($courses, Closure $next)
    {
        $input = request('query');
        $courses->when($input, function ($query) use ($input) {
            return $query->where(function ($secondQuery) use ($input) {
                $secondQuery->where('title', 'LIKE', '%' . $input . '%')
                    ->orwhere('description', 'LIKE', '%' . $input . '%');
            });
        });

        return $next($courses);
    }
}
