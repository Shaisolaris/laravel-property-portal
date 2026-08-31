<script setup>
import AdminLayout from "$module@admin/layouts/AdminLayout.vue";
import swAlert from "$module@admin/services/swalert.js";
import {useForm} from "@inertiajs/vue3";

const {t} = useI18n();

const props = defineProps({
    countries:   {
        type: Object
    },
    filters: {
        type: Object,
    }
});

function switchIsFree(country) {
    router.post(route('admin.country.set-free', { country, value: !country.is_free }));
}

async function deleteCountry(country) {

    if (!(await swAlert.question(
        t('admin.page.country.delete.text', {name: country.name}),
        t('admin.page.country.delete.title')
    ))) {
        return;
    }

    router.delete(route('admin.country.delete', { country }));
}

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
        .submit('get', route('admin.country.index'));
}

</script>

<template>
    <AdminLayout
        class="admin-page-country-list"
        :header="$t('admin.page.country.title')"
    >

        <div class="table-filters mb-3">
            <form @submit.prevent="submitFilters()">
                <div class="row">
                    <div class="col-sm-7 col-md-5 col-lg-4 col-xl-3">
                        <BaseInput placeholder="search" v-model="filtersForm.search"/>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-icon btn-secondary" type="submit">
                            <span class="mdi mdi-filter-outline"></span>
                        </button>
                    </div>
                    <div class="col-auto ms-auto">
                        <BaseButton :route="route('admin.country.create')" icon="mdi mdi-plus" t-key="create"/>
                    </div>
                </div>
            </form>
        </div>

        <BaseTable view-type="table-striped">
            <template #pagination>
                <Pagination
                    :current-page="countries.meta.current_page"
                    :per-page="countries.meta.per_page"
                    :total-items="countries.meta.total"
                    :last-page="countries.meta.last_page"
                    @pagination-page-change="(page) => submitFilters(page)"
                />
            </template>

            <template #header>
                <th scope="col">{{ $t('admin.page.country.table.code') }}</th>
                <th scope="col">{{ $t('admin.page.country.table.name') }}</th>
                <th scope="col">{{ $t('admin.page.country.table.local_name') }}</th>
                <th scope="col">{{ $t('admin.page.country.table.free') }}</th>
                <th scope="col"></th>
            </template>

            <template #body>
                <tr v-for="country in countries.data">
                    <td>{{ country.code }}</td>
                    <td>{{ country.name }}</td>
                    <td>{{ country.local_name }}</td>
                    <td>
                        <i class="mdi mdi-check-bold" v-if="country.is_free"/>
                    </td>
                    <TdActions>
                        <template #actions>
                            <Link :href="route('admin.country.edit', {country})">
                                <BDropdownItem>
                                    <i class="mdi mdi-pencil"/>
                                    {{ $t('action.edit') }}
                                </BDropdownItem>
                            </Link>
                            <BDropdownItem @click="switchIsFree(country)">
                                <i class="mdi mdi-currency-usd" v-if="country.is_free" />
                                <i class="mdi mdi-currency-usd-off" v-else />
                                {{ country.is_free ? $t('admin.page.country.set-paid') : $t('admin.page.country.set-free') }}
                            </BDropdownItem>
                            <BDropdownItem @click="deleteCountry(country)" >
                                <i class="mdi mdi-delete"/>
                                {{ $t('action.delete') }}
                            </BDropdownItem>
                        </template>
                    </TdActions>
                </tr>
            </template>

        </BaseTable>
    </AdminLayout>
</template>

<style scoped>

</style>
