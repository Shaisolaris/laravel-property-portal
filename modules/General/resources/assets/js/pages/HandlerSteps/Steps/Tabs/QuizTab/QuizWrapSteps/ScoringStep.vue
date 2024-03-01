<script setup>
defineProps({
    form: Object,
    quizIndex: Number
});
</script>

<template>
    <BCard class="default-bg-card">
        <b-row v-if="form.quizzes && form.quizzes.length">
            <b-col cols="12">
                <b-row class="gy-3">
                    <b-col cols="12">
                        <Text t-key="block-title.scoring-setting" class="fs-20 fw-medium" />
                    </b-col>

                    <b-col cols="12">
                        <BaseInput
                            v-model="form.quizzes[quizIndex].pass_mark"
                            :error="form.errors[`quizzes.${quizIndex}.pass_mark`]"
                            :max-counter="form.quizzes[quizIndex].total_score"
                            view-type="counter"
                            type="number"
                            label="pass-mark"
                            placeholder="pass-mark"
                        />
                    </b-col>
                    <b-col cols="12">
                        <b-row>
<!--                            <b-col cols="6">-->
<!--                                <BaseInput-->
<!--                                    v-model="form.quizzes[quizIndex].points_no_answer"-->
<!--                                    :error="form.errors[`quizzes.${quizIndex}.points_no_answer`]"-->
<!--                                    type="number"-->
<!--                                    label="points-for-no-answer"-->
<!--                                    placeholder="points-for-no-answer"-->
<!--                                />-->
<!--                            </b-col>-->
                            <b-col cols="6">
                                <BaseInput
                                    v-model="form.quizzes[quizIndex].points_wrong_answer"
                                    :error="form.errors[`quizzes.${quizIndex}.points_wrong_answer`]"
                                    type="number"
                                    label="points-for-wrong-answer"
                                    placeholder="points-for-wrong-answer"
                                />
                            </b-col>
                            <b-col cols="6">
                                <BaseInput
                                    v-model="form.quizzes[quizIndex].duration_minutes"
                                    :error="form.errors[`quizzes.${quizIndex}.duration_minutes`]"
                                    type="number"
                                    label="time-minutes"
                                    placeholder="time-minutes"
                                />
                            </b-col>
                        </b-row>
                    </b-col>
                    <b-col cols="12">
                        <b-row>
                            <b-col cols="6">
                                <BaseInput
                                    v-model="form.quizzes[quizIndex].attempts"
                                    :error="form.errors[`quizzes.${quizIndex}.attempts`]"
                                    type="number"
                                    label="number-attempts"
                                    placeholder="number-attempts"
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