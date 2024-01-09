@props(['label'])

@php
    $classes_fields = 'form-control mb-2';

    $fields = [
        ['value' => '2','name' => 'test']
    ];

@endphp

<div class="dynamic-fields" id="dynamic-fields">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <label class="fs-12 text-black">{{$label}}</label>
        </div>
        <div id="dynamic-fields--add">
            <x-button.simple icon="ri-add-line" key="add-new" />
        </div>
    </div>
    <div id="dynamic-fields--items">
        @foreach($fields as $key => $field)
            <div class="dynamic-field--item">
                <input
                    type="text"
                    class="{{$classes_fields}}"
                    name="{{$name}}[]"
                    id="{{$name}}_{{$field['name'].'_'.$key}}"
                    placeholder="{{$placeholder}}"
                >
            </div>
        @endforeach
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        let prefix = 'dynamic-fields';
        const items = document.getElementById(prefix+'--items')

        document.getElementById(prefix+'--add').addEventListener('click', function() {

            let newField = document.createElement('input')

            newField.setAttribute('type',"text");
            newField.setAttribute('class',"{{$classes_fields}}");
            newField.setAttribute('name',"{{$name}}[]");
            newField.setAttribute('placeholder',"{{$placeholder}}");

            items.appendChild(newField);
        });
    });
</script>
