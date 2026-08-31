<script setup>
const { model } = defineProps({
    model: {
        type: Object,
        required: true
    }
});


const payClass = () => {
    axios
        .post(route('ei-pay.pay', { 'model': model }))
        .then(({ data }) => {
            window.location.assign(data);
        })
        .catch((errors) => {
            console.log(errors);
        });
}
</script>

<template>
    <div class="auth-page-wrapper py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="overflow-hidden border-0">
                            <b-row class="justify-content-center">
                                <b-col cols="12" md="8" lg="6" xl="5" xxl="3">
                                    <BCard no-body>
                                        <BCardHeader>
                                            <Text t-key="page.payment.title" class="fs-3 fw-medium pb-3 text-center" />

                                            <div>
                                                <Text tag="span" t-key="page.payment.hey" class="me-1" />
                                                {{ $page.props.auth.full_name }}
                                            </div>
                                        </BCardHeader>

                                        <BCardBody>
                                            <div class="default-text-color pb-2">{{ model.name }}</div>
                                            <div class="text-dim-gray">{{ model.description }}</div>
                                            <div class="text-end text-dim-gray">Total Amount:
                                                <span class="ms-2 fw-medium text-black">{{ model.show_price }}</span>
                                            </div>
                                        </BCardBody>

                                        <BCardFooter>
                                            <div class="d-flex justify-content-center gap-3">
                                                <div>
                                                    <BaseButton
                                                        t-key="pay"
                                                        variant="light-blue"
                                                        @click="payClass"
                                                    />
                                                </div>
                                                <div>
                                                    <BaseButton
                                                        :route="route('landing.academy.index')"
                                                        t-key="back-landing"
                                                        variant="light-yellow"
                                                        class="w-50"
                                                    />
                                                </div>
                                            </div>
                                        </BCardFooter>
                                    </BCard>
                                </b-col>
                            </b-row>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>