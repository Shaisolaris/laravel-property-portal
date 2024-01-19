<script setup>


const items = ref([
    { title: 'HTML & CSS', desc: '3 Courses', route: '' },
    { title: 'Color Theory', desc: '3 Courses', route: '' },
    { title: 'Photoshop', desc: '3 Courses', route: '' },
    { title: 'WordPress Theme', desc: '3 Courses', route: '' },
    { title: 'Adobe Illustrator', desc: '3 Courses', route: '' },
    { title: 'Drawing', desc: '3 Courses', route: '' },
    { title: 'Blender', desc: '3 Courses', route: '' },
    { title: 'Sewing', desc: '3 Courses', route: '' },
]);
</script>

<template>
    <section class="section">
        <b-container>
            <div class="text-center">
                <Text t-key="landing.academy.section-3.title" class="fsc-40 fontf-McLaren lh-1" />
                <Text t-key="landing.academy.section-3.subtitle" class="fs-16 py-3" />
            </div>
            <b-row class="g-3">
                <b-col v-for="item in items" cols="12" md="6" lg="3">
                    <CardHeaderFooter class="shadow-light-white h-100" class-map-body="pb-0" class-map-footer="pt-0 border-0">
                        <template #body>
                            <div class="px-4">
                                <Icon name="page-landing-academy-section-3-img-1" width="80" height="81" />

                                <div class="pt-4">
                                    <div class="fs-4 fontf-McLaren pb-3">{{ item.title }}</div>
                                    <div class="fs-16 text-dim-gray">{{ item.desc }}</div>
                                </div>
                            </div>
                        </template>
                        <template #footer>
                            <div class="text-end">
                                <Link :href="route('dashboard')" type="button">
                                    <div class="btn-light-beige rounded-pill btn btn-icon btn-lg">
                                        <i class=" ri-arrow-right-up-line fs-20"></i>
                                    </div>
                                </Link>
                            </div>
                        </template>
                    </CardHeaderFooter>
                </b-col>
            </b-row>
        </b-container>
    </section>
</template>

<style scoped>

</style>