<script setup>
defineProps({
    title: {
        type: String,
        default: "",
    },
    pageTitle: {
        type: String,
        default: "",
    }
});
</script>

<template>
    <BRow>
        <BCol cols="12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{ $t(`title.${title}`) }}</h4>
                <div class="page-title-right">
                    <slot name="right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="javascript: void(0);">{{ $t(`title.${pageTitle}`) }}</a>
                            </li>
                            <li class="breadcrumb-item active">{{ $t(`title.${title}`) }}</li>
                        </ol>
                    </slot>
                </div>
            </div>
        </BCol>
    </BRow>
</template>

<style scoped>

</style>