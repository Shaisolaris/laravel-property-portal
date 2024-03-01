<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";
import simplebar from "simplebar-vue";


const { subjects } = defineProps({
    subjects: {
        type: Array,
        required: true,
        default: []
    }
});
const showModal = ref(false);
const modalContent = ref(null);
const viewType = ref('list');


const handleShowModal = (index) => {
    modalContent.value = subjects.data[index]['lessons'];
    showModal.value = subjects.data[index]['lessons'].length;
}
</script>

<template>
    <AppLayout title="my-subjects">
        <div class="d-flex gap-2 justify-content-end pb-3">
            <div>
                <button
                    :class="[viewType === 'list' ? 'bg-beige-blue' : 'bg-white border border-beige-blue', 'btn text-royal-blue radius-20 waves-effect']"
                    @click="viewType = 'list'"
                >
                    <i class="ri-menu-line" />
                </button>
            </div>
            <div>
                <button
                    :class="[viewType === 'card' ? 'bg-beige-blue' : 'bg-white border border-beige-blue', 'btn text-royal-blue radius-20 waves-effect']"
                    @click="viewType = 'card'"
                >
                    <i class="ri-function-line" />
                </button>
            </div>
        </div>
        <b-row class="gy-3">
            <b-col v-if="viewType === 'list'" v-for="(subject, index) in subjects.data" cols="12">
                <BCard>
                    <div class="d-flex gap-3">
                        <div class="flex-grow-0">
                            <AvatarSimple
                                :src="subject.image?.url"
                                width="160"
                                height="160"
                                data-holder-rendered="true"
                            />
                        </div>
                        <div class="flex-grow-1 d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="fw-medium fs-20">
                                    {{ subject.name }}
                                </div>
                                <div>
                                    <span v-if="subject.homework_waiting > 0" class="fs-14 text-cherry-red">
                                        <i class="ri-error-warning-line  me-1" />
                                        <Text tag="span" t-key="count-homework" :params="{ count: subject.homework_waiting }" />
                                    </span>
                                        <span v-else-if="subject.homework_done > 0" class="fs-14 text-success">
                                        <i class="ri-checkbox-circle-line me-1" />
                                        <Text tag="span" t-key="count-homework" :params="{ count: subject.homework_done }" />
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <AvatarGroup :users="subject.users" />
                                <div>
                                    <span class="default-text-color hover-element" @click="handleShowModal(index)">
                                        <i class="ri-list-ordered me-2" />
                                        <Text tag="span" t-key="all-lessons" />
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </BCard>
            </b-col>
            <b-col v-else v-for="(subject, index) in subjects.data" cols="12" md="6" lg="3">
                <BCard>
                    <b-row class="guttery-20">
                        <b-col cols="12">
                            <span class="fw-medium fs-20">{{ subject.name }}</span>
                        </b-col>
                        <b-col v-if="subject.homework_waiting > 0 || subject.homework_done > 0" cols="12">
                             <div v-if="subject.homework_waiting > 0" class="fs-14 text-cherry-red">
                                <i class="ri-error-warning-line  me-1" />
                                <Text tag="span" t-key="count-homework" :params="{ count: subject.homework_waiting }" />
                            </div>
                            <div v-else-if="subject.homework_done > 0" class="fs-14 text-success">
                                <i class="ri-checkbox-circle-line me-1" />
                                <Text tag="span" t-key="count-homework" :params="{ count: subject.homework_done }" />
                            </div>
                        </b-col>
                        <b-col cols="12">
                            <div>
                                <AvatarSimple
                                    :src="subject.image?.url"
                                    data-holder-rendered="true"
                                    class="card-img-top explore-img"
                                />
                            </div>
                        </b-col>
                        <b-col cols="12">
                            <div class="d-flex align-items-center justify-content-between">
                                <AvatarGroup :users="subject.users" />
                                <div>
                                    <span class="default-text-color hover-element" @click="handleShowModal(index)">
                                        <i class="ri-list-ordered me-2" />
                                        <Text tag="span" t-key="all-lessons" />
                                    </span>
                                </div>
                            </div>
                        </b-col>
                    </b-row>
                </BCard>
            </b-col>
        </b-row>
        <BModal
            v-model="showModal"
            :title="$t('modal.lessons')"
            header-class="default-bg-card"
            class="v-modal-custom"
            header-close-class="btn-close-form-edit-modal"
            hide-footer
            centered
        >
            <simplebar data-simplebar>
                <b-row>
                    <b-col v-for="section in modalContent" cols="12" lg="6">
                        <div class="pb-1 fw-medium fs-20">{{ section.name }}</div>
                        <ul class="psc-20 text-dim-gray">
                            <li v-for="lecture in section.lectures" class="pt-2">
                                {{ lecture.name }}
                            </li>
                        </ul>
                    </b-col>
                </b-row>
            </simplebar>
        </BModal>
    </AppLayout>
</template>

<style scoped>

</style>
