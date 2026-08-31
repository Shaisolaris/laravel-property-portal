<script setup>
import FullCalendar from "@fullcalendar/vue3";
import Swal from "sweetalert2";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import interactionPlugin from "@fullcalendar/interaction";
import bootstrapPlugin from "@fullcalendar/bootstrap";
import listPlugin from "@fullcalendar/list";
import multiMonthPlugin from '@fullcalendar/multimonth';
import "@fullcalendar/core";
import moment from "moment";


const { events, enableMoveEvents } = defineProps({
    events: { type: [ Array, Object ], default: [] },
    enableMoveEvents: {
        type: Boolean,
        default: true
    }
});
const emit = defineEmits([ 'createEvent', 'editEvent', 'moveEvent', 'handleEvents' ]);
const { t, locale } = useI18n();
const fullCalendar = ref(null);


const handleDateClicked = (info) => {
    if (moment(info.date).isSameOrAfter(moment(), 'day')) {
        emit('createEvent', info);
    }
}

const handleEditEvent = (info) => {
    emit('editEvent', info);
}

const handleEventDrop = (info) => {
    if (moment(info.event.start).isSameOrAfter(moment(), 'day')) {
        emit('moveEvent', info);
    } else {
        info.revert();
    }
}

const handleEvents = (events) => {
    emit('handleEvents', events);
}

const getInitialView = () => {
    if (window.innerWidth >= 768 && window.innerWidth < 1200) {
        return "timeGridWeek";
    } else if (window.innerWidth <= 768) {
        return "listMonth";
    } else {
        return "dayGridMonth";
    }
}

const calendarOptions = reactive({
    ...FullCalendar.options,
    timeZone: "local",
    locale: locale ?? 'en',
    droppable: true,
    navLinks: true,
    plugins: [
        dayGridPlugin,
        timeGridPlugin,
        interactionPlugin,
        bootstrapPlugin,
        listPlugin,
        multiMonthPlugin
    ],
    themeSystem: "bootstrap",
    headerToolbar: {
        left: "prev,next today",
        center: "title",
        right: "multiMonthYear,dayGridMonth,timeGridWeek,timeGridDay",
    },
    buttonText: {
        today: t('calendar.today'),
        month: t('calendar.month'),
        week: t('calendar.week'),
        day: t('calendar.day'),
        list: t('calendar.list'),
    },
    editable: true,
    selectable: true,
    selectMirror: true,
    dayMaxEvents: true,
    weekends: true,
    events: events,
    windowResize: () => {
        getInitialView()
    },
    initialView: getInitialView(),
    dateClick: handleDateClicked,
    eventClick: handleEditEvent,
    eventDrop: handleEventDrop,
    eventsSet: handleEvents,
});


const setTitle = (event_) => {
    const foundEvent = events.find((event) => event.id === event_.id);

    // if (typeof foundEvent.title !== 'string') {
    //     return `<div class="pb-2"><b>${foundEvent.title.parentName}</b></div><b>${foundEvent.title.modelName}</b>`;
    // }

    return `<b>${foundEvent.title.length > 20 ? foundEvent.title.slice(0, 20) + '...' : foundEvent.title}</b>`;
}

onBeforeUnmount(() => {
    if (fullCalendar.value) {
        fullCalendar.value.getApi().destroy();
    }
});
</script>

<template>
    <FullCalendar ref="fullCalendar" :options="calendarOptions">
        <template v-slot:eventContent='arg'>
            <b-row class="gy-2 justify-content-center align-items-center">
                <b-col cols="12">
                    <div class="text-start event-time">
                        <b>
                            {{ arg.event?.extendedProps?.event_start_time }}
                            -
                            {{ arg.event?.extendedProps?.event_end_time }}
                        </b>
                    </div>
                </b-col>
                <b-col cols="12">
                    <div class="text-start event-title">
                        <div :title="arg.event.title" v-html="setTitle(arg.event)" />
                    </div>
                </b-col>
                <b-col cols="12">
                    <div class="text-start text-dim-gray">
                        {{ arg.event?.extendedProps?.user_full_name }}
                    </div>
                </b-col>
            </b-row>
        </template>
    </FullCalendar>
</template>

<style scoped>

</style>