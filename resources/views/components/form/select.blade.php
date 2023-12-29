@php
    $options = json_encode($options);
@endphp

<div>
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
    })

</script>
