<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- mainCSS -->
    <link rel="stylesheet" href="design/css/styles.css"/>
    <!-- fontCSS -->
    <link rel="stylesheet" href="design/css/font.css"/>
    <!-- BootstrapCSS -->
    <link rel="stylesheet" href="design/css/bootstrap.min.css"/>
    <!-- Slick slider css -->
    <link rel="stylesheet" href="design/css/slick-theme.css"/>
    <link rel="stylesheet" href="design/css/slick.css"/>
    <!--McLaren Font  -->
    <link
        href="https://fonts.googleapis.com/css2?family=McLaren&display=swap"
        rel="stylesheet"
    />
    <title>Categories</title>
</head>
<body>
<div class="CourseListWrapper">
    <div class="navbarWraper">
        <!-- Topbar -->
        <div class="topBar">
            <div class="container">
                <div
                    class="row align-items-center justify-content-between px-2 px-sm-0"
                >
                    <div class="d-flex logoWrapper">
                        <div class="logo d-lg-block d-none">
                            <a class="" href="/">
                                <img src="design/img/navbar/Logo.svg" alt="logo"/>
                            </a>
                        </div>
                        <div class="contactWrapper d-flex align-items-md-center">
                            <div class="contactInfo phoneNo">
                                <a href="tel:+143-52-9933631" class="d-flex"
                                ><img src="design/img/navbar/telephone.svg" class="mr-2"/>
                                    +143-52-9933631</a
                                >
                            </div>
                            <div class="contactInfo email">
                                <a class="d-flex" href="mailTo:academy@example.com"
                                ><img src="design/img/navbar/envelope.svg" class="mr-2"/>
                                    academy@example.com</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="languageSelector">
                        <div class="dropdown">
                            <a
                                class="btn dropdown-toggle"
                                type="button"
                                id="dropdownMenuButton"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                English
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="dropdownMenuButton"
                            >
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- NaBar -->
        <div class="navigationBar">
            <div class="container px-0">
                <nav class="navbar navbar-expand-lg bg-transparent px-sm-0 px-2">
                    <a class="d-lg-none d-block" href="/">
                        <img src="design/img/navbar/Logo.svg" alt="logo"/>
                    </a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                <span class="navbar-toggler-icon">
                  <img src="design/img/navbar/menuBtn.svg" alt="inoura"/>
                </span>
                    </button>

                    <div
                        class="collapse navbar-collapse align-lg-baseline"
                        id="navbarSupportedContent"
                    >
                        <ul class="navbar-nav mr-auto navbarContent">
                            <li class="nav-item active">
                                <a class="nav-link pl-0" href="/">Academy of Inoura</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/design/school') }}"
                                >School of Inoura
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="navbarDropdown"
                                    role="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                    All Courses
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <img
                                    src="design/img/navbar/search.svg"
                                    class="seachBtn"
                                    alt="search"
                                />
                            </li>
                        </ul>
                        <form class="form-inline mt-2 mb-4 mt-lg-0 mb-lg-0 navbarBtn">
                            <a href="#">
                                <img src="design/img/navbar/handbag.svg" alt="inoura"/>
                            </a>
                            <a>
                                <button class="btn contactUsBtn" type="submit">
                                    Create an account
                                </button>
                            </a>
                            <a>
                                <button class="btn loginBtn" type="submit">Login</button>
                            </a>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- breadCrumb -->
    <div class="breadCrumbWrap">
        <div class="container px-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Courses
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="courseSection">
        <div class="container px-0">
            <div class="heading align-items-center">
                <img src="design/img/courseList/img.svg" alt="inoura Course"/>
                <h2>Courses</h2>
            </div>
            <div class="row">
                <div class="allCourseSideBar courseListSideBar">
                    <nav>
                        <div class="accordion" id="sidebardropdown">
                            <div class="sideBarContent">
                                <button
                                    class="btn accordionBtn d-flex justify-content-between"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseOne"
                                    aria-expanded="true"
                                    aria-controls="collapseOne"
                                >
                                    <h6>Categories</h6>
                                    <img src="design/img/courseList/downIcon.svg"/>
                                </button>

                                <div
                                    id="collapseOne"
                                    class="collapse show"
                                    aria-labelledby="headingOne"
                                    data-parent="#sidebardropdown"
                                >
                                    <div class="accordionBody">
                                        <div class="checkList">
                                            <div class="checkWrapper">
                                                <div class="form-check form-check-inline mr-0">
                                                    <div class="checkboxWrap">
                                                        <input
                                                            class="form-check-input m-0"
                                                            type="checkbox"
                                                            id="allCategory"
                                                            value="option1"
                                                        />
                                                    </div>
                                                    <label class="form-check-label" for="allCategory"
                                                    >Categories</label
                                                    >
                                                </div>
                                                <p class="cousreItem">5</p>
                                            </div>
                                        </div>
                                        <div class="checkList">
                                            <div class="checkWrapper">
                                                <div class="form-check form-check-inline mr-0">
                                                    <div class="checkboxWrap">
                                                        <input
                                                            class="form-check-input m-0"
                                                            type="checkbox"
                                                            id="allCategory"
                                                            value="option1"
                                                        />
                                                    </div>
                                                    <label class="form-check-label" for="allCategory"
                                                    >Business</label
                                                    >
                                                </div>
                                                <p class="cousreItem">5</p>
                                            </div>
                                        </div>
                                        <div class="checkList">
                                            <div class="checkWrapper">
                                                <div class="form-check form-check-inline mr-0">
                                                    <div class="checkboxWrap">
                                                        <input
                                                            class="form-check-input m-0"
                                                            type="checkbox"
                                                            id="allCategory"
                                                            value="option1"
                                                        />
                                                    </div>
                                                    <label class="form-check-label" for="allCategory"
                                                    >Wellbeing</label
                                                    >
                                                </div>
                                                <p class="cousreItem">5</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sideBarContent">
                                <button
                                    class="btn accordionBtn d-flex justify-content-between"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapsePrice"
                                    aria-expanded="true"
                                    aria-controls="collapsePrice"
                                >
                                    <h6>Price</h6>
                                    <img src="design/img/courseList/downIcon.svg"/>
                                </button>

                                <div
                                    id="collapsePrice"
                                    class="collapse show"
                                    aria-labelledby="headingOne"
                                    data-parent="#sidebardropdown"
                                >
                                    <div class="accordionBody">
                                        <div class="checkList">
                                            <div class="checkWrapper">
                                                <div class="form-check form-check-inline mr-0">
                                                    <div class="checkboxWrap">
                                                        <input
                                                            class="form-check-input m-0"
                                                            type="checkbox"
                                                            id="allCategory"
                                                            value="option1"
                                                        />
                                                    </div>
                                                    <label class="form-check-label" for="allCategory"
                                                    >Categories</label
                                                    >
                                                </div>
                                                <p class="cousreItem">5</p>
                                            </div>
                                        </div>
                                        <div class="checkList">
                                            <div class="checkWrapper">
                                                <div class="form-check form-check-inline mr-0">
                                                    <div class="checkboxWrap">
                                                        <input
                                                            class="form-check-input m-0"
                                                            type="checkbox"
                                                            id="allCategory"
                                                            value="option1"
                                                        />
                                                    </div>
                                                    <label class="form-check-label" for="allCategory"
                                                    >Business</label
                                                    >
                                                </div>
                                                <p class="cousreItem">5</p>
                                            </div>
                                        </div>
                                        <div class="checkList">
                                            <div class="checkWrapper">
                                                <div class="form-check form-check-inline mr-0">
                                                    <div class="checkboxWrap">
                                                        <input
                                                            class="form-check-input m-0"
                                                            type="checkbox"
                                                            id="allCategory"
                                                            value="option1"
                                                        />
                                                    </div>
                                                    <label class="form-check-label" for="allCategory"
                                                    >Wellbeing</label
                                                    >
                                                </div>
                                                <p class="cousreItem">5</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sideBarContent">
                                <button
                                    class="btn accordionBtn d-flex justify-content-between"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseLanguage"
                                    aria-expanded="true"
                                    aria-controls="collapseLanguage"
                                >
                                    <h6>Language</h6>
                                    <img src="design/img/courseList/downIcon.svg"/>
                                </button>

                                <div
                                    id="collapseLanguage"
                                    class="collapse show"
                                    aria-labelledby="headingOne"
                                    data-parent="#sidebardropdown"
                                >
                                    <div class="accordionBody">
                                        <div class="checkList">
                                            <div class="checkWrapper">
                                                <div class="form-check form-check-inline mr-0">
                                                    <div class="checkboxWrap">
                                                        <input
                                                            class="form-check-input m-0"
                                                            type="checkbox"
                                                            id="allCategory"
                                                            value="option1"
                                                        />
                                                    </div>
                                                    <label class="form-check-label" for="allCategory"
                                                    >Categories</label
                                                    >
                                                </div>
                                                <p class="cousreItem">5</p>
                                            </div>
                                        </div>
                                        <div class="checkList">
                                            <div class="checkWrapper">
                                                <div class="form-check form-check-inline mr-0">
                                                    <div class="checkboxWrap">
                                                        <input
                                                            class="form-check-input m-0"
                                                            type="checkbox"
                                                            id="allCategory"
                                                            value="option1"
                                                        />
                                                    </div>
                                                    <label class="form-check-label" for="allCategory"
                                                    >Business</label
                                                    >
                                                </div>
                                                <p class="cousreItem">5</p>
                                            </div>
                                        </div>
                                        <div class="checkList">
                                            <div class="checkWrapper">
                                                <div class="form-check form-check-inline mr-0">
                                                    <div class="checkboxWrap">
                                                        <input
                                                            class="form-check-input m-0"
                                                            type="checkbox"
                                                            id="allCategory"
                                                            value="option1"
                                                        />
                                                    </div>
                                                    <label class="form-check-label" for="allCategory"
                                                    >Wellbeing</label
                                                    >
                                                </div>
                                                <p class="cousreItem">5</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sideBarContent">
                                <button
                                    class="btn accordionBtn d-flex justify-content-between"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseRatings"
                                    aria-expanded="true"
                                    aria-controls="collapseRatings"
                                >
                                    <h6>Ratings</h6>
                                    <img src="design/img/courseList/downIcon.svg"/>
                                </button>

                                <div
                                    id="collapseRatings"
                                    class="collapse show"
                                    aria-labelledby="headingOne"
                                    data-parent="#sidebardropdown"
                                >
                                    <div class="accordionBody">
                                        <div class="checkList">
                                            <div class="checkWrapper">
                                                <div class="form-check form-check-inline mr-0">
                                                    <div class="checkboxWrap">
                                                        <input
                                                            class="form-check-input m-0"
                                                            type="checkbox"
                                                            id="allCategory"
                                                            value="option1"
                                                        />
                                                    </div>
                                                    <label class="form-check-label" for="allCategory"
                                                    >Categories</label
                                                    >
                                                </div>
                                                <p class="cousreItem">5</p>
                                            </div>
                                        </div>
                                        <div class="checkList">
                                            <div class="checkWrapper">
                                                <div class="form-check form-check-inline mr-0">
                                                    <div class="checkboxWrap">
                                                        <input
                                                            class="form-check-input m-0"
                                                            type="checkbox"
                                                            id="allCategory"
                                                            value="option1"
                                                        />
                                                    </div>
                                                    <label class="form-check-label" for="allCategory"
                                                    >Business</label
                                                    >
                                                </div>
                                                <p class="cousreItem">5</p>
                                            </div>
                                        </div>
                                        <div class="checkList">
                                            <div class="checkWrapper">
                                                <div class="form-check form-check-inline mr-0">
                                                    <div class="checkboxWrap">
                                                        <input
                                                            class="form-check-input m-0"
                                                            type="checkbox"
                                                            id="allCategory"
                                                            value="option1"
                                                        />
                                                    </div>
                                                    <label class="form-check-label" for="allCategory"
                                                    >Wellbeing</label
                                                    >
                                                </div>
                                                <p class="cousreItem">5</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="coursesCardList">
                    <div class="changeCategories">
                        <div class="listTabing">
                            <div class="listing">
                                <a href="{{ url('/all-courses-list') }}">
                                <img src="design/img/courseList/list.svg"/>
                                </a>
                            </div>
                            <div class="categoriesGrid">
                                <a href="{{ url('/all-courses-grid') }}">
                                <img src="design/img/courseList/grid.svg"/>
                                </a>
                            </div>
                        </div>
                        <div class="listTabing">
                            <div class="search">
                                <img src="design/img/courseList/search.svg"/>
                            </div>
                            <div class="newlyPublished">
                                <div class="dropdown">
                                    <a
                                        class="btn dropdown-toggle"
                                        type="button"
                                        id="dropdownMenuButton"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Newly published
                                    </a>
                                    <div
                                        class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="dropdownMenuButton"
                                    >
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#"
                                        >Something else here</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach($webinars as $webinar)
                        <div>
                            <div class="card courseListCard">
                                <div class="cardImgWrap">
                                    <button class="btn tag">Intermediate</button>
                                    <div class="favourite">
                                        <img src="design/img/courseList/heart.svg"/>
                                    </div>
                                    <img
                                        src="{{ $webinar->getImage() }}"
                                        alt="{{ $webinar->title }}"
                                        class="card-img-top cardImg"
                                    />
                                </div>
                                <div class="card-body">
                                    <div class="cardData">
                                        <h3 class="card-title">
                                            {{ $webinar->title }}
                                        </h3>
                                        <p class="card-text">
                                            {{ (strip_tags($webinar->getDescriptionAttribute())) }}
                                        </p>
                                    </div>
                                    <div class="ratingContent">
                                        <div class="rating">
                                            <p class="rate">{{ $webinar->getRate() }}</p>
                                            <img src="design/img/topCourses/starFill.svg" alt="starFill"/>
                                            <p class="reviews">{{ count($webinar->reviews) }}</p>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img
                                                    src="design/img/topCourses/cardBtn.svg"
                                                    alt="btn inoura"
                                                />
                                            </a>
                                        </div>
                                    </div>
                                    <hr class="line"/>
                                    <div class="pricingContent">
                                        <div class="pricing">
                                            @if(!empty($isRewardCourses) and !empty($webinar->points))
                                                <p class="price">{{ $webinar->points }} {{ trans('update.points') }}</p>
                                            @elseif(!empty($webinar->price) and $webinar->price > 0)
                                                @if($webinar->bestTicket() < $webinar->price)
                                                    <p class="price">{{ handlePrice($webinar->bestTicket(), true, true, false, null, true) }}</p>
                                                    <p class="oldPrice">{{ handlePrice($webinar->price, true, true, false, null, true) }}</p>
                                                @else
                                                    <p class="price">{{ handlePrice($webinar->price, true, true, false, null, true) }}</p>
                                                @endif
                                            @else
                                                <p class="price">{{ trans('public.free') }}</p>
                                            @endif
                                        </div>
                                        <div class="timeWrapper">
                                            <img src="design/img/topCourses/clock.svg" alt="icon"/>
                                            <p class="time mb-0">{{ convertMinutesToHourAndMinute($webinar->duration) }} {{ trans('home.hours') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="paginationWrap mt-4">
                {{ $webinars->appends(request()->input())->links('vendor.pagination.panel') }}
            </div>
        </div>
    </div>
</div>
<!-- jquery -->
<script src="design/js/jquery.js"></script>

<!-- bootstrap js -->
<script src="design/js/bootstrap.bundle.min.js"></script>
<!-- slicks slider -->
<script src="design/js/slick.min.js"></script>
<!-- custom js -->
<script src="design/js/index.js"></script>
</body>
</html>
