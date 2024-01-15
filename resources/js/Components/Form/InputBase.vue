<script setup>
import { useI18n } from "vue-i18n";
import TagLabel from "~/Components/Partials/TagLabel.vue";
import ErrorMessage from "~/Components/Partials/ErrorMessage.vue";
import { computed } from "vue";


defineOptions({
    inheritAttrs: false,
});


const props = defineProps({
    type: {
        type: String,
        default: 'text',
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
    classMap: {
        type: String,
        default: '',
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
    }
});
const emit = defineEmits([ 'update:modelValue' ]);
const attrs = useAttrs();
const { t } = useI18n();

const togglePassword = ref(false);
const iconLength = computed(() => props.icon.length > 0);
const placeholder_ = computed(() => attrs?.placeholder.length > 0 ? t(`placeholder.${attrs.placeholder}`) : '');
const label_ = computed(() => props.label.length > 0 ? t(`label.${props.label}`) : '');
const type_ = computed(() => props.type === 'password' ? togglePassword.value ? 'text': props.type : props.type);


const handleInput = (event) => {
    let inputValue = event.target.value;

    if (props.viewType === 'counter' && inputValue.length >= Number(props.maxCounter)) {
        inputValue = inputValue.substring(0, Number(props.maxCounter));
        event.target.value = inputValue;
    }

    emit('update:modelValue', inputValue);
};

const containsPrefix = (str, prefixes = [ 'ri-', 'bx bx-', 'mdi-', 'lab la-', 'las la-' ]) => {
    return prefixes.some(prefix => str.startsWith(prefix));
}


onMounted(() => {
    if (props.type === 'number') {
        const elements = document.querySelectorAll('input[type="number"]');

        for (let i = 0; i < elements.length; i++) {
            elements[i].setAttribute("step", 'any');
        }
    }
});
</script>

<template>
    <TagLabel v-if="iconLength || viewType === 'counter'" :label="label_" :required="$attrs.required" />

    <div :class="[{'input-group': iconLength || viewType === 'counter'}]">
        <TagLabel v-if="!iconLength && viewType !== 'counter'" :label="label_" :required="$attrs.required" />

        <span v-if="iconLength" class="input-group-text">
            <slot name="group-text">
                <i v-if="containsPrefix(icon)" :class="[icon, 'align-bottom scale-3']" />
                <span v-else class="align-bottom scale-3">{{ icon }}</span>
            </slot>
        </span>

        <span :class="type === 'password' ? 'd-block position-relative auth-pass-inputgroup': ''">
            <input
                v-bind="$attrs"
                :type="type_"
                :value="modelValue"
                :placeholder="placeholder_"
                :class="[{ 'is-invalid': error && error.length > 0 }, classMap, 'form-control ']"
                @input="(event) => handleInput(event)"
            >

            <BButton
                v-if="type === 'password'"
                variant="link"
                class="position-absolute end-0 top-0 text-decoration-none text-muted"
                type="button"
                id="password-addon"
                @click="togglePassword = !togglePassword"
            >
                <i class="ri-eye-fill align-middle" />
            </BButton>
        </span>

        <span v-if="viewType === 'counter'" class="input-group-text">
            <span class="text-dim-gray">
                <span>{{ modelValue.length }}</span>
                <span>/</span>
                <span>{{maxCounter}}</span>
            </span>
        </span>

        <ErrorMessage :error="error" :show-error="showError" />
    </div>
</template>

<!--На формах auth там 10 пикселей и белый фон, глобально пока не ставлю нужно обсудить...-->
<style scoped>
input {
    background: #fff;
    border-radius: 10px;
}
</style>
