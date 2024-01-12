<script>
import { Link } from '@inertiajs/vue3';
import simplebar from "simplebar-vue";
import { layoutMethods } from "~/state/helpers";
import { Autoplay } from "swiper/modules";
import { Swiper, SwiperSlide } from "swiper/vue";
import i18n from "~/i18n";

import us_flag from "@/images/flags/us.svg";
import spain from "@/images/flags/spain.svg";
import germany from "@/images/flags/germany.svg";
import italy from "@/images/flags/italy.svg";
import russia from "@/images/flags/russia.svg";
import china from "@/images/flags/china.svg";
import french from "@/images/flags/french.svg";
import ae from "@/images/flags/ae.svg";

import img1 from "@/images/products/img-1.png";
import img2 from "@/images/products/img-2.png";
import img3 from "@/images/products/img-3.png";
import img4 from "@/images/products/img-4.png";
import img5 from "@/images/products/img-5.png";

/**
 * Nav-bar Component
 */
export default {
    data() {
        return {
            Autoplay,
            languages: [{
                flag: us_flag,
                language: "en",
                title: "English",
            },
                {
                    flag: spain,
                    language: "sp",
                    title: "Española",
                },
                {
                    flag: germany,
                    language: "gr",
                    title: "Deutsche",
                },
                {
                    flag: italy,
                    language: "it",
                    title: "italiana",
                },
                {
                    flag: russia,
                    language: "ru",
                    title: "русский",
                },
                {
                    flag: china,
                    language: "ch",
                    title: "中國人",
                },
                {
                    flag: french,
                    language: "fr",
                    title: "Français",
                },
                {
                    flag: ae,
                    language: "ar",
                    title: "Arabic",
                },
            ],
            cartItems: [
                {
                    id: 1,
                    productImage: img1,
                    productName: "Branded T-Shirts",
                    productLink: "/ecommerce/product-details",
                    quantity: "10 x $32",
                    itemPrice: "320",
                },
                {
                    id: 2,
                    productImage: img2,
                    productName: "Bentwood Chair",
                    productLink: "/ecommerce/product-details",
                    quantity: "5 x $18",
                    itemPrice: "89",
                },
                {
                    id: 3,
                    productImage: img3,
                    productName: "Borosil Paper Cup",
                    productLink: "/ecommerce/product-details",
                    quantity: "3 x $250",
                    itemPrice: "750",
                },
                {
                    id: 4,
                    productImage: img4,
                    productName: "Gray Styled T-Shirt",
                    productLink: "/ecommerce/product-details",
                    quantity: "1 x $1250",
                    itemPrice: "1250",
                },
                {
                    id: 5,
                    productImage: img5,
                    productName: "Stillbird Helmet",
                    productLink: "/ecommerce/product-details",
                    quantity: "2 x $495",
                    itemPrice: "990",
                },
            ],
            lan: i18n.global.locale,
            text: null,
            flag: null,
            value: null,
            myVar: 1,
        };
    },
    components: {
        simplebar,
        Link,
    },

    methods: {
        ...layoutMethods,
        topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        },
        scrollToSection(sectionId) {
            const element = document.getElementById(sectionId);
            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
            }
        },
        toggleHamburgerMenu() {
            var windowSize = document.documentElement.clientWidth;
            let layoutType = document.documentElement.getAttribute("data-layout");

            document.documentElement.setAttribute("data-sidebar-visibility", "show");
            let visiblilityType = document.documentElement.getAttribute("data-sidebar-visibility");

            if (windowSize > 767)
                document.querySelector(".hamburger-icon").classList.toggle("open");

            //For collapse horizontal menu
            if (
                document.documentElement.getAttribute("data-layout") === "horizontal"
            ) {
                document.body.classList.contains("menu") ?
                    document.body.classList.remove("menu") :
                    document.body.classList.add("menu");
            }

            //For collapse vertical menu

            if (visiblilityType === "show" && (layoutType === "vertical" || layoutType === "semibox")) {
                if (windowSize < 1025 && windowSize > 767) {
                    document.body.classList.remove("vertical-sidebar-enable");
                    document.documentElement.getAttribute("data-sidebar-size") == "sm" ?
                        document.documentElement.setAttribute("data-sidebar-size", "") :
                        document.documentElement.setAttribute("data-sidebar-size", "sm");
                } else if (windowSize > 1025) {
                    document.body.classList.remove("vertical-sidebar-enable");
                    document.documentElement.getAttribute("data-sidebar-size") == "lg" ?
                        document.documentElement.setAttribute("data-sidebar-size", "sm") :
                        document.documentElement.setAttribute("data-sidebar-size", "lg");
                } else if (windowSize <= 767) {
                    document.body.classList.add("vertical-sidebar-enable");
                    document.documentElement.setAttribute("data-sidebar-size", "lg");
                }
            }

            //Two column menu
            if (document.documentElement.getAttribute("data-layout") == "twocolumn") {
                document.body.classList.contains("twocolumn-panel") ?
                    document.body.classList.remove("twocolumn-panel") :
                    document.body.classList.add("twocolumn-panel");
            }
        },
        toggleMenu() {
            this.$parent.toggleMenu();
        },
        toggleRightSidebar() {
            this.$parent.toggleRightSidebar();
        },
        initFullScreen() {
            document.body.classList.toggle("fullscreen-enable");
            if (
                !document.fullscreenElement &&
                /* alternative standard method */
                !document.mozFullScreenElement &&
                !document.webkitFullscreenElement
            ) {
                // current working methods
                if (document.documentElement.requestFullscreen) {
                    document.documentElement.requestFullscreen();
                } else if (document.documentElement.mozRequestFullScreen) {
                    document.documentElement.mozRequestFullScreen();
                } else if (document.documentElement.webkitRequestFullscreen) {
                    document.documentElement.webkitRequestFullscreen(
                        Element.ALLOW_KEYBOARD_INPUT
                    );
                }
            } else {
                if (document.cancelFullScreen) {
                    document.cancelFullScreen();
                } else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                } else if (document.webkitCancelFullScreen) {
                    document.webkitCancelFullScreen();
                }
            }
        },
        setLanguage(locale, country, flag) {
            this.lan = locale;
            this.text = country;
            this.flag = flag;
            document.getElementById("header-lang-img").setAttribute("src", flag);
            i18n.global.locale = locale;
        },
        toggleDarkMode() {

            if (document.documentElement.getAttribute("data-bs-theme") == "dark") {
                document.documentElement.setAttribute("data-bs-theme", "light");
            } else {
                document.documentElement.setAttribute("data-bs-theme", "dark");
            }

            const mode = document.documentElement.getAttribute("data-bs-theme")
            this.changeMode({
                mode: mode,
            });
        },
        removeItem(cartItem) {
            this.cartItems = this.cartItems.filter(item => item.id !== cartItem.id)
            this.$emit("cart-item-price", this.cartItems.length);
        },
    },

    computed: {
        calculateTotalPrice() {
            return this.cartItems.reduce((total, item) => total + parseFloat(item.itemPrice), 0).toFixed(2);
        },
    },
    mounted() {
        this.flag = this.$i18n.locale;
        this.languages.forEach((item) => {
            if (item.language == this.flag) {
                document.getElementById("header-lang-img") ? document.getElementById("header-lang-img").setAttribute("src", item.flag) : '';
            }
        });

        document.addEventListener("scroll", function () {
            var pageTopbar = document.getElementById("page-topbar");
            if (pageTopbar) {
                document.body.scrollTop >= 50 || document.documentElement.scrollTop >= 50 ? pageTopbar.classList.add(
                    "topbar-shadow") : pageTopbar.classList.remove("topbar-shadow");
            }
        });
        if (document.getElementById("topnav-hamburger-icon"))
            document.getElementById("topnav-hamburger-icon").addEventListener("click", this.toggleHamburgerMenu);

        let backtoTop = document.getElementById("back-to-top");

        if (backtoTop) {
            backtoTop = document.getElementById("back-to-top");
            window.onscroll = function () {
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    backtoTop.style.display = "block";
                } else {
                    backtoTop.style.display = "none";
                }
            };
        }

        window.addEventListener('scroll', function (ev) {
            ev.preventDefault();
            var navbar = document.getElementById("navbar");
            if (navbar) {
                if (document.body.scrollTop >= 50 || document.documentElement.scrollTop >= 50) {
                    navbar.classList.add("is-sticky");
                } else {
                    navbar.classList.remove("is-sticky");
                }
            }
        });
    },
};
</script>

