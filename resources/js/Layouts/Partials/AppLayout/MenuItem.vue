<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    navigation: {
        type: Object,
        required: true
    }
});
</script>

<template>
    <li class="nav-item sidebar-nav-item">
        <Link
            :class="['nav-link menu-link', { 'active': navigation.active }]"
            :href="route(navigation.routeName)"
        >
            <span :class="['sidebar-item', { 'active': navigation.active }]">
                <span class="btn-beige rounded-pill btn btn-icon btn-md">
                    <i :class="[navigation.icon, 'text-black fs-16']"></i>
                </span>
                <span class="ms-2 text-black fs-14" :data-key="navigation.tKey"> {{ $t(navigation.tKey) }}</span>
            </span>
        </Link>
    </li>
</template>

<style scoped>

</style>