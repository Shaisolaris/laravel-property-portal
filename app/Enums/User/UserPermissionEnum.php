<?php

namespace App\Enums\User;

enum UserPermissionEnum: string
{
    case CREATE_CLASS = 'create-class';
    case UPDATE_CLASS = 'update-class';
    case DELETE_CLASS = 'delete-class';

    case CREATE_CLASS_SUBJECT = 'create-class-subject';
    case UPDATE_CLASS_SUBJECT = 'update-class-subject';
    case DELETE_CLASS_SUBJECT = 'delete-class-subject';


    case CREATE_CLASS_SUBJECT_SECTION = 'create-class-subject-section';
    case UPDATE_CLASS_SUBJECT_SECTION = 'update-class-subject-section';
    case DELETE_CLASS_SUBJECT_SECTION = 'delete-class-subject-section';
}
