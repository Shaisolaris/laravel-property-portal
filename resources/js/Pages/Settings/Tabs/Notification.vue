<script setup>
import { useForm } from "@inertiajs/vue3";

defineProps({
    user: {
        type: Object,
        required: true
    }
});

const formNotification = useForm({
    message: false
});


const submitNotification = () => {
    formNotification.put(route('settings.notification'));
}
</script>

<template>
    <b-col cols="12" md="8">
        <Card v-for="item in Object.keys(user?.settings?.notification).length">
            <b-row class="align-items-center">
                <b-col>
                    <div class="text-dim-gray pb-1">
                        <i class="ri-chat-3-line align-bottom me-2"></i>
                        <Text t-key="page.settings.notification.message.title" tag="span" />
                    </div>

                    <Text t-key="page.settings.notification.message.desc" />
                </b-col>
                <b-col>
                    <div class="d-flex justify-content-end">
                        <Switch class="text-end" />
                    </div>
                </b-col>
            </b-row>
        </Card>
    </b-col>
</template>

<style scoped>

</style>