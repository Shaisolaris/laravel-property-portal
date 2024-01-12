<script setup>
const props = defineProps({
    label: {
        type: String,
        default: ''
    },
    size: {
        type: String,
        default: 'md'
    }
});

const classes = ['form-check', props.size.length > 0 ? `form-switch form-switch-${props.size}` : 'form-switch'];
</script>

<template>
    <div :class="classes" dir="ltr">
        <label v-if="label.length > 0" class="form-check-label">{{$t(label)}}</label>
        <input type="checkbox" class="form-check-input" checked="">
    </div>
</template>

<style scoped>

</style>