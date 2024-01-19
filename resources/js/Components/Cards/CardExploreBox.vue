<script setup>
defineProps({
    image: {
        type: String,
        default: '@/images/nft/img-03.jpg'
    }
});
</script>

<template>
    <BCard no-body class="explore-box card-animate">
<!--        <div class="bookmark-icon position-absolute top-0 end-0 p-2">-->
<!--            <button-->
<!--                type="button"-->
<!--                class="btn btn-icon"-->
<!--                data-bs-toggle="button"-->
<!--                aria-pressed="true"-->
<!--            >-->
<!--                <i class="mdi mdi-cards-heart fs-16"></i>-->
<!--            </button>-->
<!--        </div>-->
        <div class="explore-place-bid-img">
            <slot name="image">
                <img src="@/images/nft/img-03.jpg" class="card-img-top explore-img" alt>
            </slot>
            <div class="bg-overlay"></div>

            <div class="place-bid-btn">
                <slot name="place-bid-btn" />
            </div>
        </div>

        <BCardBody>
            <slot name="body" />
        </BCardBody>

        <BCardFooter class="border-0">
            <div class="border-top">
                <slot name="footer" />
            </div>
        </BCardFooter>
    </BCard>
</template>

<style scoped>

</style>