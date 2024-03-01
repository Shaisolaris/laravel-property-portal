<script setup>
import { isEmpty } from "lodash";
import AppLayout from "~/Layouts/AppLayout.vue";


const { tab, eiClass } = defineProps({
    tab: { type: String, required: true },
    eiClass: { type: Object, default: {} }
});


const title = computed(() => {
    switch (tab) {
        case 'basic':
            return !isEmpty(eiClass) ? 'edit-class' : 'new-class';
        case 'subject':
            return 'class-subject';
        case 'schedule':
            return 'class-schedule';
    }
});
</script>

<template>
    <AppLayout :title="title" :breadcrumb="!isEmpty(eiClass) ? 'edit-class' : 'create-class'">
        <template #breadcrumbs-right>
            <BaseButton :route="route('school.class.list')" t-key="class-list" icon="ri-arrow-left-line" />
        </template>

        <TabsLink
            :current-tab="tab"
            :tabs="[
                {
                    route: !isEmpty(eiClass) ? route('school.class.edit', { 'eiClass': eiClass }) : route('school.class.create'),
                    tab: 'basic',
                    title: 'basic-info',
                    isShow: true
                },
                {
                    route: route('school.class.subject.index', { 'eiClass': eiClass }),
                    tab: 'subject',
                    title: 'subject',
                    isShow: !isEmpty(eiClass)
                },
                {
                    route: route('school.class.schedule', { 'eiClass': eiClass }),
                    tab: 'schedule',
                    title: 'schedule',
                    isShow: !isEmpty(eiClass)
                }
            ]"
        >
            <template #tab-basic-body>
                <b-row>
                    <b-col cols="12" xxl="8">
                        <slot name="basic" />
                    </b-col>
                </b-row>
            </template>
            <template #tab-subject-body>
                <b-row>
                    <b-col cols="12">
                        <slot name="subject" />
                    </b-col>
                </b-row>
            </template>
            <template #tab-schedule-body>
                <b-row>
                    <b-col cols="12">
                        <slot name="schedule" />
                    </b-col>
                </b-row>
            </template>
        </TabsLink>
    </AppLayout>
</template>

<style scoped>

</style>