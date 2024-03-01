<script setup>
defineProps({
    tabsMenu: {
        type: Object
    },
    activeTabArrow: {
        type: Number
    },
    lastNumberTab: {
        type: Number,
    }
})
</script>

<template>
    <div class="mb-4">
        <ul class="nav custom-nav-step" role="tablist">
            <li class="nav-item" role="presentation" v-for="tab in tabsMenu">
                <div class="nav-item-inner pb-2" :class="{active: activeTabArrow === tab.number}" >
                    <IconRounded size="sm">
                        <template #body>
                            <i class="ri-file-line fs-13" v-if="activeTabArrow < tab.number || activeTabArrow === tab.number"></i>
                            <i class="ri-check-line fs-13" v-if="activeTabArrow > tab.number"></i>
                        </template>
                    </IconRounded>
                    <div class="text-start ms-2" type="button" v-if="activeTabArrow === tab.number">
                        <div class="text-dim-gray fs-12 lh-1">Step {{tab.number}}</div>
                        <div class="text fs-14 title-step">{{tab.name}}</div>
                    </div>
                </div>
                <div class="mx-3 d-flex align-items-center pb-2">
                    <i class="ri-arrow-right-s-line fs-16 text-dim-gray" v-if="tab.number !== lastNumberTab"></i>
                </div>
            </li>
        </ul>
    </div>
</template>

<style scoped lang="scss">
.custom-nav-step {
    border-bottom: 1px solid var(--in-gainsboro);
    & .nav-item {
        display: flex;
        &-inner {
            border-bottom: 2px solid transparent;
            position: relative;
            top: 1px;
            display: flex;
            align-items: center;
            &.active {
                border-bottom: 2px solid var(--in-dark);
                & .title-step {
                    font-weight: 500;
                }
            }
        }
    }
}
</style>
