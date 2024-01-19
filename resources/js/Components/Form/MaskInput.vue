<script setup>
import 'vue-tel-input/vue-tel-input.css';
import { VueTelInput } from 'vue-tel-input';
import {useI18n} from "vue-i18n";
import TagLabel from "~/Components/Partials/TagLabel.vue";
import ErrorMessage from "~/Components/Partials/ErrorMessage.vue";

let value = ref('');

const emit = defineEmits([ 'update:modelValue' , 'validate']);

const { t } = useI18n();
const {label} = defineProps({
    label: {
        type: String,
        default: '',
    },
    type: {
        type: String,
        default: 'tel' // card_number
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

const validate = (phoneObject) => {
    emit('validate', validated.value = !!phoneObject.valid)
};

onUpdated(() => {
    emit('update:modelValue', value.value)
});
</script>

<template>
    <div class="wrapper-mask-input">
        <TagLabel :label="label" :required="$attrs.required" />
        <template v-if="type === 'tel'">
            <vue-tel-input
                mode="auto"
                v-model="value"
                auto-default-country
                auto-format
                valid-characters-only
                style-classes="mask-input form-control p-0"
                @validate="validate"
                :dropdown-options="{
                disabled: false,
                showDialCodeInList: false,
                showDialCodeInSelection: true,
                showFlags: false,
                showSearchBox: true,
                tabindex: 0,
            }"
                :inputOptions="{
                placeholder: 'Phone number',
                styleClasses: 'form-control',
                showDialCode: false,
            }"
            />
        </template>
        <template v-else>
            <input v-model="value"
                   type="text"
                   class="form-control"
                   id="cleave-ccard"
                   :class="[{ 'is-invalid': error && error.length > 0 }, 'form-control', $attrs.class]"
                   placeholder="xxxx xxxx xxxx xxxx">
        </template>
        <ErrorMessage :error="error" :show-error="showError" />
    </div>
</template>

<style lang="scss">
.wrapper-mask-input {
    & .mask-input {
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
