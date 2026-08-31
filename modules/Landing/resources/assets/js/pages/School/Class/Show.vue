<script setup>
import LandingLayout from "$module@landing/layouts/LandingLayout.vue";
import Multiselect from "@vueform/multiselect";
import "@vueform/multiselect/themes/default.css";
import flatPickr from "vue-flatpickr-component";
import "flatpickr/dist/flatpickr.css";

const leftItems = ref([
    { count: 11, icon: 'ri-list-unordered', tKey: 'landing.school.class-details.lectures' },
    { count: 1, icon: 'ri-list-unordered', tKey: 'landing.school.class-details.quizzes' },
    { count: 1, icon: 'ri-list-unordered', tKey: 'landing.school.class-details.assignments' },
    {
        text: 'landing.school.class-details.beginner',
        icon: 'ri-bar-chart-box-line',
        tKey: 'landing.school.class-details.skill-level'
    },
    {
        text: 'landing.school.class-details.lifetime',
        icon: 'ri-calendar-todo-line',
        tKey: 'landing.school.class-details.expiry-period'
    },
]);

const textItems = ref([
    "Apply the 5-step design thinking process to a design challenge in your organization.",
    "Ideate solutions to your problem by brainstorming using \"How might we...\" statements.",
    "Empathize with your user through interviews and observations, in order to take a human-centered approach to a problem.",
    "Prototype your ideas rapidly to identify the best possible solution for your problem.",
    "Define your core problem by synthesizing and analyzing information gathered during your empathy work.",
    "Test your prototypes with users to gather feedback on your proposed solution.",
    "",
    "Pitch design thinking to your team or organization using storytelling."
]);
</script>

