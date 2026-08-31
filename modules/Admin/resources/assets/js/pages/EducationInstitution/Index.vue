<script setup>
import AdminLayout from "$module@admin/layouts/AdminLayout.vue";
import {useForm} from "@inertiajs/vue3";

const {t} = useI18n();

const props = defineProps({
    institutions: {
        type: Object
    },
    filters:      {
        type: Object,
    }
});

const filtersForm = useForm({
    search: props.filters.search ?? '',
});

function submitFilters(page = null) {
    // console.log('submit filters', filtersForm);
    filtersForm
        .transform((data) => ({
            ...data,
            page,
        }))
        .submit('get', route('admin.institution.index'));
}

</script>

<template>
    <AdminLayout
        class="admin-page-institution-list"
        :header="$t('admin.page.institution.title-list')"
    >


        <div class="table-filters mb-3">
            <form @submit.prevent="submitFilters">
                <div class="row">
                    <div class="col-sm-7 col-md-5 col-lg-4 col-xl-3">
                        <BaseInput placeholder="search-user" v-model="filtersForm.search"/>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-icon btn-secondary" type="submit">
                            <span class="mdi mdi-filter-outline"></span>
                        </button>
                    </div>
                    <div class="col-auto ms-auto">
                        <BaseButton :route="route('admin.institution.create')" icon="mdi mdi-plus" t-key="create"/>
                    </div>
                </div>
            </form>
        </div>


<!--        <BaseTable :meta="institutions.meta" :visit-page-function="(page) => submitFilters(page)">-->
        <BaseTable view-type="table-striped">
            <template #pagination>
                <Pagination
                    :current-page="institutions.meta.current_page"
                    :per-page="institutions.meta.per_page"
                    :total-items="institutions.meta.total"
                    :last-page="institutions.meta.last_page"
                    @pagination-page-change="(page) => submitFilters(page)"
                />
            </template>

            <template #header>
                <th scope="col">{{ $t('admin.page.institution.table.name') }}</th>
                <th scope="col">{{ $t('admin.page.institution.table.type') }}</th>
                <th scope="col">{{ $t('admin.page.institution.table.status') }}</th>
                <th scope="col">{{ $t('admin.page.institution.table.organizers') }}</th>
                <th scope="col">{{ $t('admin.page.institution.table.description') }}</th>
                <th scope="col"></th>
            </template>

            <template #body>
                <tr v-for="institution in institutions.data">
                    <td>{{ institution.name }}</td>
                    <td>{{ institution.institution_type_name }}</td>
                    <td>
                        <Status :value="institution.status_label" />
                    </td>
                    <td class="text-wrap">
                        <span
                            class="mb-2 me-2 badge bg-secondary-subtle bg-secondary-subtle text-secondary"
                            v-for="organizer in institution.organizers"
                        >
                            {{ organizer.full_name }}
                        </span>
                    </td>
                    <td class="text-wrap">
                        <TextLimit :text="institution.description"/>
                    </td>
                    <TdActions>
                        <template #actions>
                            <Link :href="route('admin.institution.edit', {institution})">
                                <BDropdownItem>
                                    <i class="mdi mdi-pencil"/>
                                    {{ $t('action.edit') }}
                                </BDropdownItem>
                            </Link>
                        </template>
                    </TdActions>
                </tr>
            </template>

        </BaseTable>

    </AdminLayout>
</template>

<style scoped>

</style>
