<script setup>
import { useI18n } from "vue-i18n";
import TagLabel from "~/Components/Partials/TagLabel.vue";
import ErrorMessage from "~/Components/Partials/ErrorMessage.vue";
import useStructure from "~/scripts/helpers/structure.js";


defineOptions({
    inheritAttrs: false,
});


const { label, type, icon, viewType, maxCounter, showPasswordToggle, placeholder } = defineProps({
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
    icon: {
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
    showError: {
        type: Boolean,
        default: true,
    },
    viewType: {
        type: String,
        default: ''
    },
    maxCounter: {
        type: Number,
        default: 0
    },
    showPasswordToggle: {
        type: Boolean,
        default: false
    },
    groupTextClass: {
        type: String,
        default: ''
    }
});
const emit = defineEmits([ 'update:modelValue' ]);
const attrs = useAttrs();
const { t } = useI18n();

const togglePassword = ref(false);
const iconLength = computed(() => {
    return icon.length > 0;
});
const placeholder_ = computed(() => placeholder && placeholder.length > 0 ? t(`placeholder.${placeholder}`) : '');
const type_ = computed(() => type === 'password' ? togglePassword.value ? 'text' : type : type);
const showTogglePassword = computed(() => type === 'password' && showPasswordToggle);


const handleInput = (event) => {
    let inputValue = event.target.value;

    if (viewType === 'counter' && inputValue.length >= Number(maxCounter) && type_.value !== 'number') {
        inputValue = inputValue.substring(0, Number(maxCounter));
        event.target.value = inputValue;
    } else if (viewType === 'counter' && Number(inputValue) > Number(maxCounter) && type_.value === 'number') {
        inputValue = Number(maxCounter);
        event.target.value = inputValue;
    }

    emit('update:modelValue', inputValue);
};

const containsPrefix = (str, prefixes = [ 'ri-', 'bx bx-', 'mdi-', 'lab la-', 'las la-' ]) => {
    return prefixes.some(prefix => str.startsWith(prefix));
}


onMounted(() => {
    if (type === 'number') {
        const elements = document.querySelectorAll('input[type="number"]');

        for (let i = 0; i < elements.length; i++) {
            elements[i].setAttribute("step", 'any');
        }
    }
});
</script>

<template>
    <slot name="label">
        <TagLabel v-if="iconLength || viewType === 'counter'" :label="label" :required="$attrs.required" />
    </slot>

    <div :class="[{'input-group': iconLength || viewType === 'counter'}]">
        <slot name="label">
            <TagLabel v-if="!iconLength && viewType !== 'counter'" :label="label" :required="$attrs.required" />
        </slot>

        <span v-if="iconLength" :class="`input-group-text ${groupTextClass}`">
            <slot name="group-text">
                <i v-if="containsPrefix(icon)" :class="[icon, 'align-bottom scale-3']" />
                <span v-else class="align-bottom scale-3">{{ icon }}</span>
            </slot>
        </span>

        <div :class="showTogglePassword ? 'position-relative auth-pass-inputgroup': 'w-100'">
            <input
                v-bind="Object.assign({}, $attrs, {class: undefined})"
                :type="type_"
                :value="modelValue"
                :placeholder="placeholder_ !== 'placeholder._' ? placeholder_ : '_'"
                :class="[{ 'is-invalid': error && error.length > 0 }, {'form-control-group-icon': iconLength}, {'form-control-group-right': viewType === 'counter'}, $attrs.class, 'form-control']"
                @input="(event) => handleInput(event)"
            >
            <BButton
                v-if="showTogglePassword"
                variant="link"
                class="position-absolute end-0 top-0 text-decoration-none text-muted"
                type="button"
                id="password-addon"
                @click="togglePassword = !togglePassword"
            >
                <i class="ri-eye-fill align-middle" />
            </BButton>
        </div>

        <span v-if="viewType === 'counter'" :class="`input-group-text input-group-text-right ${groupTextClass}`">
            <span class="text-dim-gray">
                <template v-if="type_ !== 'number'">
                    <span>{{ modelValue.length }}</span>
                    <span>/</span>
                </template>
                <span>{{ maxCounter }}</span>
            </span>
        </span>
    </div>
    <ErrorMessage :error="error" :show-error="showError" />
</template>


<style scoped>

</style>
