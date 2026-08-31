<script setup>
defineProps({
    modelValue: {
        type: [ String, Number ],
        default: null,
    },
});

const emit = defineEmits([ 'update:modelValue' ]);
const fileInput = ref(null);


const loadImage = () => {
    fileInput.value.click();
}

const selectedFile = (e) => {
    const file = e.target.files[0];

    emit('update:modelValue', file);
}
</script>
<!--Нужно будет допилить комопонент чтобы был multiple-->
<template>
    <div @click="loadImage" class="hover-element">
        <slot name="body" />
    </div>

    <input type="file" ref="fileInput" class="d-none" @change="selectedFile" >
</template>

<style scoped>

</style>