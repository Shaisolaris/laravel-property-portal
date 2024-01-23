<script setup>
import Slider from "@vueform/slider";

defineProps({

});

const sliderCustomzie = ref([1000, 3000]);
</script>

<template>
    <BCard no-body>
        <div class="accordion accordion-flush">
            <BCardBody class="border-bottom">
                <p class="text-muted text-uppercase fs-12 fw-medium mb-5">
                    Price
                </p>

                <div id="product-price-range" data-slider-color="primary"></div>
                <Slider v-model="sliderCustomzie" :min="0" :max="5000" />
            </BCardBody>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingBrands">
                    <button class="accordion-button bg-transparent shadow-none" type="button" v-b-toggle.flush-collapseBrands>
                        <span class="text-muted text-uppercase fs-12 fw-medium">Brands</span>
<!--                        <BBadge variant="success" class="rounded-pill align-middle ms-1">2</BBadge>-->
                    </button>
                </h2>

                <b-collapse id="flush-collapseBrands" visible>
                    <div class="accordion-body text-body pt-0">
                        <div class="search-box search-box-sm">
                            <input type="text" class="form-control bg-light border-0" placeholder="Search Brands..." />
                            <i class="ri-search-line search-icon"></i>
                        </div>
                        <div class="d-flex flex-column gap-2 mt-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="productBrandRadio5" checked />
                                <label class="form-check-label" for="productBrandRadio5">Boat</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="productBrandRadio4" />
                                <label class="form-check-label" for="productBrandRadio4">OnePlus</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="productBrandRadio3" />
                                <label class="form-check-label" for="productBrandRadio3">Realme</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="productBrandRadio2" />
                                <label class="form-check-label" for="productBrandRadio2">Sony</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="productBrandRadio1" checked />
                                <label class="form-check-label" for="productBrandRadio1">JBL</label>
                            </div>
                        </div>
                    </div>
                </b-collapse>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingDiscount">
                    <button class="accordion-button bg-transparent shadow-none collapsed" type="button" v-b-toggle.flush-collapseDiscount>
                        <span class="text-muted text-uppercase fs-12 fw-medium">Discount</span>
                    </button>
                </h2>
                <b-collapse id="flush-collapseDiscount">
                    <div class="accordion-body text-body pt-1">
                        <div class="d-flex flex-column gap-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="productdiscountRadio6" />
                                <label class="form-check-label" for="productdiscountRadio6">
                                    50% or more
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="productdiscountRadio5" />
                                <label class="form-check-label" for="productdiscountRadio5">
                                    40% or more
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="productdiscountRadio4" />
                                <label class="form-check-label" for="productdiscountRadio4">
                                    30% or more
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="productdiscountRadio3" checked />
                                <label class="form-check-label" for="productdiscountRadio3">
                                    20% or more
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="productdiscountRadio2" />
                                <label class="form-check-label" for="productdiscountRadio2">
                                    10% or more
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="productdiscountRadio1" />
                                <label class="form-check-label" for="productdiscountRadio1">
                                    Less than 10%
                                </label>
                            </div>
                        </div>
                    </div>
                </b-collapse>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingRating">
                    <button class="accordion-button bg-transparent shadow-none collapsed" type="button" v-b-toggle.flush-collapseRating>
                        <span class="text-muted text-uppercase fs-12 fw-medium">Rating</span>
                    </button>
                </h2>

                <b-collapse id="flush-collapseRating">
                    <div class="accordion-body text-body">
                        <div class="d-flex flex-column gap-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="productratingRadio4" checked />
                                <label class="form-check-label" for="productratingRadio4">
                        <span class="text-muted">
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star"></i>
                        </span>
                                    4 & Above
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="productratingRadio3" />
                                <label class="form-check-label" for="productratingRadio3">
                        <span class="text-muted">
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star"></i>
                          <i class="mdi mdi-star"></i>
                        </span>
                                    3 & Above
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="productratingRadio2" />
                                <label class="form-check-label" for="productratingRadio2">
                        <span class="text-muted">
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star"></i>
                          <i class="mdi mdi-star"></i>
                          <i class="mdi mdi-star"></i>
                        </span>
                                    2 & Above
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="productratingRadio1" />
                                <label class="form-check-label" for="productratingRadio1">
                        <span class="text-muted">
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star"></i>
                          <i class="mdi mdi-star"></i>
                          <i class="mdi mdi-star"></i>
                          <i class="mdi mdi-star"></i>
                        </span>
                                    1
                                </label>
                            </div>
                        </div>
                    </div>
                </b-collapse>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingRating">
                    <button class="accordion-button bg-transparent shadow-none collapsed" type="button" v-b-toggle.flush-collapseRating>
                        <span class="text-muted text-uppercase fs-12 fw-medium">Rating</span>
                    </button>
                </h2>

                <b-collapse id="flush-collapseRating">
                    <div class="accordion-body text-body">
                        <div class="d-flex flex-column gap-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="productratingRadio4" checked />
                                <label class="form-check-label" for="productratingRadio4">
                        <span class="text-muted">
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star"></i>
                        </span>
                                    4 & Above
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="productratingRadio3" />
                                <label class="form-check-label" for="productratingRadio3">
                        <span class="text-muted">
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star"></i>
                          <i class="mdi mdi-star"></i>
                        </span>
                                    3 & Above
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="productratingRadio2" />
                                <label class="form-check-label" for="productratingRadio2">
                        <span class="text-muted">
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star"></i>
                          <i class="mdi mdi-star"></i>
                          <i class="mdi mdi-star"></i>
                        </span>
                                    2 & Above
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="productratingRadio1" />
                                <label class="form-check-label" for="productratingRadio1">
                        <span class="text-muted">
                          <i class="mdi mdi-star text-warning"></i>
                          <i class="mdi mdi-star"></i>
                          <i class="mdi mdi-star"></i>
                          <i class="mdi mdi-star"></i>
                          <i class="mdi mdi-star"></i>
                        </span>
                                    1
                                </label>
                            </div>
                        </div>
                    </div>
                </b-collapse>
            </div>
        </div>
    </BCard>
</template>

<style scoped>

</style>