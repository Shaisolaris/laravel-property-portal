<script setup>
import { computed } from "vue";
import { useI18n } from "vue-i18n";
import ErrorMessage from "~/Components/Partials/ErrorMessage.vue";
import TagLabel from "~/Components/Partials/TagLabel.vue";


const { label, placeholder } = defineProps({
    placeholder: {
        type: String,
        default: () => 'Select',
    },
    label: {
        type: String,
        default: '',
    },
    options: {
        type: Array,
        required: true,
        default: () => []
    },
    showError: {
        type: Boolean,
        default: true,
    },
    error: {
        type: String,
        default: '',
    },
});
const emit = defineEmits([ 'update:modelValue' ]);
const { t } = useI18n();
const label_ = computed(() => label.length > 0 ? t(`label.${label}`) : '');
let currentOption = reactive(placeholder);


const selected = (option) => {
    currentOption = option.name;

    emit('update:modelValue', option.value);
}
</script>

<template>
    <div :id="$attrs.id">
        <TagLabel :label="label_" :required="$attrs.required" />
        <b-dropdown variant="outline-secondary" :text="currentOption" class="custom-select">
            <b-dropdown-item
                v-for="(option,index) in options"
                :key="index"
                :disabled="option.disabled"
                :action="option.action"
                @click="selected(option)"
            >
                {{ option.name }}
            </b-dropdown-item>
        </b-dropdown>

        <ErrorMessage :error="error" :show-error="showError" />
    </div>
</template>

<style lang="scss">
.custom-select {
    width: 100%;
    background: var(--in-secondary-bg);

    &.btn {
        border: var(--in-border-width) solid var(--in-input-border-custom);
        display: flex;
        justify-content: space-between;
        align-items: baseline;

        &:hover {
            background: #f4f4f4;
            color: var(--in-secondary)
        }
    }
}
</style>
