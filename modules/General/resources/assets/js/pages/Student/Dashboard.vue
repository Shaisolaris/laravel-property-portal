<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";


const { events, subjects } = defineProps({
    events: {
        type: Array,
        required: true
    },
    subjects: {
        type: Array,
        required: true
    }
});
console.log(subjects);
</script>

<template>
    <AppLayout>
        <b-row>
            <b-col cols="9">
                <div class="d-flex align-items-center justify-content-between py-3">
                    <Text t-key="my-subjects" class="fs-16 fw-medium" />
                    <BaseLink
                        :href="route('school.student-subject.index')"
                        icon="ri-arrow-right-line"
                        class="default-text-color fw-medium fs-14"
                        t-key="open-all"
                    />
                </div>

                <b-row>
                    <b-col v-for="subject in subjects" cols="3">
                        <BCard class="pc-12 radius-12 border-pale-blue" no-body>
                            <b-img :src="subject.image.url" class="rounded" height="160" style="width: 100%" data-holder-rendered="true" />

                            <div class="d-flex align-items-center gap-2 pt-3">
                                <div class="avatar-group">
                                    <div v-for="user in subject.users" class="avatar-group-item">
                                        <b-img :src="user.avatar" class="rounded-circle avatar-sm" />
                                    </div>
                                </div>
                                <div class="fs-14">
                                    <div class="fw-medium">{{ subject.name }}</div>
                                    <div>
                                        <div v-for="(user, index) in subject.users">
                                            {{ user.full_name }}
                                            <span v-if="index !== subject.users.length - 1">,</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </BCard>
                    </b-col>
                </b-row>
            </b-col>
            <b-col cols="3">
                <MySchedule :events="events" />
                <MyHomeworks class="mt-3" />
            </b-col>
        </b-row>
    </AppLayout>
</template>

<style scoped>

</style>