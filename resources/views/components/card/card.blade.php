@props(['classes'])

@if($type === 'default')
    <div class="card card-body {{$classes}}">
        {!! $slot !!}
    </div>
@endif
