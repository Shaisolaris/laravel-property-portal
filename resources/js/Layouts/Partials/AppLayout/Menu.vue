<script setup>
import MenuItem from "~/Layouts/Partials/AppLayout/MenuItem.vue";
</script>

<template>
    <b-container fluid>
        <div id="two-column-menu"></div>
        <ul class="navbar-nav h-100" id="navbar-nav">
            <template v-for="(navigation, index) in $page.props.navigations">
                <li v-if="navigation.length > 0" class="menu-title">
                    <span :data-key="`t-${index}`"> {{ $t(`t-${index}`) }}</span>
                </li>

                <MenuItem :navigation="navigation" />
            </template>
        </ul>
    </b-container>
</template>

<style scoped>

</style>