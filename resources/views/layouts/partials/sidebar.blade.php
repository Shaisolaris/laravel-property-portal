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
                <div class="text-black fs-4">{{ Auth::user()?->full_name }}</div>
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
                                <span class="btn-beige rounded-pill btn btn-icon p-1 p-lg-2">
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

<style lang="scss">
    .sidebar-nav-item:hover {
        .sidebar-item {
            background: #F7F6F2;
            width: 100%;
            padding: 8px 0 8px 15px;
        }
    }

    .sidebar-item {
        color: black;
        padding: 8px 0 8px 0;
        border-radius: 100px;
        transition: .2s ease-in-out;

        &.active {
            background: #F7F6F2;
            width: 100%;
            padding: 8px 0 8px 15px;
        }
    }
</style>
