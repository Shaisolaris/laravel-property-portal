<script setup>
import LandingLayout from "$module@landing/layouts/LandingLayout.vue";
import animationData from "~/json/widgets/lupuorrc.json";


defineProps({
    id: {
        type: String,
        default: ''
    }
});
const defaultOptions = ref({ animationData: animationData });


onMounted(() => {
    setTimeout(() => {
        router.visit(route('general.dashboard'));
    }, 4000)
});
</script>

<template>
    <LandingLayout :show-footer="false" title="payment-success" color="beige">
        <div class="auth-page-wrapper d-flex justify-content-center align-items-center min-vh-100 text-center">
            <div>
                <Lottie colors="primary:#0ab39c,secondary:#405189" :options="defaultOptions" :height="120" :width="120" />

                <h5>Thank you ! Your Order is Completed !</h5>
                <p class="text-muted">
                    You will receive an order confirmation email with details
                    of your order.
                </p>

                <h3 class="fw-semibold">
                    Order ID:
                    <Link href="/ecommerce/order-details" class="text-decoration-underline">{{ id }}</Link>
                </h3>
            </div>
        </div>
    </LandingLayout>
</template>

<style scoped>

</style>