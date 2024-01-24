<!DOCTYPE html>
@php
    $user = Auth::user();
@endphp

<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    data-layout="vertical"
    data-topbar="light"
    data-sidebar="light"
    data-sidebar-size="lg"
    data-sidebar-image="none"
    data-preloader="disable"
    data-bs-theme="light"
    data-layout-width="fluid"
    data-layout-position="fixed"
    data-sidebar-visibility="show"
    data-layout-style="{{$user && $user->hasRole(\App\Enums\User\UserRoleEnum::Admin()->value) ? 'default' : 'detached'}} "
    data-role-name="{{$user?->roleName}}"
>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Social Media Meta Tags -->
        <meta property="og:title" content="Inertia + Vue & Laravel">
        <meta
            property="og:description"
            content="Simplify web application development with Velzon, a feature-rich admin and dashboard template built with Inertia.js, Vue.js, and Laravel."
        >
        <meta property="og:image" content="URL to the template's logo or featured image">
        <meta property="og:url" content="URL to the template's webpage">
        <meta name="twitter:card" content="summary_large_image">

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}">

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js'])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
