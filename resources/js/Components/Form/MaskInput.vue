<script setup>
import 'vue-tel-input/vue-tel-input.css';
import { VueTelInput } from 'vue-tel-input';
import { useI18n } from "vue-i18n";
import TagLabel from "~/Components/Partials/TagLabel.vue";
import ErrorMessage from "~/Components/Partials/ErrorMessage.vue";


const emit = defineEmits([ 'update:modelValue', 'validate' ]);

const { t } = useI18n();
const props = defineProps({
    modelValue: null,
    label: {
        type: String,
        default: '',
    },
    placeholder: {
        type: String,
        default: '',
    },
    showError: {
        type: Boolean,
        default: true,
    },
    error: {
        type: String,
        default: '',
    },
    mask: {
        type: String,
        default: '#### #### #### ####',
    },
});

const validated = ref(false);

const validate = (phoneObject) => emit('validate', validated.value = !!phoneObject.valid);

const placeholder_ = computed(() => props.placeholder && props.placeholder.length > 0 ? t(`placeholder.${props.placeholder}`) : '');

const proxyValue = computed({
    get() {
        return props.modelValue;
    },
    set(value) {
        emit('update:modelValue', value);
    },
});
</script>

<template>
    <div class="wrapper-mask-input">
        <TagLabel :label="label" :required="$attrs.required" />

        <BFormInput
            v-model="proxyValue"
            v-mask="mask"
            :placeholder="placeholder_"
            :class="['form-control', { 'is-invalid': error && error.length > 0 }]"
            id="number-mask"
            type="text"
        />
        <ErrorMessage :error="error" :show-error="showError" />
    </div>
</template>

<style lang="scss">
.wrapper-mask-input {
    & .mask-input {
        background: var(--in-secondary-bg);
        border: var(--in-border-width) solid var(--in-input-border-custom);
    }
}
</style>
