<script setup>
import Content from "$module@school/pages/Organizer/Class/Content.vue";
import moment from "moment";
import { isEmpty } from "lodash";
import Swal from "sweetalert2";
import useStructure from "~/scripts/helpers/structure.js";
import simplebar from "simplebar-vue";


const { eiClass, events, subjects } = defineProps({
    eiClass: { type: Object, required: true },
    events: { type: Array, required: true },
    statuses: { type: Array, required: true },
    subjects: { type: Array, required: true }
});
const baseSchedule = defineAsyncComponent({ loader: () => import('~/Components/BaseSchedule.vue') });
const { getOptionsSwal } = useStructure();

const createEventForm = useForm({
    events: [
        {
            subject: null,
            user_id: null,
            event_date: null,
            event_start_time: null,
            event_end_time: null,
            lesson_link: ''
        }
    ],
    event_date: null
});
const editEventForm = useForm({
    event: {
        uuid: null,
        subject: null,
        user_id: null,
        lesson_link: '',
        event_date: null,
        event_end_time: null,
        event_start_time: null,
        allDay: false,
        status: null
    }
});
const showModal = ref(false);
const showEventEditModal = ref(false);


const addNewEvent = (data) => {
    createEventForm.events.push({
        subject: null,
        user_id: null,
        event_start_time: null,
        event_end_time: null,
        event_date: null
    });
}

const getInstructorsOptions = (eventSubject) => {
    return subjects.find((subject) => subject.value === eventSubject)?.instructors
}

const closeUpdateModal = () => {
    const element = document.getElementsByClassName('btn-close-form-edit-modal');

    if (element.length) {
        setTimeout(() => {
            element[0].click();
        }, 100);
    }
}

const submitCreateEvent = () => {
    createEventForm.post(route('schedule.store', { 'eiClass': eiClass }), {
        onSuccess: () => {
            showModal.value = false;
            createEventForm.reset('events');
        },
    });
}

const submitEditEvent = () => {
    editEventForm.put(route('schedule.update', { 'eiClass': eiClass, 'schedule': editEventForm.event }), {
        onSuccess: () => showEventEditModal.value = false
    });
}

const setDataEvent = (data, setData = false) => {
    editEventForm.reset('event');
    editEventForm.clearErrors();

    const event = data.event.extendedProps;

    editEventForm.event.subject = event.subject;
    editEventForm.event.user_id = event.user_id;

    editEventForm.event.event_date = !setData ? event.event_date : moment(data.event.start).format("YYYY-MM-DD");
    editEventForm.event.event_start_time = event.event_start_time;
    editEventForm.event.event_end_time = event.event_end_time;
    editEventForm.event.status = event.status;

    editEventForm.event.lesson_link = event.lesson_link;
    editEventForm.event.uuid = data.event.id;

    setTimeout(() => {
        editEventForm.event.user_id = event.user_id;
    }, 100);
}

const createEvent = (data) => {
    createEventForm.reset('events');
    createEventForm.clearErrors();
    createEventForm.event_date = moment(data.date).format("YYYY-MM-DD");
    showModal.value = true;
}

const editEvent = (data) => {
    setDataEvent(data);
    showEventEditModal.value = true;
}

const moveEvent = (data) => {
    setDataEvent(data, true);
    submitEditEvent();
}

const deleteEvent = (index) => {
    createEventForm.events.splice(index, 1);
}


const confirmDelete = () => {
    Swal.fire(getOptionsSwal('schedule-delete-event')).then((result) => {
        if (result.value) {
            router.delete(route('schedule.delete', { 'eiClass': eiClass, 'schedule': editEventForm.event }), {
                onSuccess: () => closeUpdateModal(),
            });
        }
    });
}


watch(
    () => editEventForm.event,
    (eventNewData, eventOldData) => {
        if (eventNewData.event_start_time) {
            eventNewData.event_end_time = moment(eventNewData.event_start_time, 'HH:mm').add(eiClass.duration_lesson, 'minutes').format('HH:mm');
        }

        if (eventNewData.subject !== eventOldData.subject) {
            eventNewData.user_id = null;
        }
    },
    {
        deep: true
    }
);

watch(
    () => createEventForm.events,
    (events) => {
        events.forEach((event) => {
            if (event.event_start_time) {
                event.event_end_time = moment(event.event_start_time, 'HH:mm').add(eiClass.duration_lesson, 'minutes').format('HH:mm');
            }
        });
    },
    {
        deep: true
    }
);
</script>

