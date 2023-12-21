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
                                class="seachBtn"
                                alt="search"
                            />
                        </li>
                    </ul>
                    <form class="form-inline mt-2 mb-4 mt-lg-0 mb-lg-0 navbarBtn">
                        <a href="{{ url('/design/my-courses') }}" class="profileDetail">My Courses</a>

                        <a href="{{ url('/design/my-courses') }}" class="navIcons">
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
<div class="myMentor">
    <div class="subjectDetail">
        <div class="container px-lg-0">
            <div class="row">
                <!-- side bar column -->
                <div class="col-xl-3 col-lg-12 sideBarColumn">
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
                    <div class="mentorTabWrap">
                        <h2 class="heading">Mentors</h2>
                        <div class="courseOverview">
                            <div class="tabbingWrapper">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a
                                            class="nav-link active"
                                            id="pills-allMentors-tab"
                                            data-toggle="pill"
                                            href="#pills-allMentors"
                                            role="tab"
                                            aria-controls="pills-allMentors"
                                            aria-selected="true"
                                        >
                                            All mentors</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            id="pills-myMentors-tab"
                                            data-toggle="pill"
                                            href="#pills-myMentors"
                                            role="tab"
                                            aria-controls="pills-myMentors"
                                            aria-selected="false"
                                        >My mentors</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            id="pills-favoritedMentor-tab"
                                            data-toggle="pill"
                                            href="#pills-favoritedMentor"
                                            role="tab"
                                            aria-controls="pills-favoritedMentor"
                                            aria-selected="false"
                                        >Favorited</a
                                        >
                                    </li>
                                </ul>
                            </div>
                            <div class="tabContentWrapper">
                                <div class="tab-content" id="pills-tabContent">
                                    <div
                                        class="tab-pane fade show active"
                                        id="pills-allMentors"
                                        role="tabpanel"
                                        aria-labelledby="pills-allMentors-tab"
                                    >
                                        <div class="instructorInfo">
                                            <div class="card">
                                                <div
                                                    class="row align-items-start text-center text-md-left"
                                                >
                                                    <div class="col-md-3 pr-0 mb-3 mb-md-0">
                                                        <img
                                                            src="img/courseDetail/instructorImg.svg"
                                                            class="card-img"
                                                            alt="inoura"
                                                        />
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="card-body">
                                                            <a href="{{ url('/design/sub-mentor') }}">
                                                                <h4>Mark Smith</h4>
                                                            </a>
                                                            <h5 class="card-title">
                                                                Learning Experience Designer at Lyft
                                                            </h5>
                                                            <div class="card-text">
                                                                <p>
                                                                    Laura is a Learning Experience Designer at
                                                                    Lyft and an Ideo U teaching team lead. In
                                                                    past lives, she's been a User Experience
                                                                    Designer at SAP, taught at the Stanford
                                                                    d.school, and has conducted hundreds of
                                                                    design thinking workshops.
                                                                </p>
                                                                <p>
                                      <span
                                      >When she's not teaching people about
                                        using game mechanics for learning or
                                        interview techniques for empathy work,
                                        Laura can be found competing in
                                        triathlons, riding hundreds of miles on
                                        her bike for fun, or hunting for the
                                        best gluten-free bakeries around.</span
                                      >Read more
                                                                </p>
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center flex-column flex-md-row"
                                                            >
                                                                <div class="d-flex tagWrapper">
                                                                    <div
                                                                        class="tags enrollment d-flex align-items-center"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/star.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div>4.4 (2,199 Reviews)</div>
                                                                    </div>
                                                                    <div
                                                                        class="tags enrollmen d-flex align-items-centert"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/collection.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div>5 283 Lessons</div>
                                                                    </div>
                                                                    <div
                                                                        class="tags duration d-flex align-items-center"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/playBtn.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div class="time">3 Courses</div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center getInTouchCta"
                                                                >
                                                                    Get in touch<svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16"
                                                                        height="17"
                                                                        viewBox="0 0 16 17"
                                                                        fill="none"
                                                                    >
                                                                        <g clip-path="url(#clip0_1025_1982)">
                                                                            <path
                                                                                d="M15.9647 1.18605C16.0011 1.09519 16.01 0.995646 15.9904 0.89977C15.9707 0.803893 15.9233 0.715897 15.8541 0.646691C15.7849 0.577484 15.6969 0.530111 15.601 0.510443C15.5052 0.490776 15.4056 0.49968 15.3147 0.53605L0.76775 6.35505H0.76675L0.31475 6.53505C0.22914 6.5692 0.154635 6.62635 0.0994654 6.70018C0.0442956 6.77401 0.0106078 6.86166 0.00212322 6.95344C-0.00636132 7.04522 0.0106876 7.13755 0.0513867 7.22025C0.0920859 7.30295 0.154851 7.37279 0.23275 7.42205L0.64275 7.68205L0.64375 7.68405L5.63875 10.8621L8.81675 15.8571L8.81875 15.8591L9.07875 16.2691C9.12817 16.3466 9.19805 16.4091 9.28068 16.4495C9.36332 16.49 9.45551 16.5068 9.54711 16.4983C9.63871 16.4897 9.72617 16.456 9.79985 16.4009C9.87354 16.3458 9.9306 16.2715 9.96475 16.1861L15.9647 1.18605ZM14.1317 3.07605L6.63775 10.5701L6.42275 10.2321C6.38336 10.17 6.33078 10.1174 6.26875 10.0781L5.93075 9.86305L13.4247 2.36905L14.6027 1.89805L14.1327 3.07605H14.1317Z"
                                                                                fill="#154BD8"
                                                                            />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_1025_1982">
                                                                                <rect
                                                                                    width="16"
                                                                                    height="16"
                                                                                    fill="white"
                                                                                    transform="translate(0 0.5)"
                                                                                />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div
                                                    class="row align-items-start text-center text-md-left"
                                                >
                                                    <div class="col-md-3 pr-0 mb-3 mb-md-0">
                                                        <img
                                                            src="img/courseDetail/instructorImg.svg"
                                                            class="card-img"
                                                            alt="inoura"
                                                        />
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="card-body">
                                                            <a href="{{ url('/design/sub-mentor') }}">
                                                                <h4>Mark Smith</h4>
                                                            </a>
                                                            <h5 class="card-title">
                                                                Learning Experience Designer at Lyft
                                                            </h5>
                                                            <div class="card-text">
                                                                <p>
                                                                    Laura is a Learning Experience Designer at
                                                                    Lyft and an Ideo U teaching team lead. In
                                                                    past lives, she's been a User Experience
                                                                    Designer at SAP, taught at the Stanford
                                                                    d.school, and has conducted hundreds of
                                                                    design thinking workshops.
                                                                </p>
                                                                <p>
                                      <span
                                      >When she's not teaching people about
                                        using game mechanics for learning or
                                        interview techniques for empathy work,
                                        Laura can be found competing in
                                        triathlons, riding hundreds of miles on
                                        her bike for fun, or hunting for the
                                        best gluten-free bakeries around.</span
                                      >Read more
                                                                </p>
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center flex-column flex-md-row"
                                                            >
                                                                <div class="d-flex tagWrapper">
                                                                    <div
                                                                        class="tags enrollment d-flex align-items-center"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/star.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div>4.4 (2,199 Reviews)</div>
                                                                    </div>
                                                                    <div
                                                                        class="tags enrollmen d-flex align-items-centert"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/collection.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div>5 283 Lessons</div>
                                                                    </div>
                                                                    <div
                                                                        class="tags duration d-flex align-items-center"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/playBtn.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div class="time">3 Courses</div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center getInTouchCta"
                                                                >
                                                                    Get in touch<svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16"
                                                                        height="17"
                                                                        viewBox="0 0 16 17"
                                                                        fill="none"
                                                                    >
                                                                        <g clip-path="url(#clip0_1025_1982)">
                                                                            <path
                                                                                d="M15.9647 1.18605C16.0011 1.09519 16.01 0.995646 15.9904 0.89977C15.9707 0.803893 15.9233 0.715897 15.8541 0.646691C15.7849 0.577484 15.6969 0.530111 15.601 0.510443C15.5052 0.490776 15.4056 0.49968 15.3147 0.53605L0.76775 6.35505H0.76675L0.31475 6.53505C0.22914 6.5692 0.154635 6.62635 0.0994654 6.70018C0.0442956 6.77401 0.0106078 6.86166 0.00212322 6.95344C-0.00636132 7.04522 0.0106876 7.13755 0.0513867 7.22025C0.0920859 7.30295 0.154851 7.37279 0.23275 7.42205L0.64275 7.68205L0.64375 7.68405L5.63875 10.8621L8.81675 15.8571L8.81875 15.8591L9.07875 16.2691C9.12817 16.3466 9.19805 16.4091 9.28068 16.4495C9.36332 16.49 9.45551 16.5068 9.54711 16.4983C9.63871 16.4897 9.72617 16.456 9.79985 16.4009C9.87354 16.3458 9.9306 16.2715 9.96475 16.1861L15.9647 1.18605ZM14.1317 3.07605L6.63775 10.5701L6.42275 10.2321C6.38336 10.17 6.33078 10.1174 6.26875 10.0781L5.93075 9.86305L13.4247 2.36905L14.6027 1.89805L14.1327 3.07605H14.1317Z"
                                                                                fill="#154BD8"
                                                                            />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_1025_1982">
                                                                                <rect
                                                                                    width="16"
                                                                                    height="16"
                                                                                    fill="white"
                                                                                    transform="translate(0 0.5)"
                                                                                />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div
                                                    class="row align-items-start text-center text-md-left"
                                                >
                                                    <div class="col-md-3 pr-0 mb-3 mb-md-0">
                                                        <img
                                                            src="img/dashboard/mentor1.svg"
                                                            class="card-img"
                                                            alt="inoura"
                                                        />
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="card-body">
                                                            <a href="{{ url('/design/sub-mentor') }}">
                                                                <h4>Mark Smith</h4>
                                                            </a>
                                                            <h5 class="card-title">
                                                                Learning Experience Designer at Lyft
                                                            </h5>
                                                            <div class="card-text">
                                                                <p>
                                                                    Laura is a Learning Experience Designer at
                                                                    Lyft and an Ideo U teaching team lead. In
                                                                    past lives, she's been a User Experience
                                                                    Designer at SAP, taught at the Stanford
                                                                    d.school, and has conducted hundreds of
                                                                    design thinking workshops.
                                                                </p>
                                                                <p>
                                      <span
                                      >When she's not teaching people about
                                        using game mechanics for learning or
                                        interview techniques for empathy work,
                                        Laura can be found competing in
                                        triathlons, riding hundreds of miles on
                                        her bike for fun, or hunting for the
                                        best gluten-free bakeries around.</span
                                      >Read more
                                                                </p>
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center flex-column flex-md-row"
                                                            >
                                                                <div class="d-flex tagWrapper">
                                                                    <div
                                                                        class="tags enrollment d-flex align-items-center"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/star.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div>4.4 (2,199 Reviews)</div>
                                                                    </div>
                                                                    <div
                                                                        class="tags enrollmen d-flex align-items-centert"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/collection.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div>5 283 Lessons</div>
                                                                    </div>
                                                                    <div
                                                                        class="tags duration d-flex align-items-center"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/playBtn.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div class="time">3 Courses</div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center getInTouchCta"
                                                                >
                                                                    Get in touch<svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16"
                                                                        height="17"
                                                                        viewBox="0 0 16 17"
                                                                        fill="none"
                                                                    >
                                                                        <g clip-path="url(#clip0_1025_1982)">
                                                                            <path
                                                                                d="M15.9647 1.18605C16.0011 1.09519 16.01 0.995646 15.9904 0.89977C15.9707 0.803893 15.9233 0.715897 15.8541 0.646691C15.7849 0.577484 15.6969 0.530111 15.601 0.510443C15.5052 0.490776 15.4056 0.49968 15.3147 0.53605L0.76775 6.35505H0.76675L0.31475 6.53505C0.22914 6.5692 0.154635 6.62635 0.0994654 6.70018C0.0442956 6.77401 0.0106078 6.86166 0.00212322 6.95344C-0.00636132 7.04522 0.0106876 7.13755 0.0513867 7.22025C0.0920859 7.30295 0.154851 7.37279 0.23275 7.42205L0.64275 7.68205L0.64375 7.68405L5.63875 10.8621L8.81675 15.8571L8.81875 15.8591L9.07875 16.2691C9.12817 16.3466 9.19805 16.4091 9.28068 16.4495C9.36332 16.49 9.45551 16.5068 9.54711 16.4983C9.63871 16.4897 9.72617 16.456 9.79985 16.4009C9.87354 16.3458 9.9306 16.2715 9.96475 16.1861L15.9647 1.18605ZM14.1317 3.07605L6.63775 10.5701L6.42275 10.2321C6.38336 10.17 6.33078 10.1174 6.26875 10.0781L5.93075 9.86305L13.4247 2.36905L14.6027 1.89805L14.1327 3.07605H14.1317Z"
                                                                                fill="#154BD8"
                                                                            />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_1025_1982">
                                                                                <rect
                                                                                    width="16"
                                                                                    height="16"
                                                                                    fill="white"
                                                                                    transform="translate(0 0.5)"
                                                                                />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div
                                                    class="row align-items-start text-center text-md-left"
                                                >
                                                    <div class="col-md-3 pr-0 mb-3 mb-md-0">
                                                        <img
                                                            src="img/dashboard/mentor2.svg"
                                                            class="card-img"
                                                            alt="inoura"
                                                        />
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="card-body">
                                                            <a href="{{ url('/design/sub-mentor') }}">
                                                                <h4>Mark Smith</h4>
                                                            </a>
                                                            <h5 class="card-title">
                                                                Learning Experience Designer at Lyft
                                                            </h5>
                                                            <div class="card-text">
                                                                <p>
                                                                    Laura is a Learning Experience Designer at
                                                                    Lyft and an Ideo U teaching team lead. In
                                                                    past lives, she's been a User Experience
                                                                    Designer at SAP, taught at the Stanford
                                                                    d.school, and has conducted hundreds of
                                                                    design thinking workshops.
                                                                </p>
                                                                <p>
                                      <span
                                      >When she's not teaching people about
                                        using game mechanics for learning or
                                        interview techniques for empathy work,
                                        Laura can be found competing in
                                        triathlons, riding hundreds of miles on
                                        her bike for fun, or hunting for the
                                        best gluten-free bakeries around.</span
                                      >Read more
                                                                </p>
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center flex-column flex-md-row"
                                                            >
                                                                <div class="d-flex tagWrapper">
                                                                    <div
                                                                        class="tags enrollment d-flex align-items-center"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/star.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div>4.4 (2,199 Reviews)</div>
                                                                    </div>
                                                                    <div
                                                                        class="tags enrollmen d-flex align-items-centert"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/collection.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div>5 283 Lessons</div>
                                                                    </div>
                                                                    <div
                                                                        class="tags duration d-flex align-items-center"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/playBtn.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div class="time">3 Courses</div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center getInTouchCta"
                                                                >
                                                                    Get in touch<svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16"
                                                                        height="17"
                                                                        viewBox="0 0 16 17"
                                                                        fill="none"
                                                                    >
                                                                        <g clip-path="url(#clip0_1025_1982)">
                                                                            <path
                                                                                d="M15.9647 1.18605C16.0011 1.09519 16.01 0.995646 15.9904 0.89977C15.9707 0.803893 15.9233 0.715897 15.8541 0.646691C15.7849 0.577484 15.6969 0.530111 15.601 0.510443C15.5052 0.490776 15.4056 0.49968 15.3147 0.53605L0.76775 6.35505H0.76675L0.31475 6.53505C0.22914 6.5692 0.154635 6.62635 0.0994654 6.70018C0.0442956 6.77401 0.0106078 6.86166 0.00212322 6.95344C-0.00636132 7.04522 0.0106876 7.13755 0.0513867 7.22025C0.0920859 7.30295 0.154851 7.37279 0.23275 7.42205L0.64275 7.68205L0.64375 7.68405L5.63875 10.8621L8.81675 15.8571L8.81875 15.8591L9.07875 16.2691C9.12817 16.3466 9.19805 16.4091 9.28068 16.4495C9.36332 16.49 9.45551 16.5068 9.54711 16.4983C9.63871 16.4897 9.72617 16.456 9.79985 16.4009C9.87354 16.3458 9.9306 16.2715 9.96475 16.1861L15.9647 1.18605ZM14.1317 3.07605L6.63775 10.5701L6.42275 10.2321C6.38336 10.17 6.33078 10.1174 6.26875 10.0781L5.93075 9.86305L13.4247 2.36905L14.6027 1.89805L14.1327 3.07605H14.1317Z"
                                                                                fill="#154BD8"
                                                                            />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_1025_1982">
                                                                                <rect
                                                                                    width="16"
                                                                                    height="16"
                                                                                    fill="white"
                                                                                    transform="translate(0 0.5)"
                                                                                />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div
                                                    class="row align-items-start text-center text-md-left"
                                                >
                                                    <div class="col-md-3 pr-0 mb-3 mb-md-0">
                                                        <img
                                                            src="img/dashboard/mentor1.svg"
                                                            class="card-img"
                                                            alt="inoura"
                                                        />
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="card-body">
                                                            <a href="{{ url('/design/sub-mentor') }}">
                                                                <h4>Mark Smith</h4>
                                                            </a>
                                                            <h5 class="card-title">
                                                                Learning Experience Designer at Lyft
                                                            </h5>
                                                            <div class="card-text">
                                                                <p>
                                                                    Laura is a Learning Experience Designer at
                                                                    Lyft and an Ideo U teaching team lead. In
                                                                    past lives, she's been a User Experience
                                                                    Designer at SAP, taught at the Stanford
                                                                    d.school, and has conducted hundreds of
                                                                    design thinking workshops.
                                                                </p>
                                                                <p>
                                      <span
                                      >When she's not teaching people about
                                        using game mechanics for learning or
                                        interview techniques for empathy work,
                                        Laura can be found competing in
                                        triathlons, riding hundreds of miles on
                                        her bike for fun, or hunting for the
                                        best gluten-free bakeries around.</span
                                      >Read more
                                                                </p>
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center flex-column flex-md-row"
                                                            >
                                                                <div class="d-flex tagWrapper">
                                                                    <div
                                                                        class="tags enrollment d-flex align-items-center"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/star.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div>4.4 (2,199 Reviews)</div>
                                                                    </div>
                                                                    <div
                                                                        class="tags enrollmen d-flex align-items-centert"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/collection.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div>5 283 Lessons</div>
                                                                    </div>
                                                                    <div
                                                                        class="tags duration d-flex align-items-center"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/playBtn.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div class="time">3 Courses</div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center getInTouchCta"
                                                                >
                                                                    Get in touch<svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16"
                                                                        height="17"
                                                                        viewBox="0 0 16 17"
                                                                        fill="none"
                                                                    >
                                                                        <g clip-path="url(#clip0_1025_1982)">
                                                                            <path
                                                                                d="M15.9647 1.18605C16.0011 1.09519 16.01 0.995646 15.9904 0.89977C15.9707 0.803893 15.9233 0.715897 15.8541 0.646691C15.7849 0.577484 15.6969 0.530111 15.601 0.510443C15.5052 0.490776 15.4056 0.49968 15.3147 0.53605L0.76775 6.35505H0.76675L0.31475 6.53505C0.22914 6.5692 0.154635 6.62635 0.0994654 6.70018C0.0442956 6.77401 0.0106078 6.86166 0.00212322 6.95344C-0.00636132 7.04522 0.0106876 7.13755 0.0513867 7.22025C0.0920859 7.30295 0.154851 7.37279 0.23275 7.42205L0.64275 7.68205L0.64375 7.68405L5.63875 10.8621L8.81675 15.8571L8.81875 15.8591L9.07875 16.2691C9.12817 16.3466 9.19805 16.4091 9.28068 16.4495C9.36332 16.49 9.45551 16.5068 9.54711 16.4983C9.63871 16.4897 9.72617 16.456 9.79985 16.4009C9.87354 16.3458 9.9306 16.2715 9.96475 16.1861L15.9647 1.18605ZM14.1317 3.07605L6.63775 10.5701L6.42275 10.2321C6.38336 10.17 6.33078 10.1174 6.26875 10.0781L5.93075 9.86305L13.4247 2.36905L14.6027 1.89805L14.1327 3.07605H14.1317Z"
                                                                                fill="#154BD8"
                                                                            />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_1025_1982">
                                                                                <rect
                                                                                    width="16"
                                                                                    height="16"
                                                                                    fill="white"
                                                                                    transform="translate(0 0.5)"
                                                                                />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="pills-myMentors"
                                        role="tabpanel"
                                        aria-labelledby="pills-myMentors-tab"
                                    >
                                        <div class="instructorInfo">
                                            <div class="card">
                                                <div
                                                    class="row align-items-start text-center text-md-left"
                                                >
                                                    <div class="col-md-3 pr-0 mb-3 mb-md-0">
                                                        <img
                                                            src="img/courseDetail/instructorImg.svg"
                                                            class="card-img"
                                                            alt="inoura"
                                                        />
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="card-body">
                                                            <a href="{{ url('/design/sub-mentor') }}">
                                                                <h4>Mark Smith</h4>
                                                            </a>
                                                            <h5 class="card-title">
                                                                Learning Experience Designer at Lyft
                                                            </h5>
                                                            <div class="card-text">
                                                                <p>
                                                                    Laura is a Learning Experience Designer at
                                                                    Lyft and an Ideo U teaching team lead. In
                                                                    past lives, she's been a User Experience
                                                                    Designer at SAP, taught at the Stanford
                                                                    d.school, and has conducted hundreds of
                                                                    design thinking workshops.
                                                                </p>
                                                                <p>
                                      <span
                                      >When she's not teaching people about
                                        using game mechanics for learning or
                                        interview techniques for empathy work,
                                        Laura can be found competing in
                                        triathlons, riding hundreds of miles on
                                        her bike for fun, or hunting for the
                                        best gluten-free bakeries around.</span
                                      >Read more
                                                                </p>
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center flex-column flex-md-row"
                                                            >
                                                                <div class="d-flex tagWrapper">
                                                                    <div
                                                                        class="tags enrollment d-flex align-items-center"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/star.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div>4.4 (2,199 Reviews)</div>
                                                                    </div>
                                                                    <div
                                                                        class="tags enrollmen d-flex align-items-centert"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/collection.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div>5 283 Lessons</div>
                                                                    </div>
                                                                    <div
                                                                        class="tags duration d-flex align-items-center"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/playBtn.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div class="time">3 Courses</div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center getInTouchCta"
                                                                >
                                                                    Get in touch<svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16"
                                                                        height="17"
                                                                        viewBox="0 0 16 17"
                                                                        fill="none"
                                                                    >
                                                                        <g clip-path="url(#clip0_1025_1982)">
                                                                            <path
                                                                                d="M15.9647 1.18605C16.0011 1.09519 16.01 0.995646 15.9904 0.89977C15.9707 0.803893 15.9233 0.715897 15.8541 0.646691C15.7849 0.577484 15.6969 0.530111 15.601 0.510443C15.5052 0.490776 15.4056 0.49968 15.3147 0.53605L0.76775 6.35505H0.76675L0.31475 6.53505C0.22914 6.5692 0.154635 6.62635 0.0994654 6.70018C0.0442956 6.77401 0.0106078 6.86166 0.00212322 6.95344C-0.00636132 7.04522 0.0106876 7.13755 0.0513867 7.22025C0.0920859 7.30295 0.154851 7.37279 0.23275 7.42205L0.64275 7.68205L0.64375 7.68405L5.63875 10.8621L8.81675 15.8571L8.81875 15.8591L9.07875 16.2691C9.12817 16.3466 9.19805 16.4091 9.28068 16.4495C9.36332 16.49 9.45551 16.5068 9.54711 16.4983C9.63871 16.4897 9.72617 16.456 9.79985 16.4009C9.87354 16.3458 9.9306 16.2715 9.96475 16.1861L15.9647 1.18605ZM14.1317 3.07605L6.63775 10.5701L6.42275 10.2321C6.38336 10.17 6.33078 10.1174 6.26875 10.0781L5.93075 9.86305L13.4247 2.36905L14.6027 1.89805L14.1327 3.07605H14.1317Z"
                                                                                fill="#154BD8"
                                                                            />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_1025_1982">
                                                                                <rect
                                                                                    width="16"
                                                                                    height="16"
                                                                                    fill="white"
                                                                                    transform="translate(0 0.5)"
                                                                                />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div
                                                    class="row align-items-start text-center text-md-left"
                                                >
                                                    <div class="col-md-3 pr-0 mb-3 mb-md-0">
                                                        <img
                                                            src="img/courseDetail/instructorImg.svg"
                                                            class="card-img"
                                                            alt="inoura"
                                                        />
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="card-body">
                                                            <a href="{{ url('/design/sub-mentor') }}">
                                                                <h4>Mark Smith</h4>
                                                            </a>
                                                            <h5 class="card-title">
                                                                Learning Experience Designer at Lyft
                                                            </h5>
                                                            <div class="card-text">
                                                                <p>
                                                                    Laura is a Learning Experience Designer at
                                                                    Lyft and an Ideo U teaching team lead. In
                                                                    past lives, she's been a User Experience
                                                                    Designer at SAP, taught at the Stanford
                                                                    d.school, and has conducted hundreds of
                                                                    design thinking workshops.
                                                                </p>
                                                                <p>
                                      <span
                                      >When she's not teaching people about
                                        using game mechanics for learning or
                                        interview techniques for empathy work,
                                        Laura can be found competing in
                                        triathlons, riding hundreds of miles on
                                        her bike for fun, or hunting for the
                                        best gluten-free bakeries around.</span
                                      >Read more
                                                                </p>
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center flex-column flex-md-row"
                                                            >
                                                                <div class="d-flex tagWrapper">
                                                                    <div
                                                                        class="tags enrollment d-flex align-items-center"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/star.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div>4.4 (2,199 Reviews)</div>
                                                                    </div>
                                                                    <div
                                                                        class="tags enrollmen d-flex align-items-centert"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/collection.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div>5 283 Lessons</div>
                                                                    </div>
                                                                    <div
                                                                        class="tags duration d-flex align-items-center"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/playBtn.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div class="time">3 Courses</div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center getInTouchCta"
                                                                >
                                                                    Get in touch<svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16"
                                                                        height="17"
                                                                        viewBox="0 0 16 17"
                                                                        fill="none"
                                                                    >
                                                                        <g clip-path="url(#clip0_1025_1982)">
                                                                            <path
                                                                                d="M15.9647 1.18605C16.0011 1.09519 16.01 0.995646 15.9904 0.89977C15.9707 0.803893 15.9233 0.715897 15.8541 0.646691C15.7849 0.577484 15.6969 0.530111 15.601 0.510443C15.5052 0.490776 15.4056 0.49968 15.3147 0.53605L0.76775 6.35505H0.76675L0.31475 6.53505C0.22914 6.5692 0.154635 6.62635 0.0994654 6.70018C0.0442956 6.77401 0.0106078 6.86166 0.00212322 6.95344C-0.00636132 7.04522 0.0106876 7.13755 0.0513867 7.22025C0.0920859 7.30295 0.154851 7.37279 0.23275 7.42205L0.64275 7.68205L0.64375 7.68405L5.63875 10.8621L8.81675 15.8571L8.81875 15.8591L9.07875 16.2691C9.12817 16.3466 9.19805 16.4091 9.28068 16.4495C9.36332 16.49 9.45551 16.5068 9.54711 16.4983C9.63871 16.4897 9.72617 16.456 9.79985 16.4009C9.87354 16.3458 9.9306 16.2715 9.96475 16.1861L15.9647 1.18605ZM14.1317 3.07605L6.63775 10.5701L6.42275 10.2321C6.38336 10.17 6.33078 10.1174 6.26875 10.0781L5.93075 9.86305L13.4247 2.36905L14.6027 1.89805L14.1327 3.07605H14.1317Z"
                                                                                fill="#154BD8"
                                                                            />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_1025_1982">
                                                                                <rect
                                                                                    width="16"
                                                                                    height="16"
                                                                                    fill="white"
                                                                                    transform="translate(0 0.5)"
                                                                                />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div
                                                    class="row align-items-start text-center text-md-left"
                                                >
                                                    <div class="col-md-3 pr-0 mb-3 mb-md-0">
                                                        <img
                                                            src="img/dashboard/mentor1.svg"
                                                            class="card-img"
                                                            alt="inoura"
                                                        />
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="card-body">
                                                            <a href="{{ url('/design/sub-mentor') }}">
                                                                <h4>Mark Smith</h4>
                                                            </a>
                                                            <h5 class="card-title">
                                                                Learning Experience Designer at Lyft
                                                            </h5>
                                                            <div class="card-text">
                                                                <p>
                                                                    Laura is a Learning Experience Designer at
                                                                    Lyft and an Ideo U teaching team lead. In
                                                                    past lives, she's been a User Experience
                                                                    Designer at SAP, taught at the Stanford
                                                                    d.school, and has conducted hundreds of
                                                                    design thinking workshops.
                                                                </p>
                                                                <p>
                                      <span
                                      >When she's not teaching people about
                                        using game mechanics for learning or
                                        interview techniques for empathy work,
                                        Laura can be found competing in
                                        triathlons, riding hundreds of miles on
                                        her bike for fun, or hunting for the
                                        best gluten-free bakeries around.</span
                                      >Read more
                                                                </p>
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center flex-column flex-md-row"
                                                            >
                                                                <div class="d-flex tagWrapper">
                                                                    <div
                                                                        class="tags enrollment d-flex align-items-center"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/star.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div>4.4 (2,199 Reviews)</div>
                                                                    </div>
                                                                    <div
                                                                        class="tags enrollmen d-flex align-items-centert"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/collection.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div>5 283 Lessons</div>
                                                                    </div>
                                                                    <div
                                                                        class="tags duration d-flex align-items-center"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/playBtn.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div class="time">3 Courses</div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center getInTouchCta"
                                                                >
                                                                    Get in touch<svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16"
                                                                        height="17"
                                                                        viewBox="0 0 16 17"
                                                                        fill="none"
                                                                    >
                                                                        <g clip-path="url(#clip0_1025_1982)">
                                                                            <path
                                                                                d="M15.9647 1.18605C16.0011 1.09519 16.01 0.995646 15.9904 0.89977C15.9707 0.803893 15.9233 0.715897 15.8541 0.646691C15.7849 0.577484 15.6969 0.530111 15.601 0.510443C15.5052 0.490776 15.4056 0.49968 15.3147 0.53605L0.76775 6.35505H0.76675L0.31475 6.53505C0.22914 6.5692 0.154635 6.62635 0.0994654 6.70018C0.0442956 6.77401 0.0106078 6.86166 0.00212322 6.95344C-0.00636132 7.04522 0.0106876 7.13755 0.0513867 7.22025C0.0920859 7.30295 0.154851 7.37279 0.23275 7.42205L0.64275 7.68205L0.64375 7.68405L5.63875 10.8621L8.81675 15.8571L8.81875 15.8591L9.07875 16.2691C9.12817 16.3466 9.19805 16.4091 9.28068 16.4495C9.36332 16.49 9.45551 16.5068 9.54711 16.4983C9.63871 16.4897 9.72617 16.456 9.79985 16.4009C9.87354 16.3458 9.9306 16.2715 9.96475 16.1861L15.9647 1.18605ZM14.1317 3.07605L6.63775 10.5701L6.42275 10.2321C6.38336 10.17 6.33078 10.1174 6.26875 10.0781L5.93075 9.86305L13.4247 2.36905L14.6027 1.89805L14.1327 3.07605H14.1317Z"
                                                                                fill="#154BD8"
                                                                            />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_1025_1982">
                                                                                <rect
                                                                                    width="16"
                                                                                    height="16"
                                                                                    fill="white"
                                                                                    transform="translate(0 0.5)"
                                                                                />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div
                                                    class="row align-items-start text-center text-md-left"
                                                >
                                                    <div class="col-md-3 pr-0 mb-3 mb-md-0">
                                                        <img
                                                            src="img/dashboard/mentor2.svg"
                                                            class="card-img"
                                                            alt="inoura"
                                                        />
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="card-body">
                                                            <a href="{{ url('/design/sub-mentor') }}">
                                                                <h4>Mark Smith</h4>
                                                            </a>
                                                            <h5 class="card-title">
                                                                Learning Experience Designer at Lyft
                                                            </h5>
                                                            <div class="card-text">
                                                                <p>
                                                                    Laura is a Learning Experience Designer at
                                                                    Lyft and an Ideo U teaching team lead. In
                                                                    past lives, she's been a User Experience
                                                                    Designer at SAP, taught at the Stanford
                                                                    d.school, and has conducted hundreds of
                                                                    design thinking workshops.
                                                                </p>
                                                                <p>
                                      <span
                                      >When she's not teaching people about
                                        using game mechanics for learning or
                                        interview techniques for empathy work,
                                        Laura can be found competing in
                                        triathlons, riding hundreds of miles on
                                        her bike for fun, or hunting for the
                                        best gluten-free bakeries around.</span
                                      >Read more
                                                                </p>
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center flex-column flex-md-row"
                                                            >
                                                                <div class="d-flex tagWrapper">
                                                                    <div
                                                                        class="tags enrollment d-flex align-items-center"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/star.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div>4.4 (2,199 Reviews)</div>
                                                                    </div>
                                                                    <div
                                                                        class="tags enrollmen d-flex align-items-centert"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/collection.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div>5 283 Lessons</div>
                                                                    </div>
                                                                    <div
                                                                        class="tags duration d-flex align-items-center"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/playBtn.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div class="time">3 Courses</div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center getInTouchCta"
                                                                >
                                                                    Get in touch<svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16"
                                                                        height="17"
                                                                        viewBox="0 0 16 17"
                                                                        fill="none"
                                                                    >
                                                                        <g clip-path="url(#clip0_1025_1982)">
                                                                            <path
                                                                                d="M15.9647 1.18605C16.0011 1.09519 16.01 0.995646 15.9904 0.89977C15.9707 0.803893 15.9233 0.715897 15.8541 0.646691C15.7849 0.577484 15.6969 0.530111 15.601 0.510443C15.5052 0.490776 15.4056 0.49968 15.3147 0.53605L0.76775 6.35505H0.76675L0.31475 6.53505C0.22914 6.5692 0.154635 6.62635 0.0994654 6.70018C0.0442956 6.77401 0.0106078 6.86166 0.00212322 6.95344C-0.00636132 7.04522 0.0106876 7.13755 0.0513867 7.22025C0.0920859 7.30295 0.154851 7.37279 0.23275 7.42205L0.64275 7.68205L0.64375 7.68405L5.63875 10.8621L8.81675 15.8571L8.81875 15.8591L9.07875 16.2691C9.12817 16.3466 9.19805 16.4091 9.28068 16.4495C9.36332 16.49 9.45551 16.5068 9.54711 16.4983C9.63871 16.4897 9.72617 16.456 9.79985 16.4009C9.87354 16.3458 9.9306 16.2715 9.96475 16.1861L15.9647 1.18605ZM14.1317 3.07605L6.63775 10.5701L6.42275 10.2321C6.38336 10.17 6.33078 10.1174 6.26875 10.0781L5.93075 9.86305L13.4247 2.36905L14.6027 1.89805L14.1327 3.07605H14.1317Z"
                                                                                fill="#154BD8"
                                                                            />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_1025_1982">
                                                                                <rect
                                                                                    width="16"
                                                                                    height="16"
                                                                                    fill="white"
                                                                                    transform="translate(0 0.5)"
                                                                                />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div
                                                    class="row align-items-start text-center text-md-left"
                                                >
                                                    <div class="col-md-3 pr-0 mb-3 mb-md-0">
                                                        <img
                                                            src="img/dashboard/mentor1.svg"
                                                            class="card-img"
                                                            alt="inoura"
                                                        />
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="card-body">
                                                            <a href="{{ url('/design/sub-mentor') }}">
                                                                <h4>Mark Smith</h4>
                                                            </a>
                                                            <h5 class="card-title">
                                                                Learning Experience Designer at Lyft
                                                            </h5>
                                                            <div class="card-text">
                                                                <p>
                                                                    Laura is a Learning Experience Designer at
                                                                    Lyft and an Ideo U teaching team lead. In
                                                                    past lives, she's been a User Experience
                                                                    Designer at SAP, taught at the Stanford
                                                                    d.school, and has conducted hundreds of
                                                                    design thinking workshops.
                                                                </p>
                                                                <p>
                                      <span
                                      >When she's not teaching people about
                                        using game mechanics for learning or
                                        interview techniques for empathy work,
                                        Laura can be found competing in
                                        triathlons, riding hundreds of miles on
                                        her bike for fun, or hunting for the
                                        best gluten-free bakeries around.</span
                                      >Read more
                                                                </p>
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center flex-column flex-md-row"
                                                            >
                                                                <div class="d-flex tagWrapper">
                                                                    <div
                                                                        class="tags enrollment d-flex align-items-center"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/star.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div>4.4 (2,199 Reviews)</div>
                                                                    </div>
                                                                    <div
                                                                        class="tags enrollmen d-flex align-items-centert"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/collection.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div>5 283 Lessons</div>
                                                                    </div>
                                                                    <div
                                                                        class="tags duration d-flex align-items-center"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/playBtn.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div class="time">3 Courses</div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center getInTouchCta"
                                                                >
                                                                    Get in touch<svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16"
                                                                        height="17"
                                                                        viewBox="0 0 16 17"
                                                                        fill="none"
                                                                    >
                                                                        <g clip-path="url(#clip0_1025_1982)">
                                                                            <path
                                                                                d="M15.9647 1.18605C16.0011 1.09519 16.01 0.995646 15.9904 0.89977C15.9707 0.803893 15.9233 0.715897 15.8541 0.646691C15.7849 0.577484 15.6969 0.530111 15.601 0.510443C15.5052 0.490776 15.4056 0.49968 15.3147 0.53605L0.76775 6.35505H0.76675L0.31475 6.53505C0.22914 6.5692 0.154635 6.62635 0.0994654 6.70018C0.0442956 6.77401 0.0106078 6.86166 0.00212322 6.95344C-0.00636132 7.04522 0.0106876 7.13755 0.0513867 7.22025C0.0920859 7.30295 0.154851 7.37279 0.23275 7.42205L0.64275 7.68205L0.64375 7.68405L5.63875 10.8621L8.81675 15.8571L8.81875 15.8591L9.07875 16.2691C9.12817 16.3466 9.19805 16.4091 9.28068 16.4495C9.36332 16.49 9.45551 16.5068 9.54711 16.4983C9.63871 16.4897 9.72617 16.456 9.79985 16.4009C9.87354 16.3458 9.9306 16.2715 9.96475 16.1861L15.9647 1.18605ZM14.1317 3.07605L6.63775 10.5701L6.42275 10.2321C6.38336 10.17 6.33078 10.1174 6.26875 10.0781L5.93075 9.86305L13.4247 2.36905L14.6027 1.89805L14.1327 3.07605H14.1317Z"
                                                                                fill="#154BD8"
                                                                            />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_1025_1982">
                                                                                <rect
                                                                                    width="16"
                                                                                    height="16"
                                                                                    fill="white"
                                                                                    transform="translate(0 0.5)"
                                                                                />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="pills-favoritedMentor"
                                        role="tabpanel"
                                        aria-labelledby="pills-favoritedMentor-tab"
                                    >
                                        <div class="instructorInfo">
                                            <div class="card">
                                                <div
                                                    class="row align-items-start text-center text-md-left"
                                                >
                                                    <div class="col-md-3 pr-0 mb-3 mb-md-0">
                                                        <img
                                                            src="img/dashboard/mentor1.svg"
                                                            class="card-img"
                                                            alt="inoura"
                                                        />
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="card-body">
                                                            <a href="{{ url('/design/sub-mentor') }}">
                                                                <h4>Mark Smith</h4>
                                                            </a>
                                                            <h5 class="card-title">
                                                                Learning Experience Designer at Lyft
                                                            </h5>
                                                            <div class="card-text">
                                                                <p>
                                                                    Laura is a Learning Experience Designer at
                                                                    Lyft and an Ideo U teaching team lead. In
                                                                    past lives, she's been a User Experience
                                                                    Designer at SAP, taught at the Stanford
                                                                    d.school, and has conducted hundreds of
                                                                    design thinking workshops.
                                                                </p>
                                                                <p>
                                      <span
                                      >When she's not teaching people about
                                        using game mechanics for learning or
                                        interview techniques for empathy work,
                                        Laura can be found competing in
                                        triathlons, riding hundreds of miles on
                                        her bike for fun, or hunting for the
                                        best gluten-free bakeries around.</span
                                      >Read more
                                                                </p>
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center flex-column flex-md-row"
                                                            >
                                                                <div class="d-flex tagWrapper">
                                                                    <div
                                                                        class="tags enrollment d-flex align-items-center"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/star.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div>4.4 (2,199 Reviews)</div>
                                                                    </div>
                                                                    <div
                                                                        class="tags enrollmen d-flex align-items-centert"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/collection.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div>5 283 Lessons</div>
                                                                    </div>
                                                                    <div
                                                                        class="tags duration d-flex align-items-center"
                                                                    >
                                                                        <img
                                                                            src="img/courseDetail/playBtn.svg"
                                                                            alt="inoura"
                                                                        />
                                                                        <div class="time">3 Courses</div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center getInTouchCta"
                                                                >
                                                                    Get in touch<svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16"
                                                                        height="17"
                                                                        viewBox="0 0 16 17"
                                                                        fill="none"
                                                                    >
                                                                        <g clip-path="url(#clip0_1025_1982)">
                                                                            <path
                                                                                d="M15.9647 1.18605C16.0011 1.09519 16.01 0.995646 15.9904 0.89977C15.9707 0.803893 15.9233 0.715897 15.8541 0.646691C15.7849 0.577484 15.6969 0.530111 15.601 0.510443C15.5052 0.490776 15.4056 0.49968 15.3147 0.53605L0.76775 6.35505H0.76675L0.31475 6.53505C0.22914 6.5692 0.154635 6.62635 0.0994654 6.70018C0.0442956 6.77401 0.0106078 6.86166 0.00212322 6.95344C-0.00636132 7.04522 0.0106876 7.13755 0.0513867 7.22025C0.0920859 7.30295 0.154851 7.37279 0.23275 7.42205L0.64275 7.68205L0.64375 7.68405L5.63875 10.8621L8.81675 15.8571L8.81875 15.8591L9.07875 16.2691C9.12817 16.3466 9.19805 16.4091 9.28068 16.4495C9.36332 16.49 9.45551 16.5068 9.54711 16.4983C9.63871 16.4897 9.72617 16.456 9.79985 16.4009C9.87354 16.3458 9.9306 16.2715 9.96475 16.1861L15.9647 1.18605ZM14.1317 3.07605L6.63775 10.5701L6.42275 10.2321C6.38336 10.17 6.33078 10.1174 6.26875 10.0781L5.93075 9.86305L13.4247 2.36905L14.6027 1.89805L14.1327 3.07605H14.1317Z"
                                                                                fill="#154BD8"
                                                                            />
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0_1025_1982">
                                                                                <rect
                                                                                    width="16"
                                                                                    height="16"
                                                                                    fill="white"
                                                                                    transform="translate(0 0.5)"
                                                                                />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
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
