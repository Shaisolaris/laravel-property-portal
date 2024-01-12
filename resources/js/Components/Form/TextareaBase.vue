<script setup>
import TagLabel from "~/Components/Partials/TagLabel.vue";
import ErrorMessage from "~/Components/Partials/ErrorMessage.vue";


const props = defineProps({
    type: {
        type: String,
        default: 'text',
    },
    label: {
        type: String,
        default: '',
    },
    error: {
        type: String,
        default: '',
    },
    modelValue: {
        type: [String, Number],
        default: null,
    },
    classMap: {
        type: String,
        default: '',
    },
});
const emit = defineEmits(['update:modelValue']);
</script>

<template>
    <TagLabel :label="label" :required="$attrs.required" />

    <textarea
        :value="modelValue"
        :class="['form-control', classMap, error && error.length > 0  ? 'is-invalid' : '']"
        @input="(event) => emit('update:modelValue', event.target.value)"
    />

    <ErrorMessage :error="error" :show-error="true" />
</template>

<style scoped>

</style>