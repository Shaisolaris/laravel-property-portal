<script setup>
const active = ref(false);


const toggleActive = () => {
    active.value = !active.value;
};
</script>

<template>
    <div
        :class="{ 'active-dropzone': active }"
        class="dropzone position-relative"
        @dragenter.prevent="toggleActive"
        @dragleave.prevent="toggleActive"
        @dragover.prevent
        @drop.prevent="toggleActive"
    >
        <div class="mb-1">
            <i class="display-4 text-muted ri-upload-cloud-2-fill" />
        </div>

        <h5>Drop files here or click to upload.</h5>
        <label for="dropzoneFile" class="stretched-link">Upload</label>
        <input type="file" id="dropzoneFile" class="dropzoneFile btn btn-primary" />
    </div>
</template>