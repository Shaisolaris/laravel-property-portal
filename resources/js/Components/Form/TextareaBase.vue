<script setup>
import TagLabel from "~/Components/Partials/TagLabel.vue";
import ErrorMessage from "~/Components/Partials/ErrorMessage.vue";
import {useI18n} from "vue-i18n";


const {placeholder} = defineProps({
    type: {
        type: String,
        default: 'text',
    },
    placeholder: {
        type: String,
        default: '',
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
const { t } = useI18n();

const placeholder_ = computed(() => placeholder && placeholder.length > 0 ? t(`placeholder.${placeholder}`) : '');
</script>

<template>
    <TagLabel :label="label" :required="$attrs.required" />

    <textarea
        :value="modelValue"
        :placeholder="placeholder_ !== 'placeholder._' ? placeholder_ : '_'"
        :class="['form-control', classMap, error && error.length > 0  ? 'is-invalid' : '']"
        @input="(event) => emit('update:modelValue', event.target.value)"
    />

    <ErrorMessage :error="error" :show-error="true" />
</template>

<style scoped>

</style>
