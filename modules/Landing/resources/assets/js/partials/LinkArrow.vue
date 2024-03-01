<script setup>
defineProps({
    routeName: {
        type: String,
        default: 'landing.academy.index'
    },
    textTKey: {
        type: String,
        default: ''
    }
});
</script>

<template>
    <Link :href="route(routeName)" class="text-black fs-3 lh-1 fontf-McLaren">
        <Text tag="span" :t-key="`landing.${textTKey}.button`" class="me-2" />
        <img src="@/images/svg/arrow-right.svg" width="29" height="19" alt>
    </Link>
</template>

<style scoped>

</style>