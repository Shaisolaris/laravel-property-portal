<script setup>
import moment from "moment";
import Swal from "sweetalert2";
import "@fullcalendar/core";
import simpleBar from "simplebar-vue"
import flatPickr from "vue-flatpickr-component";
import "flatpickr/dist/flatpickr.css";
import AppLayout from "~/Layouts/AppLayout.vue";

import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import interactionPlugin, { Draggable } from "@fullcalendar/interaction";
import bootstrapPlugin from "@fullcalendar/bootstrap";
import listPlugin from "@fullcalendar/list";

import FullCalendar from "@fullcalendar/vue3";
import { INITIAL_EVENTS, categories } from "~/scripts/utils/utils.js";


const currentEvents = ref([]);
const showModal = ref(false);
const eventModal = ref(false);
const eventEditModal = ref(false);
const submitted = ref(false);
const submit = ref(false);
const newEventData = ref({});
const fullCalendarRef = ref(null);


const edit = ref({});
const deleteId = ref({});
const event = ref({
    title: "",
    category: "",
    location: "",
    descri: "",
    date: ""
});

const successmsg = () => {
    Swal.fire({
        position: "center",
        icon: "success",
        title: "Event has been saved",
        showConfirmButton: false,
        timer: 1000,
    });
}

const editSubmit = (e) => {
    submit.value = true;
    const editTitle = editevent.value.editTitle;
    const editcategory = editevent.value.editcategory;
    const editlocation = editevent.value.editlocation;
    const editdescri = editevent.value.editdescri;
    const date = editevent.value.editcalendardates.split(" ").filter(((item) => (item !== "to")));
    const startDate = date[0];
    const endDate = date[1];

    edit.value.setProp("title", editTitle);
    edit.value.setProp("classNames", editcategory);
    edit.value.setStart(startDate);
    edit.value.setEnd(endDate);
    edit.value.setExtendedProp("location", editlocation);
    edit.value.setExtendedProp("description", editdescri);
    successmsg();
    eventModal.value = false;
    eventEditModal.value = false;
}

const handleSubmit = (e) => {
    submitted.value = true;

    const title = event.value.title;
    const category = event.value.category;
    const calendarApi = fullCalendarRef.value.fullCalendar.getApi();
    const location = event.value.location;
    const descri = event.value.descri;
    const date = event.value.date.split(" ").filter(((item) => (item !== "to")));
    const startDate = date[0];
    const endDate = date[1];

    calendarApi.addEvent(
        {
            id: (Math.floor(Math.random() * 100 + 20) - 20),
            title,
            start: startDate,
            end: endDate,
            classNames: category,
            extendedProps: { department: "All Day Event", location, description: descri }
        });

    successmsg();
    showModal.value = false;
    newEventData.value = {};

    submitted.value = false;
    event.value = {};
}

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

const timeConfig = ref({
    enableTime: false,
    altInput: true,
    dateFormat: "Z",
    altFormat: "d M, Y",
    mode: "range",
});
const date2 = ref(null);


