<script setup>
defineProps({
    categories: {
        type: Array,
    },
    form: {
        type: Object,
    }
})
</script>

<template>
    <b-col class="mb-3">
        <BaseInput
            v-model="form.duration"
            :error="form.errors.duration"
            placeholder="duration"
            label="duration"
        />
    </b-col>
    <b-col class="mb-3">
<!--        <BaseMultiselect-->
<!--            v-model="form.institution_id"-->
<!--            :error="form.errors.institution_id"-->
<!--            :searchable="true"-->
<!--            :options="form.tags"-->
<!--            label="tags"-->
<!--        />-->
<!--        <ErrorMessage :error="form.errors.institution_id" />-->
    </b-col>
    <b-col class="mb-3">
        <BaseSelect
            v-model="form.category_id"
            :error="form.errors.category_id"
            :options="categories"
            placeholder="select"
            label="country"
        />
    </b-col>
    <b-row class="mb-3">
        <b-col lg="4">

        </b-col>
        <b-col lg="4">

        </b-col>
        <b-col lg="4">

        </b-col>
    </b-row>
</template>

<style scoped lang="scss">

</style>
