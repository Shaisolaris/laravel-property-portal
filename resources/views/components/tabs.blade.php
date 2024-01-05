<div class="@if(isset($advanceAction)) d-flex justify-content-between align-items-center @endif">
    <ul class="nav nav-pills nav-primary mb-3 tabs" role="tablist">
        @foreach($tabNavItems as $navItem)
            <li class="nav-item">
                <a class="nav-link {{ $navItem['active'] ? 'active' : '' }}" data-bs-toggle="tab" href="#{{$navItem['title']}}" role="tab">
                    @isset($navItem['icon'])
                        @if($navItem['icon'])
                            <x-partial-icon :icon="$navItem['icon']" class="fs-16" />
                        @endif
                    @endisset

                    {{ trans("translation.tab." . $navItem['title']) }}
                </a>
            </li>
        @endforeach
    </ul>
    @if(isset($advanceAction))
        <div>
            {{$advanceAction}}
        </div>
    @endif
</div>

<div class="tab-content">
    {{ $tabContent }}
</div>
