<script setup>
import { useI18n } from "vue-i18n";
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
    },
    type: {
        type: String,
        default: 'checkbox',
    },
});
const emit = defineEmits(['update:modelValue']);
</script>

<template>
    <input
        v-bind="$attrs"
        :id="label"
        :type="type"
        :class="[
            'form-check-input me-2 cursor-pointer',
            { 'is-invalid': error && error.length > 0 }
        ]"
        :value="$attrs.value"
        :checked="modelValue === $attrs.value"
        @input="(event) => emit('update:modelValue', event.target.checked)"
    >

    <TagLabel :for="label" :label="label" class-name="form-check-label text-dim-gray" :required="$attrs.required ?? false" />

    <ErrorMessage :error="error" :show-error="showError" />
</template>

<style scoped>

</style>
