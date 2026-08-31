<script setup>
import moment from "moment";


defineProps({
    events: {
        type: Array,
        required: true
    },
    withClass: {
        type: Boolean,
        default: false
    }
});
const selectedDay = ref(moment().format("YYYY-MM-DD 00:00:00"));


const setSelectedDay = (day) => {
    selectedDay.value = moment(day).format('YYYY-MM-DD 00:00:00');
}
</script>

<template>
    <BCard class="default-bg-card radius-20 border-pale-blue" no-body>
        <BCardHeader class="default-bg-card border-0 pb-2">
            <div class="d-flex justify-content-between">
                <Text t-key="my-schedule" class="fs-16 fw-medium" />
                <BaseLink
                    :href="route('general.schedule')"
                    icon="ri-arrow-right-line"
                    class="default-text-color fw-medium fs-14"
                    t-key="view-all"
                />
            </div>
            <b-row class="fs-14 pt-3 text-center">
                <b-col v-for="(eventDate, index) in events" class="hover-element" @click="setSelectedDay(index)">
                    <BCard v-if="selectedDay === index" class="rounded-2 pxc-2 pyc-6 text-black bg-lavender" no-body>
                        <BCardBody class="p-0">
                            <div>{{ moment(index).format('ddd') }}</div>
                            <div class="fs-16 fw-medium">{{ moment(index).format('D') }}</div>
                        </BCardBody>
                    </BCard>
                    <div v-else class="pxc-2 pyc-6 text-dim-gray">
                        <div>{{ moment(index).format('ddd') }}</div>
                        <div class="fs-16 fw-medium">{{ moment(index).format('D') }}</div>
                    </div>
                </b-col>
            </b-row>
        </BCardHeader>
        <BCardBody class="pt-2 border-pale-blue overflow-y-auto" style="max-height: 250px">
            <b-row class="gy-3">
                <b-col v-for="event in events[selectedDay]" cols="12">
                    <a :href="event.lesson_link" target="_blank">
                        <BCard v-if="event" class="radius-12 card-animate" body-class="pc-12">
                            <div v-if="withClass" class="fw-medium fs-14 pb-2">
                                <b>{{ event.full_title.parentName }}</b> - {{ event.full_title.modelName }}
                            </div>
                            <div v-else class="fw-medium fs-14 pb-2">{{ event.title }}</div>
                            <div>
                                <span><i class="bx bx-time-five align-text-bottom me-1" /></span>
                                <span class="fs-16">{{ event.time }}</span>
                            </div>
                        </BCard>
                    </a>
                </b-col>
            </b-row>
        </BCardBody>
    </BCard>
</template>

<style scoped>

</style>