<script setup>
import 'vue-tel-input/vue-tel-input.css';
import { VueTelInput } from 'vue-tel-input';
import {useI18n} from "vue-i18n";
import TagLabel from "~/Components/Partials/TagLabel.vue";

let phone = ref('');

const emit = defineEmits([ 'update:modelValue' , 'validate']);

const { t } = useI18n();
const {label} = defineProps({
    label: {
        type: String,
        default: '',
    },
})

const validated = ref(false);
const label_ = computed(() => label.length > 0 ? t(`label.${label}`) : '');

const validate = (phoneObject) => {
    emit('validate', validated.value = !!phoneObject.valid)
};

onUpdated(() => {
    emit('update:modelValue', phone.value)
});
</script>

<template>
    <div class="wrapper-mask-input">
        <TagLabel :label="label_" :required="$attrs.required" />
        <vue-tel-input
            mode="auto"
            v-model="phone"
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
