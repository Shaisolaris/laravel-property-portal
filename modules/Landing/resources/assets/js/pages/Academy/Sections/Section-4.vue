<script setup>

</script>

<template>
    <section class="section">
        <b-container>
            <b-row class="justify-content-between align-items-center">
                <b-col>
                    <Text t-key="landing.academy.section-4.title" class="fsc-40 fontf-McLaren lh-1" />
                    <Text t-key="landing.academy.section-4.subtitle" class="fs-16 w-75 pt-3" />
                </b-col>
                <b-col class="text-end">
                    <Link :href="route('landing.academy.index')" class="text-black fs-3 lh-1 fontf-McLaren">
                        <Text tag="span" t-key="landing.academy.section-4.button" class="me-2" />
                        <Icon name="svg-arrow-right" width="29" height="19" />
                    </Link>
                </b-col>
            </b-row>
        </b-container>
    </section>
</template>

<style scoped>

</style>