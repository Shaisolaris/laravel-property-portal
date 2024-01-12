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
        type: [String, Number],
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
        type: [String, Number],
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
    }
});
const emit = defineEmits(['update:modelValue']);
</script>

<template>
    <TagLabel :label="$attrs.lable" class-name="form-check-label" :required="$attrs.required" />

    <input
        v-bind="$attrs"
        :class="['form-check-input', { 'is-invalid': error && error.length > 0 }]"
        :checked="modelValue"
        @input="(event) => emit('update:modelValue', event.target.checked)"
    >

    <ErrorMessage :error="error" :show-error="showError" />
</template>

<style scoped>

</style>