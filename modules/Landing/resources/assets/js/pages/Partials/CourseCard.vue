<script setup>
defineProps({
    course: {
        type: Object,
        default: {
            title: 'Intermediate',
            text: 'WordPress Theme Development with Bootstrap',
            text2: 'Discover a world of learning opportunities through our upco...',
            rate: 4,
            reviews: 256,
            image: '',
            price: 10,
            discount: 9,
            time: '',
        }
    }
});
</script>

<template>
    <CardExploreBox class="shadow-light-blue border-2 border-light-blue">
        <template #body>
            <div class="fs-16 fontf-McLaren text-dim-gray text-decoration-underline">{{ course.title }}</div>
            <div class="fs-20 fw-medium py-2">{{ course.text }}</div>
            <div class="fs-16 text-dim-gray pb-4">{{ course.text2 }}</div>

            <div class="d-flex align-items-center">
                <div class="flex-grow-1">
                    <div class="d-flex gap-2">
                        <div class="d-flex align-items-center">
                            <span class="fs-20 fw-bolder">{{ course.rate }}</span>
                            <i class="ri-star-fill ms-1 text-light-blue fs-18" />
                        </div>
                        <div class="d-flex align-items-center text-dim-gray">
                            <span class="me-1">{{ course.reviews }}</span>
                            <Text t-key="reviews" />
                        </div>
                    </div>
                </div>
                <div class="flex-shrink-0">
                    <i class="ri-refresh-line align-bottom me-1" />
                </div>
            </div>
        </template>
        <template #footer>
            <div class="d-flex align-items-center pt-2">
                <div class="flex-grow-1">
                    <span :class="['fs-20 fw-bolder', {'me-2': course.discount > 0} ]">${{ course.discount > 0 ? course.discount : course.price }}</span>
                    <span v-if="course.discount > 0" class="text-dim-gray text-decoration-line-through">${{ course.price }}</span>
                </div>
                <div class="flex-shrink-0">
                    <i class="ri-time-line align-bottom me-1"></i>
                    <span>24:12:12</span>
                </div>
            </div>
        </template>
    </CardExploreBox>
</template>

<style scoped>

</style>