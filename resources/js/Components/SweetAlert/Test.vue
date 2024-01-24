<script setup>
import Swal from "sweetalert2";

const props = defineProps({
    title: {type: String, default: 'Are you sure?'},
    text: {type: String, default: 'Are you sure?'},
    icon: {type: String, default: 'Are you sure?'},
    showCancelButton: {type: Boolean, default: true},
    cancelButtonColor: {type: String, default: '#f46a6a'},
    confirmButtonColor: {type: String, default: '#34c38f'},
    confirmButtonText: {type: String, default: 'Yes, delete it!'},
});

const emit = defineEmits(['confirm', 'reject']);


Swal.fire({
    title: props.title,
    text: props.text,
    icon: props.icon,
    showCancelButton: props.showCancelButton,
    cancelButtonColor: props.cancelButtonColor,
    confirmButtonColor: props.confirmButtonColor,
    confirmButtonText: props.confirmButtonText,
}).then((result) => {
    emit(result.value ? 'confirm' : 'reject');
});

</script>

<template>

</template>

<style scoped>

</style>