<template>
    <Content tab="schedule" :ei-class="eiClass">
        <template #schedule>
            <component
                :is="baseSchedule"
                :events="events"
                :key="events"
                :enable-move-events="true"
                @create-event="(data) => createEvent(data)"
                @edit-event="(data) => editEvent(data)"
                @move-event="(data) => moveEvent(data)"
            />

            <BOffcanvas
                v-model="showModal"
                :title="$t('modal.add-new-event')"
                class="wc-60"
                placement="end"
                header-class="border-bottom"
                body-class="overflow-hidden"
                backdrop
            >
                <simplebar data-simplebar>
                    <div class="d-flex justify-content-between align-items-center text-royal-blue pb-3">
                        <div class="d-flex flex-column">
                            <div>
                                <Text tag="span" t-key="date" /> :
                                <span class="fw-medium">{{ moment(createEventForm.event_date).format('YYYY-MM-DD') }}</span>
                            </div>
                            <div>
                                <Text tag="span" t-key="duration-lesson" /> :
                                <span class="fw-medium">{{ eiClass.duration_lesson }}</span>
                            </div>
                        </div>
                        <div class="text-end">
                            <BaseButton
                                t-key="new-event"
                                icon="ri-add-circle-line"
                                class="button-without-all"
                                @click="addNewEvent"
                            />
                        </div>
                    </div>
                    <form @submit.prevent="submitCreateEvent">
                        <b-row class="gy-3">
                            <b-col v-for="(event, index) in createEventForm.events" cols="12" sm="6" xl="4">
                                <BCard class="h-100">
                                    <b-row class="gy-3">
                                        <b-col cols="12">
                                            <BaseMultiselect
                                                v-model="event.subject"
                                                :error="createEventForm.errors[`events.${index}.subject`]"
                                                :options="subjects"
                                                label="subject"
                                                placeholder="subject"
                                            />
                                        </b-col>
                                        <b-col cols="12">
                                            <BaseMultiselect
                                                v-model="event.user_id"
                                                :error="createEventForm.errors[`events.${index}.user_id`]"
                                                :options="getInstructorsOptions(event.subject)"
                                                label="instructor"
                                                placeholder="instructor"
                                            />
                                        </b-col>
                                        <b-col cols="12">
                                            <BaseInput
                                                v-model="event.event_start_time"
                                                :error="createEventForm.errors[`events.${index}.event_start_time`]"
                                                placeholder="start-lesson"
                                                label="start-lesson"
                                                type="time"
                                            />
                                        </b-col>
                                        <b-col cols="12">
                                            <BaseInput
                                                v-model="event.event_end_time"
                                                :error="createEventForm.errors[`events.${index}.event_end_time`]"
                                                placeholder="end-lesson"
                                                label="end-lesson"
                                                type="time"
                                                readonly
                                                disabled
                                            />
                                        </b-col>
                                        <b-col cols="12">
                                            <BaseInput
                                                v-model="event.lesson_link"
                                                :error="createEventForm.errors[`events.${index}.lesson_link`]"
                                                placeholder="lesson-link"
                                                label="lesson-link"
                                            />
                                        </b-col>
                                        <b-col class="text-center" cols="12">
                                            <BaseButton t-key="delete" variant="danger" class="w-50" @click="deleteEvent(index)" />
                                        </b-col>
                                    </b-row>
                                </BCard>
                            </b-col>
                            <b-col cols="12">
                                <div class="hstack gap-2 justify-content-end">
                                    <BaseButton t-key="create" type="submit" size="lg" />
                                </div>
                            </b-col>
                        </b-row>
                    </form>
                </simplebar>
            </BOffcanvas>
            <BModal
                v-model="showEventEditModal"
                :title="$t('modal.edit-event')"
                header-class="default-bg-card"
                class="v-modal-custom"
                header-close-class="btn-close-form-edit-modal"
                hide-footer
                centered
            >
                <form @submit.prevent="submitEditEvent">
                    <b-row v-if="!isEmpty(editEventForm.event)" class="gy-3">
                        <b-col cols="12">
                            <BaseMultiselect
                                v-model="editEventForm.event.subject"
                                :error="editEventForm.errors.subject"
                                :options="subjects"
                                label="subject"
                                placeholder="subject"
                            />
                        </b-col>
                        <b-col cols="12">
                            <BaseMultiselect
                                v-model="editEventForm.event.user_id"
                                :error="editEventForm.errors.user_id"
                                :options="getInstructorsOptions(editEventForm.event.subject)"
                                label="instructor"
                                placeholder="instructor"
                            />
                        </b-col>
                        <b-col cols="12">
                            <BaseMultiselect
                                v-model="editEventForm.event.status"
                                :error="editEventForm.errors.status"
                                :options="statuses"
                                label="status"
                                placeholder="status"
                            />
                        </b-col>
                        <b-col cols="12">
                            <BaseInput
                                v-model="editEventForm.event.event_start_time"
                                :error="editEventForm.errors.event_start_time"
                                placeholder="start-lesson"
                                label="start-lesson"
                                type="time"
                            />
                        </b-col>
                        <b-col cols="12">
                            <BaseInput
                                v-model="editEventForm.event.event_end_time"
                                :error="editEventForm.errors.event_end_time"
                                placeholder="end-lesson"
                                label="end-lesson"
                                type="time"
                                readonly
                                disabled
                            />
                        </b-col>
                        <b-col cols="12">
                            <BaseInput
                                v-model="editEventForm.event.lesson_link"
                                :error="editEventForm.errors.lesson_link"
                                placeholder="lesson-link"
                                label="lesson-link"
                            />
                        </b-col>

                        <b-col cols="12">
                            <div class="hstack gap-2 justify-content-end">
                                <BaseButton t-key="delete" variant="danger" @click="confirmDelete" />
                                <BaseButton t-key="update" type="submit" />
                            </div>
                        </b-col>
                    </b-row>
                </form>
            </BModal>
        </template>
    </Content>
</template>

<style scoped>

</style>