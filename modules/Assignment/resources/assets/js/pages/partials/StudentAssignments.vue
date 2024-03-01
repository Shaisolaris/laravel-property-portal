<script setup>
import AssignmentStatus from "$module@assignment/pages/partials/AssignmentStatus.vue";
// import { VideoPlayer } from '@videojs-player/vue';

const {item} = defineProps({item: Array})

const form = useForm({
    report:'',
    uuid: item.homework_uuid,
});

let activeModal = ref(false);

const materials = reactive(item.materials ?? null)

const videos = computed(() => materials ? materials.filter(material => material.custom_properties?.video_url) : []);

const toggle = (assignment,field) => assignment[field] = !assignment[field]

const submit = () => form.post(route('institution.assignment.handler'),{
    onSuccess: () => window.location.reload()
})

</script>

<template>
    <b-row class="gy-3">
        <b-col cols="12">
            <BCard class="rounded-4" :class="item.status">
                <div class="d-flex align-items-center gap-5 hp-62">
                    <Link class="flex-shrink-0 d-flex align-items-center gap-2">
                        <div>
                            <Avatar :name="item.subject.name" :path="item.subject?.image?.url" size="md" class="wp-80 hp-65" />
                        </div>
                        <div class="ms-2">
                            <div class="fw-bold fs-16 text-dark">{{item.subject.name}}</div>
                            <div class="text-dim-gray fs-14 mt-1">{{item.name}}</div>
                        </div>
                    </Link>
                    <div class="flex-grow-1">
                        <b-row>
                            <b-col>
                                <Text t-key="page.assignment.mentor" class="text-dim-gray" />

                                <template v-if="item.mentors.length > 1">
                                    <div class="d-flex group-mentors mt-1">
                                        <div v-for="(mentor,index) in item.mentors">
                                            <div class="wp-24" v-if="index <= 2">
                                                <Avatar :key="mentor.id" :name="mentor.name"
                                                        :path="mentor.avatar" rounded="circle" size="xs" />
                                            </div>
                                        </div>
                                        <div v-if="item.mentors.length > 3">
                                            <div
                                                @click="activeModal = !activeModal"
                                                class="cursor-pointer bg-light hp-32 wp-32 d-flex justify-content-center align-items-center rounded-circle">
                                                <span class="opacity-75">+{{item.mentors.length - 3}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                <template v-else>
                                    <div class="d-flex align-items-center gap-2 mt-2" v-for="mentor in item.mentors">
                                        <Avatar :name="mentor.name" :key="mentor.id" :path="mentor.avatar" rounded="circle" size="xs" />
                                        {{mentor.name}}
                                    </div>
                                </template>
                            </b-col>
                            <b-col>
                                <Text t-key="page.assignment.due-on" class="text-dim-gray" />
                                <div class="mt-2 fw-bold">
                                    <i class="ri-calendar-line me-2" />
                                    {{item.end_work_datetime}}
                                </div>
                            </b-col>
                            <b-col>
                                <Text t-key="page.assignment.status" class="text-dim-gray" />
                                <AssignmentStatus :value="item.status"/>
                            </b-col>
                        </b-row>
                    </div>
                    <div>
                        <div v-if="item.status === 'expected'">
                            <BaseButton
                                v-b-toggle="'collapse-' + item.id"
                                t-key="submit"
                                iconRight="ri-add-circle-line"
                                class="bg-transparent p-0 border-none"
                            />
                        </div>
                        <div v-else class="mark score rounded-4 p-3" :class="item.status">
                            <div class="fs-14 mb-1">
                                <Text t-key="page.assignment.score"/>
                            </div>
                            <div class="fw-bold fs-16">
                                {{item.status == 'not_accepted' || item.status == 'accepted' ? item.actual_score : '-' }}/{{item.total_score}}
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <b-collapse :id="'collapse-' + item.id">
                        <div class="p-3 border cursor-pointer rounded-4 my-3">
                            <div class="fs-16 fw-semibold d-flex justify-content-between"
                                 @click="toggle(item,'expanded_brief')">
                                <Text tag="span" t-key="page.assignment.brief"/>
                                <i  class="ri-arrow-down-s-line rotate-180" :class="{'bx-rotate-180': item.expanded_brief}"/>
                            </div>
                            <b-collapse v-model="item.expanded_brief">
                                <div class="mt-3" v-html="item.description"/>
                            </b-collapse>
                        </div>
                        <div class="p-3 border cursor-pointer rounded-4 my-3">
                            <div class="fs-16 fw-semibold d-flex justify-content-between" @click="toggle(item,'expanded_material')">
                                <Text tag="span" t-key="page.assignment.education-materials"/>
                                <i class="ri-arrow-down-s-line" :class="{'bx-rotate-180': item.expanded_material}"/>
                            </div>
                            <b-collapse v-model="item.expanded_material" >
                                <div class="mt-3">
                                    <b-row class="gy-3">
                                        <Text t-key="page.assignment.files" class="fw-semibold"/>
                                        <b-col cols="3" v-for="material in item.materials">
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
                        <div class="p-3 border cursor-pointer rounded-4 my-3">
                            <div @click="toggle(item,'expanded_load_work')" class="fs-16 fw-semibold d-flex justify-content-between">
                                <Text tag="span" t-key="page.assignment.loading-work"/>
                                <i class="ri-arrow-down-s-line" :class="{'bx-rotate-180': item.expanded_load_work}"/>
                            </div>
                            <b-collapse v-model="item.expanded_load_work">
                                <div class="mt-3">
                                    <Editor v-model="form.report"
                                            :error="form.errors.report"
                                            placeholder="write-message"/>
                                    <div class="d-flex justify-content-end mt-3">
                                        <BaseButton @click="submit" t-key="send" type="submit"/>
                                    </div>
                                </div>
                            </b-collapse>
                        </div>
                    </b-collapse>
                </div>
            </BCard>
        </b-col>
    </b-row>

    <BModal
        v-model="activeModal"
        :title="$t('mentors')"
        header-class="default-bg-card"
        header-close-class="btn-close-form-edit-modal"
        centered
        ok-only
    >
        <div class="d-flex align-items-center gap-2 mt-3" v-for="mentor in item.mentors">
            <Avatar :name="mentor.name" :key="mentor.id" :path="mentor.avatar" rounded="circle" />
            <div class="fw-semibold fs-16">{{mentor.full_name}}</div>
        </div>
        <template #ok>
            <BaseButton t-key="ok" @click="activeModal = !activeModal" />
        </template>
    </BModal>

</template>

<style scoped lang="scss">
.wrapper-group-mentors {
    max-width: 150px;
}
</style>
