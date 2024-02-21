<?php

if (! function_exists('routeInstitution')) {
    function routeInstitution($route): ?string
    {
        $user = Auth::user();

        if(!$user) {
            return '';
        }

        return "{$user->roleName}/{$user->institution_type}/{$route}";
    }
}


if (! function_exists('protocol')) {
    function protocol(): ?string
    {
        return stripos(config('app.url'), 'https') === 0 ? 'https://' : 'http://';
    }
}
