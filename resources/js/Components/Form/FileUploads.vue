<script setup>
import {computed, reactive, ref} from 'vue';
import {v4 as uuidv4} from 'uuid';
import heic2any from 'heic2any';
import TagLabel from "~/Components/Partials/TagLabel.vue";

const props = defineProps({
    simple: {
        type: Boolean,
        default: true
    },
    label: {
        type: String,
        default: '',
    },
    maxSize: {
        type: Number,
        default: 15,
    },
    mimeType: {
        type: String,
        default: 'image',
    },
    types: {
        type: Array,
        default: ['png', 'jpg', 'jpeg'],
    }
});

let select = reactive(null);

const emit = defineEmits(['uploaded', 'update:modelValue']);

const acceptableFormats = computed(() => props.types.map((type) => `${props.mimeType}/${type}`).join(', '));

const iosTypes = reactive(['heic', 'heif']);
const dragging = ref(false);

const onFileInputChange = (event) => uploadFiles(event.target.files);

const onDrop = (event) => {
    dragging.value = false;
    uploadFiles(event.dataTransfer.files);
};

const uploadFiles = (files) => {

    if (files) {
        Object.values(files)
            .forEach((file) => {
                const reader = new FileReader();

                reader.readAsDataURL(file);

                reader.onload = () => {
                    if (iosTypes.indexOf(file.name.split('.').pop().toLowerCase()) >= 0) {
                        iosTypeToImage(file)
                            .then(({convertedFile, src}) => {
                                const data = {name: convertedFile.name, src};

                                emit('uploaded', {file: convertedFile, data});
                                emit('update:modelValue', convertedFile)

                                select = data
                            })
                    } else {
                        const data = {name: file.name, src: reader.result};

                        emit('uploaded', {file, data});
                        emit('update:modelValue', file)

                        select = data
                    }
                };
            });
    }
};

const iosTypeToImage = async (file, toType = 'image/jpeg', quality = 1) => {
    return new Promise(async (resolve, reject) => {
        const blob = await heic2any({
            blob: file,
            toType,
            quality,
        });

        const convertedFile = blobToFile(blob, file.name);
        const reader = new FileReader();

        reader.readAsDataURL(convertedFile);
        reader.onload = () => resolve({convertedFile, src: reader.result});
        reader.onerror = (event) => reject(event.target.error);
    });
};

const blobToFile = (theBlob, fileName) => {
    theBlob.lastModifiedDate = new Date();
    theBlob.name = fileName;
    return theBlob;
}
</script>


<template>
    <label class="d-flex gap-4"
           @dragover.prevent
           @dragenter="dragging = true"
           @dragleave="dragging = false"
           @drop.prevent="onDrop"
           :for="$attrs.trigger"
    >
        <template v-if="!simple">
            <div class="rounded-circle avatar-preview">
                <img class="stock-image" v-if="!select" src="/images/person.svg" alt="">
                <img
                    v-else
                    :alt="select.name"
                    :src="select.src"
                    :title="select.name"
                />
            </div>
            <div>
                <h5 class="text-black">
                    <Text t-key="page.register.text-16" tag="span"/>
                </h5>
                <p class="text-dim-gray font-weight-light mb-2">
                    <Text t-key="page.register.text-17" tag="span" class="me-1"/>
                    <span class="text-xs">{{ maxSize }}mb, </span>
                    <span class="text-xs"> minimum 500px Hight & Width </span>
                </p>
                <div for="upload-file" class="btn btn-light-blue w-100 text-black btn-upload">
                    <i class="ri-upload-2-line me-2"></i>
                    {{ $t('button.upload') }}
                </div>
            </div>
        </template>
        <template v-else>
            <div class="w-100">
                <TagLabel :label="label" :required="$attrs.required" />
                <div class="input-group cursor-pointer">
                    <div class="input-group-text">
                        <i class="ri-upload-2-line me-2"></i>
                    </div>
                    <div class="form-control">
                        {{select?.name}}
                    </div>
                </div>
            </div>
        </template>

        <input
            :id="$attrs.trigger"
            type="file"
            hidden
            :accept="acceptableFormats"
            @input.prevent="onFileInputChange($event)"
        />

    </label>
</template>


<style lang="scss">
.btn-upload {
    width: 100px !important;
    padding: 8px 12px !important;
}

.avatar-preview {
    background: #F3F6FD;
    height: 104px;
    width: 104px;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;

    & img {
        width: 200px;
        object-fit: cover;

        &.stock-image {
            width: auto;
        }
    }
}
</style>
