<script setup>

const {t} = useI18n();

const props = defineProps({
    document:    {
        type:     Object,
        required: false,
    },
});

const title = computed(() => {
    switch (true) {
        case props.document.custom_properties.is_registration_scan:
            return t('admin.page.user-documents.types.registration-scan');
        case props.document.custom_properties.is_transcript:
            return t('admin.page.user-documents.types.transcript');
        case props.document.custom_properties.is_diploma_certificate:
            return t('admin.page.user-documents.types.diploma-certificate');
        case props.document.custom_properties.is_previous_employment_education:
            return t('admin.page.user-documents.types.previous-employment-education');
        case props.document.custom_properties.is_teaching_experience:
            return t('admin.page.user-documents.types.teaching-experience');
        case props.document.custom_properties.is_additional_licences_permits:
            return t('admin.page.user-documents.types.additional-licences-permits');
        default:
            return t('admin.page.user-documents.types.document');
    }
});

const isImage = computed(() => {
    return ['jpg', 'jpeg', 'png', 'tiff', 'bmp'].includes(props.document.extension)
});

const icon = computed(() => {

    const icons = {
        'default': 'bx bxs-file-blank',
        'doc': 'bx bxs-file-doc',
        'pdf': 'bx bxs-file-pdf',
    };

    return icons[props.document.extension] ?? icons.default;
});


</script>

<template>
    <div class="card admin-user-document">
        <div class="card-header">
            {{ title }}
        </div>
        <div class="card-body " :class="{'p-0 image': isImage}">
            <a :href="document.original_url" target="_blank">
                <img :src="document.original_url"
                     :alt="`${document.name}.${document.extension}`"
                     class="w-100"
                     v-if="isImage"
                >
                <span class="icon " :class="icon" v-else></span>
            </a>
        </div>
        <div class="card-footer">
            {{ `${document.name}.${document.extension}` }}
        </div>
    </div>
</template>

<style lang="scss">
    .admin-user-document{
        .card-body{
            text-align: center;
            min-height: 150px;

            display: flex;
            align-items: center;
            justify-content: center;

            .icon{
                font-size: 72px;
            }
        }
    }
</style>
