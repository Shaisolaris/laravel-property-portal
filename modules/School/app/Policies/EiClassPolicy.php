<?php

namespace Modules\School\app\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Modules\School\app\Models\EiClass;
use Illuminate\Auth\Access\HandlesAuthorization;

class EiClassPolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user): bool
    {
        return $user->isOrganizer();
    }


    public function view(User $user, EiClass $eiClass): Response|bool
    {
        return $user->isOrganizer() && $eiClass->ei_id == $user->institution->institution->id ? $this->allow() : $this->denyAsNotFound();
    }


    public function create(User $user): bool
    {
        return $user->isOrganizer();
    }


    public function update(User $user, EiClass $eiClass): bool
    {
        return $user->isOrganizer() && $eiClass->ei_id == $user->institution->institution->id;
    }


    public function delete(User $user, EiClass $eiClass): bool
    {
        return $user->isOrganizer() && $eiClass->ei_id == $user->institution->institution->id;
    }


    public function restore(User $user, EiClass $eiClass): bool
    {
        return $user->isOrganizer() && $eiClass->ei_id == $user->institution->institution->id;
    }


    public function forceDelete(User $user, EiClass $eiClass): bool
    {
        return $user->isOrganizer() && $eiClass->ei_id == $user->institution->institution->id;
    }
}
