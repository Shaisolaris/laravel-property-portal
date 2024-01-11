<script setup>
const { value } = defineProps({
    value: {
        default: () => 0.0,
    },
    simple: {
        default: () => false,
    }
})

let fullStars = Math.floor(value);
let halfStar = value - fullStars > 0 ? 1 : 0;
let emptyStars = 5 - fullStars - halfStar;

</script>

<template>
<div>
    <template v-if="!simple">
        <i v-for="(start, index) in fullStars" class="bx bxs-star fs-17 text-light-blue" :key="index"></i>
        <i v-if="halfStar" class="bx bxs-star-half fs-17 text-light-blue"></i>
        <i v-for="(start, index) in emptyStars" class="bx bxs-star fs-17 text-dim-gray" :key="index"></i>
    </template>

    <template v-else>
        <span class="text-black fs-20">
            {{fullStars}}
        </span>
        <i class="bx bxs-star fs-17 text-light-blue"></i>
    </template>
</div>
</template>
