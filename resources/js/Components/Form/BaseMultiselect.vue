<script setup>
import Multiselect from "@vueform/multiselect";
import "@vueform/multiselect/themes/default.css";


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
        default: "tags",
    }
});
const emit = defineEmits([ 'update:modelValue' ]);
</script>

<template>
    <div :id="$attrs.id">
        <TagLabel :label="label" :required="$attrs.required" />

        <Multiselect
            :mode="mode"
            :close-on-select="true"
            :searchable="true"
            :options="options"
            class="form-control multiselect-inoura"
            @select="value => emit('update:modelValue', value)"
        />

        <ErrorMessage :error="error" :show-error="showError" />
    </div>
</template>

<style scoped>
.multiselect-inoura {
    padding: 2.8px;
}
</style>