<template>
    <LandingLayout :show-footer="false">
        <section class="section job-hero-section ptc-140">
            <b-container>
                <b-row>
                    <b-col cols="12" lg="3">
                        <BCard no-body class="job-list-view-card overflow-hidden" id="job-overview">
                            <img
                                src="@/images/small/img-10.jpg"
                                alt=""
                                id="cover-img"
                                class="img-fluid background object-fit-cover"
                            >

                            <BCardBody>
                                <div class="mt-3">
                                    <div class="fs-2 fw-medium">
                                        $13
                                        <span class="fs-5 text-dim-gray text-decoration-line-through">$16</span>
                                    </div>
                                </div>

                                <b-row class="g-3 pt-4">
                                    <b-col v-for="item in leftItems" cols="12">
                                        <b-row class="align-items-center justify-content-between">
                                            <b-col>
                                                <IconRounded :icon="item.icon" />
                                                <Text tag="span" :t-key="item.tKey" class="fs-14 text-black" />
                                            </b-col>
                                            <b-col class="text-end">
                                                <Text v-if="item.text" :t-key="item.text" class="fs-14 text-dim-gray" />
                                                <Text v-else>
                                                    <template #text>
                                                        <span class="fs-14 text-dim-gray">{{ item.count }}</span>
                                                    </template>
                                                </Text>
                                            </b-col>
                                        </b-row>
                                    </b-col>
                                </b-row>

                                <div class="mt-4">
                                    <BaseButton t-key="enroll" variant="light-yellow" class="fw-medium" />
                                </div>
                            </BCardBody>
                        </BCard>
                    </b-col>
                    <b-col cols="12" lg="9">
                        <b-row class="g-0">
                            <b-col cols="12">
                                <BCard variant="beige" no-body>
                                    <BCardBody>
                                        <div class="fs-14 text-dim-gray">
                                            Home > School of Inoura > Categories > Classes
                                        </div>

                                        <div class="fs-3 fw-medium py-3">Design Thinking for Beginners: Develop
                                            Innovative Ideas
                                        </div>

                                        <div class="fs-16">Apply the five-step design thinking process to identify and
                                            creatively solve problems using a human-centered approach.
                                        </div>

                                        <div class="pt-3 pb-4 d-flex gap-2 align-items-center">
                                            <div>
                                                <Avatar path="users/avatar-10.jpg" rounded="circle" size="xs" />
                                            </div>
                                            <div class="fs-14 gap-2 d-flex align-text-top">
                                                <div>by Jane Doe</div>
                                                <Starts value="5" />
                                                <div>(538)</div>
                                            </div>
                                        </div>

                                        <b-row class="col-7 g-3">
                                            <b-col cols="2">
                                                <BBadge class="bg-white text-dim-gray fs-14">
                                                    <i class="mdi mdi-google-translate align-text-bottom me-2" />
                                                    <span>English</span>
                                                </BBadge>
                                            </b-col>

                                            <b-col cols="2">
                                                <BBadge class="bg-white text-dim-gray fs-14">
                                                    <i class="ri-time-line align-text-bottom me-2" />
                                                    <span>24:12:22</span>
                                                </BBadge>
                                            </b-col>

                                            <b-col cols="2">
                                                <BBadge class="bg-white text-dim-gray fs-14">
                                                    <i class="ri-time-line align-text-bottom me-2" />
                                                    <span>1 Enrolled</span>
                                                </BBadge>
                                            </b-col>

                                            <b-col cols="4">
                                                <BBadge class="bg-white text-dim-gray fs-14">
                                                    <i class="mdi mdi-google-translate align-text-bottom me-2" />
                                                    <span>Last updated: Thu, 13-Jul-2020</span>
                                                </BBadge>
                                            </b-col>
                                        </b-row>
                                    </BCardBody>
                                </BCard>
                            </b-col>
                            <b-col cols="12">
                                <BCard no-body>
                                    <BCardBody>
                                        <Tabs t-key="class-details">
                                            <template v-slot:tab-overview-body>
                                                <BCard no-body>
                                                    <BCardBody>
                                                        <div class="fs-20 fw-medium pb-3">Description</div>
                                                        <div>
                                                            Think of a problem or challenge you had to solve at work
                                                            recently. How did you approach it? Did you find yourself
                                                            overwhelmed with the number of possible solutions? Were you
                                                            unsure how to even start? Design thinking can help.
                                                            Design thinking is a five-step human-centered process for
                                                            creative problem solving. It was popularized by the Stanford
                                                            d.school and IDEO, and has been used by organizations around
                                                            the world to solve knotty problems. It is all about
                                                            understanding your user's needs and solving the right
                                                            problem. By using this human-centered design approach, you
                                                            can develop products and services that truly help your user.
                                                            This course is meant to serve as an introduction to the
                                                            principles of design thinking and touches on ways you can
                                                            implement it in your workplace. The material is best suited
                                                            for students who are new to design thinking or want a
                                                            refresher on the core concepts. Luckily, design thinking can
                                                            be applied to almost any field; no matter what your
                                                            profession, design thinking can help you discover and
                                                            implement the best solutions to problems you encounter.
                                                        </div>
                                                    </BCardBody>
                                                </BCard>

                                                <BCard no-body>
                                                    <BCardBody>
                                                        <div class="fs-20 fw-medium pb-3">Benefits</div>
                                                        <b-row>
                                                            <b-col v-for="item in textItems" cols="6">
                                                                <li>{{ item }}</li>
                                                            </b-col>
                                                        </b-row>
                                                    </BCardBody>
                                                </BCard>
                                            </template>
                                            <template v-slot:tab-curriculum-body>
                                                <div class="fs-20 fw-medium pb-3">Plan</div>

                                                <b-row class="col-8 g-3 pb-3">
                                                    <b-col cols="2">
                                                        <BBadge variant="beige" class="text-dim-gray fw-normal fs-14">
                                                            <i class="ri-list-ordered align-text-bottom me-2" />
                                                            <span>6 sections</span>
                                                        </BBadge>
                                                    </b-col>

                                                    <b-col cols="2">
                                                        <BBadge variant="beige" class="text-dim-gray fw-normal fs-14">
                                                            <i class="ri-file-list-line align-text-bottom me-2" />
                                                            <span>24 lectures</span>
                                                        </BBadge>
                                                    </b-col>

                                                    <b-col cols="2">
                                                        <BBadge variant="beige" class="text-dim-gray fw-normal fs-14">
                                                            <i class="ri-time-line align-text-bottom me-2" />
                                                            <span>47m total length</span>
                                                        </BBadge>
                                                    </b-col>
                                                </b-row>
                                            </template>
                                            <template v-slot:tab-instructor-body>
                                                <div class="fs-20 fw-medium pb-3">Jane Doe</div>
                                                <b-row class="col-8 g-3 pb-3">
                                                    <b-col cols="3">
                                                        <BBadge variant="beige" class="text-dim-gray fw-normal fs-14">
                                                            <i class="ri-star-line align-text-bottom me-2" />
                                                            <span>4.4 (2,199 Reviews)</span>
                                                        </BBadge>
                                                    </b-col>

                                                    <b-col cols="3">
                                                        <BBadge variant="beige" class="text-dim-gray fw-normal fs-14">
                                                            <i class="ri-barcode-box-line align-text-bottom me-2" />
                                                            <span>5 283 Lessons</span>
                                                        </BBadge>
                                                    </b-col>

                                                    <b-col cols="3">
                                                        <BBadge variant="beige" class="text-dim-gray fw-normal fs-14">
                                                            <i class="ri-play-circle-line align-text-bottom me-2" />
                                                            <span>3 Courses</span>
                                                        </BBadge>
                                                    </b-col>
                                                </b-row>

                                                <div class="pt-3 w-100 h-auto d-flex flex-column">
                                                    <div class="d-flex gap-3">
                                                        <div>
                                                            <Avatar
                                                                path="users/avatar-8.jpg"
                                                                size="xxl"
                                                                class="radius-20"
                                                            />
                                                        </div>
                                                        <div>
                                                            <div class="fs-16 fw-medium">Learning Experience Designer at
                                                                Lyft
                                                            </div>
                                                            <div class="py-3 fs-14">
                                                                <p>Laura is a Learning Experience Designer at Lyft and
                                                                    an Ideo U teaching team lead. In past lives, she's
                                                                    been a User Experience Designer at SAP, taught at
                                                                    the Stanford d.school, and has conducted hundreds of
                                                                    design thinking workshops.</p>
                                                                <p>When she's not teaching people about using game
                                                                    mechanics for learning or interview techniques for
                                                                    empathy work, Laura can be found competing in
                                                                    triathlons, riding hundreds of miles on her bike for
                                                                    fun, or hunting for the best gluten-free bakeries
                                                                    around.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-end mt-auto">
                                                        <BaseLink>
                                                            <template #text>
                                                                <Link
                                                                    :href="route('landing.academy.index')"
                                                                    class="text-royal-blue fw-medium"
                                                                >
                                                                    <Text tag="span" t-key="link.view-details" />
                                                                    <i class="ri-arrow-right-up-line ms-2" />
                                                                </Link>
                                                            </template>
                                                        </BaseLink>
                                                    </div>
                                                </div>
                                            </template>
                                            <template v-slot:tab-reviews-body>
                                                Reviews
                                            </template>
                                        </Tabs>
                                    </BCardBody>
                                </BCard>
                            </b-col>
                        </b-row>
                    </b-col>
                </b-row>
            </b-container>
        </section>
    </LandingLayout>
</template>

<style scoped>

</style>