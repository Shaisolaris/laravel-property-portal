<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Modules\School\app\Models\EiClass;
use Modules\School\app\Models\EiClassSubject;
use Illuminate\Auth\Access\HandlesAuthorization;

class EiClassSubjectPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user, EiClass $eiClass): Response|bool
    {
        return $user->isOrganizer() && $eiClass->ei_id == $user->institution->institution->id ? $this->allow() : $this->denyAsNotFound();
    }

    public function create(User $user, EiClass $eiClass): Response|bool
    {
        return $user->isOrganizer() && $eiClass->ei_id == $user->institution->institution->id ? $this->allow() : $this->denyAsNotFound();
    }

    public function update(User $user, EiClass $eiClass): Response|bool
    {
        return $user->isOrganizer() && $eiClass->ei_id == $user->institution->institution->id ? $this->allow() : $this->denyAsNotFound();
    }

    public function delete(User $user, EiClass $eiClass): Response|bool
    {
        return $user->isOrganizer() && $eiClass->ei_id == $user->institution->institution->id ? $this->allow() : $this->denyAsNotFound();
    }
}
