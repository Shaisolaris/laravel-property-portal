<script setup>
import interactionPlugin, { Draggable } from "@fullcalendar/interaction";
import { INITIAL_EVENTS } from "~/scripts/utils/utils.js";
import AppLayout from "~/Layouts/AppLayout.vue";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import bootstrapPlugin from "@fullcalendar/bootstrap";
import listPlugin from "@fullcalendar/list";
import FullCalendar from "@fullcalendar/vue3";
import Swal from "sweetalert2";
import "@fullcalendar/core";
import moment from "moment";
import "flatpickr/dist/flatpickr.css";


const currentEvents = ref([]);
const showModal = ref(false);
const eventModal = ref(false);
const eventEditModal = ref(false);
const submit = ref(false);
const newEventData = ref({});


const edit = ref({});
const event = ref({
    title: "",
    category: "",
    location: "",
    descri: "",
    date: ""
});

const editevent = ref({
    editTitle: "",
    editcategory: "",
    editlocation: "",
    editdescri: "",
    editdates: "",
    editcalendardates: ""
});

const config = ref({
    wrap: true,
    altFormat: "M j, Y",
    altInput: true,
    dateFormat: "d M, Y",
    mode: "range",
});


const formatDate = (date) => {
    const monthNames = [
        "January", "February",
        "March", "April",
        "May", "June",
        "July", "August",
        "September", "October",
        "November", "December",
    ];

    let d = new Date(date),
        month = "" + monthNames[d.getMonth()].slice(0, 3),
        day = "" + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = "0" + month;
    if (day.length < 2) day = "0" + day;

    return [ day + " " + month, year ].join(" ");
}


const dateStamp = (start, end) => {
    let date;
    if (end == null) {
        date = formatDate(start);
    } else {
        date = formatDate(start) + " - " + formatDate(end);
    }
    return date;
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

const deleteEvent = () => {
    edit.value.remove();
    eventModal.value = false;
    eventEditModal.value = false;
}

const dateClicked = (info) => {
    newEventData.value = info;
    showModal.value = true;
}

const editEvent = (info) => {
    edit.value = info.event;
    editevent.value.editTitle = edit.value.title;
    editevent.value.editcategory = edit.value.classNames;
    editevent.value.editlocation = edit.value.extendedProps.location;
    editevent.value.editdescri = edit.value.extendedProps.description;
    editevent.value.editdates = dateStamp(edit.value.start, edit.value.end);
    editevent.value.editcalendardates = moment(edit.value.start).toISOString() + " to " + moment(edit.value.end ? edit.value.end : edit.value.start).toISOString();
    eventModal.value = true;
}

const confirm = () => {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to delete this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#34c38f",
        cancelButtonColor: "#f46a6a",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.value) {
            deleteEvent();
            Swal.fire("Deleted!", "Event has been deleted.", "success");
        }
    });
}

const handleEvents = (events) => {
    currentEvents.value = events.reverse();
}

const calendarOptions = ref({
    timeZone: "local",
    droppable: true,
    navLinks: true,
    plugins: [
        dayGridPlugin,
        timeGridPlugin,
        interactionPlugin,
        bootstrapPlugin,
        listPlugin,
    ],
    themeSystem: "bootstrap",
    headerToolbar: {
        left: "prev,next today",
        center: "title",
        right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth",
    },
    windowResize: () => {
        getInitialView();
    },
    initialView: getInitialView(),
    initialEvents: INITIAL_EVENTS,
    editable: true,
    selectable: true,
    selectMirror: true,
    dayMaxEvents: true,
    weekends: true,
    dateClick: dateClicked,
    eventClick: editEvent,
    eventsSet: handleEvents,
});
</script>

<template>
    <AppLayout title="schedule">
        <b-row class="pb-3">
            <b-col cols="2">
                <BaseMultiselect
                    mode="single"
                    placeholder="grade"
                    :options="[{label: 'Test', value: 'test'}, {label: 'Test', value: 'test'}]"
                />

            </b-col>
            <b-col cols="2">
                <BaseMultiselect
                    mode="single"
                    placeholder="instructor"
                    :options="[{label: 'Test', value: 'test'}, {label: 'Test', value: 'test'}]"
                />

            </b-col>
            <b-col cols="2">
                <BaseMultiselect
                    mode="single"
                    placeholder="subject"
                    :options="[{label: 'Test', value: 'test'}, {label: 'Test', value: 'test'}]"
                />

            </b-col>
        </b-row>

        <BCard no-body class="card-h-100">
            <BCardBody>
                <FullCalendar ref="fullCalendar" :options="calendarOptions" />
            </BCardBody>
        </BCard>
    </AppLayout>
</template>