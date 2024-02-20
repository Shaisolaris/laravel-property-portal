<!--https://ckeditor.com/docs/ckeditor5/latest/installation/plugins/installing-plugins.html-->
<!--https://ckeditor.com/docs/ckeditor5/latest/installation/getting-started/configuration.html-->
<script setup>
import CKEditor from '@ckeditor/ckeditor5-vue';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
import ErrorMessage from "~/Components/Partials/ErrorMessage.vue";


defineOptions({
    inheritAttrs: false,
});

const props = defineProps({
    modelValue: {
        type: String,
        default: ''
    },
    title: {
        type: String,
        default: ''
    },
    error: {
        type: String,
        default: '',
    },
    label: {
        type: String,
        default: '',
    },
    tag: {
        type: String,
        default: 'textarea'
    },
    viewType: {
        type: String,
        default: 'default'
    }
});
const emit = defineEmits(['update:modelValue']);
const editor = ClassicEditor;
const editorData = ref(props.modelValue ?? '');
const editorConfig = ref(props.viewType === 'simple' ? {
    toolbar: [ 'undo', 'redo', '|', 'link', 'imageUpload', 'mediaEmbed' ],
} : {
    toolbarLocation: 'bottom'
}); //toolbar, plugins, heading: {options: }
const CKEditorComponent = CKEditor.component;


watch(
    () => editorData.value,
    (value) => {
        emit('update:modelValue', value)
    }
);
</script>

<template>
    <TagLabel :label="label" :required="$attrs?.required ?? true" />

    <div class="ckeditor-classic">
        <CKEditorComponent
            v-model="editorData"
            :editor="editor"
            :tag-name="tag"
            :disabled="$attrs?.disabled ?? false"
            :config="editorConfig"
        />
    </div>

    <ErrorMessage :error="error" />
</template>

<style scoped>

</style>
