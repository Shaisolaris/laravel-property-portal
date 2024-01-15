<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import { reactive, ref } from 'vue';
import Dropdown from '@/Components/Dropdown.vue';
import MediaImage from '@/Components/MediaImage.vue';
import Tooltip from '@/Components/Tooltip.vue';
import { notify } from '@kyvg/vue3-notification';

const props = defineProps({
    notifications: {
        type: Array,
        required: true,
    },
    loading: {
        type: Boolean,
        default: false,
    },
});

const emit = defineEmits(['onMarkAllAsRead']);
</script>

<template>
    <tooltip id="header-notifications" label="Notifications" />
    <template v-if="notifications.length > 0">
        <Dropdown :width="96">
            <template #trigger>
                <button
                    type="button"
                    class="relative ml-5 text-urctrl-gray hover:opacity-70 focus:rounded focus:outline-none focus:ring-2 focus:ring-urctrl-blue focus:ring-offset-4 sm:ml-6 xl:ml-8"
                    data-tooltip-target="header-notifications"
                    @click="onNotificationsBell"
                >
                    <svg class="h-6 w-6 fill-urctrl-gray" viewBox="0 0 20 20">
                        <path
                            d="M18.7958 11.385L17.2125 5.68834C16.7484 4.01945 15.7398 2.55358 14.3469 1.52373C12.9541 0.493884 11.257 -0.0408381 9.52537 0.00456195C7.79375 0.049962 6.12699 0.672879 4.79004 1.7743C3.45308 2.87571 2.52266 4.39243 2.14665 6.08334L0.920818 11.5958C0.785414 12.205 0.788545 12.8367 0.929979 13.4444C1.07141 14.0522 1.34754 14.6204 1.73797 15.1071C2.1284 15.5939 2.62317 15.9867 3.18574 16.2566C3.74832 16.5266 4.36434 16.6667 4.98832 16.6667H5.91665C6.10791 17.6086 6.61893 18.4554 7.3631 19.0637C8.10728 19.6719 9.03886 20.0042 9.99999 20.0042C10.9611 20.0042 11.8927 19.6719 12.6369 19.0637C13.381 18.4554 13.8921 17.6086 14.0833 16.6667H14.7817C15.424 16.6667 16.0576 16.5183 16.6331 16.2329C17.2086 15.9475 17.7103 15.5329 18.099 15.0216C18.4877 14.5102 18.753 13.9159 18.874 13.285C18.995 12.6542 18.9685 12.0039 18.7967 11.385H18.7958ZM9.99999 18.3333C9.48477 18.3312 8.98279 18.1699 8.56274 17.8716C8.14268 17.5733 7.82505 17.1524 7.65332 16.6667H12.3467C12.1749 17.1524 11.8573 17.5733 11.4372 17.8716C11.0172 18.1699 10.5152 18.3312 9.99999 18.3333ZM16.7717 14.0125C16.5394 14.3206 16.2386 14.5702 15.893 14.7416C15.5474 14.9131 15.1666 15.0015 14.7808 15H4.98832C4.61397 14.9999 4.24442 14.9158 3.90694 14.7538C3.56945 14.5918 3.27266 14.3561 3.03845 14.0641C2.80425 13.7721 2.63862 13.4312 2.55379 13.0665C2.46895 12.7019 2.46709 12.3229 2.54832 11.9575L3.77332 6.44417C4.06861 5.11601 4.79941 3.92468 5.84953 3.05955C6.89966 2.19442 8.20884 1.70515 9.56896 1.66952C10.9291 1.63389 12.2621 2.05394 13.3561 2.8629C14.4501 3.67186 15.2422 4.8233 15.6067 6.13417L17.19 11.8308C17.2946 12.202 17.3113 12.5924 17.2387 12.9711C17.166 13.3498 17.0061 13.7064 16.7717 14.0125Z"
                        />
                    </svg>
                    <span class="absolute -top-1.5 left-3 flex h-4 w-4">
                        <span
                            class="absolute inline-flex h-full w-full animate-ping rounded-full bg-urctrl-red opacity-75"
                        ></span>
                        <div class="relative inline-flex h-4 w-4 rounded-full bg-urctrl-red">
                            <span
                                v-if="notifications && notifications.length > 0"
                                class="m-auto text-white"
                                style="font-size: 11px"
                                >{{ notifications.length }}</span
                            >
                        </div>
                    </span>
                </button>
            </template>
            <template #content>
                <div class="divide-y divide-urctrl-gray/10 rounded-b-md rounded-t-md">
                    <div class="flex items-center justify-between px-4 text-urctrl-dark-blue">
                        <p class="py-2 text-base font-bold tracking-widest">Notifications</p>
                        <button
                            v-if="notifications.filter((notification) => !notification.is_seen).length"
                            class="flex items-center space-x-2 text-xs transition-all duration-300 hover:opacity-70 focus:rounded focus:outline-none focus:ring-2 focus:ring-urctrl-blue focus:ring-offset-2 focus:transition-none"
                            @click="emit('onMarkAllAsRead')"
                        >
                            <span>Mark all as read</span>
                            <font-awesome-icon :icon="['fas', 'check-double']" />
                        </button>
                    </div>

                    <div v-if="loading" class="flex justify-center py-10">
                        <font-awesome-icon
                            :icon="['fas', 'circle-notch']"
                            class="animate-spin text-urctrl-blue"
                            size="2xl"
                        />
                    </div>
                    <template v-else>
                        <div
                            class="max-h-72 divide-y divide-gray-100 overflow-y-auto transition-all duration-300 hover:bg-urctrl-light-gray"
                            v-for="notification in notifications"
                            :key="notification.uuid"
                        >
                            <Link :href="route('notifications.show', notification.uuid)" class="flex px-4 py-3">
                                <Link
                                    :href="route('profile.show', notification.user.username)"
                                    class="h-12 w-12 flex-shrink-0 transition-all duration-300 hover:opacity-70 focus:rounded-full focus:outline-none focus:ring-2 focus:ring-urctrl-blue focus:transition-none"
                                >
                                    <media-image :src="notification.user.avatar" class="rounded-full" />
                                </Link>
                                <div class="w-full pl-2.5">
                                    <div class="mb-1.5 text-sm text-gray-500">
                                        <Link
                                            :href="route('profile.show', notification.user.username)"
                                            class="mr-1 font-semibold text-urctrl-dark-blue transition-all duration-300 hover:opacity-70 focus:rounded focus:outline-none focus:ring-2 focus:ring-urctrl-blue focus:ring-offset-2 focus:transition-none"
                                        >
                                            {{ notification.user.full_name }}
                                        </Link>
                                        <span>{{ notification.text }}</span>
                                    </div>
                                    <div class="text-xs text-urctrl-gray">{{ notification.created_at }}</div>
                                </div>
                            </Link>
                        </div>
                        <Link
                            :href="route('notifications.index')"
                            href="#"
                            class="flex items-center justify-center py-2 text-center text-sm font-medium text-urctrl-dark-blue transition-all duration-300 hover:opacity-70 focus:rounded focus:outline-none focus:ring-2 focus:ring-urctrl-blue focus:transition-none"
                        >
                            <font-awesome-icon :icon="['fas', 'eye']" class="mr-2 text-urctrl-dark-blue" />
                            <span>View all</span>
                        </Link>
                    </template>
                </div>
            </template>
        </Dropdown>
    </template>
    <template v-else>
        <Link
            :href="route('notifications.index')"
            class="ml-5 text-urctrl-gray hover:opacity-70 focus:rounded focus:outline-none focus:ring-2 focus:ring-urctrl-blue focus:ring-offset-4 sm:ml-6 xl:ml-8"
            data-tooltip-target="header-notifications"
        >
            <svg class="h-6 w-6 fill-urctrl-gray" viewBox="0 0 20 20">
                <path
                    d="M18.7958 11.385L17.2125 5.68834C16.7484 4.01945 15.7398 2.55358 14.3469 1.52373C12.9541 0.493884 11.257 -0.0408381 9.52537 0.00456195C7.79375 0.049962 6.12699 0.672879 4.79004 1.7743C3.45308 2.87571 2.52266 4.39243 2.14665 6.08334L0.920818 11.5958C0.785414 12.205 0.788545 12.8367 0.929979 13.4444C1.07141 14.0522 1.34754 14.6204 1.73797 15.1071C2.1284 15.5939 2.62317 15.9867 3.18574 16.2566C3.74832 16.5266 4.36434 16.6667 4.98832 16.6667H5.91665C6.10791 17.6086 6.61893 18.4554 7.3631 19.0637C8.10728 19.6719 9.03886 20.0042 9.99999 20.0042C10.9611 20.0042 11.8927 19.6719 12.6369 19.0637C13.381 18.4554 13.8921 17.6086 14.0833 16.6667H14.7817C15.424 16.6667 16.0576 16.5183 16.6331 16.2329C17.2086 15.9475 17.7103 15.5329 18.099 15.0216C18.4877 14.5102 18.753 13.9159 18.874 13.285C18.995 12.6542 18.9685 12.0039 18.7967 11.385H18.7958ZM9.99999 18.3333C9.48477 18.3312 8.98279 18.1699 8.56274 17.8716C8.14268 17.5733 7.82505 17.1524 7.65332 16.6667H12.3467C12.1749 17.1524 11.8573 17.5733 11.4372 17.8716C11.0172 18.1699 10.5152 18.3312 9.99999 18.3333ZM16.7717 14.0125C16.5394 14.3206 16.2386 14.5702 15.893 14.7416C15.5474 14.9131 15.1666 15.0015 14.7808 15H4.98832C4.61397 14.9999 4.24442 14.9158 3.90694 14.7538C3.56945 14.5918 3.27266 14.3561 3.03845 14.0641C2.80425 13.7721 2.63862 13.4312 2.55379 13.0665C2.46895 12.7019 2.46709 12.3229 2.54832 11.9575L3.77332 6.44417C4.06861 5.11601 4.79941 3.92468 5.84953 3.05955C6.89966 2.19442 8.20884 1.70515 9.56896 1.66952C10.9291 1.63389 12.2621 2.05394 13.3561 2.8629C14.4501 3.67186 15.2422 4.8233 15.6067 6.13417L17.19 11.8308C17.2946 12.202 17.3113 12.5924 17.2387 12.9711C17.166 13.3498 17.0061 13.7064 16.7717 14.0125Z"
                />
            </svg>
        </Link>
    </template>
</template>
