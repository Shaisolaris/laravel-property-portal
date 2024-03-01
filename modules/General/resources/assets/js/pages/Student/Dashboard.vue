<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";

const { events } = defineProps({
    events: Array,
    // subjects: Array,
    homeworks: Array,
    mentors: Array,
});

const subjects = reactive([
    {
        name: 'Literature',
        mentors: [
            {full_name:'Mrs. Chatwayne'},
            {full_name:'Mrs. Karit'},
        ],
        image: {
            url:'/images/literature.png'
        }
    },
    {
        name: 'Chemistry',
        mentors: [
            {full_name:'Mrs. Roman'},
        ],
        image: {
            url:'/images/chemistry.png'
        }
    },
    {
        name: 'Geometry',
        mentors: [
            {full_name:'Mrs. Baldwin'},
        ],
        image: {
            url:'/images/geomentry.png'
        }
    }
])

const mentors = reactive([
    {full_name:'Mrs. Baldwin', level:"Geometry Teacher"},
    {full_name:'Mrs. Chatwayne', level:"Literature Teacher"},
    {full_name:'Mrs. Roman', level:"Geometry Teacher"},
])
</script>

<template>
    <AppLayout title="dashboard">
        <b-row>
            <b-col cols="9">
                <div>
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
                        <b-col v-for="subject in subjects" cols="4">
                            <BCard class="pc-12 radius-12 border-pale-blue" no-body>
                                <Avatar :name="subject.full_name" :path="subject?.image?.url"  class="w-100 h-100" />
                                <div class="fw-semibold fs-16 mt-2">
                                    {{subject.name}}
                                </div>
                                <div class="mt-auto pt-2">
                                    <AvatarGroup :class="{'p-0':subject.mentors.length == 1}" :users="subject.mentors" />
                                </div>
                            </BCard>
                        </b-col>
                    </b-row>
                </div>

                <div class="mt-5">
                    <div class="d-flex align-items-center justify-content-between py-3">
                        <Text t-key="my-mentors" class="fs-16 fw-medium" />
                        <BaseLink
                            :href="route('school.student-subject.index')"
                            icon="ri-arrow-right-line"
                            class="default-text-color fw-medium fs-14"
                            t-key="view-all"
                        />
                    </div>
                    <div>
                        <BCard no-body v-for="mentor in mentors" class="p-3 mb-3 d-flex flex-row justify-content-between">
                            <div class="d-flex align-items-center">
                                <div><Avatar :path="mentor?.avatar" :name="mentor.full_name" rounded="circle" /></div>
                                <div class="ms-3">
                                    <div class="fw-semibold fs-16">{{mentor.full_name}}</div>
                                    <div class="text-dim-gray fs-14">{{mentor.level}}</div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center gap-2 mt-1 text-royal-blue cursor-pointer">
                                <Text t-key="get-in-touch"/>
                                <i class="ri-send-plane-fill"></i>
                            </div>
                        </BCard>
                        <div class="text-royal-blue p-3 text-center cursor-pointer">
                            <i class="ri-search-line"></i>
                            <BaseLink
                                :href="route('school.student-subject.index')"
                                icon=""
                                class="default-text-color fw-medium fs-14 ms-2"
                                t-key="fined-new-mentor"
                            />
                        </div>
                    </div>
                </div>
            </b-col>
            <b-col cols="3">
                <MySchedule :events="events" />
                <MyHomeworks :homeworks="homeworks" class="mt-3" />
            </b-col>
        </b-row>
    </AppLayout>
</template>

<style scoped>

</style>