<template>
    <nav class="navbar navbar-expand-lg navbar-landing fixed-top job-navbar" style="border-bottom: 1px solid #E3DED6" id="navbar">
        <BContainer fluid class="custom-container justify-content-between align-items-center">
            <Link class="navbar-brand" href="/">
                <img src="@/images/logo/logo.svg" class="card-logo card-logo-dark" alt="logo dark" height="35">
                <img src="@/images/logo/logo.svg" class="card-logo card-logo-light" alt="logo light" height="35">
            </Link>
            <div class="d-flex text-dim-gray">
                <div class="d-flex align-items-center me-4">
                    <i class="ri-phone-line align-bottom me-2"></i>
                    <span> +143-52-9933631</span>
                </div>
                <div class="d-flex align-items-center">
                    <i class="ri-mail-line align-bottom me-2"></i>
                    <span>academy@example.com</span>
                </div>
            </div>
            <div class="justify-content-end text-end">
<!--                <BButton  v-b-toggle.navbarSupportedContent class="navbar-toggler py-0 fs-20 text-body" type="button">-->
<!--                    <i class="mdi mdi-menu"></i>-->
<!--                </BButton>-->
            </div>
            <div>
                <BCollapse class="navbar-collapse" id="navbarSupportedContent">
                    <div class="">
                        <BDropdown class="dropdown" variant="ghost-secondary" dropstart
                                   :offset="{ alignmentAxis: 55, crossAxis: 15, mainAxis: -50 }"
                                   toggle-class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle arrow-none"
                                   menu-class="dropdown-menu-end">
                            <template #button-content>
                                {{ lan }}
                            </template>
                            <BLink href="javascript:void(0);" class="dropdown-item notify-item language py-2"
                                   v-for="(entry, key) in languages" :data-lang="entry.language" :title="entry.title"
                                   @click="setLanguage(entry.language, entry.title, entry.flag)" :key="key">
                                <img :src="entry.flag" alt="user-image" class="me-2 rounded" height="18">
                                <span class="align-middle">{{ entry.title }}</span>
                            </BLink>
                        </BDropdown>
                    </div>
                </BCollapse>
            </div>
        </BContainer>
    </nav>
</template>