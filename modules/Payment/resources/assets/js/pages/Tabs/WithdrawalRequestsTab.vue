<script setup>
import { useForm } from "@inertiajs/vue3";
import WrapSteps from "$module@payment/pages/Tabs/WrapSteps.vue";


const form = useForm({
    amount: 0,
    payment_credential: 0
});
const showModal = ref(false);


const submit = () => {
    // form.post();
}
</script>

<template>
    <WrapSteps tab="withdrawal-request" title="withdrawal-request">
        <template #withdrawal-request>
            <div class="text-end">
                <BaseButton
                    class="button-without-all"
                    icon="ri-add-circle-line"
                    t-key="new-withdrawal-request"
                    @click="showModal = !showModal"
                />
            </div>
            <BModal
                v-model="showModal"
                :title="$t('modal.create-request')"
                header-class="default-bg-card"
                class="v-modal-custom"
                hide-footer
                centered
            >
                <form @submit.prevent="submit">
                    <BaseInput />
                    <BaseMultiselect />
                </form>
            </BModal>
        </template>
    </WrapSteps>
</template>

<style scoped>

</style>