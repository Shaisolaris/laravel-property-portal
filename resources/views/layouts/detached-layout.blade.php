<!doctype html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    data-layout="vertical"
    data-layout-style="detached"
    data-layout-position="fixed"
    data-topbar="light"
    data-sidebar="light"
    data-sidebar-size="lg"
    data-layout-width="fluid"
    data-preloader="disabled"
    data-lt-installed="true"
    data-role-auth="{{\Illuminate\Support\Facades\Auth::user()?->role?->name}}"
>
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('build/images/favicon.ico')}}">
        @include('layouts.partials.head-css')
    </head>

    <body>
        <div id="layout-wrapper">
            @include('layouts.partials.topbar')
            @include('layouts.partials.sidebar')

            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid pe-0">
                        @if(isset($title) && isset($li))
                            @include('layouts.partials.breadcrumbs', ['title' => $title, 'li' => $li])
                        @endif

                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.partials.vendor-scripts')
    </body>
</html>
