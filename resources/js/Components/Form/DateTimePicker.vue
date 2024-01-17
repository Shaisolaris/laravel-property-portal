<script setup>
import flatPickr from "vue-flatpickr-component";
import moment from "moment";
import Pickr from "@simonwep/pickr";

/* styles */
import "flatpickr/dist/flatpickr.css";
import "@simonwep/pickr/dist/themes/classic.min.css";
import "@simonwep/pickr/dist/themes/monolith.min.css";
import "@simonwep/pickr/dist/themes/nano.min.css";
/**/


const { dateFormat, defaultDate, modalValue, enableTime } = defineProps({
    dateFormat: {
        type: String,
        default: 'd M, Y'
    },
    defaultDate: {
        type: String,
        default: moment().format('MMMM Do YYYY')
    },
    modalValue: {
        type: [ String, Number ],
        default: null
    },
    enableTime: {
        type: Boolean,
        default: false
    }
});
const emit = defineEmits([ 'update:modelValue' ]);

const date = ref(modalValue ?? null);

const defaultDateConfig = ref({
    dateFormat: dateFormat,
    enableTime: enableTime,
    altFormat: 'M j, Y',
    altInput: true,
});


watch(
    () => date.value,
    (newDate) => {
        emit('update:modelValue', newDate);
    }
);
</script>

<template>
    <flat-pickr
        v-model="date"
        :config="defaultDateConfig"
        class="form-control flatpickr-input"
        @on-change="handleChange"
    />
</template>

<style scoped>

</style>