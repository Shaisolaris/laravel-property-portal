<script setup>

const toggleHamburgerMenu = () => {
    const windowSize = document.documentElement.clientWidth;
    let layoutType = document.documentElement.getAttribute("data-layout");

    document.documentElement.setAttribute("data-sidebar-visibility", "show");
    let visibilityType = document.documentElement.getAttribute("data-sidebar-visibility");

    if (windowSize > 767)
        document.querySelector(".hamburger-icon").classList.toggle("open");

    if (
        document.documentElement.getAttribute("data-layout") === "horizontal"
    ) {
        document.body.classList.contains("menu") ?
            document.body.classList.remove("menu") :
            document.body.classList.add("menu");
    }

    if (visibilityType === "show" && (layoutType === "vertical" || layoutType === "semibox")) {
        if (windowSize < 1025 && windowSize > 767) {
            document.body.classList.remove("vertical-sidebar-enable");
            document.documentElement.getAttribute("data-sidebar-size") === "sm" ?
                document.documentElement.setAttribute("data-sidebar-size", "") :
                document.documentElement.setAttribute("data-sidebar-size", "sm");
        } else if (windowSize > 1025) {
            document.body.classList.remove("vertical-sidebar-enable");
            document.documentElement.getAttribute("data-sidebar-size") === "lg" ?
                document.documentElement.setAttribute("data-sidebar-size", "sm") :
                document.documentElement.setAttribute("data-sidebar-size", "lg");
        } else if (windowSize <= 767) {
            document.body.classList.add("vertical-sidebar-enable");
            document.documentElement.setAttribute("data-sidebar-size", "lg");
        }
    }

    if (document.documentElement.getAttribute("data-layout") === "twocolumn") {
        document.body.classList.contains("twocolumn-panel") ?
            document.body.classList.remove("twocolumn-panel") :
            document.body.classList.add("twocolumn-panel");
    }
}


onMounted(() => {
    document.addEventListener("scroll", function () {
        const pageTopBar = document.getElementById("page-topbar");

        if (pageTopBar) {
            document.body.scrollTop >= 50 || document.documentElement.scrollTop >= 50 ? pageTopBar.classList.add(
                "topbar-shadow") : pageTopBar.classList.remove("topbar-shadow");
        }
    });

    if (document.getElementById("topnav-hamburger-icon"))
        document.getElementById("topnav-hamburger-icon").addEventListener("click", toggleHamburgerMenu);

    let backToTop = document.getElementById("back-to-top");

    if (backToTop) {
        backToTop = document.getElementById("back-to-top");
        window.onscroll = function () {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                backToTop.style.display = "block";
            } else {
                backToTop.style.display = "none";
            }
        };
    }

    window.addEventListener('scroll', function (e) {
        e.preventDefault();
        const navbar = document.getElementById("navbar");

        if (navbar) {
            if (document.body.scrollTop >= 50 || document.documentElement.scrollTop >= 50) {
                navbar.classList.add("is-sticky");
            } else {
                navbar.classList.remove("is-sticky");
            }
        }
    });
});
</script>

<template>
    <nav class="navbar navbar-expand-lg navbar-landing fixed-top job-navbar" style="border-bottom: 1px solid #E3DED6" id="navbar">
        <b-container fluid class="custom-container justify-content-between align-items-center">
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
                <LangDropdown />
            </div>
        </b-container>
    </nav>
</template>