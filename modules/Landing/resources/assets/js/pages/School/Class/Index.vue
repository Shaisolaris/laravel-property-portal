<script setup>
import LandingLayout from "$module@landing/layouts/LandingLayout.vue";
import Filter from "$module@landing/components/Filter.vue";

const pages = ref([]);
const page = ref(1);
const perPage = ref(10);
const value = ref(["Watches", "Headset"]);

</script>

<template>
    <LandingLayout :show-footer="false" title="school-classes">
        <section class="section job-hero-section pb-2">
            <b-container>
                Home > School of Inoura > Categories > Classes

                <div class="d-flex align-items-center pt-3 gap-3">
                    <Icon name="page-landing-school-classes-page-img-1" width="62" height="53" />
                    <div class="fs-3 fw-medium fontf-HelveticaNeue">Classes</div>
                </div>
            </b-container>
        </section>

        <section class="section pt-2">
            <b-container>
                <b-row>
                    <b-col xl="3" lg="4">
                        <Filter />
                    </b-col>

                    <b-col xl="9" lg="8">
                        <b-row class="align-items-center justify-content-between">
                            <b-col>
                                <b-row class="align-items-center">
                                    <b-col cols="1">
                                        <BBadge variant="beige" class="p-3">
                                            <i class="ri-menu-line align-bottom"></i>
                                        </BBadge>
                                    </b-col>
                                    <b-col cols="1">
                                        <BBadge variant="light" class="p-3">
                                            <i class="ri-function-line align-bottom"></i>
                                        </BBadge>
                                    </b-col>
                                </b-row>
                            </b-col>
                            <b-col>
                                <b-row class="align-items-center justify-content-end text-end">
                                    <b-col cols="3">
                                        <input type="text" placeholder="search">
                                    </b-col>
                                    <b-col cols="2">
                                        <select>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </b-col>
                                </b-row>
                            </b-col>
                        </b-row>
                    </b-col>
                </b-row>
            </b-container>
        </section>
    </LandingLayout>
</template>

<style scoped>

</style>