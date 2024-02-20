<script setup>
defineProps({
    form: Object
});
</script>

<template>
    <BCard class="default-bg-card">
        <b-row class="justify-content-center">
            <b-col cols="12" md="10" lg="8" xl="7">
                <b-row>
                    <b-col cols="12">
                        <b-row class="gy-3">
                            <b-col cols="12">
                                <Text t-key="block-title.scoring-setting" class="fs-20 fw-medium" />
                            </b-col>

                            <b-col cols="12">
                                <BaseInput
                                    v-model="form.pass_mark"
                                    :error="form.errors.pass_mark"
                                    :max-counter="form.grade_passing_score"
                                    view-type="counter"
                                    type="number"
                                    label="pass-mark"
                                    placeholder="pass-mark"
                                />
                            </b-col>
                            <b-col cols="12">
                                <b-row>
                                    <b-col cols="6">
                                        <BaseInput
                                            v-model="form.points_no_answer"
                                            :error="form.errors.points_no_answer"
                                            type="number"
                                            label="points-for-no-answer"
                                            placeholder="points-for-no-answer"
                                        />
                                    </b-col>
                                    <b-col cols="6">
                                        <BaseInput
                                            v-model="form.points_wrong_answer"
                                            :error="form.errors.points_wrong_answer"
                                            type="number"
                                            label="points-for-wrong-answer"
                                            placeholder="points-for-wrong-answer"
                                        />
                                    </b-col>
                                </b-row>
                            </b-col>
                            <b-col cols="12">
                                <b-row>
                                    <b-col cols="6">
                                        <BaseInput
                                            v-model="form.time"
                                            :error="form.errors.time"
                                            type="number"
                                            label="time-minutes"
                                            placeholder="time-minutes"
                                        />
                                    </b-col>
                                    <b-col cols="6">
                                        <BaseInput
                                            v-model="form.number_attempts"
                                            :error="form.errors.number_attempts"
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
            </b-col>
        </b-row>

        <slot name="button" />
    </BCard>
</template>

<style scoped>

</style>