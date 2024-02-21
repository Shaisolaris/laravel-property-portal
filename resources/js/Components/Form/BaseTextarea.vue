<script setup>
import { useI18n } from "vue-i18n";
import TagLabel from "~/Components/Partials/TagLabel.vue";
import ErrorMessage from "~/Components/Partials/ErrorMessage.vue";


defineOptions({
    inheritAttrs: false,
});

const { placeholder } = defineProps({
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
        type: [ String, Number ],
        default: null,
    },
    classMap: {
        type: String,
        default: '',
    },
    rows: {
        type: null,
    },
});
const emit = defineEmits([ 'update:modelValue' ]);
const { t } = useI18n();

const placeholder_ = computed(() => placeholder && placeholder.length > 0 ? t(`placeholder.${placeholder}`) : '');
</script>

<template>
    <div>
        <TagLabel :label="label" :required="$attrs.required" />

        <textarea
            v-bind="$attrs"
            :value="modelValue"
            :placeholder="placeholder_ !== 'placeholder._' ? placeholder_ : '_'"
            :class="['form-control', classMap, {'is-invalid': error && error.length > 0}]"
            :rows="rows"
            @input="(event) => emit('update:modelValue', event.target.value)"
        />

        <ErrorMessage :error="error" :show-error="true" />
    </div>
</template>

<style scoped>

</style>
