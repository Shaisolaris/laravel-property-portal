<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- mainCSS -->
    <link rel="stylesheet" href="css/styles.css" />
    <!-- fontCSS -->
    <link rel="stylesheet" href="css/font.css" />
    <!-- BootstrapCSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Slick slider css -->
    <link rel="stylesheet" href="css/slick-theme.css" />
    <link rel="stylesheet" href="css/slick.css" />
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
                                <img src="img/navbar/Logo.svg" alt="logo" />
                            </a>
                        </div>
                        <div class="contactWrapper d-flex align-items-md-center">
                            <div class="contactInfo phoneNo">
                                <a href="tel:+143-52-9933631" class="d-flex"
                                ><img src="img/navbar/telephone.svg" class="mr-2" />
                                    +143-52-9933631</a
                                >
                            </div>
                            <div class="contactInfo email">
                                <a class="d-flex" href="mailTo:academy@example.com"
                                ><img src="img/navbar/envelope.svg" class="mr-2" />
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
                        <img src="img/navbar/Logo.svg" alt="logo" />
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
                  <img src="img/navbar/menuBtn.svg" alt="inoura" />
                </span>
                    </button>

                    <div
                        class="collapse navbar-collapse align-lg-baseline"
                        id="navbarSupportedContent"
                    >
                        <ul class="navbar-nav mr-auto navbarContent">
                            <li class="nav-item active">
                                <a class="nav-link pl-0" href="{{ url('/design/school') }}">Explore School of Inora</a>
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
                                    src="img/navbar/search.svg"
                                    class="seachBtn"
                                    alt="search"
                                />
                            </li>
                        </ul>
                        <form class="form-inline mt-2 mb-4 mt-lg-0 mb-lg-0 navbarBtn">
                            <a href="{{ url('/design/my-courses') }}" class="profileDetail">My Courses</a>

                            <a href="#" class="navIcons">
                                <img src="img/navbar/handbag.svg" alt="inoura" />
                            </a>

                            <a href="#" class="navIcons">
                                <img src="img/navbar/heart.svg" alt="inoura" />
                            </a>
                            <a href="#" class="navIcons">
                                <img src="img/navbar/bell.svg" alt="inoura" />
                            </a>
                            <a href="{{ url('/design/student-dashboard') }}" class="profile">
                                <img src="img/navbar/profileImg.svg" alt="inoura" />
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
                <ol class="breadcrumb pl-3 row_gap_20">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Academy of Inoura</a></li>
                    <li class="breadcrumb-item">
                        <a href="#">Categories</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Courses
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="courseSection">
        <div class="container px-lg-0">
            <div class="heading align-items-center">
                <img src="img/courseList/img.svg" alt="inoura Course" />
                <h2>Courses</h2>
            </div>
            <div class="d-inline-flex mb-4 sideMenuButton" id="sideMenuButton">
                <div class="btn btn-light">
                    <img src="img/starsIcon/menusidebar.svg" alt="inoura" />
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="courseListSideBar" id="sidebar">
                    <nav>
                        <div
                            class="d-flex justify-content-end mb-2 closeBtn"
                            id="closeBtn"
                        >
                            <div class="btn btn-light">
                                <img src="img/categoriesPage/close.svg" alt="inoura" />
                            </div>
                        </div>
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
                                    <img src="img/courseList/downIcon.svg" />
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
                                                    >All category</label
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
                                                            id="allCategory2"
                                                            value="option1"
                                                        />
                                                    </div>
                                                    <label class="form-check-label" for="allCategory2"
                                                    >Web Design</label
                                                    >
                                                </div>
                                                <p class="cousreItem">5</p>
                                            </div>
                                            <ul class="subCheckboxList">
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList1"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList1"
                                                            >Responsive Design</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList2"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList2"
                                                            >WordPress Theme</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList3"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList3"
                                                            >Bootstrap</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList4"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList4"
                                                            >HTML & CSS</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sideBarContent">
                                <button
                                    class="btn accordionBtn d-flex justify-content-between"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseTwo"
                                    aria-expanded="true"
                                    aria-controls="collapseOne"
                                >
                                    <h6>Categories</h6>
                                    <img src="img/courseList/downIcon.svg" />
                                </button>

                                <div
                                    id="collapseTwo"
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
                                                    >All category</label
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
                                                            id="allCategory2"
                                                            value="option1"
                                                        />
                                                    </div>
                                                    <label class="form-check-label" for="allCategory2"
                                                    >Web Design</label
                                                    >
                                                </div>
                                                <p class="cousreItem">5</p>
                                            </div>
                                            <ul class="subCheckboxList">
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList1"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList1"
                                                            >Responsive Design</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList2"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList2"
                                                            >WordPress Theme</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList3"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList3"
                                                            >Bootstrap</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList4"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList4"
                                                            >HTML & CSS</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sideBarContent">
                                <button
                                    class="btn accordionBtn d-flex justify-content-between"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseFour"
                                    aria-expanded="true"
                                    aria-controls="collapseFour"
                                >
                                    <h6>Categories</h6>
                                    <img src="img/courseList/downIcon.svg" />
                                </button>

                                <div
                                    id="collapseFour"
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
                                                    >All category</label
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
                                                            id="allCategory2"
                                                            value="option1"
                                                        />
                                                    </div>
                                                    <label class="form-check-label" for="allCategory2"
                                                    >Web Design</label
                                                    >
                                                </div>
                                                <p class="cousreItem">5</p>
                                            </div>
                                            <ul class="subCheckboxList">
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList1"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList1"
                                                            >Responsive Design</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList2"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList2"
                                                            >WordPress Theme</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList3"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList3"
                                                            >Bootstrap</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList4"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList4"
                                                            >HTML & CSS</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sideBarContent">
                                <button
                                    class="btn accordionBtn d-flex justify-content-between"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseThree"
                                    aria-expanded="true"
                                    aria-controls="collapseThree"
                                >
                                    <h6>Categories</h6>
                                    <img src="img/courseList/downIcon.svg" />
                                </button>

                                <div
                                    id="collapseThree"
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
                                                    >All category</label
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
                                                            id="allCategory2"
                                                            value="option1"
                                                        />
                                                    </div>
                                                    <label class="form-check-label" for="allCategory2"
                                                    >Web Design</label
                                                    >
                                                </div>
                                                <p class="cousreItem">5</p>
                                            </div>
                                            <ul class="subCheckboxList">
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList1"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList1"
                                                            >Responsive Design</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList2"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList2"
                                                            >WordPress Theme</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList3"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList3"
                                                            >Bootstrap</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList4"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList4"
                                                            >HTML & CSS</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                            </ul>
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
                            <a href="{{ url('/design/course-list') }}">
                                <div class="listing">
                                    <img src="img/courseList/list.svg" />
                                </div>
                            </a>
                            <a href="{{ url('/design/course-card') }}">
                                <div class="categoriesGrid">
                                    <img src="img/courseList/grid.svg" />
                                </div>
                            </a>
                        </div>
                        <div class="listTabing">
                            <div class="search">
                                <img src="img/courseList/search.svg" />
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
                    <div class="cardListWrap">
                        <div class="card courseListCard">
                            <div class="cardImgWrap">
                                <button class="btn tag">Intermediate</button>
                                <div class="favourite">
                                    <img src="img/courseList/heart.svg" />
                                </div>
                                <img
                                    src="img/courseList/cardImg.png"
                                    alt="inoura"
                                    class="card-img-top cardImg"
                                />
                            </div>
                            <div class="card-body">
                                <div class="cardData">
                                    <a href="{{ url('/design/course-details') }}">
                                        <h3 class="card-title">
                                            WordPress Theme Development with Bootstrap
                                        </h3>
                                    </a>
                                    <p class="card-text">
                                        Discover a world of learning opportunities through our
                                        upcoming courses, where industry experts and thought
                                        leaders will guide you in acquiring new expertise,
                                        expanding your horizons, and reaching your full
                                        potential.
                                    </p>
                                </div>
                                <div class="ratingContent">
                                    <div class="rating">
                                        <p class="rate">4</p>
                                        <img src="img/topCourses/starFill.svg" alt="starFill" />
                                        <p class="reviews">268 Reviews</p>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <img
                                                src="img/topCourses/cardBtn.svg"
                                                alt="btn inoura"
                                            />
                                        </a>
                                    </div>
                                </div>
                                <hr class="line" />
                                <div class="pricingContent">
                                    <div class="pricing">
                                        <p class="price">$10</p>
                                        <p class="oldPrice">$11.99</p>
                                    </div>
                                    <div class="timeWrapper">
                                        <img src="img/topCourses/clock.svg" alt="icon" />
                                        <p class="time mb-0">24:12:22</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cardListWrap">
                        <div class="card courseListCard">
                            <div class="cardImgWrap">
                                <button class="btn tag">Intermediate</button>
                                <div class="favourite">
                                    <img src="img/courseList/heart.svg" />
                                </div>
                                <img
                                    src="img/courseList/cardImg.png"
                                    alt="inoura"
                                    class="card-img-top cardImg"
                                />
                            </div>
                            <div class="card-body">
                                <div class="cardData">
                                    <a href="{{ url('/design/course-details') }}">
                                        <h3 class="card-title">
                                            WordPress Theme Development with Bootstrap
                                        </h3>
                                    </a>
                                    <p class="card-text">
                                        Discover a world of learning opportunities through our
                                        upcoming courses, where industry experts and thought
                                        leaders will guide you in acquiring new expertise,
                                        expanding your horizons, and reaching your full
                                        potential.
                                    </p>
                                </div>
                                <div class="ratingContent">
                                    <div class="rating">
                                        <p class="rate">4</p>
                                        <img src="img/topCourses/starFill.svg" alt="starFill" />
                                        <p class="reviews">268 Reviews</p>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <img
                                                src="img/topCourses/cardBtn.svg"
                                                alt="btn inoura"
                                            />
                                        </a>
                                    </div>
                                </div>
                                <hr class="line" />
                                <div class="pricingContent">
                                    <div class="pricing">
                                        <p class="price">$10</p>
                                        <p class="oldPrice">$11.99</p>
                                    </div>
                                    <div class="timeWrapper">
                                        <img src="img/topCourses/clock.svg" alt="icon" />
                                        <p class="time mb-0">24:12:22</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cardListWrap">
                        <div class="card courseListCard">
                            <div class="cardImgWrap">
                                <button class="btn tag">Intermediate</button>
                                <div class="favourite">
                                    <img src="img/courseList/heart.svg" />
                                </div>
                                <img
                                    src="img/courseList/cardImg.png"
                                    alt="inoura"
                                    class="card-img-top cardImg"
                                />
                            </div>
                            <div class="card-body">
                                <div class="cardData">
                                    <a href="{{ url('/design/course-details') }}">
                                        <h3 class="card-title">
                                            WordPress Theme Development with Bootstrap
                                        </h3>
                                    </a>
                                    <p class="card-text">
                                        Discover a world of learning opportunities through our
                                        upcoming courses, where industry experts and thought
                                        leaders will guide you in acquiring new expertise,
                                        expanding your horizons, and reaching your full
                                        potential.
                                    </p>
                                </div>
                                <div class="ratingContent">
                                    <div class="rating">
                                        <p class="rate">4</p>
                                        <img src="img/topCourses/starFill.svg" alt="starFill" />
                                        <p class="reviews">268 Reviews</p>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <img
                                                src="img/topCourses/cardBtn.svg"
                                                alt="btn inoura"
                                            />
                                        </a>
                                    </div>
                                </div>
                                <hr class="line" />
                                <div class="pricingContent">
                                    <div class="pricing">
                                        <p class="price">$10</p>
                                        <p class="oldPrice">$11.99</p>
                                    </div>
                                    <div class="timeWrapper">
                                        <img src="img/topCourses/clock.svg" alt="icon" />
                                        <p class="time mb-0">24:12:22</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cardListWrap">
                        <div class="card courseListCard">
                            <div class="cardImgWrap">
                                <button class="btn tag">Intermediate</button>
                                <div class="favourite">
                                    <img src="img/courseList/heart.svg" />
                                </div>
                                <img
                                    src="img/courseList/cardImg.png"
                                    alt="inoura"
                                    class="card-img-top cardImg"
                                />
                            </div>
                            <div class="card-body">
                                <div class="cardData">
                                    <a href="{{ url('/design/course-details') }}">
                                        <h3 class="card-title">
                                            WordPress Theme Development with Bootstrap
                                        </h3>
                                    </a>
                                    <p class="card-text">
                                        Discover a world of learning opportunities through our
                                        upcoming courses, where industry experts and thought
                                        leaders will guide you in acquiring new expertise,
                                        expanding your horizons, and reaching your full
                                        potential.
                                    </p>
                                </div>
                                <div class="ratingContent">
                                    <div class="rating">
                                        <p class="rate">4</p>
                                        <img src="img/topCourses/starFill.svg" alt="starFill" />
                                        <p class="reviews">268 Reviews</p>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <img
                                                src="img/topCourses/cardBtn.svg"
                                                alt="btn inoura"
                                            />
                                        </a>
                                    </div>
                                </div>
                                <hr class="line" />
                                <div class="pricingContent">
                                    <div class="pricing">
                                        <p class="price">$10</p>
                                        <p class="oldPrice">$11.99</p>
                                    </div>
                                    <div class="timeWrapper">
                                        <img src="img/topCourses/clock.svg" alt="icon" />
                                        <p class="time mb-0">24:12:22</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cardListWrap">
                        <div class="card courseListCard">
                            <div class="cardImgWrap">
                                <button class="btn tag">Intermediate</button>
                                <div class="favourite">
                                    <img src="img/courseList/heart.svg" />
                                </div>
                                <img
                                    src="img/courseList/cardImg.png"
                                    alt="inoura"
                                    class="card-img-top cardImg"
                                />
                            </div>
                            <div class="card-body">
                                <div class="cardData">
                                    <a href="{{ url('/design/course-details') }}">
                                        <h3 class="card-title">
                                            WordPress Theme Development with Bootstrap
                                        </h3>
                                    </a>
                                    <p class="card-text">
                                        Discover a world of learning opportunities through our
                                        upcoming courses, where industry experts and thought
                                        leaders will guide you in acquiring new expertise,
                                        expanding your horizons, and reaching your full
                                        potential.
                                    </p>
                                </div>
                                <div class="ratingContent">
                                    <div class="rating">
                                        <p class="rate">4</p>
                                        <img src="img/topCourses/starFill.svg" alt="starFill" />
                                        <p class="reviews">268 Reviews</p>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <img
                                                src="img/topCourses/cardBtn.svg"
                                                alt="btn inoura"
                                            />
                                        </a>
                                    </div>
                                </div>
                                <hr class="line" />
                                <div class="pricingContent">
                                    <div class="pricing">
                                        <p class="price">$10</p>
                                        <p class="oldPrice">$11.99</p>
                                    </div>
                                    <div class="timeWrapper">
                                        <img src="img/topCourses/clock.svg" alt="icon" />
                                        <p class="time mb-0">24:12:22</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="paginationWrap mt-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"
                            ><img src="img/courseList/arrow-right-short.svg"
                                /></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- jquery -->
<script src="js/jquery.js"></script>

<!-- bootstrap js -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- slicks slider -->
<script src="js/slick.min.js"></script>
<!-- custom js -->
<script src="js/index.js"></script>
</body>
</html>
