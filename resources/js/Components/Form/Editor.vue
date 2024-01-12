<script setup>
import CKEditor from '@ckeditor/ckeditor5-vue';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

const props = defineProps({
    modelValue: {
        type: String,
        default: 'gregregre'
    },
    title: {
        type: String,
        default: ''
    },
});
const emit = defineEmits(['update:modelValue']);
const editor = ClassicEditor;
const editorData = ref(props.modelValue);
const plugins = ref([
    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
    "save table contextmenu directionality emoticons template paste textcolor",
]);
const toolbar = "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons";
const options = ref({
    height: 300,
    style_formats: [
        { title: "Bold text", inline: "b" },
        { title: "Red text", inline: "span", styles: { color: "#ff0000" } },
        { title: "Red header", block: "h1", styles: { color: "#ff0000" } },
        { title: "Example 1", inline: "span", classes: "example1" },
        { title: "Example 2", inline: "span", classes: "example2" },
        { title: "Table styles" },
        { title: "Table row 1", selector: "tr", classes: "tablerow1" },
    ],
});

const CKEditorComponent = CKEditor.component;


watch(
    () => editorData.value,
    (value) => {
        emit('update:modelValue', value)
    }
);
</script>

<template>
    <div class="ckeditor-classic">
        <CKEditorComponent v-model="editorData" :editor="editor"></CKEditorComponent>
    </div>
</template>

<style scoped>

</style>