<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <footer class="custom-footer background-footer py-5 position-relative">
        <BContainer>
            <BRow>
                <BCol lg="4" class="mt-4">
                    <div>
                        <div>
                            <img src="@/images/logo-light.png" alt="logo light" height="17" />
                        </div>
                        <div class="mt-4 fs-13">
                            <p>Premium Multipurpose Admin & Dashboard Template</p>
                            <p>You can build any type of web application like eCommerce, CRM, CMS, Project
                                management apps, Admin Panels, etc using Velzon.</p>
                            <ul class="list-inline mb-0 footer-social-link">
                                <li class="list-inline-item">
                                    <BLink href="#" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-facebook-fill"></i>
                                        </div>
                                    </BLink>
                                </li>
                                <li class="list-inline-item">
                                    <BLink href="#" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-github-fill"></i>
                                        </div>
                                    </BLink>
                                </li>
                                <li class="list-inline-item">
                                    <BLink href="#" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-linkedin-fill"></i>
                                        </div>
                                    </BLink>
                                </li>
                                <li class="list-inline-item">
                                    <BLink href="#" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-google-fill"></i>
                                        </div>
                                    </BLink>
                                </li>
                                <li class="list-inline-item">
                                    <BLink href="#" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-dribbble-line"></i>
                                        </div>
                                    </BLink>
                                </li>
                            </ul>
                        </div>
                    </div>
                </BCol>

                <BCol lg="7" class="ms-lg-auto">
                    <BRow>
                        <BCol sm="4" class="mt-4">
                            <h5 class="text-white mb-0">Company</h5>
                            <div class="text-muted mt-3">
                                <ul class="list-unstyled ff-secondary footer-list">
                                    <li>
                                        <Link href="/pages/profile">About Us</Link>
                                    </li>
                                    <li>
                                        <BLink href="#">Gallery</BLink>
                                    </li>
                                    <li>
                                        <Link href="/pages/team">Team</Link>
                                    </li>
                                    <li>
                                        <Link href="/pages/pricing">Pricing</Link>
                                    </li>
                                    <li>
                                        <Link href="/pages/timeline">Timeline</Link>
                                    </li>
                                </ul>
                            </div>
                        </BCol>
                        <BCol sm="4" class="mt-4">
                            <h5 class="text-white mb-0">For Jobs</h5>
                            <div class="text-muted mt-3">
                                <ul class="list-unstyled ff-secondary footer-list">
                                    <li>
                                        <Link href="/jobs/lists">Job List</Link>
                                    </li>
                                    <li>
                                        <Link href="/jobs/application">application</Link>
                                    </li>
                                    <li>
                                        <Link href="/jobs/new">New Job</Link>
                                    </li>
                                    <li>
                                        <Link href="/jobs/companies-list">Company List</Link>
                                    </li>
                                </ul>
                            </div>
                        </BCol>
                        <BCol sm="4" class="mt-4">
                            <h5 class="text-white mb-0">Support</h5>
                            <div class="text-muted mt-3">
                                <ul class="list-unstyled ff-secondary footer-list">
                                    <li>
                                        <Link href="/pages/faqs">FAQ</Link>
                                    </li>
                                    <li>
                                        <Link href="/pages/faqs">Contact</Link>
                                    </li>
                                </ul>
                            </div>
                        </BCol>
                    </BRow>
                </BCol>

            </BRow>

            <BRow class="text-center text-sm-start align-items-center mt-5">
                <BCol sm="6">
                    <div>
                        <p class="copy-rights mb-0">
                            {{ new Date().getFullYear() }} © Velzon - Themesbrand
                        </p>
                    </div>
                </BCol>
                <BCol sm="6">
                    <div class="text-sm-end mt-3 mt-sm-0">
                        <ul class="list-inline mb-0 footer-list gap-4 fs-13">
                            <li class="list-inline-item">
                                <Link href="/pages/privacy-policy">Privacy Policy</Link>
                            </li>
                            <li class="list-inline-item">
                                <Link href="/pages/term-conditions">Terms & Conditions</Link>
                            </li>
                            <li class="list-inline-item">
                                <Link href="/pages/privacy-policy">Security</Link>
                            </li>
                        </ul>
                    </div>
                </BCol>
            </BRow>
        </BContainer>
    </footer>
</template>

<style scoped>

</style>