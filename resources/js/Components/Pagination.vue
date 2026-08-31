<script setup>
import { computed, defineEmits, defineProps, ref } from 'vue';
import usePaginator from 'vue-use-paginator';


const props = defineProps({
    totalItems: {
        type: Number,
        default: 0,
    },
    perPage: {
        type: Number,
        default: 1,
    },
    currentPage: {
        type: Number,
        default: 1,
    },
    limit: {
        type: Number,
        default: 6,
    },
    lastPage: {
        type: Number,
    }
});

const emit = defineEmits([ 'paginationPageChange' ]);
const totalItems = computed(() => props.totalItems);
const perPage = computed(() => props.perPage);
const limit = ref(props.limit);
const currentPage = ref(props.currentPage);

const paginator = usePaginator({
    page: currentPage,
    numButtons: limit.value,
    numItems: totalItems,
    pageSize: perPage,
});

const changePage = (page) => {
    currentPage.value = page;
    paginator.page.value = page;

    emit('paginationPageChange', page);
};

const goPrev = () => {
    if (!paginator.hasPrev) return;

    let page = paginator.goPrev();

    changePage(page);
};

const goNext = () => {
    if (!paginator.hasNext) return;
    let page = paginator.goNext();

    changePage(page);
};
</script>
<template>
    <div v-if="lastPage !== 1" class="pagination-wrap hstack gap-md-2 mt-2">
        <a
            v-if="currentPage > 1"
            :class="['page-item pagination-prev d-none d-sm-flex', {'disabled pe-none': currentPage === 1}]"
            href="javascript:void(0);"
            @click="goPrev"
        >
            <i class="ri-arrow-left-s-line align-middle text-dim-gray" />
        </a>
        <a
            v-if="currentPage > 1"
            :class="['page-item pagination-prev d-sm-none', {'disabled pe-none': currentPage === 1}]"
            href="javascript:void(0);"
            style="padding: 0 !important;"
            @click="goPrev"
        >
            <i class="ri-arrow-left-s-line align-middle text-dim-gray" />
        </a>
        <ul class="pagination listjs-pagination mb-0">
            <li
                v-for="button in paginator.buttons.value"
                :key="button.page"
                :class="{active: button.page === currentPage , disabled: button.page === '...'}"
                @click="changePage(button.page)"
            >
                <a class="page" href="javascript:void(0);">
                    {{ button.ellipsis ? '...' : button.page }}
                </a>
            </li>
        </ul>

        <a
            v-if="currentPage !== lastPage"
            :class="['page-item pagination-next d-none d-sm-flex', {'disabled pe-none': currentPage === lastPage}]"
            href="javascript:void(0);"
            @click="goNext"
        >
            <i class="ri-arrow-right-s-line align-middle text-dim-gray" />
        </a>

        <a
            v-if="currentPage !== lastPage"
            :class="['page-item pagination-next d-sm-none', {'disabled pe-none': currentPage === lastPage}]"
            href="javascript:void(0);"
            style="padding: 0 !important;"
            @click="goNext"
        >
            <i class="ri-arrow-right-s-line align-middle text-dim-gray" />
        </a>
    </div>
</template>