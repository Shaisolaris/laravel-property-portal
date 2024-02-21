<script setup>

</script>

<template>
    <BCard class="default-bg-card radius-20 border-pale-blue" no-body>
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
    </BCard>
</template>

<style scoped>

</style>