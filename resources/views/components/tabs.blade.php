<div class="@if(isset($advanceAction)) d-flex justify-content-between align-items-center @endif">
    <ul class="nav nav-pills nav-primary mb-3 tabs" role="tablist">
        @foreach($tabNavItems as $navItem)
            <li class="nav-item">
                <a class="nav-link {{ $navItem['active'] ? 'active' : '' }}" data-bs-toggle="tab" href="#{{$navItem['title']}}" role="tab">
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
{{--    <div class="tab-pane active" id="home-1" role="tabpanel">--}}
{{--        <div class="d-flex">--}}
{{--            <div class="flex-shrink-0">--}}
{{--                <i class="ri-checkbox-circle-fill text-success"></i>--}}
{{--            </div>--}}
{{--            <div class="flex-grow-1 ms-2">--}}
{{--                Raw denim you probably haven't heard of them jean shorts Austin.--}}
{{--                Nesciunt tofu stumptown aliqua, retro synth master cleanse.--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="d-flex mt-2">--}}
{{--            <div class="flex-shrink-0">--}}
{{--                <i class="ri-checkbox-circle-fill text-success"></i>--}}
{{--            </div>--}}
{{--            <div class="flex-grow-1 ms-2">--}}
{{--                Too much or too little spacing, as in the example below, can make things unpleasant for the reader. The goal is to make your text as comfortable to read as possible.--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="tab-pane" id="profile-1" role="tabpanel">--}}
{{--        <div class="d-flex">--}}
{{--            <div class="flex-shrink-0">--}}
{{--                <i class="ri-checkbox-circle-fill text-success"></i>--}}
{{--            </div>--}}
{{--            <div class="flex-grow-1 ms-2">--}}
{{--                In some designs, you might adjust your tracking to create a certain artistic effect. It can also help you fix fonts that are poorly spaced to begin with.--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="d-flex mt-2">--}}
{{--            <div class="flex-shrink-0">--}}
{{--                <i class="ri-checkbox-circle-fill text-success"></i>--}}
{{--            </div>--}}
{{--            <div class="flex-grow-1 ms-2">--}}
{{--                A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="tab-pane" id="messages-1" role="tabpanel">--}}
{{--        <div class="d-flex">--}}
{{--            <div class="flex-shrink-0">--}}
{{--                <i class="ri-checkbox-circle-fill text-success"></i>--}}
{{--            </div>--}}
{{--            <div class="flex-grow-1 ms-2">--}}
{{--                Each design is a new, unique piece of art birthed into this world, and while you have the opportunity to be creative and make your own style choices.--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="d-flex mt-2">--}}
{{--            <div class="flex-shrink-0">--}}
{{--                <i class="ri-checkbox-circle-fill text-success"></i>--}}
{{--            </div>--}}
{{--            <div class="flex-grow-1 ms-2">--}}
{{--                For that very reason, I went on a quest and spoke to many different professional graphic designers and asked them what graphic design tips they live.--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="tab-pane" id="settings-1" role="tabpanel">--}}
{{--        <div class="d-flex mt-2">--}}
{{--            <div class="flex-shrink-0">--}}
{{--                <i class="ri-checkbox-circle-fill text-success"></i>--}}
{{--            </div>--}}
{{--            <div class="flex-grow-1 ms-2">--}}
{{--                For that very reason, I went on a quest and spoke to many different professional graphic designers and asked them what graphic design tips they live.--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="d-flex mt-2">--}}
{{--            <div class="flex-shrink-0">--}}
{{--                <i class="ri-checkbox-circle-fill text-success"></i>--}}
{{--            </div>--}}
{{--            <div class="flex-grow-1 ms-2">--}}
{{--                After gathering lots of different opinions and graphic design basics, I came up with a list of 30 graphic design tips that you can start implementing.--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
