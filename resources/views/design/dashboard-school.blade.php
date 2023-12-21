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
    <title>Dashboard School</title>
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
            <div
                class="d-inline-flex mb-4 schoolSideMenuButton"
                id="schoolSideMenuButton"
            >
                <div class="btn btn-light">
                    <img src="img/starsIcon/menusidebar.svg" alt="inoura" />
                </div>
            </div>
            <div class="row row_gap_20">
                <div class="col-xl-3 col-lg-12 sideBarColumn" id="schoolSideMenu">
                    <div class="card sidebar_Card">
                        <div
                            class="d-inline-flex justify-content-end mb-2 closeBtn"
                            id="closeSchoolSideBtn"
                        >
                            <div class="btn btn-light">
                                <img src="img/categoriesPage/close.svg" alt="inoura" />
                            </div>
                        </div>
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
                <div class="col-xl-6 col-lg-8 col-sm-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Classes Wrapper starts -->
                            <div class="classes_Card_Wrapper">
                                <div class="classes_Heading">
                                    <h3>My Classes</h3>
                                    <div class="open_Wrapper">
                                        <a href="{{ url('/dashboard/my-classes') }}">
                                            <p>Open all</p>
                                            <img
                                                src="img/dashboard-school/chevron-right.svg"
                                                alt=""
                                            />
                                        </a>
                                    </div>
                                </div>
                                <div class="cards_Wrapper">
                                    <div class="card">
                                        <img src="img/dashboard-school/Literature.svg" alt="" />
                                        <div class="name_designation">
                                            <img src="img/dashboard/photo.svg" alt="" />
                                            <div class="text_Content">
                                                <h4>Literature</h4>
                                                <p>Mrs. Chatwayne</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="img/dashboard-school/chemistry.svg" alt="" />
                                        <div class="name_designation">
                                            <img src="img/dashboard/photo.svg" alt="" />
                                            <div class="text_Content">
                                                <h4>Literature</h4>
                                                <p>Mrs. Chatwayne</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="img/dashboard-school/geometry.svg" alt="" />
                                        <div class="name_designation">
                                            <img src="img/dashboard/photo.svg" alt="" />
                                            <div class="text_Content">
                                                <h4>Literature</h4>
                                                <p>Mrs. Chatwayne</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="classes_Btn">
                                    <img src="img/dashboard-school/plus-circle.svg" />
                                    <button>Add New Class</button>
                                </div>
                            </div>
                            <!-- Classes Wrapper ends -->

                            <!-- Mentor Wrapper starts -->
                            <div class="mentor_Card_Wrapper">
                                <div class="mentors_Heading">
                                    <h3>My Mentors</h3>
                                    <div class="view_Wrapper">
                                        <a href="{{ url('/design/dashboard-school-mentorship') }}">
                                            <p>View all</p>
                                            <img
                                                src="img/dashboard-school/chevron-right.svg"
                                                alt=""
                                            />
                                        </a>
                                    </div>
                                </div>
                                <div class="cards_Wrapper">
                                    <div class="card">
                                        <div class="name_designation">
                                            <img src="img/dashboard/photo.svg" alt="" />
                                            <div class="text_Content">
                                                <h4>Literature</h4>
                                                <p>Mrs. Chatwayne</p>
                                            </div>
                                        </div>
                                        <div class="touch_Wrapper">
                                            <button>Get in touch</button>
                                            <img src="img/dashboard-school/touch.svg" />
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="name_designation">
                                            <img src="img/dashboard/photo.svg" alt="" />
                                            <div class="text_Content">
                                                <h4>Literature</h4>
                                                <p>Mrs. Chatwayne</p>
                                            </div>
                                        </div>
                                        <div class="touch_Wrapper">
                                            <button>Get in touch</button>
                                            <img src="img/dashboard-school/touch.svg" />
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="name_designation">
                                            <img src="img/dashboard/photo.svg" alt="" />
                                            <div class="text_Content">
                                                <h4>Literature</h4>
                                                <p>Mrs. Chatwayne</p>
                                            </div>
                                        </div>
                                        <div class="touch_Wrapper">
                                            <button>Get in touch</button>
                                            <img src="img/dashboard-school/touch.svg" />
                                        </div>
                                    </div>
                                </div>
                                <div class="classes_Btn">
                                    <img src="img/dashboard-school/search_Mentor.svg" />
                                    <button>Find New Mentor</button>
                                </div>
                            </div>
                            <!-- Mentor Wrapper ends -->
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-12">
                    <!-- Scheduling Calendar Card starts -->
                    <div class="card schedule_Card">
                        <div class="schedule_Heading">
                            <h3>My Schedule</h3>
                            <a href="{{ url('/design/calender') }}">
                                <div class="view_Wrapper">
                                    <p>View all</p>
                                    <img src="img/dashboard-school/chevron-right.svg" alt=""/>
                                </div>
                            </a>
                        </div>
                        <!-- lecture scheduled Card starts -->
                        <div class="card time_Scheduled_Card">
                            <h4>Frontend basics: HTML and CSS</h4>
                            <div class="time_Wrapper">
                                <img src="img/dashboard-school/clock.svg" alt="" />
                                <p>15:00 - 16:20</p>
                            </div>
                        </div>
                        <!-- lecture scheduled Card ends -->

                        <!-- lecture scheduled Card starts -->
                        <div class="card time_Scheduled_Card">
                            <h4>Frontend basics: HTML and CSS</h4>
                            <div class="time_Wrapper">
                                <img src="img/dashboard-school/clock.svg" alt="" />
                                <p>15:00 - 16:20</p>
                            </div>
                        </div>
                        <!-- lecture scheduled Card ends -->

                        <div class="open_All">
                            <p>Open all</p>
                            <img src="img/dashboard-school/chevron-right.svg" alt="" />
                        </div>
                    </div>
                    <!-- Scheduling Calendar Card Ends -->

                    <!-- HomeWork Card starts -->
                    <div class="card homeWork_Card">
                        <div class="homeWork_Heading">
                            <h3>My Homeworks</h3>
                            <div class="view_Wrapper">
                                <p>View all</p>
                                <img src="img/dashboard-school/chevron-right.svg" alt="" />
                            </div>
                        </div>
                        <!-- HomeWork Card starts -->
                        <div class="card homeWork_Subject_Card">
                            <div class="subject_Name">
                                <h4>Tags Test</h4>
                                <p>Chemistry</p>
                            </div>
                            <div class="icon_Wrapper">
                                <img
                                    src="img/dashboard-school/exclamation-circle.svg"
                                    alt=""
                                />
                            </div>
                        </div>
                        <!-- HomeWork Card ends -->

                        <!-- HomeWork Card starts -->
                        <div class="card homeWork_Subject_Card">
                            <div class="subject_Name">
                                <h4>Grammar Test</h4>
                                <p>Literature</p>
                            </div>
                            <div class="icon_Wrapper">
                                <img
                                    src="img/dashboard-school/exclamation-circle.svg"
                                    alt=""
                                />
                            </div>
                        </div>
                        <!-- HomeWork Card ends -->

                        <!-- HomeWork Card starts -->
                        <div class="card homeWork_Subject_Card">
                            <div class="subject_Name">
                                <h4>Grammar Test</h4>
                                <p>Geometry</p>
                            </div>
                            <div class="icon_Wrapper">
                                <img
                                    src="img/dashboard-school/exclamation-circle.svg"
                                    alt=""
                                />
                            </div>
                        </div>
                        <!-- HomeWork Card ends -->

                        <div class="open_All">
                            <p>Open all</p>
                            <img src="img/dashboard-school/chevron-right.svg" alt="" />
                        </div>
                    </div>
                    <!-- HomeWork Card Ends -->
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
