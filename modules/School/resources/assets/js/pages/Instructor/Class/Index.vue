<script setup>
import AppLayout from "~/Layouts/AppLayout.vue";


defineProps({
    classes: {
        type: Array,
        required: true,
        default: []
    }
});
</script>

<template>
    <AppLayout title="my-classes">
        <b-row class="gy-3">
            <b-col v-for="itemClass in classes.data" cols="12" md="6">
                <BCard>
                    <b-row class="gy-3">
                        <b-col cols="12">
                            <div class="d-flex justify-content-between">
                                <div class="fs-20 fw-medium">{{ itemClass.name }}</div>
                                <TdActions tag="div">
                                    <template #actions>
                                        <Link :href="route('school.my-class.subject.index', { 'eiClass': itemClass })">
                                            <BDropdownItem>
                                                <Text tag="span" icon="ri-eye-fill" icon-class="text-dim-gray" t-key="subjects" />
                                            </BDropdownItem>
                                        </Link>
                                    </template>
                                </TdActions>
                            </div>
                        </b-col>
                        <b-col cols="12">
                            <div class="d-flex align-items-center gap-3">
                                <div>
                                    <Starts :value="itemClass.rating" />
                                </div>
                                <div>

                                </div>
                                <div>({{ itemClass.reviews_count }} <Text tag="span" t-key="reviews" />)</div>
                                <div>

                                </div>
                                <div>
                                    <i class="mdi mdi-google-translate me-1" />
                                    <span>{{ itemClass.language }}</span>
                                </div>
                            </div>
                        </b-col>
                        <b-col cols="12">
                            <div class="default-text-color fs-18 fw-medium">{{itemClass.show_price}}</div>
                        </b-col>
                        <b-col cols="12">
                            <div class="d-flex gap-3">
                                <BBadge variant="beige-blue" class="text-dim-gray fs-14">
                                    <div class="d-flex align-items-center">
                                        <i class="ri-todo-line align-text-bottom" />
                                        <span class="mx-2">{{ itemClass.subjects_count }}</span>
                                        <Text tag="span" t-key="subjects" />
                                    </div>
                                </BBadge>

                                <BBadge variant="beige-blue" class="text-dim-gray fs-14">
                                    <div class="d-flex align-items-center">
                                        <i class="ri-group-fill align-text-bottom" />
                                        <span class="mx-2">{{ itemClass.students_count }}</span>
                                        <Text tag="span" t-key="students" />
                                    </div>
                                </BBadge>
                            </div>
                        </b-col>
                    </b-row>
                </BCard>
            </b-col>
        </b-row>
    </AppLayout>
</template>

<style scoped>

</style>