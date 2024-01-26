<?php

if (! function_exists('prefix')) {
    function prefix(): ?string
    {
        return '';
    }
}


if (! function_exists('roleSI')) {
    function roleSI(): ?string
    {
        $student = \App\Enums\User\UserRoleEnum::Student()->value;
        $instructor = \App\Enums\User\UserRoleEnum::Instructor()->value;

        return "role:$student|$instructor";
    }
}