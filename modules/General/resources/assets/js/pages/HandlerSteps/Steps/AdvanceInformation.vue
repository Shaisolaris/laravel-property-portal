<script setup>

const {categories,tags} = defineProps({
    categories: Array,
    languages: Array,
    levels: Array,
    tags: Array,
    form: Object
})

const list_categories = reactive(categories.map((category) => {
    if(category.parent) {
        return {
            label: category.name + " (" + category.parent.name + ")",
            value: category.id,
        }
    }
}))

const list_tags = reactive(tags.map((tag) => {
    return {
        label: tag.name,
        value: tag.slug,
    }
}))

const topics = reactive([
    'makeup-artistry',
    'hair-styling',
    'skincare',
    'fashion',
    'nail-art',
]);

</script>

<template>
    <Card>
        <b-col class="mb-3">
            <BaseInput
                v-model="form.advance_duration"
                :error="form.errors.advance_duration"
                placeholder="duration"
                label="duration"
                icon="ri-time-line"
                type="time"
            />
        </b-col>
        <b-col class="mb-3">
            <BaseMultiselect
                v-model="form.tags"
                :error="form.errors.tags"
                :searchable="true"
                mode="tags"
                label="tags"
                placeholder="tags"
                :options="list_tags"
            />
        </b-col>
        <b-col class="mb-3">
            <BaseMultiselect
                v-model="form.category_id"
                :error="form.errors.category_id"
                :searchable="true"
                label="category"
                placeholder="select"
                :options="list_categories"
            />
        </b-col>
        <b-row :no-gutters="true" class="mb-3 gap-2">
            <TagLabel label="category-filters" :required="false" />
            <b-col lg="3" class="border p-3 rounded">
                <p><Text t-key="page.add-course.level"></Text></p>
                <div class="d-flex flex-column gap-2">
                    <div v-for="(level,key) in levels" class="d-flex justify-content-between">
                        <CheckboxRadio :id="key" v-model="form.levels" :value="key" :label="key" reverseLabel  multiple />
                    </div>
                </div>
            </b-col>
            <b-col lg="3" class="border p-3 rounded">
                <p><Text t-key="page.add-course.language"></Text></p>
                <div class="d-flex flex-column gap-2">
                    <div v-for="(language) in languages" class="d-flex justify-content-between">
                        <CheckboxRadio v-model="form.languages" :value="language.value" :label="language.value" reverseLabel multiple />
                    </div>
                </div>
            </b-col>
            <b-col lg="3" class="border p-3 rounded">
                <p><Text t-key="page.add-course.topic"></Text></p>
                <div class="d-flex flex-column gap-2">
                    <div v-for="topic in topics" class="d-flex justify-content-between">
                        <CheckboxRadio v-model="form.topics" :value="topic" :label="topic" reverseLabel multiple />
                    </div>
                </div>
            </b-col>
        </b-row>
    </Card>
</template>

<style scoped lang="scss"></style>
