<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    navigation: {
        type: Object,
        required: true
    }
});
const showDefault = ref(true);
const observer = ref(null);


const watchDataAttribute = () => {
    const element = document.getElementsByTagName('html');

    const callback = (mutationsList) => {
        for (const mutation of mutationsList) {
            if (mutation.type === 'attributes' && mutation.attributeName === 'data-sidebar-size') {
                showDefault.value = !showDefault.value;
            }
        }
    };

    observer.value = new MutationObserver(callback);

    if (element) {
        observer.value.observe(element[0], { attributes: true });
    }

}


onMounted(() => {
    watchDataAttribute();
});

onUnmounted(() => {
    if (observer.value) {
        observer.value.disconnect();
        observer.value = null;
    }
});
</script>

<template>
    <li v-if="showDefault" class="nav-item sidebar-nav-item">
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
    <li v-else class="nav-item">
        <Link :class="['nav-link menu-link', { 'active': navigation.active }]" :href="route(navigation.routeName)">
            <i :class="[navigation.icon, 'text-black fs-16']"></i>
            <span class="ms-2 text-black fs-14" :data-key="navigation.tKey"> {{ $t(navigation.tKey) }}</span>
        </Link>
    </li>

</template>

<style scoped>

</style>