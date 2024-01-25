<script setup>
import Multiselect from "@vueform/multiselect";
import "@vueform/multiselect/themes/default.css";
import useStructure from "~/scripts/helpers/structure.js";


const { options, label, placeholder, modelValue } = defineProps({
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
    searchable: {
        type: Boolean,
        default: false,
    },
    error: {
        type: String,
        default: '',
    },
    mode: {
        type: String,
        default: "single",
    }
});
const emit = defineEmits([ 'update:modelValue' ]);
const { setPlaceholder } = useStructure();
</script>

<template>
    <div :id="$attrs.id">
        <TagLabel :label="label" :required="$attrs.required" />

        <Multiselect
            :mode="mode"
            :close-on-select="true"
            :searchable="true"
            :options="options"
            :placeholder="setPlaceholder($attrs.placeholder)"
            class="form-control"
            @select="value => emit('update:modelValue', value)"
        />

        <ErrorMessage :error="error" :show-error="showError" />
    </div>
</template>

<style scoped>

</style>
