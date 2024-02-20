<?php

namespace Modules\School\app\Services;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class MySubjectService
{
    public function getSubjects(User $user, int $perPage): LengthAwarePaginator|Collection
    {
        $subjects = $user->subjects()->latest();

        if ($subjects) {
            return $subjects->paginate($perPage);
        }

        return collect();
    }

    public function getLimitSubjects(User $user, int $limit = 4): \Illuminate\Database\Eloquent\Collection
    {
        return $user->subjects()->orderByDesc('created_at')->limit($limit)->get();
    }
}
