<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";

const props = defineProps({
    timezones: {
        type: Array,
        required: true
    }
});
</script>

<template>
    <AppLayout title="settings">
        <Tabs t-key="settings">
            <template v-slot:tab-profile-body>
                <b-col cols="12" md="8">
                    <Card>

                    </Card>
                </b-col>
            </template>
            <template v-slot:tab-notification-body>
                <b-col cols="12" md="8">
                </b-col>
            </template>
            <template v-slot:tab-password-body>
                <b-col cols="12" md="8">
                    <Card>

                    </Card>
                </b-col>
            </template>
        </Tabs>
    </AppLayout>
</template>

<style scoped>

</style>