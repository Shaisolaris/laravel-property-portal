<script setup>
import { onMounted, reactive } from 'vue';
import { ProgressiveImage } from 'vue-progressive-image';
import helpers from "~/scripts/helpers/helpers.js";


const props = defineProps({
    media: {
        type: Object,
        default: {},
    },
    name: {
        type: String,
        default: null,
    },
    class: {
        type: String,
        default: null,
    },
    src: {
        type: String,
        default: null,
    },
    placeholder: {
        type: String,
        default: null,
    },
    blur: {
        type: Number,
        default: 4,
    },
    lazyPlaceholder: {
        type: Boolean,
        default: true,
    },
    objectCover: {
        type: Boolean,
        default: true,
    },
});

const { randomString } = helpers;

const image = reactive({
    src: '',
    placeholder: '',
});

onMounted(() => {
    if (props.media.hasOwnProperty('url')) {
        generateImagePreview(props.media).then(
            (data) => ([ image.src, image.placeholder ] = [ data.src, data.placeholder ]),
        );
    } else {
        [ image.src, image.placeholder ] = [ props.src, props.placeholder ];
    }
});

const generateImagePreview = async (media) => {
    if (media.type === 'video') {
        const video = document.createElement('video');
        const canvas = document.createElement('canvas');
        video.style.display = 'none';
        canvas.style.display = 'none';

        await new Promise((resolve, reject) => {
            video.addEventListener('loadedmetadata', () => {
                video.width = video.videoWidth;
                video.height = video.videoHeight;
                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;
                video.currentTime = video.duration * 0.25;
            });
            fetch(media.url)
                .then((response) => response.blob())
                .then(async (blob) => {
                    video.src = URL.createObjectURL(blob);
                    video.addEventListener('seeked', () => resolve());
                })
                .catch((error) => reject(error));
        });

        canvas.getContext('2d').drawImage(video, 0, 0, video.videoWidth, video.videoHeight);
        const image = canvas.toDataURL('image/png');

        return { src: image, placeholder: image };
    }

    return { src: media.url, placeholder: media.conversion_url };
};

const avatarName = () => {
    let chr;
    if (props.name) {
        const d = props.name.toUpperCase();
        chr = d.split(' ');
        return chr.length >= 2 ? chr[0][0] + chr[1][0] : d[0] + d[1];
    } else {
        return randomString(2, true, false);
    }
};
</script>

<template>
    <div v-if="image.src" class="avatar-user rounded-circle header-profile-user overflow-hidden">
        <progressive-image
            :src="image.src"
            :placeholder-src="image.placeholder ?? image.src"
            :blur="blur"
            :lazy-placeholder="lazyPlaceholder"
            :object-cover="objectCover"
        />
    </div>
    <div v-else class="d-flex align-items-center">
        <span class="bg-light-blue rounded-circle header-profile-user d-flex align-items-center justify-content-center text-white">{{ avatarName() }}</span>
    </div>
</template>

<style>
.avatar-user {
    width: 32px;
    height: 32px;

    img {
        width: 100%;
        object-fit: cover;
    }
}
</style>
