<script setup>
import Multiselect from "@vueform/multiselect";
import "@vueform/multiselect/themes/default.css";
import useStructure from "~/scripts/helpers/structure.js";


const { options, label, placeholder, modelValue } = defineProps({
    modelValue: { type: [ String, Number ], default: null },
    label: { type: String, default: '' },
    options: { type: [Array, Object], required: true, default: () => [] },
    showError: { type: Boolean, default: true, },
    searchable: { type: Boolean, default: false },
    error: { type: String, default: '' },
    mode: { type: String, default: "single" }
});
const emit = defineEmits([ 'update:modelValue' ]);
const { setPlaceholder } = useStructure();
</script>

<template>
    <div :id="$attrs.id">
        <slot name="label">
            <TagLabel :label="label" :required="$attrs.required" />
        </slot>

        <Multiselect
            :mode="mode"
            :close-on-select="true"
            :searchable="true"
            :options="options"
            :placeholder="setPlaceholder($attrs.placeholder, 'select')"
            :disabled="$attrs.disabled"
            :class="['form-control', { 'is-error': error && error.length > 0 }]"
            :value="modelValue"
            @change="value => emit('update:modelValue', value)"
        >
            <template #noresults>
                <Text tag="span" t-key="no-results-found" class="text-center py-2" />
            </template>
        </Multiselect>

        <ErrorMessage :error="error" :show-error="showError" />
    </div>
</template>
