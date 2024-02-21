<script setup>
import flatPickr from "vue-flatpickr-component";
import moment from "moment";
import useStructure from "~/scripts/helpers/structure.js";
import "flatpickr/dist/flatpickr.css";
import "@simonwep/pickr/dist/themes/classic.min.css";
import "@simonwep/pickr/dist/themes/monolith.min.css";
import "@simonwep/pickr/dist/themes/nano.min.css";


defineOptions({
    inheritAttrs: false,
});

const props = defineProps({
    label: {
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
    icon: {
        type: String,
        default: '',
    },
    dateFormat: {
        type: String,
        default: 'd M, Y'
    },
    defaultDate: {
        type: String,
        default: moment().format('MMMM Do YYYY')
    },
    modelValue: {
        type: [ String, Number ],
        default: null
    },
    enableTime: {
        type: Boolean,
        default: false
    },
    mode: {
        type: String,
        default: 'single'
    }
});
const emit = defineEmits([ 'update:modelValue' ]);
const { setPlaceholder } = useStructure();
const date = ref(props.modelValue ?? null);
const flatPickrRef = ref(null);
const defaultDateConfig = ref({
    dateFormat: props.dateFormat,
    enableTime: props.enableTime,
    altFormat: 'M j, Y',
    altInput: true,
    mode: props.mode,
});


watch(
    () => props.error,
    (error) => {
        const elements = document.getElementsByClassName('flatpickr-input-c');

        if (error && error.length > 0) {
            for (const element of elements) {
                if (element.classList.contains('form-control')) {
                    element.classList.add('is-error');
                }
            }
        } else {
            for (const element of elements) {
                if (element.classList.contains('form-control') && element.classList.contains('is-error')) {
                    element.classList.remove('is-error');
                }
            }
        }
    }
);

watch(
    () => date.value,
    (newDate) => {
        emit('update:modelValue', newDate);
    }
);
</script>

<template>
    <div>
        <TagLabel v-if="icon.length" :label="label" :required="$attrs.required" />

        <div :class="[{'input-group': icon.length}, 'wrap-flatpickr']">
            <TagLabel v-if="!icon.length" :label="label" :required="$attrs.required" />

            <span v-if="icon.length" class="input-group-text">
                <slot name="group-text">
                    <i :class="[icon, 'align-bottom scale-3']" />
                </slot>
            </span>

            <flat-pickr
                v-bind="$attrs"
                v-model="date"
                ref="flatPickrRef"
                :config="defaultDateConfig"
                :placeholder="setPlaceholder($attrs.placeholder)"
                :class="['flatpickr-input flatpickr-input-c', { 'form-control-group-icon': icon.length }]"
                multiple
            />
        </div>

        <ErrorMessage :error="error" :show-error="showError" />
    </div>
</template>

<style lang="scss" scoped>

</style>