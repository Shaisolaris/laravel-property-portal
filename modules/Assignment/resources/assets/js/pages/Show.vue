<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";
import AssignmentBaseInformation from "$module@assignment/pages/partials/AssignmentBaseInformation.vue";

import {map} from "lodash";

let activeModal = ref(false);

const {assignment,statuses,accepted} = defineProps({
    assignment: Object,
    statuses: Object,
    accepted: Array,
})

const form = useForm({
    score: 0,
    status: 'accepted',
    assignment_uuid: assignment.uuid,
    uuid: assignment.homework_uuid,
    end_work_datetime: '',
    functionality: 'done' // extra-time
})

const videos = computed(() => materials ? materials.filter(material => material.custom_properties?.video_url) : []);
const materials = reactive(assignment.materials ?? null)

const statuses_options = computed(() => map(statuses,(label,value) => ({label,value})))

const toggle = (assignment,field) => assignment[field] = !assignment[field]

const listenerProgress = (data) => {
    // TODO: data
}

const toggleModal = () => activeModal.value = !activeModal.value;

const openModal = () => {
    toggleModal();
    form.end_work_datetime = assignment.end_work_datetime;
    form.functionality = 'extra-time'
}
const send = () => {
    form.post(route('institution.assignment.handler'),{
        onSuccess: () => {
            window.location.reload();
            // activeModal.value = false;
            // assignment.end_work_datetime = form.end_work_datetime;
        }
    })
}
</script>

<template>
    <AppLayout title="assignments">
        <BCard>
            <AssignmentBaseInformation
                :assignment="assignment"
                @openModelExtraTime="openModal"
                @timeIsOut="listenerProgress"
            />
            <div>
                <div class="p-3 border cursor-pointer rounded-4 my-3">
                    <div v-b-toggle="'collapse-1-brief'" class="fs-16 fw-semibold"
                         @click="toggle(assignment,'expanded_brief')">
                        <Text tag="span" t-key="page.assignment.brief"/>
                        <i class="ri-arrow-down-s-line" :class="{'bx-rotate-180': assignment.expanded_brief}"/>
                    </div>
                    <b-collapse v-model="assignment.expanded_brief">
                        <div class="mt-3" v-html="assignment.description"/>
                    </b-collapse>
                </div>
                <div class="p-3 border cursor-pointer rounded-4 my-3">
                    <div v-b-toggle="'collapse-1-materials'" class="fs-16 fw-semibold"
                         @click="toggle(assignment,'expanded_material')">
                        <Text tag="span" t-key="page.assignment.education-materials"/>
                        <i class="ri-arrow-down-s-line" :class="{'bx-rotate-180': assignment.expanded_material}"/>
                    </div>
                    <b-collapse v-model="assignment.expanded_material">
                        <div class="mt-3">
                            <b-row class="gy-3">
                                <Text t-key="page.assignment.files" class="fw-semibold"/>
                                <b-col cols="3" v-for="material in assignment.materials">
                                    <a target="_blank" :href="material.url">
                                        <media-image :media="material" classes="hp-200 rounded-4"/>
                                    </a>
                                </b-col>
                                <div v-if="videos.length > 0">
                                    <Text t-key="page.assignment.videos" class="fw-semibold"/>
                                    <div v-for="(url, index) in videos" :key="index" class="mt-2">
                                        <a target="_blank" :href="url">Link {{index + 1}}</a>
                                    </div>
                                </div>
                            </b-row>
                        </div>
                    </b-collapse>
                </div>
                <div class="p-3 border cursor-pointer rounded-4 my-3" v-if="assignment.report">
                    <div v-b-toggle="'collapse-1-work'" class="fs-16 fw-semibold"
                         @click="toggle(assignment,'expanded_load_work')">
                        <Text tag="span" t-key="page.assignment.loading-work"/>
                        <i class="ri-arrow-down-s-line" :class="{'bx-rotate-180': assignment.expanded_load_work}"/>
                    </div>
                    <b-collapse v-model="assignment.expanded_load_work">
                        <div class="mt-3" v-html="assignment.report">

                        </div>
                    </b-collapse>
                </div>
            </div>

            <div v-if="assignment.status == 'on_check'" class="mt-5">
                <b-row>
                    <b-col cols="6">
                        <BaseInput
                            v-model="form.score"
                            :error="form.errors.score"
                            placeholder=""
                            label="add-score"
                        />
                    </b-col>
                    <b-col cols="6">
                        <BaseMultiselect
                            v-model="form.status"
                            :error="form.errors.status"
                            :options="statuses_options"
                            label="update-status"
                            placeholder="status"
                        />
                    </b-col>
                    <div class="d-flex justify-content-end mt-3">
                        <BaseButton
                            :disabled="form.processing"
                            @click="send"
                            t-key="save"
                            type="submit"
                        />
                    </div>
                </b-row>
            </div>
        </BCard>

        <template v-if="accepted.length > 0">
            <h3 class="mt-5 mb-3"><Text tag="span" t-key="page.assignment.accepted"/></h3>
            <div v-for="item in accepted">
                <BCard class="mb-2">
                    <AssignmentBaseInformation :assignment="item"/>
                </BCard>
            </div>
        </template>

        <BModal
            v-model="activeModal"
            :title="$t('page.assignment.add-extra-time')"
            header-class="default-bg-card"
            class="v-modal-custom"
            header-close-class="btn-close-form-edit-modal"
            centered
            ok-only
        >
            <DateTimePicker
                :key="form.end_work_datetime"
                v-model="form.end_work_datetime"
                :error="form.errors.end_work_datetime"
                :minDate="assignment.actual_end_work_datetime"
                :enableTime="true"
                label="start-at"
                placeholder="start-at"
                date-format="Y-m-d H:i"
                icon="ri-calendar-line"
            />
            <template #ok>
                <BaseButton t-key="ok" @click="send" />
            </template>
        </BModal>
    </AppLayout>
</template>

<style lang="scss">
    .assignment-progress {
        background-color: #F7F6F2;
        & .progress-bar {
            background-color: #FFF3C8;
        }
    }
</style>
