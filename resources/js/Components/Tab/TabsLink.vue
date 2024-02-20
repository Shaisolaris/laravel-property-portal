<script setup>
defineProps({
    currentTab: {
        type: String,
        required: true
    },
    tabs: {
        type: Array,
        required: true
    }
});


const tabLink = (e, route) => {
    e.preventDefault();

    router.visit(route);
}
</script>

<template>
    <BTabs nav-class="nav-primary mb-3 tabs" class="default-tabs" pills>
        <template v-for="tab in tabs">
            <BTab v-if="tab.isShow" :active="tab.tab === currentTab" @click="(e) => tabLink(e, tab.route)">
                <template #title>
                    <Text
                        :t-key="$t(tab.title)"
                        :class="tab.tab === currentTab ? 'default-text-color' : 'text-dim-gray'"
                    />
                </template>
                <slot :name="`tab-${tab.tab.toLowerCase()}-body`" />
            </BTab>
        </template>
    </BTabs>
</template>

<style scoped>

</style>