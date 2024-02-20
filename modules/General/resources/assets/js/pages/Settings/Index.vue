<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";
import Profile from "$module@general/pages/Settings/Tabs/Profile.vue";
import Password from "$module@general/pages/Settings/Tabs/Password.vue";
import Notification from "$module@general/pages/Settings/Tabs/Notification.vue";


const props = defineProps({
    timezones: {
        type: Array,
        required: true
    },
    genders: {
        type: Array,
        required: true
    },
    languages: {
        type: Array,
        required: true
    }
});
</script>

<template>
    <AppLayout title="settings">
        <Tabs t-key="settings">
            <template #tab-profile-body>
                <b-col cols="12" xl="8">
                    <Profile :genders="genders" :languages="languages" :timezones="timezones" />
                </b-col>
            </template>
            <template #tab-notification-body>
                <b-col cols="12" xl="8">
                    <Notification />
                </b-col>
            </template>
            <template #tab-password-body>
                <b-col cols="12" xl="8">
                    <Password />
                </b-col>
            </template>
        </Tabs>
    </AppLayout>
</template>

<style scoped>
.text-padding {
    padding: 0.6rem 0.75rem
}
</style>