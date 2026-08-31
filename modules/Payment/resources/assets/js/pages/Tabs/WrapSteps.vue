<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";


defineProps({
    tab: String,
    title: String
});


const tabs = ref([
    {
        route: route('payment.payment-credential.index'),
        tab: 'payment-credential',
        title: 'tabs.payment.0',
        isShow: true
    },
    {
        route: route('payment.history'),
        tab: 'history',
        title: 'tabs.payment.1',
        isShow: true
    },
    {
        route: route('payment.withdrawal-request.index'),
        tab: 'withdrawal-request',
        title: 'tabs.payment.2',
        isShow: true
    },
]);
</script>

<template>
    <AppLayout :title="title">
        <TabsLink :tabs="tabs" :current-tab="tab">
            <template #tab-payment-credential-body>
                <b-row>
                    <b-col cols="12">
                        <slot name="payment-credential" />
                    </b-col>
                </b-row>
            </template>
            <template #tab-history-body>
                <b-row>
                    <b-col cols="12">
                        <slot name="history" />
                    </b-col>
                </b-row>
            </template>
            <template #tab-withdrawal-request-body>
                <b-row>
                    <b-col cols="12">
                        <slot name="withdrawal-request" />
                    </b-col>
                </b-row>
            </template>
        </TabsLink>
    </AppLayout>
</template>

<style scoped>

</style>