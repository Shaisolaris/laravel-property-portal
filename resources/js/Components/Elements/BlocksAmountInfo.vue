<script setup>
import CardBase from "~/Components/Cards/Base.vue";
import IconBorder from "~/Components/Icons/IconBorder.vue";

defineProps({
    items: {
        type: Object,
        default: () => {},
    },
    cols: {
        type: String,
        default: () => "col-12 col-sm-6 col-lg-3",
    }
})
</script>

<template>
    <CardBase>
        <div class="row g-4">
            <div :class="['text-center',cols]"
                 v-for="(item,index) in items" :key="index">
                <div class="pb-3">
                    <IconBorder :icon="item.icon" />
                </div>
                <div class="text-black fs-16">{{ item.amount }}</div>
                <div class="text-dim-gray fs-16">{{ item.text }}</div>
            </div>
        </div>
    </CardBase>
</template>

<style scoped>

</style>
