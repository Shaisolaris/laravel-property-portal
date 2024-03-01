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
})

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
    <div class="wrapper-phone-input">
        <TagLabel :label="label" :required="$attrs.required" />

        <vue-tel-input
            v-model="proxyValue"
            mode="international"
            auto-default-country
            auto-format
            valid-characters-only
            style-classes="phone-input form-control p-0"
            :dropdown-options="{
                disabled: false,
                showDialCodeInList: true,
                showDialCodeInSelection: false,
                showFlags: true,
                showSearchBox: true,
                tabindex: 0,
            }"
            :inputOptions="{
                placeholder: placeholder_,
                styleClasses: 'form-control',
                showDialCode: true,
            }"
            @validate="validate"
        />
        <ErrorMessage :error="error" :show-error="showError" />
    </div>
</template>

<style lang="scss">
.wrapper-phone-input {
    & .phone-input {
        background: var(--in-secondary-bg);
        border: var(--in-border-width) solid var(--in-input-border-custom);
    }

    & .vti {
        &__dropdown {
            padding: 10px !important;
            border-right: var(--in-border-width) solid var(--in-input-border-custom);
        }

        &__country-code {
            font-size: 14px;
            margin-right: 7px;
        }
    }
}
</style>
