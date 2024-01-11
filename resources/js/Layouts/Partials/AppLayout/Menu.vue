<script setup>
import MenuItem from "~/Layouts/Partials/AppLayout/MenuItem.vue";
</script>

<template>
    <BContainer fluid>
        <div id="two-column-menu"></div>
        <div class="d-flex align-items-center pxc-20">
            <div class=" me-4">
                <img src="@/images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-lg">
            </div>
            <div class="d-block d-lg-none d-xl-block text-start">
                <div class="fs-14 text-dim-gray">User</div>
                <div class="sidebar-name-block fs-4 fw-medium">Alex</div>
            </div>
        </div>

        <ul class="navbar-nav h-100" id="navbar-nav">
            <template v-for="(navigation, index) in $page.props.navigations">
                <li v-if="navigation.length > 0" class="menu-title">
                    <span :data-key="`t-${index}`"> {{ $t(`t-${index}`) }}</span>
                </li>

                <MenuItem :navigation="navigation" />
            </template>
        </ul>
    </BContainer>
</template>

<style scoped>

</style>