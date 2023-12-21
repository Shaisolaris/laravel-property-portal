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
<div class="myCoursesDashboard">
    <div class="navbarWraper">
        <!-- Topbar -->
        <div class="topBar">
            <div class="container">
                <div
                    class="row align-items-center justify-content-between px-2 px-sm-0"
                >
                    <div class="d-flex logoWrapper">
                        <div class="logo d-lg-block d-none">
                            <a class="" href="{{ url('/design/academy') }}">
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
                    <a class="d-lg-none d-block" href="{{ url('/design/academy') }}">
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
                                    class="searchBtn"
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
    <div class="courseSection">
        <div class="container px-lg-0">
            <div class="row">
                <div class="col-xl-3 col-lg-12">
                    <div class="card sidebar_Card">
                        <div class="img_Name_Wrapper">
                            <img
                                src="img/dashboard/photo.svg"
                                class="card-img-top"
                                alt="image"
                            />
                            <div class="card-body name_Wrapper">
                                <p class="card-title welcome_Text">Welcome Back</p>
                                <h2 class="card-title name_Text">Jane Dou</h2>
                            </div>
                        </div>

                        <div class="list-group">
                            <a href="{{ url('/design/student-dashboard') }}" class="list-group-item list-group-item-action">
                                <div class="list_Item_Flex">
                                    <div class="list_Image">
                                        <img
                                            src="img/dashboard/layout-sidebar.svg"
                                            alt="dasboard"
                                        />
                                    </div>
                                    <p>Dashboard</p>
                                </div>
                            </a>
                            <a href="{{ url('/design/my-courses') }}" class="list-group-item list-group-item-action">
                                <div class="list_Item_Flex">
                                    <div class="list_Image">
                                        <img
                                            src="img/dashboard/mortarboard.svg"
                                            alt="dasboard"
                                        />
                                    </div>
                                    <p>Courses</p>
                                </div>
                            </a>
                            <a href="{{ url('/design/my-assignments') }}" class="list-group-item list-group-item-action">
                                <div class="list_Item_Flex">
                                    <div class="list_Image">
                                        <img src="img/dashboard/list-task.svg" alt="dasboard" />
                                    </div>
                                    <p>Assignments</p>
                                </div>
                            </a>
                            <a href="{{ url('/design/my-mentor') }}" class="list-group-item list-group-item-action">
                                <div class="list_Item_Flex">
                                    <div class="list_Image">
                                        <img src="img/dashboard/people.svg" alt="dasboard" />
                                    </div>
                                    <p>Mentors</p>
                                </div>
                            </a>
                            <a href="{{ url('/design/messages') }}" class="list-group-item list-group-item-action">
                                <div class="list_Item_Flex">
                                    <div class="list_Image">
                                        <img src="img/dashboard/chat.svg" alt="dasboard" />
                                    </div>
                                    <p>Messages</p>
                                </div>
                            </a>
                            <a href="{{ url('/design/payment') }}" class="list-group-item list-group-item-action">
                                <div class="list_Item_Flex">
                                    <div class="list_Image">
                                        <img
                                            src="img/dashboard/credit-card.svg"
                                            alt="dasboard"
                                        />
                                    </div>
                                    <p>Payments</p>
                                </div>
                            </a>
                            <a href="{{ url('/design/dashboard-settings') }}" class="list-group-item list-group-item-action">
                                <div class="list_Item_Flex">
                                    <div class="list_Image">
                                        <img src="img/dashboard/gear.svg" alt="dasboard" />
                                    </div>
                                    <p>Settings</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-12">
                    <h2>Courses</h2>
                    <div
                        class="d-flex justify-content-between row_gap_20 flex-sm-row flex-column-reverse align-items-center w-100"
                    >
                        <div class="tabbingWrapper">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a
                                        class="nav-link active"
                                        id="pills-all-tab"
                                        data-toggle="pill"
                                        href="#pills-all"
                                        role="tab"
                                        aria-controls="pills-all"
                                        aria-selected="true"
                                    >
                                        All</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        id="pills-activeCard-tab"
                                        data-toggle="pill"
                                        href="#pills-activeCard"
                                        role="tab"
                                        aria-controls="pills-activeCard"
                                        aria-selected="false"
                                    >Active</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        id="pills-courseCompleted-tab"
                                        data-toggle="pill"
                                        href="#pills-courseCompleted"
                                        role="tab"
                                        aria-controls="pills-courseCompleted"
                                        aria-selected="false"
                                    >Completed</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <div class="listTabing d-flex">
                            <a href="{{ url('/design/my-courses') }}">
                                <div class="listing">
                                    <img src="img/courseList/list.svg" />
                                </div>
                            </a>
                            <a href="{{ url('/design/my-courses') }}">
                                <div class="categoriesGrid">
                                    <img src="img/courseList/grid.svg" />
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="courseDetail">
                        <div class="courseOverview">
                            <div class="tabContentWrapper">
                                <div class="tab-content" id="pills-tabContent">
                                    <div
                                        class="tab-pane fade show active"
                                        id="pills-all"
                                        role="tabpanel"
                                        aria-labelledby="pills-all-tab"
                                    >
                                        <div class="tabOverview">
                                            <div class="card courseListCard">
                                                <div class="cardImgWrap">
                                                    <img
                                                        src="img/courseList/cardImg.png"
                                                        alt="inoura"
                                                        class="card-img-top cardImg"
                                                    />
                                                </div>
                                                <div class="card-body">
                                                    <div class="cardData">
                                                        <a href="{{ url('/design/my-courses-course') }}">
                                                            <h3 class="card-title">
                                                                WordPress Theme Development with Bootstrap
                                                            </h3>
                                                        </a>
                                                        <div class="profile d-flex align-items-center">
                                                            <img
                                                                src="img/courseDetail/profilePic.svg"
                                                                alt="inoura"
                                                                class="profilePic"
                                                            />
                                                            <p class="profileName mb-0">by Jane Doe</p>
                                                        </div>
                                                    </div>
                                                    <div class="durationContent">
                                                        <p class="startDate dateStyles">
                                                            Starts: 09 Oct 2023
                                                        </p>

                                                        <p class="endDate dateStyles">
                                                            Ends: 28 Oct 2023
                                                        </p>
                                                    </div>
                                                    <div class="progress myCoureseProgressBar">
                                                        <div
                                                            class="progress-bar"
                                                            style="width: 44%"
                                                            role="progressbar"
                                                            aria-valuenow="44%"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        ></div>
                                                    </div>
                                                    <div class="d-flex tagWrapper">
                                                        <div
                                                            class="tags enrollment d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/star.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>60% done</div>
                                                        </div>
                                                        <div
                                                            class="tags enrollmen d-flex align-items-centert"
                                                        >
                                                            <img
                                                                src="img/courseDetail/collection.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>1/6 sections</div>
                                                        </div>
                                                        <div
                                                            class="tags duration d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/playBtn.svg"
                                                                alt="inoura"
                                                            />
                                                            <div class="time">8/24 lectures</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card courseListCard">
                                                <div class="cardImgWrap">
                                                    <img
                                                        src="img/courseList/cardImg.png"
                                                        alt="inoura"
                                                        class="card-img-top cardImg"
                                                    />
                                                </div>
                                                <div class="card-body">
                                                    <div class="cardData">
                                                        <a href="{{ url('/design/my-courses-course') }}">
                                                            <h3 class="card-title">
                                                                WordPress Theme Development with Bootstrap
                                                            </h3>
                                                        </a>
                                                        <div class="profile d-flex align-items-center">
                                                            <img
                                                                src="img/courseDetail/profilePic.svg"
                                                                alt="inoura"
                                                                class="profilePic"
                                                            />
                                                            <p class="profileName mb-0">by Jane Doe</p>
                                                        </div>
                                                    </div>
                                                    <div class="durationContent">
                                                        <p class="startDate dateStyles">
                                                            Starts: 09 Oct 2023
                                                        </p>

                                                        <p class="endDate mb-0 dateStyles">
                                                            Ends: 28 Oct 2023
                                                        </p>
                                                    </div>
                                                    <div class="progress myCoureseProgressBar">
                                                        <div
                                                            class="progress-bar"
                                                            style="width: 44%"
                                                            role="progressbar"
                                                            aria-valuenow="44%"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        ></div>
                                                    </div>
                                                    <div class="d-flex tagWrapper">
                                                        <div
                                                            class="tags enrollment d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/star.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>60% done</div>
                                                        </div>
                                                        <div
                                                            class="tags enrollmen d-flex align-items-centert"
                                                        >
                                                            <img
                                                                src="img/courseDetail/collection.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>1/6 sections</div>
                                                        </div>
                                                        <div
                                                            class="tags duration d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/playBtn.svg"
                                                                alt="inoura"
                                                            />
                                                            <div class="time">8/24 lectures</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card courseListCard">
                                                <div class="cardImgWrap">
                                                    <img
                                                        src="img/courseList/cardImg.png"
                                                        alt="inoura"
                                                        class="card-img-top cardImg"
                                                    />
                                                </div>
                                                <div class="card-body">
                                                    <div class="cardData">
                                                        <a href="{{ url('/design/my-courses-course') }}">
                                                            <h3 class="card-title">
                                                                WordPress Theme Development with Bootstrap
                                                            </h3>
                                                        </a>
                                                        <div class="profile d-flex align-items-center">
                                                            <img
                                                                src="img/courseDetail/profilePic.svg"
                                                                alt="inoura"
                                                                class="profilePic"
                                                            />
                                                            <p class="profileName mb-0">by Jane Doe</p>
                                                        </div>
                                                    </div>
                                                    <div class="durationContent">
                                                        <p class="startDate dateStyles">
                                                            Starts: 09 Oct 2023
                                                        </p>

                                                        <p class="endDate mb-0 dateStyles">
                                                            Ends: 28 Oct 2023
                                                        </p>
                                                    </div>
                                                    <div class="progress myCoureseProgressBar">
                                                        <div
                                                            class="progress-bar"
                                                            style="width: 44%"
                                                            role="progressbar"
                                                            aria-valuenow="44%"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        ></div>
                                                    </div>
                                                    <div class="d-flex tagWrapper">
                                                        <div
                                                            class="tags enrollment d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/star.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>60% done</div>
                                                        </div>
                                                        <div
                                                            class="tags enrollmen d-flex align-items-centert"
                                                        >
                                                            <img
                                                                src="img/courseDetail/collection.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>1/6 sections</div>
                                                        </div>
                                                        <div
                                                            class="tags duration d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/playBtn.svg"
                                                                alt="inoura"
                                                            />
                                                            <div class="time">8/24 lectures</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card courseListCard">
                                                <div class="cardImgWrap">
                                                    <img
                                                        src="img/courseList/cardImg.png"
                                                        alt="inoura"
                                                        class="card-img-top cardImg"
                                                    />
                                                </div>
                                                <div class="card-body">
                                                    <div class="cardData">
                                                        <a href="{{ url('/design/my-courses-course') }}">
                                                            <h3 class="card-title">
                                                                WordPress Theme Development with Bootstrap
                                                            </h3>
                                                        </a>
                                                        <div class="profile d-flex align-items-center">
                                                            <img
                                                                src="img/courseDetail/profilePic.svg"
                                                                alt="inoura"
                                                                class="profilePic"
                                                            />
                                                            <p class="profileName mb-0">by Jane Doe</p>
                                                        </div>
                                                    </div>
                                                    <div class="durationContent">
                                                        <p class="startDate dateStyles">
                                                            Starts: 09 Oct 2023
                                                        </p>

                                                        <p class="endDate mb-0 dateStyles">
                                                            Ends: 28 Oct 2023
                                                        </p>
                                                    </div>
                                                    <div class="progress myCoureseProgressBar">
                                                        <div
                                                            class="progress-bar"
                                                            style="width: 44%"
                                                            role="progressbar"
                                                            aria-valuenow="44%"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        ></div>
                                                    </div>
                                                    <div class="d-flex tagWrapper">
                                                        <div
                                                            class="tags enrollment d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/star.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>60% done</div>
                                                        </div>
                                                        <div
                                                            class="tags enrollmen d-flex align-items-centert"
                                                        >
                                                            <img
                                                                src="img/courseDetail/collection.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>1/6 sections</div>
                                                        </div>
                                                        <div
                                                            class="tags duration d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/playBtn.svg"
                                                                alt="inoura"
                                                            />
                                                            <div class="time">8/24 lectures</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card courseListCard">
                                                <div class="cardImgWrap">
                                                    <img
                                                        src="img/courseList/cardImg.png"
                                                        alt="inoura"
                                                        class="card-img-top cardImg"
                                                    />
                                                </div>
                                                <div class="card-body">
                                                    <div class="cardData">
                                                        <a href="{{ url('/design/my-courses-course') }}">
                                                            <h3 class="card-title">
                                                                WordPress Theme Development with Bootstrap
                                                            </h3>
                                                        </a>
                                                        <div class="profile d-flex align-items-center">
                                                            <img
                                                                src="img/courseDetail/profilePic.svg"
                                                                alt="inoura"
                                                                class="profilePic"
                                                            />
                                                            <p class="profileName mb-0">by Jane Doe</p>
                                                        </div>
                                                    </div>
                                                    <div class="durationContent">
                                                        <p class="startDate dateStyles">
                                                            Starts: 09 Oct 2023
                                                        </p>

                                                        <p class="endDate mb-0 dateStyles">
                                                            Ends: 28 Oct 2023
                                                        </p>
                                                    </div>
                                                    <div class="progress myCoureseProgressBar">
                                                        <div
                                                            class="progress-bar"
                                                            style="width: 44%"
                                                            role="progressbar"
                                                            aria-valuenow="44%"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        ></div>
                                                    </div>
                                                    <div class="d-flex tagWrapper">
                                                        <div
                                                            class="tags enrollment d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/star.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>60% done</div>
                                                        </div>
                                                        <div
                                                            class="tags enrollmen d-flex align-items-centert"
                                                        >
                                                            <img
                                                                src="img/courseDetail/collection.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>1/6 sections</div>
                                                        </div>
                                                        <div
                                                            class="tags duration d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/playBtn.svg"
                                                                alt="inoura"
                                                            />
                                                            <div class="time">8/24 lectures</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="pills-activeCard"
                                        role="tabpanel"
                                        aria-labelledby="pills-activeCard-tab"
                                    >
                                        <div class="tabOverview">
                                            <div class="card courseListCard">
                                                <div class="cardImgWrap">
                                                    <img
                                                        src="img/courseList/cardImg.png"
                                                        alt="inoura"
                                                        class="card-img-top cardImg"
                                                    />
                                                </div>
                                                <div class="card-body">
                                                    <div class="cardData">
                                                        <a href="{{ url('/design/my-courses-course') }}">
                                                            <h3 class="card-title">
                                                                WordPress Theme Development with Bootstrap
                                                            </h3>
                                                        </a>
                                                        <div class="profile d-flex align-items-center">
                                                            <img
                                                                src="img/courseDetail/profilePic.svg"
                                                                alt="inoura"
                                                                class="profilePic"
                                                            />
                                                            <p class="profileName mb-0">by Jane Doe</p>
                                                        </div>
                                                    </div>
                                                    <div class="durationContent">
                                                        <p class="startDate dateStyles">
                                                            Starts: 09 Oct 2023
                                                        </p>

                                                        <p class="endDate mb-0 dateStyles">
                                                            Ends: 28 Oct 2023
                                                        </p>
                                                    </div>
                                                    <div class="progress myCoureseProgressBar">
                                                        <div
                                                            class="progress-bar"
                                                            style="width: 44%"
                                                            role="progressbar"
                                                            aria-valuenow="44%"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        ></div>
                                                    </div>
                                                    <div class="d-flex tagWrapper">
                                                        <div
                                                            class="tags enrollment d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/star.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>60% done</div>
                                                        </div>
                                                        <div
                                                            class="tags enrollmen d-flex align-items-centert"
                                                        >
                                                            <img
                                                                src="img/courseDetail/collection.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>1/6 sections</div>
                                                        </div>
                                                        <div
                                                            class="tags duration d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/playBtn.svg"
                                                                alt="inoura"
                                                            />
                                                            <div class="time">8/24 lectures</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card courseListCard">
                                                <div class="cardImgWrap">
                                                    <img
                                                        src="img/courseList/cardImg.png"
                                                        alt="inoura"
                                                        class="card-img-top cardImg"
                                                    />
                                                </div>
                                                <div class="card-body">
                                                    <div class="cardData">
                                                        <a href="{{ url('/design/my-courses-course') }}">
                                                            <h3 class="card-title">
                                                                WordPress Theme Development with Bootstrap
                                                            </h3>
                                                        </a>
                                                        <div class="profile d-flex align-items-center">
                                                            <img
                                                                src="img/courseDetail/profilePic.svg"
                                                                alt="inoura"
                                                                class="profilePic"
                                                            />
                                                            <p class="profileName mb-0">by Jane Doe</p>
                                                        </div>
                                                    </div>
                                                    <div class="durationContent">
                                                        <p class="startDate dateStyles">
                                                            Starts: 09 Oct 2023
                                                        </p>

                                                        <p class="endDate mb-0 dateStyles">
                                                            Ends: 28 Oct 2023
                                                        </p>
                                                    </div>
                                                    <div class="progress myCoureseProgressBar">
                                                        <div
                                                            class="progress-bar"
                                                            style="width: 44%"
                                                            role="progressbar"
                                                            aria-valuenow="44%"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        ></div>
                                                    </div>
                                                    <div class="d-flex tagWrapper">
                                                        <div
                                                            class="tags enrollment d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/star.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>60% done</div>
                                                        </div>
                                                        <div
                                                            class="tags enrollmen d-flex align-items-centert"
                                                        >
                                                            <img
                                                                src="img/courseDetail/collection.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>1/6 sections</div>
                                                        </div>
                                                        <div
                                                            class="tags duration d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/playBtn.svg"
                                                                alt="inoura"
                                                            />
                                                            <div class="time">8/24 lectures</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card courseListCard">
                                                <div class="cardImgWrap">
                                                    <img
                                                        src="img/courseList/cardImg.png"
                                                        alt="inoura"
                                                        class="card-img-top cardImg"
                                                    />
                                                </div>
                                                <div class="card-body">
                                                    <div class="cardData">
                                                        <a href="{{ url('/design/my-courses-course') }}">
                                                            <h3 class="card-title">
                                                                WordPress Theme Development with Bootstrap
                                                            </h3>
                                                        </a>
                                                        <div class="profile d-flex align-items-center">
                                                            <img
                                                                src="img/courseDetail/profilePic.svg"
                                                                alt="inoura"
                                                                class="profilePic"
                                                            />
                                                            <p class="profileName mb-0">by Jane Doe</p>
                                                        </div>
                                                    </div>
                                                    <div class="durationContent">
                                                        <p class="startDate dateStyles">
                                                            Starts: 09 Oct 2023
                                                        </p>

                                                        <p class="endDate mb-0 dateStyles">
                                                            Ends: 28 Oct 2023
                                                        </p>
                                                    </div>
                                                    <div class="progress myCoureseProgressBar">
                                                        <div
                                                            class="progress-bar"
                                                            style="width: 44%"
                                                            role="progressbar"
                                                            aria-valuenow="44%"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        ></div>
                                                    </div>
                                                    <div class="d-flex tagWrapper">
                                                        <div
                                                            class="tags enrollment d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/star.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>60% done</div>
                                                        </div>
                                                        <div
                                                            class="tags enrollmen d-flex align-items-centert"
                                                        >
                                                            <img
                                                                src="img/courseDetail/collection.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>1/6 sections</div>
                                                        </div>
                                                        <div
                                                            class="tags duration d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/playBtn.svg"
                                                                alt="inoura"
                                                            />
                                                            <div class="time">8/24 lectures</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card courseListCard">
                                                <div class="cardImgWrap">
                                                    <img
                                                        src="img/courseList/cardImg.png"
                                                        alt="inoura"
                                                        class="card-img-top cardImg"
                                                    />
                                                </div>
                                                <div class="card-body">
                                                    <div class="cardData">
                                                        <a href="{{ url('/design/my-courses-course') }}">
                                                            <h3 class="card-title">
                                                                WordPress Theme Development with Bootstrap
                                                            </h3>
                                                        </a>
                                                        <div class="profile d-flex align-items-center">
                                                            <img
                                                                src="img/courseDetail/profilePic.svg"
                                                                alt="inoura"
                                                                class="profilePic"
                                                            />
                                                            <p class="profileName mb-0">by Jane Doe</p>
                                                        </div>
                                                    </div>
                                                    <div class="durationContent">
                                                        <p class="startDate dateStyles">
                                                            Starts: 09 Oct 2023
                                                        </p>

                                                        <p class="endDate mb-0 dateStyles">
                                                            Ends: 28 Oct 2023
                                                        </p>
                                                    </div>
                                                    <div class="progress myCoureseProgressBar">
                                                        <div
                                                            class="progress-bar"
                                                            style="width: 44%"
                                                            role="progressbar"
                                                            aria-valuenow="44%"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        ></div>
                                                    </div>
                                                    <div class="d-flex tagWrapper">
                                                        <div
                                                            class="tags enrollment d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/star.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>60% done</div>
                                                        </div>
                                                        <div
                                                            class="tags enrollmen d-flex align-items-centert"
                                                        >
                                                            <img
                                                                src="img/courseDetail/collection.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>1/6 sections</div>
                                                        </div>
                                                        <div
                                                            class="tags duration d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/playBtn.svg"
                                                                alt="inoura"
                                                            />
                                                            <div class="time">8/24 lectures</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card courseListCard">
                                                <div class="cardImgWrap">
                                                    <img
                                                        src="img/courseList/cardImg.png"
                                                        alt="inoura"
                                                        class="card-img-top cardImg"
                                                    />
                                                </div>
                                                <div class="card-body">
                                                    <div class="cardData">
                                                        <a href="{{ url('/design/my-courses-course') }}">
                                                            <h3 class="card-title">
                                                                WordPress Theme Development with Bootstrap
                                                            </h3>
                                                        </a>
                                                        <div class="profile d-flex align-items-center">
                                                            <img
                                                                src="img/courseDetail/profilePic.svg"
                                                                alt="inoura"
                                                                class="profilePic"
                                                            />
                                                            <p class="profileName mb-0">by Jane Doe</p>
                                                        </div>
                                                    </div>
                                                    <div class="durationContent">
                                                        <p class="startDate dateStyles">
                                                            Starts: 09 Oct 2023
                                                        </p>

                                                        <p class="endDate mb-0 dateStyles">
                                                            Ends: 28 Oct 2023
                                                        </p>
                                                    </div>
                                                    <div class="progress myCoureseProgressBar">
                                                        <div
                                                            class="progress-bar"
                                                            style="width: 44%"
                                                            role="progressbar"
                                                            aria-valuenow="44%"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        ></div>
                                                    </div>
                                                    <div class="d-flex tagWrapper">
                                                        <div
                                                            class="tags enrollment d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/star.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>60% done</div>
                                                        </div>
                                                        <div
                                                            class="tags enrollmen d-flex align-items-centert"
                                                        >
                                                            <img
                                                                src="img/courseDetail/collection.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>1/6 sections</div>
                                                        </div>
                                                        <div
                                                            class="tags duration d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/playBtn.svg"
                                                                alt="inoura"
                                                            />
                                                            <div class="time">8/24 lectures</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="pills-courseCompleted"
                                        role="tabpanel"
                                        aria-labelledby="pills-courseCompleted-tab"
                                    >
                                        <div class="tabOverview">
                                            <div class="card courseListCard">
                                                <div class="cardImgWrap">
                                                    <img
                                                        src="img/courseList/cardImg.png"
                                                        alt="inoura"
                                                        class="card-img-top cardImg"
                                                    />
                                                </div>
                                                <div class="card-body">
                                                    <div class="cardData">
                                                        <a href="{{ url('/design/my-courses-course') }}">
                                                            <h3 class="card-title">
                                                                WordPress Theme Development with Bootstrap
                                                            </h3>
                                                        </a>
                                                        <div class="profile d-flex align-items-center">
                                                            <img
                                                                src="img/courseDetail/profilePic.svg"
                                                                alt="inoura"
                                                                class="profilePic"
                                                            />
                                                            <p class="profileName mb-0">by Jane Doe</p>
                                                        </div>
                                                    </div>
                                                    <div class="durationContent">
                                                        <p class="startDate dateStyles">
                                                            Starts: 09 Oct 2023
                                                        </p>

                                                        <p class="endDate mb-0 dateStyles">
                                                            Ends: 28 Oct 2023
                                                        </p>
                                                    </div>
                                                    <div class="progress myCoureseProgressBar">
                                                        <div
                                                            class="progress-bar"
                                                            style="width: 44%"
                                                            role="progressbar"
                                                            aria-valuenow="44%"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        ></div>
                                                    </div>
                                                    <div class="d-flex tagWrapper">
                                                        <div
                                                            class="tags enrollment d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/star.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>60% done</div>
                                                        </div>
                                                        <div
                                                            class="tags enrollmen d-flex align-items-centert"
                                                        >
                                                            <img
                                                                src="img/courseDetail/collection.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>1/6 sections</div>
                                                        </div>
                                                        <div
                                                            class="tags duration d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/playBtn.svg"
                                                                alt="inoura"
                                                            />
                                                            <div class="time">8/24 lectures</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card courseListCard">
                                                <div class="cardImgWrap">
                                                    <img
                                                        src="img/courseList/cardImg.png"
                                                        alt="inoura"
                                                        class="card-img-top cardImg"
                                                    />
                                                </div>
                                                <div class="card-body">
                                                    <div class="cardData">
                                                        <a href="{{ url('/design/my-courses-course') }}">
                                                            <h3 class="card-title">
                                                                WordPress Theme Development with Bootstrap
                                                            </h3>
                                                        </a>
                                                        <div class="profile d-flex align-items-center">
                                                            <img
                                                                src="img/courseDetail/profilePic.svg"
                                                                alt="inoura"
                                                                class="profilePic"
                                                            />
                                                            <p class="profileName mb-0">by Jane Doe</p>
                                                        </div>
                                                    </div>
                                                    <div class="durationContent">
                                                        <p class="startDate dateStyles">
                                                            Starts: 09 Oct 2023
                                                        </p>

                                                        <p class="endDate mb-0 dateStyles">
                                                            Ends: 28 Oct 2023
                                                        </p>
                                                    </div>
                                                    <div class="progress myCoureseProgressBar">
                                                        <div
                                                            class="progress-bar"
                                                            style="width: 44%"
                                                            role="progressbar"
                                                            aria-valuenow="44%"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        ></div>
                                                    </div>
                                                    <div class="d-flex tagWrapper">
                                                        <div
                                                            class="tags enrollment d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/star.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>60% done</div>
                                                        </div>
                                                        <div
                                                            class="tags enrollmen d-flex align-items-centert"
                                                        >
                                                            <img
                                                                src="img/courseDetail/collection.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>1/6 sections</div>
                                                        </div>
                                                        <div
                                                            class="tags duration d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/playBtn.svg"
                                                                alt="inoura"
                                                            />
                                                            <div class="time">8/24 lectures</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card courseListCard">
                                                <div class="cardImgWrap">
                                                    <img
                                                        src="img/courseList/cardImg.png"
                                                        alt="inoura"
                                                        class="card-img-top cardImg"
                                                    />
                                                </div>
                                                <div class="card-body">
                                                    <div class="cardData">
                                                        <a href="{{ url('/design/my-courses-course') }}">
                                                            <h3 class="card-title">
                                                                WordPress Theme Development with Bootstrap
                                                            </h3>
                                                        </a>
                                                        <div class="profile d-flex align-items-center">
                                                            <img
                                                                src="img/courseDetail/profilePic.svg"
                                                                alt="inoura"
                                                                class="profilePic"
                                                            />
                                                            <p class="profileName mb-0">by Jane Doe</p>
                                                        </div>
                                                    </div>
                                                    <div class="durationContent">
                                                        <p class="startDate dateStyles">
                                                            Starts: 09 Oct 2023
                                                        </p>

                                                        <p class="endDate mb-0 dateStyles">
                                                            Ends: 28 Oct 2023
                                                        </p>
                                                    </div>
                                                    <div class="progress myCoureseProgressBar">
                                                        <div
                                                            class="progress-bar"
                                                            style="width: 44%"
                                                            role="progressbar"
                                                            aria-valuenow="44%"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        ></div>
                                                    </div>
                                                    <div class="d-flex tagWrapper">
                                                        <div
                                                            class="tags enrollment d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/star.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>60% done</div>
                                                        </div>
                                                        <div
                                                            class="tags enrollmen d-flex align-items-centert"
                                                        >
                                                            <img
                                                                src="img/courseDetail/collection.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>1/6 sections</div>
                                                        </div>
                                                        <div
                                                            class="tags duration d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/playBtn.svg"
                                                                alt="inoura"
                                                            />
                                                            <div class="time">8/24 lectures</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card courseListCard">
                                                <div class="cardImgWrap">
                                                    <img
                                                        src="img/courseList/cardImg.png"
                                                        alt="inoura"
                                                        class="card-img-top cardImg"
                                                    />
                                                </div>
                                                <div class="card-body">
                                                    <div class="cardData">
                                                        <a href="{{ url('/design/my-courses-course') }}">
                                                            <h3 class="card-title">
                                                                WordPress Theme Development with Bootstrap
                                                            </h3>
                                                        </a>
                                                        <div class="profile d-flex align-items-center">
                                                            <img
                                                                src="img/courseDetail/profilePic.svg"
                                                                alt="inoura"
                                                                class="profilePic"
                                                            />
                                                            <p class="profileName mb-0">by Jane Doe</p>
                                                        </div>
                                                    </div>
                                                    <div class="durationContent">
                                                        <p class="startDate dateStyles">
                                                            Starts: 09 Oct 2023
                                                        </p>

                                                        <p class="endDate mb-0 dateStyles">
                                                            Ends: 28 Oct 2023
                                                        </p>
                                                    </div>
                                                    <div class="progress myCoureseProgressBar">
                                                        <div
                                                            class="progress-bar"
                                                            style="width: 44%"
                                                            role="progressbar"
                                                            aria-valuenow="44%"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        ></div>
                                                    </div>
                                                    <div class="d-flex tagWrapper">
                                                        <div
                                                            class="tags enrollment d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/star.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>60% done</div>
                                                        </div>
                                                        <div
                                                            class="tags enrollmen d-flex align-items-centert"
                                                        >
                                                            <img
                                                                src="img/courseDetail/collection.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>1/6 sections</div>
                                                        </div>
                                                        <div
                                                            class="tags duration d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/playBtn.svg"
                                                                alt="inoura"
                                                            />
                                                            <div class="time">8/24 lectures</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card courseListCard">
                                                <div class="cardImgWrap">
                                                    <img
                                                        src="img/courseList/cardImg.png"
                                                        alt="inoura"
                                                        class="card-img-top cardImg"
                                                    />
                                                </div>
                                                <div class="card-body">
                                                    <div class="cardData">
                                                        <a href="{{ url('/design/my-courses-course') }}">
                                                            <h3 class="card-title">
                                                                WordPress Theme Development with Bootstrap
                                                            </h3>
                                                        </a>
                                                        <div class="profile d-flex align-items-center">
                                                            <img
                                                                src="img/courseDetail/profilePic.svg"
                                                                alt="inoura"
                                                                class="profilePic"
                                                            />
                                                            <p class="profileName mb-0">by Jane Doe</p>
                                                        </div>
                                                    </div>
                                                    <div class="durationContent">
                                                        <p class="startDate dateStyles">
                                                            Starts: 09 Oct 2023
                                                        </p>

                                                        <p class="endDate mb-0 dateStyles">
                                                            Ends: 28 Oct 2023
                                                        </p>
                                                    </div>
                                                    <div class="progress myCoureseProgressBar">
                                                        <div
                                                            class="progress-bar"
                                                            style="width: 44%"
                                                            role="progressbar"
                                                            aria-valuenow="44%"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        ></div>
                                                    </div>
                                                    <div class="d-flex tagWrapper">
                                                        <div
                                                            class="tags enrollment d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/star.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>60% done</div>
                                                        </div>
                                                        <div
                                                            class="tags enrollmen d-flex align-items-centert"
                                                        >
                                                            <img
                                                                src="img/courseDetail/collection.svg"
                                                                alt="inoura"
                                                            />
                                                            <div>1/6 sections</div>
                                                        </div>
                                                        <div
                                                            class="tags duration d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/playBtn.svg"
                                                                alt="inoura"
                                                            />
                                                            <div class="time">8/24 lectures</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
