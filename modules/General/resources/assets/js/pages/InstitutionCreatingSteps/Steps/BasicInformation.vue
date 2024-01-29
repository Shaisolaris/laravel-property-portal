<script setup>
defineProps({
    form: {
        type: Object,
    }
});

const benefits_labels = [{value:'Course benefits'}]
const benefits = [
    {value: '', type: 'text',},
];

</script>

<template>
    <b-col class="mb-3">
        <BaseInput
            v-model="form.title"
            :error="form.errors.title"
            placeholder="title"
            label="title"
        />
    </b-col>
    <b-row class="mb-3">
        <b-col lg="6">
            <BaseInput
                v-model="form.course_type"
                :error="form.errors.course_type"
                placeholder="course-type"
                label="course-type"
            />
        </b-col>
        <b-col lg="6">
            <BaseInput
                v-model="form.language"
                :error="form.errors.language"
                placeholder="language"
                label="language"
            />
        </b-col>
    </b-row>
    <b-col class="mb-3">
        <BaseInput
            v-model="form.seo_description"
            :error="form.errors.seo_description"
            placeholder="seo-description"
            label="seo-description"
        />
    </b-col>
    <b-row class="mb-3">
        <b-col lg="6">
            <FileUploads v-model="form.thumbnail"
                         trigger="thumbnail"
                         label="thumbnail"
                         :error="form.errors.thumbnail"/>
        </b-col>
        <b-col lg="6">
            <FileUploads v-model="form.cover_image"
                         trigger="cover_image"
                         label="cover_image"
                         :error="form.errors.cover_image"/>
        </b-col>
    </b-row>
    <b-col class="mb-3">
        <BaseInput
            v-model="form.duration_minutes"
            :error="form.errors.duration_minutes"
            placeholder="duration-minutes"
            label="duration-minutes"
        />
    </b-col>
    <b-col class="mb-3">
        <FileUploads v-model="form.demo_video"
                     trigger="demo-video"
                     label="demo-video"
                     :error="form.errors.demo_video"/>
    </b-col>
    <b-col class="mb-3">
        <Editor v-model="form.description"
                placeholder="description"
                label="description"/>
    </b-col>
    <b-col class="mb-3">
        <MultiFields :items="benefits" label="course-benefits"/>
    </b-col>
</template>

<style scoped>

</style>
