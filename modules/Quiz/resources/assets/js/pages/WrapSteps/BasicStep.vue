<script setup>
defineProps({
    form: Object,
    lectures: Array,
    grades: Array,
});
const store = useStore();
</script>

<template>
    <BCard class="default-bg-card">
        <b-row class="justify-content-center">
            <b-col cols="12" md="10" lg="8">
                <b-row>
                    <b-col cols="12">
                        <b-row class="gy-3">
                            <b-col cols="12">
                                <Text t-key="block-title.basic-details" class="fs-20 fw-medium" />
                            </b-col>
                            <b-col cols="12">
                                <BaseInput
                                    v-model="form.title"
                                    :error="form.errors.title"
                                    label="quiz-title"
                                    placeholder="quiz-title"
                                />
                            </b-col>
                            <b-col cols="12">
                                <b-row class="gy-3">
                                    <b-col cols="6">
                                        <BaseMultiselect
                                            v-model="form.lecture_id"
                                            :error="form.errors.lecture_id"
                                            :options="lectures"
                                            label="select-lecture"
                                            placeholder="lecture"
                                        />
                                    </b-col>
                                    <b-col cols="6">
                                        <BaseMultiselect
                                            v-model="form.language"
                                            :error="form.errors.language"
                                            :options="store.getters['general/getLanguages']"
                                            label="language"
                                            placeholder="language"
                                        />
                                    </b-col>
                                </b-row>
                            </b-col>
                            <b-col cols="12">
                                <b-row class="gy-3">
                                    <b-col cols="6">
                                        <BaseMultiselect
                                            v-model="form.grade"
                                            :error="form.errors.grade"
                                            :options="grades"
                                            label="select-grade"
                                            placeholder="grade"
                                        />
                                    </b-col>
                                    <b-col cols="6">
                                        <BaseInput
                                            v-model="form.grade_passing_score"
                                            :error="form.errors.grade_passing_score"
                                            label="grade-passing-score"
                                            placeholder="grade-passing-score"
                                        />
                                    </b-col>
                                </b-row>
                            </b-col>
                            <b-col cols="12">
                                <b-row class="gy-3">
                                    <b-col cols="6">
                                        <DateTimePicker
                                            v-model="form.start_work_datetime"
                                            :error="form.errors.start_work_datetime"
                                            label="start-task-execution"
                                            placeholder="start-task-execution"
                                            date-format="Y-m-d H:i"
                                            enable-time
                                        />
                                    </b-col>
                                    <b-col cols="6">
                                        <DateTimePicker
                                            v-model="form.end_work_datetime"
                                            :error="form.errors.end_work_datetime"
                                            label="end-task-execution"
                                            placeholder="end-task-execution"
                                            date-format="Y-m-d H:i"
                                            enable-time
                                        />
                                    </b-col>
                                </b-row>
                            </b-col>
                            <b-col cols="12">
                                <Editor
                                    v-model="form.description"
                                    :error="form.errors.description"
                                    label="description"
                                    placeholder="description"
                                    view-type="simple"
                                />
                            </b-col>
                        </b-row>
                    </b-col>
                </b-row>
            </b-col>
        </b-row>

        <slot name="button" />
    </BCard>
</template>

<style scoped>

</style>