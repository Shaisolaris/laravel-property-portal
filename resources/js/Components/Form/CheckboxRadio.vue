<script setup>
import TagLabel from "~/Components/Partials/TagLabel.vue";
import ErrorMessage from "~/Components/Partials/ErrorMessage.vue";
import { useI18n } from "vue-i18n";


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
const { t } = useI18n();
const label_ = computed(() => props.label.length > 0 ? t(`label.${props.label}`) : '');
</script>

<template>
    <input
        v-bind="$attrs"
        :type="type"
        :class="['form-check-input me-2', { 'is-invalid': error && error.length > 0 }]"
        :checked="modelValue"
        @input="(event) => emit('update:modelValue', event.target.checked)"
    >

    <TagLabel :label="label_" class-name="form-check-label text-dim-gray" :required="$attrs.required ?? false" />

    <ErrorMessage :error="error" :show-error="showError" />
</template>

<style scoped>

</style>