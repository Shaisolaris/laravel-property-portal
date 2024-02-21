<script setup>
import { computed, reactive, ref } from 'vue';
import { v4 as uuidv4 } from 'uuid';
import heic2any from 'heic2any';
import TagLabel from "~/Components/Partials/TagLabel.vue";
import ErrorMessage from "~/Components/Partials/ErrorMessage.vue";

const props = defineProps({
    simple: {
        type: Boolean,
        default: true
    },
    label: {
        type: String,
        default: '',
    },
    boxClass: {
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
        default: [ 'png', 'jpg', 'jpeg' ],
    },
    viewType: {
        type: String,
        default: ''
    },
    error: {
        type: String,
        default: '',
    },
    image: {
        type: Object,
        default: null
    },
    modelValue: {
        type: Object,
        default: null
    },
    groupTextClass: {
        type: String,
        default: ''
    }
});
const inputUpload = ref(null);
let select = reactive(null);
let renderKey = ref(0);

const emit = defineEmits([ 'uploaded', 'update:modelValue' ]);

const acceptableFormats = computed(() => props.types.map((type) => `${props.mimeType}/${type}`).join(', '));

const iosTypes = reactive([ 'heic', 'heif' ]);
const dragging = ref(false);

const onFileInputChange = (event) => {
    uploadFiles(event.target.files);
};

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
                            .then(({ convertedFile, src }) => {
                                const data = { name: convertedFile.name, src };

                                emit('uploaded', { file: convertedFile, data });
                                emit('update:modelValue', convertedFile)

                                select = data
                            })
                    } else {
                        const data = { name: file.name, src: reader.result };

                        emit('uploaded', { file, data });
                        emit('update:modelValue', file)

                        select = data

                    }

                    select.name = select.name.slice(0, inputUpload.value.clientWidth, '...');

                    renderKey.value = renderKey.value + 1;
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
        reader.onload = () => resolve({ convertedFile, src: reader.result });
        reader.onerror = (event) => reject(event.target.error);
    });
};

const blobToFile = (theBlob, fileName) => {
    theBlob.lastModifiedDate = new Date();
    theBlob.name = fileName;
    return theBlob;
}

const forceSave = () => {
    if(props.modelValue) {
        uploadFiles({0:props.modelValue});
    }
}

onMounted(() => forceSave())
onMounted(() => forceSave())

</script>

<template>
    <label
        :class="['d-flex gap-4', {'align-items-center': viewType.length}]"
        :for="$attrs.trigger"
        @dragover.prevent
        @dragenter="dragging = true"
        @dragleave="dragging = false"
        @drop.prevent="onDrop"
        :key="renderKey"
    >
        <template v-if="!simple">
            <template v-if="viewType === 'input-avatar'">
                <div v-if="select" class="flex-shrink-0">
                    <img
                        :alt="select.name"
                        :src="select.src"
                        :title="select.name"
                        class="avatar-md rounded"
                    />
                </div>
                <div v-else-if="image" class="flex-shrink-0">
                    <img
                        :alt="image?.name"
                        :src="image?.url"
                        :title="image?.name"
                        class="avatar-md rounded"
                    />
                </div>

                <div class="flex-grow-1">
                    <TagLabel :label="label" :required="$attrs.required" />

                    <div class="input-group cursor-pointer">
                        <div :class="`input-group-text ${groupTextClass}`">
                            <i class="ri-upload-2-line"></i>
                        </div>
                        <div :class="['form-control form-control-group-icon', $attrs?.class]" ref="inputUpload">
                            <span v-if="image && !select?.name">{{ image?.name }}</span>
                            <span v-else>{{ select?.name }}</span>
                        </div>
                    </div>
                </div>
            </template>
            <template v-else>
                <div class="rounded-circle avatar-preview">
                    <Icon v-if="!select" name="svg-person" class="stock-image" width="46" height="46" />
                    <img
                        v-else
                        :alt="select.name"
                        :src="select.src"
                        :title="select.name"
                    />
                </div>
                <div>
                    <h5 class="text-black">
                        <Text t-key="page.register.text-16" tag="span" />
                    </h5>
                    <p class="text-dim-gray font-weight-light mb-2">
                        <Text t-key="page.register.text-17" tag="span" class="me-1" />
                        <span class="text-xs">{{ maxSize }}mb, </span>
                        <span class="text-xs">
                            <Text tag="span" t-key="minimum" /> 500px
                            <Text tag="span" t-key="height" />  &
                            <Text tag="span" t-key="width" />
                        </span>
                    </p>
                    <div for="upload-file" class="btn btn-light-blue w-100 text-black btn-upload">
                        <i class="ri-upload-2-line"></i>
                        {{ $t('button.upload') }}
                    </div>
                </div>
            </template>
        </template>
        <template v-else>
            <div class="w-100">
                <TagLabel :label="label" :required="$attrs.required" />

                <div class="input-group cursor-pointer" :class="{ 'file-is-invalid': error && error.length > 0 }">
                    <div :class="`input-group-text ${groupTextClass}`">
                        <i class="ri-upload-2-line"></i>
                    </div>
                    <div :class="['form-control overflow-hidden', boxClass, $attrs?.class]" ref="inputUpload">
                        {{ select?.name }}
                    </div>
                </div>
            </div>
        </template>
        <input
            :id="$attrs.trigger"
            :accept="acceptableFormats"
            type="file"
            hidden
            @input.prevent="onFileInputChange($event)"
        />
    </label>
    <ErrorMessage :error="error" />
</template>


<style lang="scss">
.file-is-invalid {
    border: var(--in-border-width) solid var(--in-input-border-custom);
    border-radius: 1.25rem;
    border-color: var(--in-form-invalid-border-color);
    background-repeat: no-repeat;
    background-position: right calc(0.375em + 0.3rem) center;
    background-size: calc(0.75em + 0.6rem) calc(0.75em + 0.6rem);
}

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
