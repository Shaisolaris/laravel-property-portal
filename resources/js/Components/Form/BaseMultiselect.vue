<script setup>
import TagLabel from "~/Components/Partials/TagLabel.vue";
import ErrorMessage from "~/Components/Partials/ErrorMessage.vue";
import Multiselect from "@vueform/multiselect";
import "@vueform/multiselect/themes/default.css";

const emit = defineEmits([ 'update:modelValue' ]);
const {options, label, placeholder, modelValue} = defineProps({
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
    mode:{
        type: String,
        default: "tags",
    }
});

</script>

<template>
    <div :id="$attrs.id">
        <TagLabel :label="label" :required="$attrs.required"/>

        <Multiselect class="form-control multiselect-inoura"
                     :mode="mode"
                     @select="value => emit('update:modelValue', value)"
                     :close-on-select="true"
                     :searchable="true"
                     :options="options"/>

        <ErrorMessage :error="error" :show-error="showError"/>
    </div>
</template>

<style scoped>
.multiselect-inoura {
    padding: 2.8px;
}
</style>
