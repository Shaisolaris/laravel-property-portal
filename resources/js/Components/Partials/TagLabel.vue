<script setup>
const { label } = defineProps({
    label: {
        type: String,
        default: ''
    },
    required: {
        type: Boolean,
        default: true
    },
    className: {
        type: String,
        default: 'form-label fw-medium'
    }
});
const { t } = useI18n();
const label_ = computed(() => label.length > 0 ? t(`label.${label}`) : '');
</script>

<template>
    <label v-if="label_.length > 0" :class="className">
        {{ $t(label_) }}
        <span v-if="required" class="text-danger">*</span>
    </label>
</template>

<style scoped>

</style>