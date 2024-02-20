<script setup>
import useStructure from "~/scripts/helpers/structure.js";
import Swal from "sweetalert2";
import Content from "$module@school/pages/Organizer/Class/Content.vue";


const { eiClass, subjects, schedule, instructors } = defineProps({
    eiClass: { type: Object, default: {} },
    subjects: { type: Array, default: [] },
    instructors: { type: Array, default: [] }
});
const formNewSubject = useForm({ subjects: [] });
const formSubject = useForm({ subjects: subjects ?? [] });
const store = useStore();
const { t } = useI18n();
const { getOptionsSwal } = useStructure();


const addNewSubject = () => {
    formNewSubject.subjects.push({ name: '', language: '', description: '', teachers: [], image: null });
    formNewSubject.clearErrors();
}

const deleteSubject = (index, subject) => {
    if (subject?.uuid) {
        Swal.fire(getOptionsSwal('delete-subject')).then((result) => {
            if (result.value) {
                router.delete(route('school.class.subject.delete', { 'eiClass': eiClass, 'classSubject': subject }));
                formSubject.subjects.splice(index, 1);
            }
        });
    } else {
        formNewSubject.subjects.splice(index, 1);
    }
}

const updateSubject = (subject_) => {
    formSubject.transform((data) => {
        const filteredSubjects = data.subjects.filter(subject => subject.uuid === subject_.uuid);

        return {
            ...data,
            subjects: filteredSubjects,
        };
    }).post(route('school.class.subject.update', { 'eiClass': eiClass }), {
        forceFormData: subject_.image instanceof File,
        onSuccess: page => {
            formSubject.subjects = page.props.subjects;
        }
    });
}

const submit = () => {
    formNewSubject.post(route('school.class.subject.create', { 'eiClass': eiClass }), {
        forceFormData: true,
        onSuccess: page => {
            formSubject.subjects = page.props.subjects;
            formNewSubject.reset();
        },
    });
}
</script>

<template>
    <Content tab="subject" :ei-class="eiClass">
        <template #subject>
            <div class="text-end">
                <BaseButton
                    t-key="add-new-subject"
                    icon="ri-add-circle-line"
                    class="button-without-all py-3 text-end"
                    @click="addNewSubject"
                />
            </div>
            <form @submit.prevent="submit">
                <BCard v-show="formNewSubject.subjects.length || formSubject.subjects.length">
                    <div class="px-2 overflow-x-hidden overflow-y-auto mhp-600">
                        <b-row class="gy-4">
                            <b-col v-for="(subject, index) in formNewSubject.subjects" cols="12" lg="6" xxl="4">
                                <BCard variant="beige-blue" class="h-100">
                                    <b-row class="gy-3">
                                        <b-col cols="12">
                                            <FileUploads
                                                v-model="subject.image"
                                                :error="formNewSubject.errors[`subjects.${index}.image`]"
                                                :simple="false"
                                                :image="subject.image"
                                                label="image"
                                                view-type="input-avatar"
                                            />
                                        </b-col>
                                        <b-col cols="12">
                                            <BaseInput
                                                v-model="subject.name"
                                                :error="formNewSubject.errors[`subjects.${index}.name`]"
                                                label="name"
                                                placeholder="name"
                                            />
                                        </b-col>
                                        <b-col cols="12">
                                            <BaseMultiselect
                                                v-model="subject.language"
                                                :error="formNewSubject.errors[`subjects.${index}.language`]"
                                                :options="store.getters['general/getLanguages']"
                                                label="language"
                                                placeholder="language"
                                            />
                                        </b-col>
                                        <b-col cols="12">
                                            <BaseMultiselect
                                                v-model="subject.teachers"
                                                :error="formNewSubject.errors[`subjects.${index}.teachers`]"
                                                :options="instructors"
                                                :searchable="true"
                                                label="teacher-s"
                                                placeholder="teacher-s"
                                                mode="tags"
                                            />
                                        </b-col>
                                        <b-col cols="12">
                                            <BaseTextarea
                                                v-model="subject.description"
                                                :error="formNewSubject.errors[`subjects.${index}.description`]"
                                                label="description"
                                                placeholder="description"
                                            />
                                        </b-col>
                                        <b-col cols="12 mt-4" class="hstack gap-2 justify-content-center">
                                            <BaseButton
                                                t-key="delete"
                                                variant="danger"
                                                class="px-4"
                                                @click="deleteSubject(index, subject)"
                                            />
                                        </b-col>
                                    </b-row>
                                </BCard>
                            </b-col>
                            <b-col v-for="(subject, index) in formSubject.subjects" cols="12" lg="6" xxl="4">
                                <BCard variant="beige-blue" class="h-100">
                                    <b-row class="gy-3">
                                        <b-col cols="12">
                                            <FileUploads
                                                v-model="subject.image"
                                                :error="formSubject.errors[`subjects.${index}.image`]"
                                                :simple="false"
                                                :image="subject.image"
                                                label="image"
                                                view-type="input-avatar"
                                            />
                                        </b-col>
                                        <b-col cols="12">
                                            <BaseInput
                                                v-model="subject.name"
                                                :error="formSubject.errors[`subjects.${index}.name`]"
                                                label="name"
                                                placeholder="name"
                                            />
                                        </b-col>
                                        <b-col cols="12">
                                            <BaseMultiselect
                                                v-model="subject.language"
                                                :error="formSubject.errors[`subjects.${index}.language`]"
                                                :options="store.getters['general/getLanguages']"
                                                label="language"
                                                placeholder="language"
                                            />
                                        </b-col>
                                        <b-col cols="12">
                                            <BaseMultiselect
                                                v-model="subject.teachers"
                                                :error="formSubject.errors[`subjects.${index}.teachers`]"
                                                :options="instructors"
                                                :searchable="true"
                                                label="teacher-s"
                                                placeholder="teacher-s"
                                                mode="tags"
                                            />
                                        </b-col>
                                        <b-col cols="12">
                                            <BaseTextarea
                                                v-model="subject.description"
                                                :error="formSubject.errors[`subjects.${index}.description`]"
                                                label="description"
                                                rows="4"
                                                placeholder="description"
                                            />
                                        </b-col>
                                        <b-col cols="12 mt-4" class="hstack gap-2 justify-content-center">
                                            <BaseButton
                                                t-key="update"
                                                class="px-4 w-50"
                                                @click="updateSubject(subject)"
                                            />
                                            <BaseButton
                                                t-key="delete"
                                                class="px-4 w-50"
                                                variant="danger"
                                                @click="deleteSubject(index, subject)"
                                            />
                                        </b-col>
                                    </b-row>
                                </BCard>
                            </b-col>
                        </b-row>
                    </div>
                </BCard>
                <div class="col-lg-12 mt-4">
                    <div class="hstack gap-2 justify-content-end">
                        <BaseButton
                            :class="{'opacity-25': formNewSubject.processing }"
                            :disabled="formNewSubject.processing || !formNewSubject.subjects.length"
                            t-key="save"
                            size="lg"
                            type="submit"
                        />
                    </div>
                </div>
            </form>
        </template>
    </Content>
</template>

<style scoped>

</style>