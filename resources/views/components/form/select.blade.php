@php
    $options = json_encode($options);

    $selector = isset($id) ? $id : $label . 'label';
@endphp

<div>
    <label for="{{$selector}}" class="fs-12">
        {{$label}}
    </label>
    <input type="hidden" name="{{$name}}">
    <div id="{{$name}}"></div>
</div>



<script>
    document.addEventListener('DOMContentLoaded', () => {
        ItcCustomSelect.create('#{{$name}}', {
            targetValue: "{{$modalValue}}",
            options: {!! $options !!},
            placeholder: "{{$placeholder}}",
            onSelected(select) {
                document.querySelector("[name='{{$name}}']").value = select.value;
            },
        });
    });
</script>
