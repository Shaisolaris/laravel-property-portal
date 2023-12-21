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
    <title>My Classes</title>
</head>
<body>
<div class="navbarWraper">
    <!-- Topbar -->
    <div class="topBar">
        <div class="container">
            <div
                class="row align-items-center justify-content-between px-2 px-sm-0"
            >
                <div class="d-flex logoWrapper">
                    <div class="logo d-lg-block d-none">
                        <a class="" href="{{ url('/design/school') }}">
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
                <a class="d-lg-none d-block" href="{{ url('/design/school') }}">
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
                        <a href="#" class="profileDetail">My Courses</a>

                        <a href="#" class="navIcons">
                            <img src="img/navbar/handbag.svg" alt="inoura" />
                        </a>

                        <a href="#" class="navIcons">
                            <img src="img/navbar/heart.svg" alt="inoura" />
                        </a>
                        <a href="#" class="navIcons">
                            <img src="img/navbar/bell.svg" alt="inoura" />
                        </a>
                        <a href="{{ url('/design/dashboard-school') }}" class="profile">
                            <img src="img/navbar/profileImg.svg" alt="inoura" />
                        </a>
                    </form>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="dashboardSchool">
    <div class="courseSection">
        <div class="container px-lg-0">
            <div class="row row_gap_20">
                <div class="col-xl-3 col-lg-12 sideBarColumn" id="schoolSideMenu">
                    <div class="card sidebar_Card">
                        <!-- Image & Name Wrapper starts -->
                        <div class="img_Name_Wrapper">
                            <img
                                src="img/dashboard/mary.svg"
                                class="card-img-top"
                                alt="image"
                            />
                            <div class="card-body name_Wrapper">
                                <p class="card-title hi_Text">Hi!</p>
                                <h2 class="card-title mary_Text">Mary</h2>
                            </div>
                        </div>
                        <!-- Image & Name Wrapper ends -->

                        <!-- List starts -->
                        <div class="list-group">
                            <a href="{{ url('/design/dashboard-school') }}" class="list-group-mary list-group-item-action">
                                <div class="list_Item_Flex">
                                    <div class="list_Image_mary">
                                        <img
                                            src="img/dashboard-school/house.svg"
                                            alt="dasboard"
                                        />
                                    </div>
                                    <p>Dashboard</p>
                                </div>
                            </a>
                            <a href="{{ url('/design/my-classes') }}" class="list-group-mary list-group-item-action">
                                <div class="list_Item_Flex">
                                    <div class="list_Image_mary">
                                        <img
                                            src="img/dashboard-school/mortarboard.svg"
                                            alt="dasboard"
                                        />
                                    </div>
                                    <p>Classes</p>
                                </div>
                            </a>
                            <a href="{{ url('/design/school-my-assignments') }}" class="list-group-mary list-group-item-action">
                                <div class="list_Item_Flex">
                                    <div class="list_Image_mary">
                                        <img
                                            src="img/dashboard-school/list-task.svg"
                                            alt="dasboard"
                                        />
                                    </div>
                                    <p>Assignments</p>
                                </div>
                            </a>
                            <a href="{{ url('/design/my-grades') }}" class="list-group-mary list-group-item-action">
                                <div class="list_Item_Flex">
                                    <div class="list_Image_mary">
                                        <img
                                            src="img/dashboard-school/journal-check.svg"
                                            alt="dasboard"
                                        />
                                    </div>
                                    <p>Grades</p>
                                </div>
                            </a>
                            <a href="{{ url('/design/dashboard-school-mentorship') }}" class="list-group-mary list-group-item-action">
                                <div class="list_Item_Flex">
                                    <div class="list_Image_mary">
                                        <img
                                            src="img/dashboard-school/people.svg"
                                            alt="dasboard"
                                        />
                                    </div>
                                    <p>Mentorship</p>
                                </div>
                            </a>
                            <a href="{{ url('/design/dashboard-school-podcast') }}" class="list-group-mary list-group-item-action">
                                <div class="list_Item_Flex">
                                    <div class="list_Image_mary">
                                        <img
                                            src="img/dashboard-school/mic.svg"
                                            alt="dasboard"
                                        />
                                    </div>
                                    <p>Podcast</p>
                                </div>
                            </a>
                            <a href="{{ url('/design/dashboard-school-setting') }}" class="list-group-mary list-group-item-action">
                                <div class="list_Item_Flex">
                                    <div class="list_Image_mary">
                                        <img
                                            src="img/dashboard-school/gear.svg"
                                            alt="dasboard"
                                        />
                                    </div>
                                    <p>Settings</p>
                                </div>
                            </a>
                        </div>
                        <!-- List ends -->
                    </div>
                </div>
                <div class="col-xl-9 col-lg-12">
                    <div class="classes_Heading">
                        <h2>Classes</h2>
                    </div>
                    <div class="tabbing_Div">
                        <div class="d-flex justify-content-between w-100">
                            <div class="classes_Tabbing_Wrapper">
                                <ul
                                    class="nav nav-pills classes_navPills"
                                    id="pills-tab"
                                    role="tablist"
                                >
                                    <li class="nav-item classes_navItems">
                                        <a
                                            class="nav-link classes_navLink active"
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
                                    <li class="nav-item classes_navItems">
                                        <a
                                            class="nav-link classes_navLink"
                                            id="pills-activeCard-tab"
                                            data-toggle="pill"
                                            href="#pills-activeCard"
                                            role="tab"
                                            aria-controls="pills-activeCard"
                                            aria-selected="false"
                                        >Live</a
                                        >
                                    </li>
                                    <li class="nav-item classes_navItems">
                                        <a
                                            class="nav-link classes_navLink"
                                            id="pills-courseCompleted-tab"
                                            data-toggle="pill"
                                            href="#pills-courseCompleted"
                                            role="tab"
                                            aria-controls="pills-courseCompleted"
                                            aria-selected="false"
                                        >Record</a
                                        >
                                    </li>
                                </ul>
                            </div>
                            <div class="listTabing d-flex">
                                <a href="coursesList.html">
                                    <div class="listing_Classes">
                                        <img src="img/dashboard-school/list.svg" />
                                    </div>
                                </a>
                                <a href="coursesCard.html">
                                    <div class="categoriesGrid_Classes">
                                        <img src="img/dashboard-school/grid.svg" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <!-- tabpanel one Starts -->
                        <div
                            class="tab-pane fade show active"
                            id="pills-all"
                            role="tabpanel"
                            aria-labelledby="pills-all-tab"
                        >
                            <div class="tabOverview">
                                <div class="card classes_Card">
                                    <div class="cardImgWrap">
                                        <img
                                            src="img/dashboard-school/geometry.svg"
                                            alt="inoura"
                                            class="card-img-top cardImg"
                                        />
                                    </div>
                                    <div class="card-body">
                                        <div class="cardData">
                                            <div class="classesCard_Title_Wrapper">
                                                <div class="literature_Score_Wrapper">
                                                    <a href="{{ url('/design/my-class-group-call') }}">
                                                        <h3 class="card-title">Literature</h3>
                                                    </a>
                                                    <div class="score_Wrapper">
                                                        <img
                                                            src="img/dashboard-school/star.svg"
                                                            alt=""
                                                        />
                                                        <p>4/5 score</p>
                                                    </div>
                                                </div>
                                                <div class="homeWorkDiv_Wrapper">
                                                    <img
                                                        src="img/dashboard-school/exclamation-circle-red.svg"
                                                        alt=""
                                                    />
                                                    <p>Homework (2)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="next_Lesson_Wrapper">
                                            <p>
                                                Next Lesson: Foreign works of writers of the 80s
                                            </p>
                                            <div class="next_Lesson_Time">
                                                <img
                                                    src="img/dashboard-school/lessonTimer.svg"
                                                    alt=""
                                                />
                                                <p>Started 5 minutes ago</p>
                                            </div>
                                        </div>
                                        <div class="profile_lesson_Wrapper">
                                            <div class="profile d-flex align-items-center">
                                                <img
                                                    src="img/courseDetail/profilePic.svg"
                                                    alt="inoura"
                                                    class="profilePic"
                                                />
                                                <p class="profileName mb-0">Mrs. Chatwayne</p>
                                            </div>
                                            <div class="lessons_Wrapper">
                                                <img
                                                    src="img/dashboard-school/list-task.svg"
                                                    alt=""
                                                />
                                                <p>All Lessons</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card classes_Card">
                                    <div class="cardImgWrap">
                                        <img
                                            src="img/dashboard-school/chemistry.svg"
                                            alt="inoura"
                                            class="card-img-top cardImg"
                                        />
                                    </div>
                                    <div class="card-body">
                                        <div class="cardData">
                                            <div class="classesCard_Title_Wrapper">
                                                <div class="literature_Score_Wrapper">
                                                    <a href="{{ url('/design/my-class-group-call') }}">
                                                        <h3 class="card-title">Literature</h3>
                                                    </a>
                                                    <div class="score_Wrapper">
                                                        <img
                                                            src="img/dashboard-school/star.svg"
                                                            alt=""
                                                        />
                                                        <p>4/5 score</p>
                                                    </div>
                                                </div>
                                                <div class="homeWorkDiv_Wrapper">
                                                    <img
                                                        src="img/dashboard-school/exclamation-circle-red.svg"
                                                        alt=""
                                                    />
                                                    <p>Homework (2)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="next_Lesson_Wrapper">
                                            <p>
                                                Next Lesson: Foreign works of writers of the 80s
                                            </p>
                                            <div class="next_Lesson_Time">
                                                <img
                                                    src="img/dashboard-school/lessonTimer.svg"
                                                    alt=""
                                                />
                                                <p>Started 5 minutes ago</p>
                                            </div>
                                        </div>
                                        <div class="profile_lesson_Wrapper">
                                            <div class="profile d-flex align-items-center">
                                                <img
                                                    src="img/courseDetail/profilePic.svg"
                                                    alt="inoura"
                                                    class="profilePic"
                                                />
                                                <p class="profileName mb-0">Mrs. Chatwayne</p>
                                            </div>
                                            <div class="lessons_Wrapper">
                                                <img
                                                    src="img/dashboard-school/list-task.svg"
                                                    alt=""
                                                />
                                                <p>All Lessons</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card classes_Card">
                                    <div class="cardImgWrap">
                                        <img
                                            src="img/dashboard-school/Literature.svg"
                                            alt="inoura"
                                            class="card-img-top cardImg"
                                        />
                                    </div>
                                    <div class="card-body">
                                        <div class="cardData">
                                            <div class="classesCard_Title_Wrapper">
                                                <div class="literature_Score_Wrapper">
                                                    <a href="{{ url('/design/my-class-group-call') }}">
                                                        <h3 class="card-title">Literature</h3>
                                                    </a>
                                                    <div class="score_Wrapper">
                                                        <img
                                                            src="img/dashboard-school/star.svg"
                                                            alt=""
                                                        />
                                                        <p>4/5 score</p>
                                                    </div>
                                                </div>
                                                <div class="homeWorkDiv_Wrapper">
                                                    <img
                                                        src="img/dashboard-school/exclamation-circle-red.svg"
                                                        alt=""
                                                    />
                                                    <p>Homework (2)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="next_Lesson_Wrapper">
                                            <p>
                                                Next Lesson: Foreign works of writers of the 80s
                                            </p>
                                            <div class="next_Lesson_Time">
                                                <img
                                                    src="img/dashboard-school/lessonTimer.svg"
                                                    alt=""
                                                />
                                                <p>Started 5 minutes ago</p>
                                            </div>
                                        </div>
                                        <div class="profile_lesson_Wrapper">
                                            <div class="profile d-flex align-items-center">
                                                <img
                                                    src="img/courseDetail/profilePic.svg"
                                                    alt="inoura"
                                                    class="profilePic"
                                                />
                                                <p class="profileName mb-0">Mrs. Chatwayne</p>
                                            </div>
                                            <div class="lessons_Wrapper">
                                                <img
                                                    src="img/dashboard-school/list-task.svg"
                                                    alt=""
                                                />
                                                <p>All Lessons</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabpanel one Ends -->

                        <!-- tabpanel Two Starts -->
                        <div
                            class="tab-pane fade"
                            id="pills-activeCard"
                            role="tabpanel"
                            aria-labelledby="pills-activeCard-tab"
                        >
                            <div class="tabOverview">
                                <div class="card classes_Card">
                                    <div class="cardImgWrap">
                                        <img
                                            src="img/dashboard-school/chemistry.svg"
                                            alt="inoura"
                                            class="card-img-top cardImg"
                                        />
                                    </div>
                                    <div class="card-body">
                                        <div class="cardData">
                                            <div class="classesCard_Title_Wrapper">
                                                <div class="literature_Score_Wrapper">
                                                    <a href="{{ url('/design/my-class-group-call') }}">
                                                        <h3 class="card-title">Literature</h3>
                                                    </a>
                                                    <div class="score_Wrapper">
                                                        <img
                                                            src="img/dashboard-school/star.svg"
                                                            alt=""
                                                        />
                                                        <p>4/5 score</p>
                                                    </div>
                                                </div>
                                                <div class="homeWorkDiv_Wrapper">
                                                    <img
                                                        src="img/dashboard-school/exclamation-circle-red.svg"
                                                        alt=""
                                                    />
                                                    <p>Homework (2)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="next_Lesson_Wrapper">
                                            <p>
                                                Next Lesson: Foreign works of writers of the 80s
                                            </p>
                                            <div class="next_Lesson_Time">
                                                <img
                                                    src="img/dashboard-school/lessonTimer.svg"
                                                    alt=""
                                                />
                                                <p>Started 5 minutes ago</p>
                                            </div>
                                        </div>
                                        <div class="profile_lesson_Wrapper">
                                            <div class="profile d-flex align-items-center">
                                                <img
                                                    src="img/courseDetail/profilePic.svg"
                                                    alt="inoura"
                                                    class="profilePic"
                                                />
                                                <p class="profileName mb-0">Mrs. Chatwayne</p>
                                            </div>
                                            <div class="lessons_Wrapper">
                                                <img
                                                    src="img/dashboard-school/list-task.svg"
                                                    alt=""
                                                />
                                                <p>All Lessons</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card classes_Card">
                                    <div class="cardImgWrap">
                                        <img
                                            src="img/dashboard-school/geometry.svg"
                                            alt="inoura"
                                            class="card-img-top cardImg"
                                        />
                                    </div>
                                    <div class="card-body">
                                        <div class="cardData">
                                            <div class="classesCard_Title_Wrapper">
                                                <div class="literature_Score_Wrapper">
                                                    <a href="{{ url('/design/my-class-group-call') }}">
                                                        <h3 class="card-title">Literature</h3>
                                                    </a>
                                                    <div class="score_Wrapper">
                                                        <img
                                                            src="img/dashboard-school/star.svg"
                                                            alt=""
                                                        />
                                                        <p>4/5 score</p>
                                                    </div>
                                                </div>
                                                <div class="homeWorkDiv_Wrapper">
                                                    <img
                                                        src="img/dashboard-school/exclamation-circle-red.svg"
                                                        alt=""
                                                    />
                                                    <p>Homework (2)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="next_Lesson_Wrapper">
                                            <p>
                                                Next Lesson: Foreign works of writers of the 80s
                                            </p>
                                            <div class="next_Lesson_Time">
                                                <img
                                                    src="img/dashboard-school/lessonTimer.svg"
                                                    alt=""
                                                />
                                                <p>Started 5 minutes ago</p>
                                            </div>
                                        </div>
                                        <div class="profile_lesson_Wrapper">
                                            <div class="profile d-flex align-items-center">
                                                <img
                                                    src="img/courseDetail/profilePic.svg"
                                                    alt="inoura"
                                                    class="profilePic"
                                                />
                                                <p class="profileName mb-0">Mrs. Chatwayne</p>
                                            </div>
                                            <div class="lessons_Wrapper">
                                                <img
                                                    src="img/dashboard-school/list-task.svg"
                                                    alt=""
                                                />
                                                <p>All Lessons</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card classes_Card">
                                    <div class="cardImgWrap">
                                        <img
                                            src="img/dashboard-school/Literature.svg"
                                            alt="inoura"
                                            class="card-img-top cardImg"
                                        />
                                    </div>
                                    <div class="card-body">
                                        <div class="cardData">
                                            <div class="classesCard_Title_Wrapper">
                                                <div class="literature_Score_Wrapper">
                                                    <a href="{{ url('/design/my-class-group-call') }}">
                                                        <h3 class="card-title">Literature</h3>
                                                    </a>
                                                    <div class="score_Wrapper">
                                                        <img
                                                            src="img/dashboard-school/star.svg"
                                                            alt=""
                                                        />
                                                        <p>4/5 score</p>
                                                    </div>
                                                </div>
                                                <div class="homeWorkDiv_Wrapper">
                                                    <img
                                                        src="img/dashboard-school/exclamation-circle-red.svg"
                                                        alt=""
                                                    />
                                                    <p>Homework (2)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="next_Lesson_Wrapper">
                                            <p>
                                                Next Lesson: Foreign works of writers of the 80s
                                            </p>
                                            <div class="next_Lesson_Time">
                                                <img
                                                    src="img/dashboard-school/lessonTimer.svg"
                                                    alt=""
                                                />
                                                <p>Started 5 minutes ago</p>
                                            </div>
                                        </div>
                                        <div class="profile_lesson_Wrapper">
                                            <div class="profile d-flex align-items-center">
                                                <img
                                                    src="img/courseDetail/profilePic.svg"
                                                    alt="inoura"
                                                    class="profilePic"
                                                />
                                                <p class="profileName mb-0">Mrs. Chatwayne</p>
                                            </div>
                                            <div class="lessons_Wrapper">
                                                <img
                                                    src="img/dashboard-school/list-task.svg"
                                                    alt=""
                                                />
                                                <p>All Lessons</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabpanel Two Ends -->

                        <!-- tabpanel Three Starts -->
                        <div
                            class="tab-pane fade"
                            id="pills-courseCompleted"
                            role="tabpanel"
                            aria-labelledby="pills-courseCompleted-tab"
                        >
                            <div class="tabOverview">
                                <div class="card classes_Card">
                                    <div class="cardImgWrap">
                                        <img
                                            src="img/dashboard-school/chemistry.svg"
                                            alt="inoura"
                                            class="card-img-top cardImg"
                                        />
                                    </div>
                                    <div class="card-body">
                                        <div class="cardData">
                                            <div class="classesCard_Title_Wrapper">
                                                <div class="literature_Score_Wrapper">
                                                    <a href="{{ url('/design/my-class-group-call') }}">
                                                        <h3 class="card-title">Literature</h3>
                                                    </a>
                                                    <div class="score_Wrapper">
                                                        <img
                                                            src="img/dashboard-school/star.svg"
                                                            alt=""
                                                        />
                                                        <p>4/5 score</p>
                                                    </div>
                                                </div>
                                                <div class="homeWorkDiv_Wrapper">
                                                    <img
                                                        src="img/dashboard-school/exclamation-circle-red.svg"
                                                        alt=""
                                                    />
                                                    <p>Homework (2)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="next_Lesson_Wrapper">
                                            <p>
                                                Next Lesson: Foreign works of writers of the 80s
                                            </p>
                                            <div class="next_Lesson_Time">
                                                <img
                                                    src="img/dashboard-school/lessonTimer.svg"
                                                    alt=""
                                                />
                                                <p>Started 5 minutes ago</p>
                                            </div>
                                        </div>
                                        <div class="profile_lesson_Wrapper">
                                            <div class="profile d-flex align-items-center">
                                                <img
                                                    src="img/courseDetail/profilePic.svg"
                                                    alt="inoura"
                                                    class="profilePic"
                                                />
                                                <p class="profileName mb-0">Mrs. Chatwayne</p>
                                            </div>
                                            <div class="lessons_Wrapper">
                                                <img
                                                    src="img/dashboard-school/list-task.svg"
                                                    alt=""
                                                />
                                                <p>All Lessons</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card classes_Card">
                                    <div class="cardImgWrap">
                                        <img
                                            src="img/dashboard-school/chemistry.svg"
                                            alt="inoura"
                                            class="card-img-top cardImg"
                                        />
                                    </div>
                                    <div class="card-body">
                                        <div class="cardData">
                                            <div class="classesCard_Title_Wrapper">
                                                <div class="literature_Score_Wrapper">
                                                    <a href="{{ url('/design/my-class-group-call') }}">
                                                        <h3 class="card-title">Literature</h3>
                                                    </a>
                                                    <div class="score_Wrapper">
                                                        <img
                                                            src="img/dashboard-school/star.svg"
                                                            alt=""
                                                        />
                                                        <p>4/5 score</p>
                                                    </div>
                                                </div>
                                                <div class="homeWorkDiv_Wrapper">
                                                    <img
                                                        src="img/dashboard-school/exclamation-circle-red.svg"
                                                        alt=""
                                                    />
                                                    <p>Homework (2)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="next_Lesson_Wrapper">
                                            <p>
                                                Next Lesson: Foreign works of writers of the 80s
                                            </p>
                                            <div class="next_Lesson_Time">
                                                <img
                                                    src="img/dashboard-school/lessonTimer.svg"
                                                    alt=""
                                                />
                                                <p>Started 5 minutes ago</p>
                                            </div>
                                        </div>
                                        <div class="profile_lesson_Wrapper">
                                            <div class="profile d-flex align-items-center">
                                                <img
                                                    src="img/courseDetail/profilePic.svg"
                                                    alt="inoura"
                                                    class="profilePic"
                                                />
                                                <p class="profileName mb-0">Mrs. Chatwayne</p>
                                            </div>
                                            <div class="lessons_Wrapper">
                                                <img
                                                    src="img/dashboard-school/list-task.svg"
                                                    alt=""
                                                />
                                                <p>All Lessons</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card classes_Card">
                                    <div class="cardImgWrap">
                                        <img
                                            src="img/dashboard-school/chemistry.svg"
                                            alt="inoura"
                                            class="card-img-top cardImg"
                                        />
                                    </div>
                                    <div class="card-body">
                                        <div class="cardData">
                                            <div class="classesCard_Title_Wrapper">
                                                <div class="literature_Score_Wrapper">
                                                    <a href="{{ url('/design/my-class-group-call') }}">
                                                        <h3 class="card-title">Literature</h3>
                                                    </a>
                                                    <div class="score_Wrapper">
                                                        <img
                                                            src="img/dashboard-school/star.svg"
                                                            alt=""
                                                        />
                                                        <p>4/5 score</p>
                                                    </div>
                                                </div>
                                                <div class="homeWorkDiv_Wrapper">
                                                    <img
                                                        src="img/dashboard-school/exclamation-circle-red.svg"
                                                        alt=""
                                                    />
                                                    <p>Homework (2)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="next_Lesson_Wrapper">
                                            <p>
                                                Next Lesson: Foreign works of writers of the 80s
                                            </p>
                                            <div class="next_Lesson_Time">
                                                <img
                                                    src="img/dashboard-school/lessonTimer.svg"
                                                    alt=""
                                                />
                                                <p>Started 5 minutes ago</p>
                                            </div>
                                        </div>
                                        <div class="profile_lesson_Wrapper">
                                            <div class="profile d-flex align-items-center">
                                                <img
                                                    src="img/courseDetail/profilePic.svg"
                                                    alt="inoura"
                                                    class="profilePic"
                                                />
                                                <p class="profileName mb-0">Mrs. Chatwayne</p>
                                            </div>
                                            <div class="lessons_Wrapper">
                                                <img
                                                    src="img/dashboard-school/list-task.svg"
                                                    alt=""
                                                />
                                                <p>All Lessons</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabpanel Three Ends -->
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