const formatDate = (date) => {
    const monthNames = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
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


const formatTime = (params) => {
    params = new Date(params);

    if (params.getHours() != null) {
        let hour = params.getHours();
        let minute = params.getMinutes() ? params.getMinutes() : "00";
        let timeFormat = hour >= 12 ? "PM" : "AM";
        hour = hour % 12;
        hour = hour ? hour : 12;
        minute = (minute < 10 && minute != 0) ? "0" + minute : minute;
        return hour + ":" + minute + " " + timeFormat;
    }
}

const timeStamp = (start, end) => {
    let time;
    if (formatTime(start) === formatTime(end)) {
        time = "Full day event";
    } else {
        time = formatTime(start) + " - " + formatTime(end);
    }
    return time;
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


onMounted(() => {
    new Draggable(document.getElementById("external-events"), {
        itemSelector: ".external-event",
        eventData: function (eventEl) {
            return {
                title: eventEl.innerText,
                start: new Date(),
                className: eventEl.getAttribute("data-class"),
            };
        },
    });
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

        <BRow>
            <BCol cols="12">
                <BRow>
                    <BCol xl="3">
                        <BCard no-body class="card-h-100">
                            <BCardBody>
                                <div id="external-events">
                                    <div
                                        class="external-event fc-event bg-success-subtle text-success"
                                        data-class="bg-success-subtle"
                                    >
                                        <i class="mdi mdi-checkbox-blank-circle me-2"></i>New Event Planning
                                    </div>
                                    <div
                                        class="external-event fc-event bg-info-subtle text-info"
                                        data-class="bg-info-subtle"
                                    >
                                        <i class="mdi mdi-checkbox-blank-circle me-2"></i>Meeting
                                    </div>
                                    <div
                                        class="external-event fc-event bg-warning-subtle text-warning"
                                        data-class="bg-warning-subtle"
                                    >
                                        <i class="mdi mdi-checkbox-blank-circle me-2"></i>Generating Reports
                                    </div>
                                    <div
                                        class="external-event fc-event bg-danger-subtle text-danger"
                                        data-class="bg-danger-subtle"
                                    >
                                        <i class="mdi mdi-checkbox-blank-circle me-2"></i>Create New theme
                                    </div>
                                </div>
                            </BCardBody>
                        </BCard>
                        <div>
                            <h5 class="mb-1">Upcoming Events</h5>
                            <simpleBar
                                class="upcoming-events pe-2 me-n1 mb-3"
                                data-simplebar="init"
                                style="height: 400px"
                            >
                                <BCard no-body class="mb-3" v-for="event in currentEvents" :key="event.id">
                                    <BCardBody>
                                        <div class="d-flex mb-3">
                                            <div class="flex-grow-1">
                                                <i :class="`mdi mdi-checkbox-blank-circle me-2 ${event.classNames}`"></i><span
                                                class="fw-medium"
                                            >
                                                {{ dateStamp(event.start, event.end) }}
                                            </span>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <BBadge
                                                    tag="small"
                                                    variant="primary-subtle"
                                                    class="bg-primary-subtle text-primary ms-auto"
                                                >
                                                    {{ timeStamp(event.start, event.end) }}
                                                </BBadge>
                                            </div>
                                        </div>
                                        <h6 class="card-title fs-16">{{ event.title }}</h6>
                                        <p class="text-muted text-truncate-two-lines mb-0">
                                            {{ (event.extendedProps && event.extendedProps.description) ? event.extendedProps.description : "N.A." }}</p>
                                    </BCardBody>
                                </BCard>
                            </simpleBar>
                        </div>
                    </BCol>
                    <BCol xl="9">
                        <BCard no-body class="card-h-100">
                            <BCardBody>
                                <FullCalendar ref="fullCalendarRef" :options="calendarOptions" />
                            </BCardBody>
                        </BCard>
                    </BCol>
                </BRow>
                <div style="clear: both"></div>
            </BCol>
        </BRow>

        <BModal
            v-model="showModal" title="Add New Event" body-class="p-4"
            header-class="p-3 bg-info-subtle" hide-footer class="v-modal-custom" centered
        >
            <form @submit.prevent="handleSubmit" name="event-form" id="form-event">
                <div class="text-end">
                    <a
                        href="#" class="btn btn-sm btn-soft-primary" id="edit-event-btn" data-id="new-event"
                        onclick="editEvent(this)" role="button" hidden="true"
                    >
                        Edit
                    </a>
                </div>
                <div class="row event-form">
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label">Type</label>
                            <select
                                v-model="event.category" class="form-control" name="category"
                                :class="{ 'is-invalid': submitted && v$.event.category.errors }"
                            >
                                <option
                                    v-for="option in categories"
                                    :key="option.backgroundColor"
                                    :value="`${option.value}`"
                                >
                                    {{ option.name }}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label">Event Name</label>
                            <input
                                id="name"
                                v-model="event.title"
                                type="text"
                                class="form-control"
                                placeholder="Insert Event name"
                                :class="{ 'is-invalid': submitted && v$.event.title.$error }"
                            />
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label>Event Date</label>
                            <div class="input-group">
                                <flat-pickr
                                    placeholder="Select date" v-model="event.date" :config="timeConfig"
                                    class="form-control flatpickr-input" id="caledate"
                                ></flat-pickr>
                                <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="event-location">Location</label>
                            <div>
                                <input
                                    type="text"
                                    class="form-control d-block"
                                    v-model="event.location"
                                    name="event-location"
                                    id="event-location"
                                    placeholder="Event location"
                                    :class="{ 'is-invalid': submitted && v$.event.location.$error }"
                                >
                            </div>
                        </div>
                    </div>

                    <input type="hidden" id="eventid" name="eventid" value="">
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea
                                class="form-control d-block" id="event-description" v-model="event.descri"
                                placeholder="Enter a description" rows="3" spellcheck="false"
                                :class="{ 'is-invalid': submitted && v$.event.descri.$error }"
                            ></textarea>
                        </div>
                    </div>
                </div>
                <div class="text-end pt-3">
                    <BButton variant="light" @click="hideModal">Close</BButton>
                    <BButton type="submit" variant="success" class="ms-1">Create event</BButton>
                </div>
            </form>
        </BModal>
        <BModal
            v-model="eventModal" :title="editevent.editTitle" hide-footer
            body-class="p-4" header-class="p-3 bg-info-subtle" class="v-modal-custom" centered
        >
            <div class="text-end">
                <a
                    href="#" class="btn btn-sm btn-soft-primary" id="edit-event-btn" data-id="edit-event" role="button"
                    @click="eventEditModal = true, eventModal = false"
                >Edit</a>
            </div>
            <div class="event-details">
                <div class="d-flex mb-2">
                    <div class="flex-grow-1 d-flex align-items-center">
                        <div class="flex-shrink-0 me-3">
                            <i class="ri-calendar-event-line text-muted fs-16"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="d-block fw-semibold mb-0" id="event-start-date-tag">
                                {{ editevent.editdates }}
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <div class="flex-shrink-0 me-3">
                        <i class="ri-time-line text-muted fs-16"></i>
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="d-block fw-semibold mb-0"><span id="event-timepicker1-tag"></span> - <span
                            id="event-timepicker2-tag"
                        ></span></h6>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <div class="flex-shrink-0 me-3">
                        <i class="ri-map-pin-line text-muted fs-16"></i>
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="d-block fw-semibold mb-0"> <span id="event-location-tag">
                {{ editevent.editlocation || "No Location" }}
              </span></h6>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="flex-shrink-0 me-3">
                        <i class="ri-discuss-line text-muted fs-16"></i>
                    </div>
                    <div class="flex-grow-1">
                        <p class="d-block text-muted mb-0" id="event-description-tag">
                            {{ editevent.editdescri || "N.A." }}
                        </p>
                    </div>
                </div>
            </div>
        </BModal>
        <BModal
            v-model="eventEditModal" :title="editevent.editTitle" title-class="text-black font-18" body-class="p-4"
            header-class="p-3 bg-info-subtle" hide-footer class="v-modal-custom" centered
        >
            <form @submit.prevent="editSubmit" name="event-form" id="form-event">
                <div class="row event-form">
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label">Type</label>
                            <select v-model="editevent.editcategory" class="form-control" name="category">
                                <option
                                    v-for="option in categories"
                                    :key="option.backgroundColor"
                                    :value="`${option.value}`"
                                >
                                    {{ option.name }}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label">Event Name</label>
                            <input
                                id="name" v-model="editevent.editTitle" type="text" class="form-control"
                                placeholder="Insert Event name"
                            />
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label>Event Date</label>
                            <div class="input-group">
                                <flat-pickr
                                    placeholder="Select date" v-model="editevent.editcalendardates" :config="timeConfig"
                                    class="form-control flatpickr-input" id="caledate"
                                ></flat-pickr>
                                <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="event-location">Location</label>
                            <div>
                                <input
                                    type="text"
                                    class="form-control d-block"
                                    v-model="editevent.editlocation"
                                    name="event-location"
                                    id="event-location"
                                    placeholder="Event location"
                                />
                            </div>
                        </div>
                    </div>

                    <input type="hidden" id="eventid" name="eventid" value="">
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea
                                class="form-control d-block" id="event-description" v-model="editevent.editdescri"
                                placeholder="Enter a description" rows="3" spellcheck="false"
                            ></textarea>
                        </div>
                    </div>
                </div>
                <div class="hstack gap-2 justify-content-end">
                    <button type="button" class="btn btn-soft-danger" id="btn-delete-event" @click="confirm"><i
                        class="ri-close-line align-bottom"
                    ></i> Delete
                    </button>
                    <button type="submit" class="btn btn-success" id="btn-save-event">Update Event</button>
                </div>
            </form>
        </BModal>
    </AppLayout>
</template>