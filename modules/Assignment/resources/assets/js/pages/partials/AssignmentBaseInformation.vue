<script setup>
import AssignmentStatus from "$module@assignment/pages/partials/AssignmentStatus.vue";
import moment from "moment";

const {assignment} = defineProps({
    assignment: Object
})

const emit = defineEmits(['openModelExtraTime','timeIsOut'])

let triggerRender = ref(0);

const pathToDeadline = computed(() => {
    let now = moment()
    let confDay = 1;

    return  {
        time_left_hours: moment(assignment.end_work_datetime).diff(now,'hours'),
        time_left_minutes: moment(assignment.end_work_datetime).diff(now,'minutes'),
        isSameDate: moment(assignment.start_work_datetime).isSame(assignment.end_work_datetime,'date'),
        passing_days: now.diff(assignment.start_work_datetime,'days') + confDay,
        max_days: moment(assignment.end_work_datetime).diff(moment(assignment.start_work_datetime),'days') + confDay,
        is_time_out: moment(assignment.end_work_datetime).isSameOrBefore(now)
    };
})

// onMounted(() => {
//     setInterval(function() {
//         triggerRender.value = triggerRender.value + 1;
//     },1000);
// })

onUpdated(() => {
    if(pathToDeadline.value.is_time_out) {
        emit('timeIsOut',pathToDeadline)
    }
})

const format = (date,format = "MMM D, ddd H:mm") => moment(date).format(format)
</script>

<template>
    <div class="border-bottom pb-1 mb-2">
        <div class="fs-16 fw-semibold">{{assignment.name}}</div>
        <div class="fs-14 text-dim-gray">
            {{assignment.subject.name}}
        </div>
    </div>
    <div class="d-flex justify-content-between">
        <div class="w-100 me-3">
            <div class="d-flex align-items-center justify-content-between gap-2">
                <div class="d-flex align-items-center gap-2">
                    <Avatar :path="assignment.student.avatar" :name="assignment.student.full_name" rounded="circle" size="xs"/>
                    <div class="d-flex flex-column">
                        <div class="fs-16 fw-semibold">{{assignment.student.full_name}}</div>
                    </div>
                </div>
                <div class="mb-2">
                    <AssignmentStatus :value="assignment.status" />
                </div>
            </div>
            <div class="mb-3">
                <b-progress class="assignment-progress" height="6px" :value="pathToDeadline.passing_days" :max="pathToDeadline.max_days"/>
                <div class="fs-14 text-dim-gray d-flex justify-content-between mt-1" :key="triggerRender">
                    <span><Text tag="span" t-key="assigned"/>: {{format(assignment.start_work_datetime,"MMM D, ddd")}}</span>
                    <span>
                        <span v-if="assignment.status === 'expected'">
                            <template v-if="pathToDeadline.time_left_hours > 0 || pathToDeadline.time_left_minutes > 0">
                                <span v-if="pathToDeadline.time_left_hours <= 23" class="me-2 fw-semibold">
                                    <Text tag="span" t-key="page.assignment.time-left" class="me-1"/>
                                    <template v-if="pathToDeadline.time_left_hours < 1">
                                         {{pathToDeadline.time_left_minutes}} m
                                    </template>
                                    <template v-else>
                                         {{pathToDeadline.time_left_hours}} h
                                    </template>
                                </span>
                            </template>
                        </span>
                        <span v-if="pathToDeadline.is_time_out && assignment.status == 'on_check'">
                            <Text tag="span" t-key="time-out" class="fw-semibold me-2"/>
                        </span>
                        <Text tag="span" t-key="deadline"
                              :class="{
                                'text-danger':pathToDeadline.time_left_hours <= 23 && assignment.status === 'expected'
                              }"/>: {{format(assignment.end_work_datetime)}}
                    </span>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center gap-2">
            <div @click="$emit('openModelExtraTime')" class="d-flex align-items-center flex-column wp-92 hp-90 p-2 rounded-4 bg-beige-blue cursor-pointer"
                 v-if="assignment.status == 'expected' || assignment.status == 'on_check'">
                <i class="ri-add-circle-line text-royal-blue fs-18"></i>
                <div class="text-center text-dim- fs-16 fw-semibold opacity-75">
                    <Text tag="span" t-key="page.assignment.add-extra-time"/>
                </div>
            </div>
            <div class="d-flex align-items-center flex-column wp-92 hp-90 p-2 pt-3 rounded-4 bg-beige">
                <div class="text-center fs-16 text-dim-gray mb-1">
                    <Text tag="span" t-key="score"/>
                </div>
                <div class="fs-20 fw-semibold">
                    {{assignment.status == 'accepted' || assignment.status == 'not_accepted' ? assignment.actual_score : '-'}}/{{assignment.total_score}}
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
