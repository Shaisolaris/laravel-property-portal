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
            <div class="d-none d-xl-block text-start">
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
                    <li class="nav-item {{ $loop->first ? 'pt-1' : '' }}">
                        <a class="nav-link menu-link" href="{{$item['href']}}">
                            @if($item['active'])
                                <x-badge variable="beige" class="m-0 w-100" size="md">
                                    <x-slot:text>
                                        <div class="d-flex align-items-center text-start">
                                            <div><i class="{{$item['icon']}} text-black fs-16"></i></div>
                                            <div class="text-black fs-16">{{ $item['text'] }}</div>
                                        </div>
                                    </x-slot:text>
                                </x-badge>
                            @else
                                <button class="btn btn-beige me-2 rounded-pill border-0 p-2">
                                    <i class="{{$item['icon']}} text-black fs-16"></i>
                                </button>
                                <span class="text-black fs-16">{{ $item['text'] }}</span>
                            @endif
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="sidebar-background"></div>
</div>
<div class="vertical-overlay"></div>
