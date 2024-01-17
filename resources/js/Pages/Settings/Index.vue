<script setup>
import { useForm, usePage } from "@inertiajs/vue3";
import AppLayout from "~/Layouts/AppLayout.vue";
import Profile from "~/Pages/Settings/Tabs/Profile.vue";
import Password from "~/Pages/Settings/Tabs/Password.vue";
import Notification from "~/Pages/Settings/Tabs/Notification.vue";


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
const user = computed(() => usePage().props.auth.data);
</script>

<template>
    <AppLayout title="settings">
        <Tabs t-key="settings">
            <template v-slot:tab-profile-body>
                <Profile :user="user" :genders="genders" :languages="languages" :timezones="timezones" />
            </template>
            <template v-slot:tab-notification-body>
                <Notification :user="user" />
            </template>
            <template v-slot:tab-password-body>
                <Password :user="user" />
            </template>
        </Tabs>
    </AppLayout>
</template>

<style scoped>
.text-padding {
    padding: 0.6rem 0.75rem
}
</style>