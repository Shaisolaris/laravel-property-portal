@if($type === 'default')
    <div {{ $attributes->merge(['class' => "card card-body"]) }}>
        {!! $slot !!}
    </div>
@endif
