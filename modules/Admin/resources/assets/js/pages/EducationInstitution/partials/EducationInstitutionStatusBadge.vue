<script setup>

const props = defineProps({
    status: {
        type:     String,
        required: true,
    },
});

const variant = computed(() => {

    return  {
        '0':  'danger',
        '1': 'success',
    }[props.status] ?? 'info';
});

</script>

<template>

    <BBadge :variant="variant">
        {{ $t(`admin.page.institution.status.${status}`, status) }}
    </BBadge>

</template>
