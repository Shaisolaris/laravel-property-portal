<script setup>
import { getBreadcrumbs } from "~/scripts/helpers/translateHelper.js";


defineProps({
    title: {
        type: String,
        default: "",
    },
    breadcrumb: {
        type: String,
        default: ''
    }
});
</script>

<template>
    <b-row v-if="title.length">
        <b-col cols="12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li v-if="!breadcrumb" class="breadcrumb-item fs-18 fw-medium">
                            <Text tag="span" :t-key="`title.${title}`" />
                        </li>
                        <li
                            v-else
                            v-for="breadcrumb in getBreadcrumbs(breadcrumb)"
                            :class="['breadcrumb-item fs-18 fw-medium', {'active': breadcrumb.active}]"
                        >
                            <Link v-if="breadcrumb.href" :href="breadcrumb.href">
                                <Text tag="span" :t-key="`title.${breadcrumb.title}`" />
                            </Link>
                            <Text v-else :t-key="`title.${breadcrumb.title}`" tag="span" />
                        </li>
                    </ol>
                </div>
                <div class="page-title-right">
                    <slot name="breadcrumbs-right" />
                </div>
            </div>
        </b-col>
    </b-row>
</template>

<style scoped>

</style>