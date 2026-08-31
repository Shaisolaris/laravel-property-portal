<script setup>

defineOptions({
    inheritAttrs: false,
});

const props = defineProps({
    label: {
        type: String,
        default: ''
    },
    size: {
        type: String,
        default: 'md'
    },
    modelValue: {
        type: [ String, Number ],
        default: null,
    },
});
const emit = defineEmits([ 'update:modelValue' ]);
const classes = [ 'form-check', props.size.length > 0 ? `form-switch form-switch-${props.size}` : 'form-switch' ];
</script>

<template>
    <div :class="classes" dir="ltr">
        <label v-if="label.length > 0" class="form-check-label">{{ $t(label) }}</label>
        <input
            v-bind="$attrs"
            type="checkbox"
            class="form-check-input"
            @change="(event) => emit('update:modelValue', event.target.checked)"
        >
    </div>
</template>

<style scoped>

</style>