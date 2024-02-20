<script setup>

const {form} = defineProps({
    form: Object,
})

const store = useStore();
const languages = computed(() => store.getters['general/getLanguages']);

const create = () => {
    form.assignments.push({
        id: parseInt(Math.random() * 1000),
        name: 'Assignment name ',
        language: '',
        collapse: false,
        start_work_datetime: '',
        end_work_datetime: '',
        total_score: '',
        passing_score: '',
        description: '',
        deadline: '',
        materials: [
            {id:parseInt(Math.random() * 1000),video: '',file: ''},
        ],
    })
}

const toggle = (assignment) => assignment.collapse = !assignment.collapse

const remove = (index) => form.assignments.length > 1 ? form.assignments.splice(index, 1) : false;

const addMaterial = (assignment) => assignment.materials.push({id:parseInt(Math.random() * 1000) ,video: '',file: ''})

const removeMaterial = (assignment,material_id) => {
    assignment.materials = assignment.materials.filter(material => material.id != material_id)
};
</script>

<template>
    <div>
        <div class="page-header mb-3">
            <b-row class="g-3">
                <b-col cols="6">
                    <h2 class="mb-0">Assignment</h2>
                </b-col>
                <b-col cols="6 d-flex justify-content-end">
                    <div @click="create()" class="cursor-pointer d-flex align-items-center gap-1">
                        <i class="ri-add-circle-line"></i>
                        Add new assignment
                    </div>
                </b-col>
            </b-row>
        </div>
        <div
            v-for="(assignment, index) in form.assignments"
            :class="['default-bg-card p-3 content-institution', {'mb-3': index !== form.assignments.length - 1}]">
            <div class="header d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="las la-grip-lines"></i>
                    </div>
                    <div class="fs-14 fw-medium ms-2">Assignments: {{parseInt(index + 1)}}</div>
                    <div class="name text-dim-gray ms-2">{{ assignment.name }}</div>
                </div>
                <div class="d-flex align-items-center gap-2 cursor-pointer">
                    <div v-b-toggle="'collapse-'+assignment.id">
                        <i @click="toggle(assignment)" v-if="!assignment.collapse" class="ri-arrow-down-s-line fs-24"></i>
                        <i @click="toggle(assignment)" v-else class="ri-arrow-up-s-line fs-24"></i>
                    </div>
<!--                    <div @click="edit(assignment)" v-b-modal="'modal_'+assignment.id">-->
<!--                        <i class="ri-pencil-line fs-19" />-->
<!--                    </div>-->
                    <div @click="remove(index)">
                        <i  class="ri-delete-bin-line fs-18" :class="{'opacity-50': form.assignments.length <= 1}" />
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <b-collapse :id="'collapse-'+assignment.id">
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
                        <b-col cols="12">
                            <BaseMultiselect
                                v-model="assignment.language"
                                :error="form.errors['assignments.'+index+'.language']"
                                :options="languages"
                                label="language"
                            />
                        </b-col>
                        <b-col cols="6">
                            <BaseInput
                                v-model="assignment.total_score"
                                :error="form.errors['assignments.'+index+'.total_score']"
                                label="total-score"
                                type="number"
                            />
                        </b-col>
                        <b-col cols="6">
                            <BaseInput
                                v-model="assignment.passing_score"
                                :error="form.errors['assignments.'+index+'.passing_score']"
                                label="pass-score"
                                type="number"
                            />
                        </b-col>
                        <b-col>
                            <Editor v-model="assignment.description"
                                    placeholder="description"
                                    :error="form.errors['assignments.'+index+'.description']"
                                    label="description"/>
                        </b-col>
                    </b-row>
                    <b-row class="g-3" :key="assignment.materials">
                        <b-col class="mt-5">
                            <div class="d-flex justify-content-between align-items-center">
                                <TagLabel label="education-materials"/>
                                <BaseButton t-key="add-item" @click="addMaterial(assignment)" variant="link" icon="ri-add-fill" />
                            </div>
                            <Card>
                                <b-row class="g-3" :key="assignment.materials">
                                    <template v-for="(material,material_index) in assignment.materials" :key="material_index">
                                        <b-col md="5">
                                            <FileUploads @uploaded="data => material.file = data.file"
                                                         v-model="material.file"
                                                         :error="form.errors['assignments.'+index+'.materials.'+material_index+'.file']"/>
                                        </b-col>
                                        <b-col md="5">
                                            <BaseInput
                                                v-model="material.video"
                                                placeholder="video-url"
                                                :error="form.errors['assignments.'+index+'.materials.'+material_index+'.video']"
                                            />
                                        </b-col>
                                        <b-col md="2">
                                            <BaseButton
                                                class="w-100"
                                                t-key="delete"
                                                :disabled="assignment.materials.length <= 1"
                                                @click="removeMaterial(assignment,material.id)"
                                                variant="danger"
                                            />
                                        </b-col>
                                    </template>
                                </b-row>
                            </Card>
                        </b-col>
                    </b-row>
                </b-collapse>
            </div>
        </div>
    </div>
</template>

<style scoped></style>

