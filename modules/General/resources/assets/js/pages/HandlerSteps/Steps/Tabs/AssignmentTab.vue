<script setup>
const { form } = defineProps({
    form: Object,
    lectures: Array,
    languages: Array,
});

const createAssignment = () => {
    form.assignments.push({
        id: parseInt(Math.random() * 1000),
        name: 'Assignment name ',
        language: '',
        lecture_id: '',
        is_expanded: false,
        start_work_datetime: '',
        end_work_datetime: '',
        total_score: '',
        passing_score: '',
        description: '',
        deadline: '',
        materials: [
            { id: parseInt(Math.random() * 1000), video: '', file: '' },
        ],
    });
}

const addMaterial = (assignment) => assignment.materials.push({
    id: parseInt(Math.random() * 1000),
    video: '',
    file: ''
})

const removeMaterial = (assignment, material_id) => {
    assignment.materials = assignment.materials.filter(material => material.id != material_id)
};

const remove = (id) => {
    if(form.assignments.length > 0) {
        form.assignments = form.assignments.filter(assignment => assignment.id != id)
    }
};

const toggle = (assignment) => assignment.is_expanded = !assignment.is_expanded
</script>

<template>
    <div class="pb-3 hover-element text-end" @click="createAssignment">
        <i class="ri-add-circle-line me-2"></i>
        <Text tag="span" t-key="button.add-new-assignment" />
    </div>
    <b-row class="g-3">
        <b-col v-for="(assignment, index) in form.assignments" cols="12">
            <BCard class="default-bg-card rounded-0" no-body>
                <BCardHeader class="default-bg-card border-none">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="las la-grip-lines"></i>
                            </div>
                            <div class="fs-14 fw-medium ms-2">
                                <Text tag="span" t-key="title.assignments" />
                                : {{ parseInt(index + 1) }}
                            </div>
                            <div class="name text-dim-gray ms-2">{{ assignment.name }}</div>
                        </div>
                        <div class="d-flex align-items-center gap-2 cursor-pointer">
                            <div @click="remove(assignment.id)">
                                <i :class="['ri-delete-bin-line fs-18', {'opacity-25': form.assignments.length <= 1}]" />
                            </div>
                            <div>
                                <i
                                    :class="!assignment.is_expanded ? 'ri-arrow-down-s-line fs-18' : 'ri-arrow-up-s-line fs-18'"
                                    @click="toggle(assignment)"
                                />
                            </div>
                        </div>
                    </div>
                </BCardHeader>

                <BCollapse v-model="assignment.is_expanded">
                    <BCardBody>
                        <b-row class="g-3">
                            <b-col cols="12">
                                <BaseInput
                                    v-model="assignment.name"
                                    :error="form.errors['assignments.'+index+'.name']"
                                    label="link-to-video"
                                />
                            </b-col>
                            <b-col cols="6">
                                <DateTimePicker
                                    v-model="assignment.start_work_datetime"
                                    :error="form.errors['assignments.'+index+'.start_work_datetime']"
                                    label="start-task-execution"
                                    placeholder="start-task-execution"
                                    date-format="Y-m-d"
                                />
                            </b-col>
                            <b-col cols="6">
                                <DateTimePicker
                                    v-model="assignment.end_work_datetime"
                                    :error="form.errors['assignments.'+index+'.end_work_datetime']"
                                    label="end-task-execution"
                                    placeholder="end-task-execution"
                                    date-format="Y-m-d"
                                />
                            </b-col>
                            <b-col cols="6">
                                <BaseMultiselect
                                    v-model="assignment.lecture_id"
                                    :error="form.errors[`assignments.${index}.lecture_id`]"
                                    :options="lectures"
                                    label="select-lecture"
                                    placeholder="lecture"
                                />
                            </b-col>
                            <b-col cols="6">
                                <BaseMultiselect
                                    v-model="assignment.language"
                                    :error="form.errors['assignments.'+index+'.language']"
                                    :options="languages"
                                    label="language"
                                    placeholder="language"
                                />
                            </b-col>
                            <b-col cols="6">
                                <BaseInput
                                    v-model="assignment.total_score"
                                    :error="form.errors['assignments.'+index+'.total_score']"
                                    label="total-score"
                                    placeholder="total-score"
                                    type="number"
                                />
                            </b-col>
                            <b-col cols="6">
                                <BaseInput
                                    v-model="assignment.passing_score"
                                    :error="form.errors['assignments.'+index+'.passing_score']"
                                    label="pass-score"
                                    placeholder="pass-score"
                                    type="number"
                                />
                            </b-col>
                            <b-col>
                                <Editor
                                    v-model="assignment.description"
                                    :error="form.errors['assignments.'+index+'.description']"
                                    placeholder="description"
                                    label="description"
                                />
                            </b-col>
                        </b-row>
                        <b-row class="g-3" :key="assignment.materials">
                            <b-col class="mt-5">
                                <div class="d-flex justify-content-between align-items-center">
                                    <TagLabel label="education-materials" />
                                    <BaseButton
                                        t-key="add-item"
                                        variant="link"
                                        icon="ri-add-fill"
                                        @click="addMaterial(assignment)"
                                    />
                                </div>
                                <Card>
                                    <b-row class="g-3" :key="assignment.materials">
                                        <b-col v-for="(material, materialIndex) in assignment.materials" :key="materialIndex" cols="12">
                                            <b-row class="g-3">
                                                <b-col md="5">
                                                    <FileUploads
                                                        v-model="material.file"
                                                        :file="material.file"
                                                        :error="form.errors['assignments.'+index+'.materials.'+materialIndex+'.file']"
                                                        @uploaded="data => material.file = data.file"
                                                    />
                                                </b-col>
                                                <b-col md="5">
                                                    <BaseInput
                                                        v-model="material.video"
                                                        :error="form.errors['assignments.'+index+'.materials.'+materialIndex+'.video']"
                                                        placeholder="video-url"
                                                    />
                                                </b-col>
                                                <b-col md="2">
                                                    <BaseButton
                                                        :disabled="assignment.materials.length <= 1"
                                                        class="w-100"
                                                        t-key="delete"
                                                        variant="danger"
                                                        @click="removeMaterial(assignment,material.id)"
                                                    />
                                                </b-col>
                                            </b-row>
                                        </b-col>
                                    </b-row>
                                </Card>
                            </b-col>
                        </b-row>
                    </BCardBody>
                </BCollapse>
            </BCard>
        </b-col>
    </b-row>
</template>

<style scoped>

</style>
