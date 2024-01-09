<form class="app-search">
    <div class="position-relative d-flex align-items-center">
        <input
            type="text"
            name="search"
            placeholder="{{trans("translation.placeholder.$placeholder")}}"
            value=""
            {{ $attributes->merge(['class' => "form-control radius-26"])}}
        >
        <span class="mdi mdi-magnify search-widget-icon"></span>
    </div>
</form>