<script setup>
import { isEmpty } from "lodash";
import Content from "$module@school/pages/Organizer/Class/Content.vue";


const { eiClass } = defineProps({
    eiClass: { type: Object, required: false }
});
const store = useStore();


const form = useForm({
    name: eiClass.name ?? '',
    language: eiClass.language ?? '',
    description: eiClass.description ?? '',
    price: eiClass.price ?? 0,
    capacity: eiClass.capacity ?? 0,
    duration_lesson: eiClass.duration_lesson ?? 0,
    gradation_age_to: eiClass.age_to ?? 0,
    gradation_age_from: eiClass.age_from ?? 0,
    start_date_at: eiClass.start_date_at ?? null,
    end_date_at: eiClass.end_date_at ?? null,
    uuid: eiClass.uuid ?? null,
    hourly_rate: eiClass.hourly_rate ?? null,
});


const submit = () => {
    if (!isEmpty(eiClass))
        form.put(route('school.class.update', { 'eiClass': eiClass }));
    else
        form.post(route('school.class.store'), {
            onSuccess: page => {
                console.log(page);
                console.log(eiClass);
            }
        });
}
</script>

<template>
    <Content tab="basic" :ei-class="eiClass">
        <template #basic>
            <form @submit.prevent="submit">
                <BCard>
                    <b-row class="gap-3">
                        <b-row>
                            <b-col cols="6">
                                <BaseInput
                                    v-model="form.name"
                                    :error="form.errors.name"
                                    label="name"
                                    placeholder="name"
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
                        <b-col cols="12">
                            <b-row>
                                <b-col cols="12" md="6">
                                    <DateTimePicker
                                        v-model="form.start_date_at"
                                        :error="form.errors.start_date_at"
                                        label="start-at"
                                        placeholder="start-at"
                                        date-format="Y-m-d"
                                        icon="ri-calendar-line"
                                    />
                                </b-col>
                                <b-col cols="12" md="6">
                                    <DateTimePicker
                                        v-model="form.end_date_at"
                                        :error="form.errors.end_date_at"
                                        label="end-at"
                                        placeholder="end-at"
                                        date-format="Y-m-d"
                                        icon="ri-calendar-line"
                                    />
                                </b-col>
                            </b-row>
                        </b-col>
                        <b-col cols="12">
                            <TagLabel label="gradation-age" :required="false" />

                            <b-row>
                                <b-col cols="12" md="6">
                                    <BaseInput
                                        v-model="form.price"
                                        :error="form.errors.price"
                                        type="number"
                                        label="price"
                                        placeholder="price"
                                        icon="ri-money-dollar-circle-fill"
                                    />
                                </b-col>
                                <b-col cols="12" md="6">
                                    <BaseInput
                                        v-model="form.hourly_rate"
                                        :error="form.errors.hourly_rate"
                                        type="number"
                                        label="hourly-rate"
                                        placeholder="hourly-rate"
                                        icon="ri-money-dollar-circle-fill"
                                    />
                                </b-col>
                            </b-row>
                        </b-col>
                        <b-col cols="12">
                            <b-row>
                                <b-col cols="12" md="6">
                                    <BaseInput
                                        v-model="form.gradation_age_from"
                                        :error="form.errors.gradation_age_from"
                                        type="number"
                                        label="from"
                                        placeholder="gradation-age-to"
                                    />
                                </b-col>
                                <b-col cols="12" md="6">
                                    <BaseInput
                                        v-model="form.gradation_age_to"
                                        :error="form.errors.gradation_age_to"
                                        type="number"
                                        label="to"
                                        placeholder="gradation-age-from"
                                    />
                                </b-col>
                            </b-row>
                        </b-col>
                        <b-col cols="12">
                            <b-row>
                                <b-col cols="12" md="6">
                                    <BaseInput
                                        v-model="form.capacity"
                                        :error="form.errors.capacity"
                                        type="number"
                                        label="capacity-students"
                                        placeholder="capacity-students"
                                        icon="ri-group-fill"
                                    />
                                </b-col>
                                <b-col cols="12" md="6">
                                    <BaseInput
                                        v-model="form.duration_lesson"
                                        :error="form.errors.duration_lesson"
                                        type="number"
                                        label="duration-lesson"
                                        placeholder="duration-lesson"
                                        icon="ri-timer-line"
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
                            />
                        </b-col>
                    </b-row>
                </BCard>
                <div class="col-lg-12 mt-4">
                    <div class="hstack gap-2 justify-content-end">
                        <BaseButton
                            :class="{'opacity-25': form.processing }"
                            :disabled="form.processing"
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