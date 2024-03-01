<script setup>
import moment from "moment";
import { CANCELED } from "~/scripts/utils/utils.js";


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
                    <BCard :class="[selectedDay === index ? 'text-black bg-lavender' : 'bg-transparent text-dim-gray', 'rounded-2']" no-body>
                        <BCardBody class="p-2">
                            <template v-if="selectedDay === index">
                                <div>{{ moment(index).format('ddd') }}</div>
                                <div class="fs-16 fw-medium">{{ moment(index).format('D') }}</div>
                            </template>
                            <template v-else>
                                <div>{{ moment(index).format('ddd') }}</div>
                                <div class="fs-16 fw-medium">{{ moment(index).format('D') }}</div>
                            </template>
                        </BCardBody>
                    </BCard>
                </b-col>
            </b-row>
        </BCardHeader>
        <BCardBody class="pt-2 border-pale-blue overflow-y-auto" style="max-height: 250px">
            <b-row class="gy-3">
                <template v-if="events[selectedDay].length > 0">
                    <b-col v-for="event in events[selectedDay]" cols="12">
                        <a :href="event.lesson_link" target="_blank">
                            <BCard v-if="event" :class="['radius-12 card-animate', {'bg-disabled': !event.is_future}]" body-class="pc-12">
                                <div v-if="withClass" class="d-flex justify-content-between fw-medium fs-14 pb-2">
                                    <div>
                                        <b>{{ event.full_title.parentName }}</b> - {{ event.full_title.modelName }}
                                    </div>
                                    <Status v-if="event.status_label === CANCELED" :value="event.status_label" />
                                </div>
                                <div v-else class="d-flex justify-content-between fw-medium fs-14 pb-2">
                                    <div>{{ event.title }} </div>
                                    <Status v-if="event.status_label === CANCELED" :value="event.status_label" />
                                </div>
                                <div>
                                    <span><i class="bx bx-time-five align-text-bottom me-1" /></span>
                                    <span class="fs-16">{{ event.time }}</span>
                                </div>
                            </BCard>
                        </a>
                    </b-col>
                </template>
                <template v-else>
                    <Text t-key="empty-schedule" class="text-center text-dim-gray"/>
                </template>
            </b-row>
        </BCardBody>
    </BCard>
</template>

<style scoped>

</style>
