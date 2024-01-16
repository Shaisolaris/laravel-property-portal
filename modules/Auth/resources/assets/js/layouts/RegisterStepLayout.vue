<script setup>
import NavBar from "~/Layouts/Partials/AuthLayout/NavBar.vue";
</script>

<template>
<!--    <Head :title="`${$t(`title.${title}`)}`" />-->
    <div class="layout-wrapper landing overflow-x-hidden">
        <NavBar />
        <slot/>
    </div>
</template>

<style scoped>

</style>
