<script setup>
// defineProps({
//     homeworks: Array
// })

const homeworks = reactive([
    {name:'Tags test', subject:'Chemistry',status:'expected'},
    {name:'Grammar Test', subject:'Literature',status:'expected'},
    {name:'Tags Test', subject:'Geometry',status:'accepted'}
])
</script>

<template>

    <BCard  class="default-bg-card radius-20 border-pale-blue" no-body>
        <BCardHeader class="default-bg-card border-0 pb-2">
            <div class="d-flex justify-content-between">
                <Text t-key="my-homeworks" class="fs-16 fw-medium" />
                <BaseLink
                    :href="route('general.schedule')"
                    icon="ri-arrow-right-line"
                    class="default-text-color fw-medium fs-14"
                    t-key="view-all"
                />
            </div>
        </BCardHeader>
        <BCardBody>
            <template v-if="homeworks.length > 0">
                <Card v-for="homework in homeworks" class="mb-2 d-flex flex-row justify-content-between">
                    <div>
                        <div class="fw-semibold fs-16">{{homework.name}}</div>
                        <div class="text-dim-gray fs-14">{{homework.subject}}</div>
                    </div>
                    <div class="wp-48 hp-40 rounded-3 status-homework d-flex justify-content-center align-items-center">
                        <i v-if="homework.status === 'accepted'" class="ri-checkbox-line fs-20 text-royal-blue"></i>
                        <i v-if="homework.status === 'expected'" class="ri-error-warning-line fs-20 text-royal-blue"></i>
                    </div>
                </Card>
                <div class="p-3 d-flex justify-content-center align-items-center">
                    <BaseLink
                        :href="route('school.student-subject.index')"
                        class="default-text-color fw-medium fs-14"
                        icon="ri-arrow-right-s-line fs-18"
                        t-key="open-all"
                    />
                </div>
            </template>
            <template v-else>
                <p class="text-center">
                    <Text t-key="empty-homework" class="text-dim-gray"/>
                </p>
            </template>
        </BCardBody>
    </BCard>
</template>

<style scoped>
.status-homework {
    background-color: #154BD81F;
}
</style>
