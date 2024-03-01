<script setup>
defineProps({
    form: Object,
    lectures: Array,
    grades: Array,
    languages: Array,
    quizIndex: Number
});
</script>

<template>
    <BCard class="default-bg-card">
        <b-row v-if="form.quizzes && form.quizzes.length" :key="quizIndex">
            <b-col cols="12">
                <b-row class="gy-3">
                    <b-col cols="12">
                        <Text t-key="block-title.basic-details" class="fs-20 fw-medium" />
                    </b-col>
                    <b-col cols="12">
                        <BaseInput
                            v-model="form.quizzes[quizIndex].name"
                            :error="form.errors[`quizzes.${quizIndex}.name`]"
                            label="quiz-title"
                            placeholder="quiz-title"
                        />
                    </b-col>
                    <b-col cols="12">
                        <b-row class="gy-3">
                            <b-col cols="6">
                                <BaseMultiselect
                                    v-model="form.quizzes[quizIndex].lecture_id"
                                    :error="form.errors[`quizzes.${quizIndex}.lecture_id`]"
                                    :options="lectures"
                                    label="select-lecture"
                                    placeholder="lecture"
                                />
                            </b-col>
                            <b-col cols="6">
                                <BaseMultiselect
                                    v-model="form.quizzes[quizIndex].language"
                                    :error="form.errors[`quizzes.${quizIndex}.language`]"
                                    :options="languages"
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
                                    v-model="form.quizzes[quizIndex].grade"
                                    :error="form.errors[`quizzes.${quizIndex}.grade`]"
                                    :options="grades"
                                    label="select-grade"
                                    placeholder="grade"
                                />
                            </b-col>
                            <b-col cols="6">
                                <BaseInput
                                    v-model="form.quizzes[quizIndex].total_score"
                                    :error="form.errors[`quizzes.${quizIndex}.total_score`]"
                                    type="number"
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
                                    v-model="form.quizzes[quizIndex].start_work_datetime"
                                    :error="form.errors[`quizzes.${quizIndex}.start_work_datetime`]"
                                    label="start-task-execution"
                                    placeholder="start-task-execution"
                                    date-format="Y-m-d H:i"
                                    enable-time
                                />
                            </b-col>
                            <b-col cols="6">
                                <DateTimePicker
                                    v-model="form.quizzes[quizIndex].end_work_datetime"
                                    :error="form.errors[`quizzes.${quizIndex}.end_work_datetime`]"
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
                            v-model="form.quizzes[quizIndex].description"
                            :error="form.errors[`quizzes.${quizIndex}.description`]"
                            label="description"
                            placeholder="description"
                            view-type="simple"
                        />
                    </b-col>
                </b-row>
            </b-col>
        </b-row>
        <slot name="button" />
    </BCard>
</template>

<style scoped>

</style>