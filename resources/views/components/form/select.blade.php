@php
    $options = json_encode($options);

    $selector = isset($id) ? $id : $label . 'label';
@endphp

<div>
    @if(\Illuminate\Support\Str::length($label) > 0)
        <label for="{{$selector}}" class="fs-12">
            <x-text key="label.{{$label}}" />
        </label>
    @endif
    <input type="hidden" name="{{$name}}">
    <div id="{{$name}}"></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        ItcCustomSelect.create('#{{$name}}', {
            targetValue: "{{$modalValue}}",
            options: {!! $options !!},
            placeholder: "{{trans("translation.placeholder.$placeholder")}}",
            onSelected(select) {
                document.querySelector("[name='{{$name}}']").value = select.value;
            },
        });
    });
</script>
