<script setup>
import LandingLayout from "../../layouts/LandingLayout.vue";
</script>

<template>
    <LandingLayout>
        <template #link-landing>
            <BaseLink :href="route('landing.academy')">
                <template #text>
                    <Text t-key="landing.academy-inoura" class="text-black fs-14 fw-medium text-underline-hover" />
                </template>
            </BaseLink>
        </template>
    </LandingLayout>
</template>

<style scoped>

</style>