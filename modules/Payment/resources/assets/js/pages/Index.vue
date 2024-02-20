<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";

defineProps({
    history: {
        type: Array,
        default: []
    }
});


const getHistory = (page) => {
    router.visit(window.route('payment.history', {
        page,
    }), {
        replace: true,
        preserveScroll: true,
        preserveState: true,
    });
};
</script>

<template>
    <AppLayout title="payments">
        <BaseTable t-key-header="payment-history" :meta="history?.meta">
            <template #body>
                <tr v-for="item in history.data">
                    <td>
                        <Link :href="item.model_link">{{ item.model_name }}</Link>
                    </td>
                    <td>{{ item.student }}</td>
                    <td>{{ item.created }}</td>
                    <td>{{ item.amount }}</td>
                    <td>
                        <Status :value="item.status" />
                    </td>
                    <TdActions>
                        <template #actions>
                            <BDropdownItem>
                                <i class="ri-window-line align-bottom me-2 text-royal-blue" />
                                <Text tag="span" t-key="action.receipt" class="text-royal-blue fw-medium fs-14" />
                            </BDropdownItem>
                        </template>
                    </TdActions>
                </tr>
            </template>
        </BaseTable>
    </AppLayout>
</template>

<style scoped>

</style>