<script setup>
const { form } = defineProps({
    form: Object,
})
const { t } = useI18n();

let sections = reactive(form.contents)
let currentItem = ref();
let activeModal = ref(false);
const editType = ref('');

const createSection = () => {
    let newSection = {
        title: t('section') + ' ' + parseInt(sections.length + 1),
        name: t('section-name'),
        lectures: reactive([ {
            id: parseInt(Math.random() * 1000),
            name: t('lecture-name') + ' ' + parseInt(sections.length + 1),
            video: "",
            description: "",
            note: "",
        } ])
    }

    sections.push(newSection)
}

const createLecture = (section) => {
    section.lectures.push({
        id: parseInt(Math.random() * 1000),
        name: t('lecture-name') + ' ' + parseInt(section.lectures.length + 1),
        video: "",
        description: "",
        note: "",
    })
}

const removeSection = (index) => sections.length > 1 ? sections.splice(index, 1) : false;

const removeLecture = (id, section) => section.lectures = section.lectures.filter(lecture => lecture.id != id);

const editItem = (item, type) => {
    editType.value = type;
    currentItem.value = item;
    activeModal.value = true;
};

watch(sections, contents => form.contents = contents);
</script>

<template>
    <div>
        <div
            v-for="(section, index) in sections"
            :class="['default-bg-card p-3 content-institution', {'mb-3': index !== sections.length - 1}]"
        >
            <div class="header d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="las la-grip-lines" />
                    </div>
                    <div class="fs-14 fw-medium ms-2">
                        <Text tag="span" t-key="section" />:
                        {{ index+1 }}
                    </div>
                    <div class="name text-dim-gray ms-2">
                        {{ section.name }}
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2 cursor-pointer">
                    <div @click="createLecture(section)">
                        <i class="ri-add-line fs-24" />
                    </div>
                    <div @click="editItem(section, 'section')">
                        <i class="ri-pencil-line fs-19" />
                    </div>
                    <div :class="{'opacity-50': sections.length <= 1}" @click="removeSection(index)">
                        <i class="ri-delete-bin-line fs-18" />
                    </div>
                </div>
            </div>
            <div class="lectures">
                <div
                    v-for="(lecture, lecture_index) in section.lectures"
                    :class="['bg-white p-3',lecture_index !== section.lectures.length - 1 ? 'mb-3' : '']"
                >
                    <div class="header d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="las la-grip-lines"></i>
                            </div>
                            <div class="fs-14 ms-2">{{ lecture.name }}</div>
                        </div>
                        <div class="d-flex gap-2">
                            <div @click="editItem(lecture, 'lecture')" class="cursor-pointer">
                                <i class="ri-pencil-line fs-19" />
                            </div>
                            <div
                                v-if="section.lectures.length > 1"
                                @click="removeLecture(lecture.id,section)" class="cursor-pointer"
                            >
                                <i class="ri-delete-bin-line fs-18"></i>
                            </div>
                        </div>
                    </div>
                    <div class="fields ps-4 mt-2">
                        <b-row class="g-3">
                            <b-col cols="12" md="6" xl="3">
                                <BaseInput
                                    v-model="lecture.video"
                                    label="link-to-video"
                                    icon="ri-add-line"
                                    :error="form.errors['contents.'+index+'.lectures.'+lecture_index+'.video']"
                                    class="form-control-sm"
                                    placeholder="enter-link-to-video"
                                    group-text-class="input-group-text-sm"
                                />
                            </b-col>
                            <b-col cols="12" md="6" xl="3">
                                <FileUploads
                                    v-model="lecture.file"
                                    :error="form.errors['contents.'+index+'.lectures.'+lecture_index+'.file']"
                                    :required="false"
                                    label="attach-file"
                                    class="form-control-sm"
                                    group-text-class="input-group-text-sm"
                                    @uploaded="data => lecture.file = data.file"
                                />
                            </b-col>
                            <b-col cols="12" md="6" xl="3">
                                <BaseInput
                                    v-model="lecture.description"
                                    icon="ri-add-line"
                                    label="description"
                                    placeholder="enter-description"
                                    :error="form.errors['contents.'+index+'.lectures.'+lecture_index+'.description']"
                                    class="form-control-sm"
                                    group-text-class="input-group-text-sm"
                                />
                            </b-col>
                            <b-col cols="12" md="6" xl="3">
                                <BaseInput
                                    v-model="lecture.note"
                                    label="lecture-note"
                                    icon="ri-add-line"
                                    :error="form.errors['contents.'+index+'.lectures.'+lecture_index+'.note']"
                                    placeholder="note"
                                    class="form-control-sm"
                                    group-text-class="input-group-text-sm"
                                />
                            </b-col>
                        </b-row>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="default-bg-card mt-3 p-3 d-flex align-items-center justify-content-center gap-2 cursor-pointer"
            @click="createSection"
        >
            <i class="ri-add-circle-line"></i>
            <Text tag="span" t-key="add-new-section" class="fs-14"></Text>
        </div>
    </div>
    <BModal
        v-model="activeModal"
        :title="$t(editType === 'section' ? 'modal.edit-section-name' : 'modal.edit-lecture-name')"
        header-class="default-bg-card"
        class="v-modal-custom"
        header-close-class="btn-close-form-edit-modal"
        centered
        ok-only
    >
        <BaseInput
            v-if="currentItem"
            v-model="currentItem.name"
            :error="form.errors.name"
            placeholder="enter-name"
            label="name"
        />
        <template #ok>
            <BaseButton t-key="ok" @click="activeModal = false" />
        </template>
    </BModal>
</template>

<style lang="scss"></style>
