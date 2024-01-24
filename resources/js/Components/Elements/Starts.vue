<script setup>
const { value, simple } = defineProps({
    value: {
        type: Number,
        default: 0.0
    },
    simple: {
        type: Boolean,
        default: false
    }
});

const fullStars = ref(Math.floor(value));
const halfStar = ref(value - fullStars.value > 0 ? 1 : 0);
const emptyStars = computed(() => 5 - fullStars.value - halfStar.value);
</script>

<template>
    <template v-if="!simple">
        <div>
            <i v-for="(item, index) in fullStars" :class="['bx bxs-star fs-17 text-light-blue', {'me-2': index+1 < fullStars}]" />

            <template v-if="halfStar">
                <i class="bx bxs-star-half fs-17 text-light-blue me-2" />
            </template>

            <i v-for="item in emptyStars" class="bx bxs-star fs-17 text-dim-gray me-2" />
        </div>
    </template>
    <template v-else>
        <span class="text-black fs-20"> {{ fullStars }} </span>
        <i class="bx bxs-star fs-17 text-light-blue" />
    </template>
</template>

<style scoped>

</style>