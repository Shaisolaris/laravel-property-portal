@if(\Illuminate\Support\Str::contains($icon, ['ri-', 'bx bx-', 'mdi-', 'lab la-', 'las la-']))
    <i {{ $attributes->merge(['class' => "$icon align-bottom"]) }}></i>
@else
    {{ $icon }}
@endif