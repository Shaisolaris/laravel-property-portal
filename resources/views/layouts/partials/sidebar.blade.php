@inject('service', 'App\Services\GeneralService')

<div class="app-menu navbar-menu">
    <div class="navbar-brand-box d-block">
        <div class="d-flex align-items-center">
            <div class="logo logo-dark me-4">
                <span class="logo-sm">
                    <x-avatar src="{{ Auth::user()?->avatar }}" size="sm" rounded="circle" />
                </span>
                <span class="logo-lg">
                    <div class="d-block d-xl-none">
                        <img src="{{ URL::asset('images/logo.svg') }}" alt="" />
                    </div>
                    <div class="d-none d-xl-block">
                         <x-avatar src="{{ Auth::user()?->avatar }}" size="lg" rounded="circle" />
                    </div>
                </span>
            </div>
            <div class="d-block d-lg-none d-xl-block text-start">
                <div class="fs-14 text-dim-gray">{{ \Illuminate\Support\Str::ucfirst(Auth::user()?->role?->name) }}</div>
                <div class="sidebar-name-block fs-4">{{ Auth::user()?->full_name }}</div>
            </div>
        </div>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
                @foreach($service->menu() as $item)
                    <li class="nav-item sidebar-nav-item {{ $loop->first ? 'pt-1' : '' }}">
                        <a class="nav-link menu-link" href="{{$item['href']}}">
                            <div class="sidebar-item {{$item['active'] ? 'active' : ''}}">
                                <span class="btn btn-icon rounded-pill p-1 p-lg-2">
                                    <i class="{{$item['icon']}} text-black fs-16"></i>
                                </span>
                                <span class="text-black fs-14">{{ $item['text'] }}</span>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="sidebar-background"></div>
</div>
<div class="vertical-overlay"></div>
