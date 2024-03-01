<?php

namespace Modules\School\app\Services;

use App\Models\User;
use Illuminate\Support\Arr;
use App\Enums\User\UserRoleEnum;
use Illuminate\Http\UploadedFile;
use App\Enums\User\UserStatusEnum;
use Modules\School\app\Models\EiClass;
use Illuminate\Database\Eloquent\Collection;
use Modules\School\app\Models\EiClassSubject;
use Illuminate\Pagination\LengthAwarePaginator;

class EiClassService
{
    public function getClasses(User $user, int $perPage): LengthAwarePaginator
    {
        return EiClass::whereEiId($user->institution->institution->id)->paginate($perPage);
    }

    public function getInstructors(User $user): Collection
    {
        return $user->institution?->institution?->activeUsers()->role(UserRoleEnum::Instructor()->value)->latest()->get();
    }

    public function getUsers(User $user, UserRoleEnum $role, int $perPage): LengthAwarePaginator
    {
        return $user->institution?->institution?->users()->role($role->value)->status(UserStatusEnum::Review()->value)->latest()->paginate($perPage);
    }

    public function getClassSubjects(?EiClass $eiClass): Collection|array
    {
        return $eiClass ? EiClassSubject::whereClassId($eiClass->id)->latest()->get() : [];
    }

    public function getClassSubjectsInstructors(EiClass $eiClass): Collection|array
    {
        return EiClassSubject::whereClassId($eiClass->id)->latest()->with('instructors')->get();
    }

    public function getClassEvents(EiClass $eiClass): Collection
    {
        return $eiClass->events()->get();
    }

    public function updateOrCreateClass(array $data): EiClass
    {
        return EiClass::updateOrCreate(Arr::only($data, ['uuid']), $data);
    }

    public function updateOrCreateSubjects(array $data, mixed $eiClass): void
    {
        //TODO:: need refactoring
        $subjects = $data['subjects'];

        $teachers = Arr::pluck($subjects, 'teachers');
        $teachers = Arr::unique(call_user_func_array('array_merge', $teachers));

        $eiClass->users()->syncWithoutDetaching($teachers);

        foreach ($subjects as $subject) {
            $subject = Arr::add($subject, 'class_id', $eiClass->id);

            $classSubject = null;

            if (isset($subject['uuid'])) {
                $classSubject = EiClassSubject::whereUuid($subject['uuid'])->first();
                $classSubject->update(Arr::except($subject, ['teachers', 'image']));
            } else {
                $classSubject = $eiClass->subjects()->updateOrCreate(Arr::except($subject, ['teachers', 'image']), Arr::except($subject, ['teachers', 'image']));
            }

            if (isset($subject['image']) && $subject['image'] instanceof UploadedFile) {
                $classSubject->clearMediaCollection('subject');

                $classSubject->singleFileUpload($subject['image'], 'subject', [
                    'subject_id' => $classSubject->id
                ]);
            }

            $classSubject->instructors()->sync($subject['teachers']);
        }
    }
}
