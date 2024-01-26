<?php

if (! function_exists('prefix')) {
    function prefix(): ?string
    {
        $user = Auth::user();

        if(!$user) {
            return '';
        }

        $roleName = $user->roleName;
        $institutionType = $user->institution_type;

        return "$institutionType/$roleName/";
    }
}