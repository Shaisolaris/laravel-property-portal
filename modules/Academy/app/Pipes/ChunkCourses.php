<?php

namespace Modules\Academy\app\Pipes;

use Closure;

class ChunkCourses
{
    public function handle($courses, Closure $next)
    {
        $courses->skip(request('skip'))->take(request('limit'))->limit(10);

        return $next($courses);
    }
}
