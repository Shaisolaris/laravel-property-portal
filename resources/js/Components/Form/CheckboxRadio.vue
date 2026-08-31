<script setup>
import TagLabel from "~/Components/Partials/TagLabel.vue";
import ErrorMessage from "~/Components/Partials/ErrorMessage.vue";

const props = defineProps({
    label: {
        type: String,
        required: false,
        default: '',
    },
    placeholder: {
        type: [ String, Number ],
        required: false,
        default: '',
    },
    icon: {
        type: String,
        required: false,
        default: '',
    },
    error: {
        type: String,
        required: false,
        default: '',
    },
    modelValue: {
        type: [ String, Number ],
        default: null,
    },
    value: {
        type: [ String, Number ],
        default: null,
    },
    classMap: {
        type: String,
        required: false,
        default: '',
    },
    showError: {
        type: Boolean,
        default: true,
    },
    multiple: {
        type: Boolean,
        default: false,
    },
    type: {
        type: String,
        default: 'checkbox',
    },
    reverseLabel: {
        type: String,
        default: false,
    },
    name: String,
});
const emit = defineEmits([ 'update:modelValue' ]);
const $attrs = useAttrs();


const handler = (event) => {
    if(props.type === 'radio' && props.multiple) {
        let items = props.modelValue;
        if (items.includes(props.value)) {
            items.splice(items.indexOf(props.value), 1)
        } else {
            items.push(props.value)
        }
        emit('update:modelValue', items);
    } else {
        emit('update:modelValue', event.target.checked);
    }
}

</script>

<template>
    <TagLabel
        v-if="reverseLabel" :for="label" :label="label" class-name="form-check-label text-dim-gray"
        :required="$attrs.required ?? false"
    />

    <input
        v-bind="$attrs"
        :id="label"
        :type="type"
        :name="name"
        :class="['form-check-input me-2 cursor-pointer', { 'is-invalid': error && error.length > 0 }]"
        :value="value"
        :checked="modelValue === value"
        @input="handler"
    >

    <TagLabel
        v-if="!reverseLabel" :for="label" :label="label" class-name="form-check-label text-dim-gray"
        :required="$attrs.required ?? false"
    />

    <ErrorMessage :error="error" :show-error="showError" />
</template>

<style scoped>

</style>
