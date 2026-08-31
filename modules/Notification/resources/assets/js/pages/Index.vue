<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import AppLayout from '~/Layouts/AppLayout.vue';
import { reactive } from 'vue';

const props = defineProps({
    previous_url: String,
});

const notifications = reactive([...usePage().props.notifications]);

// const onMarkAllAsRead = () => {
//     axios
//         .put(route('api.notifications.mark-seen-all'))
//         .then(() => {
//             notifications.splice(0, notifications.length);
//             notify({ type: 'success', title: 'All notifications have been marked as read' });
//         })
//         .catch((error) => console.log(error));
// };
</script>

<template>
    <AppLayout title="Notification">
<!--        <div class="mx-auto flex max-w-content flex-col">-->
<!--            <div-->
<!--                class="mb-3 flex items-center justify-between border-b border-urctrl-gray/20 px-2 pb-2.5 text-urctrl-dark-blue"-->
<!--            >-->
<!--                <div class="flex items-center">-->
<!--                    <tooltip id="previous-url" label="Previous page" />-->
<!--                    <Link-->
<!--                        :href="previous_url"-->
<!--                        class="ml-2 text-urctrl-blue hover:opacity-70 focus:rounded focus:outline-none focus:ring-2 focus:ring-urctrl-blue focus:ring-offset-4"-->
<!--                        data-tooltip-target="previous-url"-->
<!--                        data-tooltip-placement="right"-->
<!--                    >-->
<!--                        <font-awesome-icon :icon="['fas', 'chevron-left']" />-->
<!--                    </Link>-->
<!--                    <h1 class="ml-4 text-base font-semibold tracking-wider sm:text-xl">Notifications</h1>-->
<!--                </div>-->
<!--                <button-->
<!--                    v-if="notifications.filter((notification) => !notification.is_seen).length"-->
<!--                    class="flex items-center space-x-2 text-xs transition-all duration-300 hover:opacity-70 focus:rounded focus:outline-none focus:ring-2 focus:ring-urctrl-blue focus:ring-offset-2 focus:transition-none"-->
<!--                    @click="onMarkAllAsRead"-->
<!--                >-->
<!--                    <span>Mark all as read</span>-->
<!--                    <font-awesome-icon :icon="['fas', 'check-double']" />-->
<!--                </button>-->
<!--            </div>-->
<!--            <div-->
<!--                class="divide-y divide-gray-100 rounded-lg transition-all duration-300 hover:bg-urctrl-light-gray"-->
<!--                v-for="notification in notifications"-->
<!--                :key="notification.uuid"-->
<!--            >-->
<!--                <Link-->
<!--                    :href="route('notifications.show', notification.uuid)"-->
<!--                    class="flex px-4 py-3 hover:opacity-70 focus:rounded-lg focus:outline-none focus:ring-2 focus:ring-urctrl-blue"-->
<!--                >-->
<!--                    <Link-->
<!--                        :href="route('profile.show', notification.user.username)"-->
<!--                        class="h-12 w-12 flex-shrink-0 transition-all duration-300 hover:opacity-70 focus:rounded-full focus:outline-none focus:ring-2 focus:ring-urctrl-blue focus:transition-none"-->
<!--                    >-->
<!--                        <media-image :src="notification.user.avatar" class="rounded-full" />-->
<!--                    </Link>-->
<!--                    <div class="w-full pl-2.5">-->
<!--                        <div class="text-sm text-gray-500">-->
<!--                            <Link-->
<!--                                :href="route('profile.show', notification.user.username)"-->
<!--                                class="mr-1 font-semibold text-urctrl-dark-blue transition-all duration-300 hover:opacity-70 focus:rounded focus:outline-none focus:ring-2 focus:ring-urctrl-blue focus:ring-offset-2 focus:transition-none"-->
<!--                            >-->
<!--                                {{ notification.user.full_name }}-->
<!--                            </Link>-->
<!--                            <span>{{ notification.text }}</span>-->
<!--                        </div>-->
<!--                        <div class="text-xs text-urctrl-gray">{{ notification.created_at }}</div>-->
<!--                    </div>-->
<!--                </Link>-->
<!--            </div>-->
<!--        </div>-->
    </AppLayout>
</template>
