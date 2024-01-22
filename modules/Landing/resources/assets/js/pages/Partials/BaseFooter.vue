<script setup>
import { Link } from "@inertiajs/vue3";
import Search from "$module@landing/partials/Search.vue";
</script>

<template>
    <footer class="custom-footer background-footer position-relative">
        <b-container class="pbc-60 ptc-90">
            <b-row>
                <b-col cols="12" md="5">
                    <Text t-key="landing.footer.text-1" class="fsc-48 lh-1 fontf-McLaren text-black" />
                    <Text t-key="landing.footer.text-2" class="fs-3 text-black py-4" />
                    <Search icon="ri-mail-line" button-t-key="subscribe" placeholder="enter-email-address" />
                </b-col>

                <b-col cols="12" md="7">
                    <b-row class="gy-2">
                        <b-col v-for="(item, index) in $tm('landing.footer.columns')" sm="4" class="fs-3 fontf-McLaren text-black">
                            <Text :t-key="item" />

                            <template v-if="index === 0">{{ item }}</template>
                            <template v-if="index === 1">
                                <div>
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li v-for="linkItem in $tm('landing.footer.links')">
                                            <Link :href="route('landing.academy.index')" class="fs-16 text-black fontf-HelveticaNeue">{{ linkItem }}</Link>
                                        </li>
                                    </ul>
                                </div>
                            </template>
                            <template v-if="index === 2">
                                <ul class="list-unstyled ff-secondary footer-list">
                                    <li v-for="helpItem in $tm('landing.footer.help')">
                                        <Link :href="route('landing.academy.index')" class="fs-16 text-black fontf-HelveticaNeue">{{ helpItem }}</Link>
                                    </li>
                                </ul>
                            </template>
                        </b-col>
                    </b-row>
                </b-col>
            </b-row>
        </b-container>
    </footer>
</template>

<style scoped>

</style>