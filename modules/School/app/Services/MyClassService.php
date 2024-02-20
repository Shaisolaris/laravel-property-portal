<?php

namespace Modules\School\app\Services;

use App\Models\User;
use Modules\School\app\Models\EiClass;
use Illuminate\Pagination\LengthAwarePaginator;
use Modules\General\app\Models\EiSectionLecture;

class MyClassService
{
    public function getClasses(User $user, int $perPage): LengthAwarePaginator
    {
        return $user->myClasses()->latest()->paginate($perPage);
    }

    public function getSubjects(EiClass $eiClass, int $perPage): LengthAwarePaginator
    {
        return $eiClass->subjects()->latest()->paginate($perPage);
    }

    public function getLectures(EiClass $eiClass): mixed
    {
        if($eiClass->subjects->isNotEmpty()) {
            return EiSectionLecture::whereIn('section_id', $eiClass->subjects()->first()->sections()->pluck('id'))->latest()->get();
        }
        return [];
    }
}
