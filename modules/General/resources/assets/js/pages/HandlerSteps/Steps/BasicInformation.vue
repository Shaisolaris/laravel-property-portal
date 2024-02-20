<script setup>
const {languages,content_types} = defineProps({
    form: Object,
    languages: Array,
    content_types: Array,
});

let course_types = reactive([])

onMounted(() => {
    for (const [value, label] of Object.entries(content_types)) {
        course_types.push({label,value})
    }
})

</script>

<template>
    <Card>
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
                <BaseMultiselect
                    v-model="form.type"
                    :error="form.errors.type"
                    :options="course_types"
                    label="course-type"
                />
            </b-col>
            <b-col lg="6">
                <BaseMultiselect
                    v-model="form.language"
                    :error="form.errors.language"
                    :options="languages"
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
                <FileUploads @uploaded="data => form.thumbnail = data.file"
                             v-model="form.thumbnail"
                             trigger="thumbnail"
                             label="thumbnail"
                             :error="form.errors.thumbnail"/>
            </b-col>
            <b-col lg="6">
                <FileUploads @uploaded="data => form.cover_image = data.file"
                             v-model="form.cover_image"
                             trigger="cover_image"
                             label="cover-image"
                             :error="form.errors.cover_image"/>
            </b-col>
        </b-row>
        <b-col class="mb-3">
            <BaseInput
                v-model="form.base_duration"
                :error="form.errors.base_duration"
                placeholder="duration-minutes"
                label="duration-minutes"
                type="time"
            />
        </b-col>
        <b-col class="mb-3">
            <BaseInput
                v-model="form.demo_video"
                :error="form.errors.demo_video"
                placeholder="link-to-video"
                label="demo-video"
            />
<!--            <FileUploads @uploaded="data => form.demo_video = data.file"-->
<!--                         v-model="form.demo_video"-->
<!--                         :types="['mp4','mov','avi','webm']"-->
<!--                         trigger="demo-video"-->
<!--                         label="demo-video"-->
<!--                         :error="form.errors.demo_video"/>-->
        </b-col>
        <b-col class="mb-3">
            <Editor v-model="form.description"
                    placeholder="description"
                    :error="form.errors.description"
                    label="description"/>
        </b-col>
        <b-col class="mb-3" :key="form.benefits">
            <MultiFields :errors="form.errors" v-model="form.benefits" label="course-benefits"/>
        </b-col>
    </Card>
</template>

<style scoped>

</style>
