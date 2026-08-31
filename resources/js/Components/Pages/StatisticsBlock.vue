<script setup>
defineProps({
    items: Array,
    cols: String
});
</script>

<template>
    <BCard class="radius-20">
        <b-row class="align-items-center">
            <b-col v-for="(item, index) in items" :class="cols">
                <b-row class="gy-1 align-items-center text-center">
                    <b-col cols="12">
                        <IconBorder :icon="item.icon" class="default-text-color" size="20" />
                    </b-col>
                    <b-col cols="12" class="fs-16 fw-medium pt-3">

                        {{ item.value ?? 0 }}
                    </b-col>
                    <b-col cols="12">
                        <Text tag="span" :t-key="item.tKey" class="fs-16 text-dim-gray" />
                    </b-col>
                </b-row>
            </b-col>
        </b-row>
    </BCard>
</template>

<style scoped>

</style>