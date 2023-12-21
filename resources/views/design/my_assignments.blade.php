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
<div class="myAssignmentsWrap">
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
    <div class="subjectDetail">
        <div class="container px-lg-0">
            <div class="row">
                <!-- side bar column -->
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
                                        <img src="img/dashboard/gear.svg" alt="dashboard" />
                                    </div>
                                    <p>Settings</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- side bar column -->
                <div class="col-xl-9 col-lg-12">
                    <div class="mentorTabWrap">
                        <h2 class="heading">Assignments</h2>
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
                                            All</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            id="pills-activeAssignment-tab"
                                            data-toggle="pill"
                                            href="#pills-activeAssignment"
                                            role="tab"
                                            aria-controls="pills-activeAssignment"
                                            aria-selected="false"
                                        >Active</a
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
                                        >Completed</a
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
                                        <div class="assignmentsCardWrap">
                                            <div class="card">
                                                <div
                                                    class="d-flex justify-content-between w-100 cardHeading"
                                                >
                                                    <div>
                                                        <h6 class="card-title">Tags Test</h6>
                                                        <p class="card-text">
                                                            Frontend basics: HTML and CSS
                                                        </p>
                                                    </div>
                                                    <div class="submitBtnWrap">
                                                        <a href="{{ url('/design/my-assignment-brief') }}" class="btn"
                                                        >Show more
                                                            <img
                                                                src="img/dashboard/plusCircle.svg"
                                                                alt="inoura"
                                                            /></a>
                                                    </div>
                                                </div>
                                                <div class="cardBodyWrap d-flex">
                                                    <div class="w-100">
                                                        <div class="card-body p-0">
                                                            <div
                                                                class="profile d-flex align-items-center"
                                                            >
                                                                <img
                                                                    src="img/courseDetail/profilePic.svg"
                                                                    alt="inoura"
                                                                    class="profilePic"
                                                                />
                                                                <p class="profileName mb-0">by Jane Doe</p>
                                                            </div>
                                                            <div class="assignmentCompTag">
                                                                <button class="btn btnExpected">
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16"
                                                                        height="17"
                                                                        viewBox="0 0 16 17"
                                                                        fill="none"
                                                                    >
                                                                        <path
                                                                            d="M2 15C2 15.1326 2.05268 15.2598 2.14645 15.3536C2.24021 15.4473 2.36739 15.5 2.5 15.5H13.5C13.6326 15.5 13.7598 15.4473 13.8536 15.3536C13.9473 15.2598 14 15.1326 14 15C14 14.8674 13.9473 14.7402 13.8536 14.6464C13.7598 14.5527 13.6326 14.5 13.5 14.5H12.5V13.5C12.5002 12.651 12.2602 11.8192 11.8078 11.1008C11.3553 10.3824 10.7088 9.80659 9.943 9.44C9.653 9.301 9.5 9.063 9.5 8.85V8.15C9.5 7.937 9.654 7.699 9.943 7.56C10.7088 7.19341 11.3553 6.61764 11.8078 5.89922C12.2602 5.1808 12.5002 4.34903 12.5 3.5V2.5H13.5C13.6326 2.5 13.7598 2.44732 13.8536 2.35355C13.9473 2.25979 14 2.13261 14 2C14 1.86739 13.9473 1.74021 13.8536 1.64645C13.7598 1.55268 13.6326 1.5 13.5 1.5H2.5C2.36739 1.5 2.24021 1.55268 2.14645 1.64645C2.05268 1.74021 2 1.86739 2 2C2 2.13261 2.05268 2.25979 2.14645 2.35355C2.24021 2.44732 2.36739 2.5 2.5 2.5H3.5V3.5C3.49979 4.34903 3.73979 5.1808 4.19225 5.89922C4.64471 6.61764 5.29119 7.19341 6.057 7.56C6.347 7.699 6.5 7.937 6.5 8.15V8.85C6.5 9.063 6.346 9.301 6.057 9.44C5.29119 9.80659 4.64471 10.3824 4.19225 11.1008C3.73979 11.8192 3.49979 12.651 3.5 13.5V14.5H2.5C2.36739 14.5 2.24021 14.5527 2.14645 14.6464C2.05268 14.7402 2 14.8674 2 15ZM4.5 14.5V13.5C4.49982 12.8396 4.68649 12.1926 5.03845 11.6338C5.39041 11.0749 5.89329 10.6271 6.489 10.342C7.022 10.086 7.5 9.552 7.5 8.851V8.149C7.5 8.149 7.68 8.25 8 8.25C8.32 8.25 8.5 8.15 8.5 8.15V8.85C8.5 9.551 8.978 10.086 9.511 10.342C10.1067 10.6271 10.6096 11.0749 10.9615 11.6338C11.3135 12.1926 11.5002 12.8396 11.5 13.5V14.5H4.5Z"
                                                                            fill="black"
                                                                        />
                                                                    </svg>
                                                                    Expected
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="progressBarWrap">
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
                                                            <div class="durationContent">
                                                                <p class="startDate dateStyles">
                                                                    Assigned: 02 Oct 2023
                                                                </p>

                                                                <p class="endDate mb-0 dateStyles">
                                                                    Deadline: 14 Oct 2023
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="scoresWrap">
                                                        <p class="scoreText">Score:</p>
                                                        <p class="scoreValue"><span></span>-/10</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div
                                                    class="d-flex justify-content-between w-100 cardHeading"
                                                >
                                                    <div>
                                                        <h6 class="card-title">Tags Test</h6>
                                                        <p class="card-text">
                                                            Frontend basics: HTML and CSS
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="cardBodyWrap d-flex">
                                                    <div class="w-100">
                                                        <div class="card-body p-0">
                                                            <div
                                                                class="profile d-flex align-items-center"
                                                            >
                                                                <img
                                                                    src="img/courseDetail/profilePic.svg"
                                                                    alt="inoura"
                                                                    class="profilePic"
                                                                />
                                                                <p class="profileName mb-0">by Jane Doe</p>
                                                            </div>
                                                            <div class="assignmentSubmitWrap">
                                                                <div class="submitDate">12 Oct 2023</div>
                                                                <div class="assignmentCompTag">
                                                                    <button class="btn btnAccepted">
                                                                        <svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="16"
                                                                            height="16"
                                                                            viewBox="0 0 16 16"
                                                                            fill="none"
                                                                        >
                                                                            <g clip-path="url(#clip0_1025_1321)">
                                                                                <path
                                                                                    d="M12.3546 4.35401C12.4011 4.30752 12.438 4.25233 12.4632 4.19159C12.4883 4.13085 12.5013 4.06575 12.5013 4.00001C12.5013 3.93426 12.4883 3.86916 12.4632 3.80842C12.438 3.74768 12.4011 3.69249 12.3546 3.64601C12.3081 3.59952 12.253 3.56264 12.1922 3.53748C12.1315 3.51232 12.0664 3.49937 12.0006 3.49937C11.9349 3.49937 11.8698 3.51232 11.809 3.53748C11.7483 3.56264 11.6931 3.59952 11.6466 3.64601L5.00063 10.293L1.85463 7.14601C1.80814 7.09952 1.75295 7.06264 1.69222 7.03748C1.63148 7.01232 1.56638 6.99937 1.50063 6.99937C1.36786 6.99937 1.24052 7.05212 1.14663 7.14601C1.05275 7.23989 1 7.36723 1 7.50001C1 7.63278 1.05275 7.76012 1.14663 7.85401L4.64663 11.354C4.69308 11.4006 4.74825 11.4375 4.809 11.4627C4.86974 11.4879 4.93486 11.5009 5.00063 11.5009C5.0664 11.5009 5.13152 11.4879 5.19227 11.4627C5.25301 11.4375 5.30819 11.4006 5.35463 11.354L12.3546 4.35401ZM8.14663 11.354L7.25063 10.457L7.95763 9.75001L8.50063 10.293L15.1466 3.64601C15.2405 3.55212 15.3679 3.49937 15.5006 3.49937C15.6334 3.49937 15.7607 3.55212 15.8546 3.64601C15.9485 3.73989 16.0013 3.86723 16.0013 4.00001C16.0013 4.13278 15.9485 4.26012 15.8546 4.35401L8.85463 11.354C8.80819 11.4006 8.75301 11.4375 8.69227 11.4627C8.63152 11.4879 8.5664 11.5009 8.50063 11.5009C8.43486 11.5009 8.36974 11.4879 8.309 11.4627C8.24825 11.4375 8.19308 11.4006 8.14663 11.354Z"
                                                                                    fill="black"
                                                                                />
                                                                                <path
                                                                                    d="M5.35463 7.14601L6.25063 8.04301L5.54363 8.75001L4.64663 7.85401C4.55275 7.76012 4.5 7.63278 4.5 7.50001C4.5 7.36723 4.55275 7.23989 4.64663 7.14601C4.74052 7.05212 4.86786 6.99937 5.00063 6.99937C5.13341 6.99937 5.26075 7.05212 5.35463 7.14601Z"
                                                                                    fill="#212529"
                                                                                />
                                                                            </g>
                                                                            <defs>
                                                                                <clipPath id="clip0_1025_1321">
                                                                                    <rect
                                                                                        width="16"
                                                                                        height="16"
                                                                                        fill="white"
                                                                                    />
                                                                                </clipPath>
                                                                            </defs>
                                                                        </svg>
                                                                        Accepted
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progressBarWrap">
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
                                                            <div class="durationContent">
                                                                <p class="startDate dateStyles">
                                                                    Assigned: 02 Oct 2023
                                                                </p>

                                                                <p class="endDate mb-0 dateStyles">
                                                                    Deadline: 14 Oct 2023
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="scoresWrap">
                                                        <p class="scoreText">Score:</p>
                                                        <p class="scoreValue"><span>8</span>/10</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div
                                                    class="d-flex justify-content-between w-100 cardHeading"
                                                >
                                                    <div>
                                                        <h6 class="card-title">Tags Test</h6>
                                                        <p class="card-text">
                                                            Frontend basics: HTML and CSS
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="cardBodyWrap d-flex">
                                                    <div class="w-100">
                                                        <div class="card-body p-0">
                                                            <div
                                                                class="profile d-flex align-items-center"
                                                            >
                                                                <img
                                                                    src="img/courseDetail/profilePic.svg"
                                                                    alt="inoura"
                                                                    class="profilePic"
                                                                />
                                                                <p class="profileName mb-0">by Jane Doe</p>
                                                            </div>
                                                            <div class="assignmentSubmitWrap">
                                                                <div class="submitDate">12 Oct 2023</div>
                                                                <div class="assignmentCompTag">
                                                                    <button class="btn btnAccepted">
                                                                        <svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="16"
                                                                            height="16"
                                                                            viewBox="0 0 16 16"
                                                                            fill="none"
                                                                        >
                                                                            <g clip-path="url(#clip0_1025_1321)">
                                                                                <path
                                                                                    d="M12.3546 4.35401C12.4011 4.30752 12.438 4.25233 12.4632 4.19159C12.4883 4.13085 12.5013 4.06575 12.5013 4.00001C12.5013 3.93426 12.4883 3.86916 12.4632 3.80842C12.438 3.74768 12.4011 3.69249 12.3546 3.64601C12.3081 3.59952 12.253 3.56264 12.1922 3.53748C12.1315 3.51232 12.0664 3.49937 12.0006 3.49937C11.9349 3.49937 11.8698 3.51232 11.809 3.53748C11.7483 3.56264 11.6931 3.59952 11.6466 3.64601L5.00063 10.293L1.85463 7.14601C1.80814 7.09952 1.75295 7.06264 1.69222 7.03748C1.63148 7.01232 1.56638 6.99937 1.50063 6.99937C1.36786 6.99937 1.24052 7.05212 1.14663 7.14601C1.05275 7.23989 1 7.36723 1 7.50001C1 7.63278 1.05275 7.76012 1.14663 7.85401L4.64663 11.354C4.69308 11.4006 4.74825 11.4375 4.809 11.4627C4.86974 11.4879 4.93486 11.5009 5.00063 11.5009C5.0664 11.5009 5.13152 11.4879 5.19227 11.4627C5.25301 11.4375 5.30819 11.4006 5.35463 11.354L12.3546 4.35401ZM8.14663 11.354L7.25063 10.457L7.95763 9.75001L8.50063 10.293L15.1466 3.64601C15.2405 3.55212 15.3679 3.49937 15.5006 3.49937C15.6334 3.49937 15.7607 3.55212 15.8546 3.64601C15.9485 3.73989 16.0013 3.86723 16.0013 4.00001C16.0013 4.13278 15.9485 4.26012 15.8546 4.35401L8.85463 11.354C8.80819 11.4006 8.75301 11.4375 8.69227 11.4627C8.63152 11.4879 8.5664 11.5009 8.50063 11.5009C8.43486 11.5009 8.36974 11.4879 8.309 11.4627C8.24825 11.4375 8.19308 11.4006 8.14663 11.354Z"
                                                                                    fill="black"
                                                                                />
                                                                                <path
                                                                                    d="M5.35463 7.14601L6.25063 8.04301L5.54363 8.75001L4.64663 7.85401C4.55275 7.76012 4.5 7.63278 4.5 7.50001C4.5 7.36723 4.55275 7.23989 4.64663 7.14601C4.74052 7.05212 4.86786 6.99937 5.00063 6.99937C5.13341 6.99937 5.26075 7.05212 5.35463 7.14601Z"
                                                                                    fill="#212529"
                                                                                />
                                                                            </g>
                                                                            <defs>
                                                                                <clipPath id="clip0_1025_1321">
                                                                                    <rect
                                                                                        width="16"
                                                                                        height="16"
                                                                                        fill="white"
                                                                                    />
                                                                                </clipPath>
                                                                            </defs>
                                                                        </svg>
                                                                        Accepted
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progressBarWrap">
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
                                                            <div class="durationContent">
                                                                <p class="startDate dateStyles">
                                                                    Assigned: 02 Oct 2023
                                                                </p>

                                                                <p class="endDate mb-0 dateStyles">
                                                                    Deadline: 14 Oct 2023
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="scoresWrap">
                                                        <p class="scoreText">Score:</p>
                                                        <p class="scoreValue"><span>8</span>/10</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div
                                                    class="d-flex justify-content-between w-100 cardHeading"
                                                >
                                                    <div>
                                                        <h6 class="card-title">Tags Test</h6>
                                                        <p class="card-text">
                                                            Frontend basics: HTML and CSS
                                                        </p>
                                                    </div>
                                                    <div class="submitBtnWrap">
                                                        <a href="#" class="btn"
                                                        >Show more
                                                            <img
                                                                src="img/dashboard/plusCircle.svg"
                                                                alt="inoura"
                                                            /></a>
                                                    </div>
                                                </div>
                                                <div class="cardBodyWrap d-flex">
                                                    <div class="w-100">
                                                        <div class="card-body p-0">
                                                            <div
                                                                class="profile d-flex align-items-center"
                                                            >
                                                                <img
                                                                    src="img/courseDetail/profilePic.svg"
                                                                    alt="inoura"
                                                                    class="profilePic"
                                                                />
                                                                <p class="profileName mb-0">by Jane Doe</p>
                                                            </div>
                                                            <div class="assignmentCompTag">
                                                                <button class="btn btnExpected">
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16"
                                                                        height="17"
                                                                        viewBox="0 0 16 17"
                                                                        fill="none"
                                                                    >
                                                                        <path
                                                                            d="M2 15C2 15.1326 2.05268 15.2598 2.14645 15.3536C2.24021 15.4473 2.36739 15.5 2.5 15.5H13.5C13.6326 15.5 13.7598 15.4473 13.8536 15.3536C13.9473 15.2598 14 15.1326 14 15C14 14.8674 13.9473 14.7402 13.8536 14.6464C13.7598 14.5527 13.6326 14.5 13.5 14.5H12.5V13.5C12.5002 12.651 12.2602 11.8192 11.8078 11.1008C11.3553 10.3824 10.7088 9.80659 9.943 9.44C9.653 9.301 9.5 9.063 9.5 8.85V8.15C9.5 7.937 9.654 7.699 9.943 7.56C10.7088 7.19341 11.3553 6.61764 11.8078 5.89922C12.2602 5.1808 12.5002 4.34903 12.5 3.5V2.5H13.5C13.6326 2.5 13.7598 2.44732 13.8536 2.35355C13.9473 2.25979 14 2.13261 14 2C14 1.86739 13.9473 1.74021 13.8536 1.64645C13.7598 1.55268 13.6326 1.5 13.5 1.5H2.5C2.36739 1.5 2.24021 1.55268 2.14645 1.64645C2.05268 1.74021 2 1.86739 2 2C2 2.13261 2.05268 2.25979 2.14645 2.35355C2.24021 2.44732 2.36739 2.5 2.5 2.5H3.5V3.5C3.49979 4.34903 3.73979 5.1808 4.19225 5.89922C4.64471 6.61764 5.29119 7.19341 6.057 7.56C6.347 7.699 6.5 7.937 6.5 8.15V8.85C6.5 9.063 6.346 9.301 6.057 9.44C5.29119 9.80659 4.64471 10.3824 4.19225 11.1008C3.73979 11.8192 3.49979 12.651 3.5 13.5V14.5H2.5C2.36739 14.5 2.24021 14.5527 2.14645 14.6464C2.05268 14.7402 2 14.8674 2 15ZM4.5 14.5V13.5C4.49982 12.8396 4.68649 12.1926 5.03845 11.6338C5.39041 11.0749 5.89329 10.6271 6.489 10.342C7.022 10.086 7.5 9.552 7.5 8.851V8.149C7.5 8.149 7.68 8.25 8 8.25C8.32 8.25 8.5 8.15 8.5 8.15V8.85C8.5 9.551 8.978 10.086 9.511 10.342C10.1067 10.6271 10.6096 11.0749 10.9615 11.6338C11.3135 12.1926 11.5002 12.8396 11.5 13.5V14.5H4.5Z"
                                                                            fill="black"
                                                                        />
                                                                    </svg>
                                                                    Expected
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="progressBarWrap">
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
                                                            <div class="durationContent">
                                                                <p class="startDate dateStyles">
                                                                    Assigned: 02 Oct 2023
                                                                </p>

                                                                <p class="endDate mb-0 dateStyles">
                                                                    Deadline: 14 Oct 2023
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="scoresWrap">
                                                        <p class="scoreText">Score:</p>
                                                        <p class="scoreValue"><span></span>-/10</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="pills-activeAssignment"
                                        role="tabpanel"
                                        aria-labelledby="pills-activeAssignment-tab"
                                    >
                                        <div class="assignmentsCardWrap">
                                            <div class="card">
                                                <div
                                                    class="d-flex justify-content-between w-100 cardHeading"
                                                >
                                                    <div>
                                                        <h6 class="card-title">Tags Test</h6>
                                                        <p class="card-text">
                                                            Frontend basics: HTML and CSS
                                                        </p>
                                                    </div>
                                                    <div class="submitBtnWrap">
                                                        <a href="#" class="btn"
                                                        >Show more
                                                            <img
                                                                src="img/dashboard/plusCircle.svg"
                                                                alt="inoura"
                                                            /></a>
                                                    </div>
                                                </div>
                                                <div class="cardBodyWrap d-flex">
                                                    <div class="w-100">
                                                        <div class="card-body p-0">
                                                            <div
                                                                class="profile d-flex align-items-center"
                                                            >
                                                                <img
                                                                    src="img/courseDetail/profilePic.svg"
                                                                    alt="inoura"
                                                                    class="profilePic"
                                                                />
                                                                <p class="profileName mb-0">by Jane Doe</p>
                                                            </div>
                                                            <div class="assignmentCompTag">
                                                                <button class="btn btnExpected">
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16"
                                                                        height="17"
                                                                        viewBox="0 0 16 17"
                                                                        fill="none"
                                                                    >
                                                                        <path
                                                                            d="M2 15C2 15.1326 2.05268 15.2598 2.14645 15.3536C2.24021 15.4473 2.36739 15.5 2.5 15.5H13.5C13.6326 15.5 13.7598 15.4473 13.8536 15.3536C13.9473 15.2598 14 15.1326 14 15C14 14.8674 13.9473 14.7402 13.8536 14.6464C13.7598 14.5527 13.6326 14.5 13.5 14.5H12.5V13.5C12.5002 12.651 12.2602 11.8192 11.8078 11.1008C11.3553 10.3824 10.7088 9.80659 9.943 9.44C9.653 9.301 9.5 9.063 9.5 8.85V8.15C9.5 7.937 9.654 7.699 9.943 7.56C10.7088 7.19341 11.3553 6.61764 11.8078 5.89922C12.2602 5.1808 12.5002 4.34903 12.5 3.5V2.5H13.5C13.6326 2.5 13.7598 2.44732 13.8536 2.35355C13.9473 2.25979 14 2.13261 14 2C14 1.86739 13.9473 1.74021 13.8536 1.64645C13.7598 1.55268 13.6326 1.5 13.5 1.5H2.5C2.36739 1.5 2.24021 1.55268 2.14645 1.64645C2.05268 1.74021 2 1.86739 2 2C2 2.13261 2.05268 2.25979 2.14645 2.35355C2.24021 2.44732 2.36739 2.5 2.5 2.5H3.5V3.5C3.49979 4.34903 3.73979 5.1808 4.19225 5.89922C4.64471 6.61764 5.29119 7.19341 6.057 7.56C6.347 7.699 6.5 7.937 6.5 8.15V8.85C6.5 9.063 6.346 9.301 6.057 9.44C5.29119 9.80659 4.64471 10.3824 4.19225 11.1008C3.73979 11.8192 3.49979 12.651 3.5 13.5V14.5H2.5C2.36739 14.5 2.24021 14.5527 2.14645 14.6464C2.05268 14.7402 2 14.8674 2 15ZM4.5 14.5V13.5C4.49982 12.8396 4.68649 12.1926 5.03845 11.6338C5.39041 11.0749 5.89329 10.6271 6.489 10.342C7.022 10.086 7.5 9.552 7.5 8.851V8.149C7.5 8.149 7.68 8.25 8 8.25C8.32 8.25 8.5 8.15 8.5 8.15V8.85C8.5 9.551 8.978 10.086 9.511 10.342C10.1067 10.6271 10.6096 11.0749 10.9615 11.6338C11.3135 12.1926 11.5002 12.8396 11.5 13.5V14.5H4.5Z"
                                                                            fill="black"
                                                                        />
                                                                    </svg>
                                                                    Expected
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="progressBarWrap">
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
                                                            <div class="durationContent">
                                                                <p class="startDate dateStyles">
                                                                    Assigned: 02 Oct 2023
                                                                </p>

                                                                <p class="endDate mb-0 dateStyles">
                                                                    Deadline: 14 Oct 2023
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="scoresWrap">
                                                        <p class="scoreText">Score:</p>
                                                        <p class="scoreValue"><span></span>-/10</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div
                                                    class="d-flex justify-content-between w-100 cardHeading"
                                                >
                                                    <div>
                                                        <h6 class="card-title">Tags Test</h6>
                                                        <p class="card-text">
                                                            Frontend basics: HTML and CSS
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="cardBodyWrap d-flex">
                                                    <div class="w-100">
                                                        <div class="card-body p-0">
                                                            <div
                                                                class="profile d-flex align-items-center"
                                                            >
                                                                <img
                                                                    src="img/courseDetail/profilePic.svg"
                                                                    alt="inoura"
                                                                    class="profilePic"
                                                                />
                                                                <p class="profileName mb-0">by Jane Doe</p>
                                                            </div>
                                                            <div class="assignmentSubmitWrap">
                                                                <div class="submitDate">12 Oct 2023</div>
                                                                <div class="assignmentCompTag">
                                                                    <button class="btn btnAccepted">
                                                                        <svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="16"
                                                                            height="16"
                                                                            viewBox="0 0 16 16"
                                                                            fill="none"
                                                                        >
                                                                            <g clip-path="url(#clip0_1025_1321)">
                                                                                <path
                                                                                    d="M12.3546 4.35401C12.4011 4.30752 12.438 4.25233 12.4632 4.19159C12.4883 4.13085 12.5013 4.06575 12.5013 4.00001C12.5013 3.93426 12.4883 3.86916 12.4632 3.80842C12.438 3.74768 12.4011 3.69249 12.3546 3.64601C12.3081 3.59952 12.253 3.56264 12.1922 3.53748C12.1315 3.51232 12.0664 3.49937 12.0006 3.49937C11.9349 3.49937 11.8698 3.51232 11.809 3.53748C11.7483 3.56264 11.6931 3.59952 11.6466 3.64601L5.00063 10.293L1.85463 7.14601C1.80814 7.09952 1.75295 7.06264 1.69222 7.03748C1.63148 7.01232 1.56638 6.99937 1.50063 6.99937C1.36786 6.99937 1.24052 7.05212 1.14663 7.14601C1.05275 7.23989 1 7.36723 1 7.50001C1 7.63278 1.05275 7.76012 1.14663 7.85401L4.64663 11.354C4.69308 11.4006 4.74825 11.4375 4.809 11.4627C4.86974 11.4879 4.93486 11.5009 5.00063 11.5009C5.0664 11.5009 5.13152 11.4879 5.19227 11.4627C5.25301 11.4375 5.30819 11.4006 5.35463 11.354L12.3546 4.35401ZM8.14663 11.354L7.25063 10.457L7.95763 9.75001L8.50063 10.293L15.1466 3.64601C15.2405 3.55212 15.3679 3.49937 15.5006 3.49937C15.6334 3.49937 15.7607 3.55212 15.8546 3.64601C15.9485 3.73989 16.0013 3.86723 16.0013 4.00001C16.0013 4.13278 15.9485 4.26012 15.8546 4.35401L8.85463 11.354C8.80819 11.4006 8.75301 11.4375 8.69227 11.4627C8.63152 11.4879 8.5664 11.5009 8.50063 11.5009C8.43486 11.5009 8.36974 11.4879 8.309 11.4627C8.24825 11.4375 8.19308 11.4006 8.14663 11.354Z"
                                                                                    fill="black"
                                                                                />
                                                                                <path
                                                                                    d="M5.35463 7.14601L6.25063 8.04301L5.54363 8.75001L4.64663 7.85401C4.55275 7.76012 4.5 7.63278 4.5 7.50001C4.5 7.36723 4.55275 7.23989 4.64663 7.14601C4.74052 7.05212 4.86786 6.99937 5.00063 6.99937C5.13341 6.99937 5.26075 7.05212 5.35463 7.14601Z"
                                                                                    fill="#212529"
                                                                                />
                                                                            </g>
                                                                            <defs>
                                                                                <clipPath id="clip0_1025_1321">
                                                                                    <rect
                                                                                        width="16"
                                                                                        height="16"
                                                                                        fill="white"
                                                                                    />
                                                                                </clipPath>
                                                                            </defs>
                                                                        </svg>
                                                                        Accepted
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progressBarWrap">
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
                                                            <div class="durationContent">
                                                                <p class="startDate dateStyles">
                                                                    Assigned: 02 Oct 2023
                                                                </p>

                                                                <p class="endDate mb-0 dateStyles">
                                                                    Deadline: 14 Oct 2023
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="scoresWrap">
                                                        <p class="scoreText">Score:</p>
                                                        <p class="scoreValue"><span>8</span>/10</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div
                                                    class="d-flex justify-content-between w-100 cardHeading"
                                                >
                                                    <div>
                                                        <h6 class="card-title">Tags Test</h6>
                                                        <p class="card-text">
                                                            Frontend basics: HTML and CSS
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="cardBodyWrap d-flex">
                                                    <div class="w-100">
                                                        <div class="card-body p-0">
                                                            <div
                                                                class="profile d-flex align-items-center"
                                                            >
                                                                <img
                                                                    src="img/courseDetail/profilePic.svg"
                                                                    alt="inoura"
                                                                    class="profilePic"
                                                                />
                                                                <p class="profileName mb-0">by Jane Doe</p>
                                                            </div>
                                                            <div class="assignmentSubmitWrap">
                                                                <div class="submitDate">12 Oct 2023</div>
                                                                <div class="assignmentCompTag">
                                                                    <button class="btn btnAccepted">
                                                                        <svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="16"
                                                                            height="16"
                                                                            viewBox="0 0 16 16"
                                                                            fill="none"
                                                                        >
                                                                            <g clip-path="url(#clip0_1025_1321)">
                                                                                <path
                                                                                    d="M12.3546 4.35401C12.4011 4.30752 12.438 4.25233 12.4632 4.19159C12.4883 4.13085 12.5013 4.06575 12.5013 4.00001C12.5013 3.93426 12.4883 3.86916 12.4632 3.80842C12.438 3.74768 12.4011 3.69249 12.3546 3.64601C12.3081 3.59952 12.253 3.56264 12.1922 3.53748C12.1315 3.51232 12.0664 3.49937 12.0006 3.49937C11.9349 3.49937 11.8698 3.51232 11.809 3.53748C11.7483 3.56264 11.6931 3.59952 11.6466 3.64601L5.00063 10.293L1.85463 7.14601C1.80814 7.09952 1.75295 7.06264 1.69222 7.03748C1.63148 7.01232 1.56638 6.99937 1.50063 6.99937C1.36786 6.99937 1.24052 7.05212 1.14663 7.14601C1.05275 7.23989 1 7.36723 1 7.50001C1 7.63278 1.05275 7.76012 1.14663 7.85401L4.64663 11.354C4.69308 11.4006 4.74825 11.4375 4.809 11.4627C4.86974 11.4879 4.93486 11.5009 5.00063 11.5009C5.0664 11.5009 5.13152 11.4879 5.19227 11.4627C5.25301 11.4375 5.30819 11.4006 5.35463 11.354L12.3546 4.35401ZM8.14663 11.354L7.25063 10.457L7.95763 9.75001L8.50063 10.293L15.1466 3.64601C15.2405 3.55212 15.3679 3.49937 15.5006 3.49937C15.6334 3.49937 15.7607 3.55212 15.8546 3.64601C15.9485 3.73989 16.0013 3.86723 16.0013 4.00001C16.0013 4.13278 15.9485 4.26012 15.8546 4.35401L8.85463 11.354C8.80819 11.4006 8.75301 11.4375 8.69227 11.4627C8.63152 11.4879 8.5664 11.5009 8.50063 11.5009C8.43486 11.5009 8.36974 11.4879 8.309 11.4627C8.24825 11.4375 8.19308 11.4006 8.14663 11.354Z"
                                                                                    fill="black"
                                                                                />
                                                                                <path
                                                                                    d="M5.35463 7.14601L6.25063 8.04301L5.54363 8.75001L4.64663 7.85401C4.55275 7.76012 4.5 7.63278 4.5 7.50001C4.5 7.36723 4.55275 7.23989 4.64663 7.14601C4.74052 7.05212 4.86786 6.99937 5.00063 6.99937C5.13341 6.99937 5.26075 7.05212 5.35463 7.14601Z"
                                                                                    fill="#212529"
                                                                                />
                                                                            </g>
                                                                            <defs>
                                                                                <clipPath id="clip0_1025_1321">
                                                                                    <rect
                                                                                        width="16"
                                                                                        height="16"
                                                                                        fill="white"
                                                                                    />
                                                                                </clipPath>
                                                                            </defs>
                                                                        </svg>
                                                                        Accepted
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progressBarWrap">
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
                                                            <div class="durationContent">
                                                                <p class="startDate dateStyles">
                                                                    Assigned: 02 Oct 2023
                                                                </p>

                                                                <p class="endDate mb-0 dateStyles">
                                                                    Deadline: 14 Oct 2023
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="scoresWrap">
                                                        <p class="scoreText">Score:</p>
                                                        <p class="scoreValue"><span>8</span>/10</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div
                                                    class="d-flex justify-content-between w-100 cardHeading"
                                                >
                                                    <div>
                                                        <h6 class="card-title">Tags Test</h6>
                                                        <p class="card-text">
                                                            Frontend basics: HTML and CSS
                                                        </p>
                                                    </div>
                                                    <div class="submitBtnWrap">
                                                        <a href="#" class="btn"
                                                        >Show more
                                                            <img
                                                                src="img/dashboard/plusCircle.svg"
                                                                alt="inoura"
                                                            /></a>
                                                    </div>
                                                </div>
                                                <div class="cardBodyWrap d-flex">
                                                    <div class="w-100">
                                                        <div class="card-body p-0">
                                                            <div
                                                                class="profile d-flex align-items-center"
                                                            >
                                                                <img
                                                                    src="img/courseDetail/profilePic.svg"
                                                                    alt="inoura"
                                                                    class="profilePic"
                                                                />
                                                                <p class="profileName mb-0">by Jane Doe</p>
                                                            </div>
                                                            <div class="assignmentCompTag">
                                                                <button class="btn btnExpected">
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16"
                                                                        height="17"
                                                                        viewBox="0 0 16 17"
                                                                        fill="none"
                                                                    >
                                                                        <path
                                                                            d="M2 15C2 15.1326 2.05268 15.2598 2.14645 15.3536C2.24021 15.4473 2.36739 15.5 2.5 15.5H13.5C13.6326 15.5 13.7598 15.4473 13.8536 15.3536C13.9473 15.2598 14 15.1326 14 15C14 14.8674 13.9473 14.7402 13.8536 14.6464C13.7598 14.5527 13.6326 14.5 13.5 14.5H12.5V13.5C12.5002 12.651 12.2602 11.8192 11.8078 11.1008C11.3553 10.3824 10.7088 9.80659 9.943 9.44C9.653 9.301 9.5 9.063 9.5 8.85V8.15C9.5 7.937 9.654 7.699 9.943 7.56C10.7088 7.19341 11.3553 6.61764 11.8078 5.89922C12.2602 5.1808 12.5002 4.34903 12.5 3.5V2.5H13.5C13.6326 2.5 13.7598 2.44732 13.8536 2.35355C13.9473 2.25979 14 2.13261 14 2C14 1.86739 13.9473 1.74021 13.8536 1.64645C13.7598 1.55268 13.6326 1.5 13.5 1.5H2.5C2.36739 1.5 2.24021 1.55268 2.14645 1.64645C2.05268 1.74021 2 1.86739 2 2C2 2.13261 2.05268 2.25979 2.14645 2.35355C2.24021 2.44732 2.36739 2.5 2.5 2.5H3.5V3.5C3.49979 4.34903 3.73979 5.1808 4.19225 5.89922C4.64471 6.61764 5.29119 7.19341 6.057 7.56C6.347 7.699 6.5 7.937 6.5 8.15V8.85C6.5 9.063 6.346 9.301 6.057 9.44C5.29119 9.80659 4.64471 10.3824 4.19225 11.1008C3.73979 11.8192 3.49979 12.651 3.5 13.5V14.5H2.5C2.36739 14.5 2.24021 14.5527 2.14645 14.6464C2.05268 14.7402 2 14.8674 2 15ZM4.5 14.5V13.5C4.49982 12.8396 4.68649 12.1926 5.03845 11.6338C5.39041 11.0749 5.89329 10.6271 6.489 10.342C7.022 10.086 7.5 9.552 7.5 8.851V8.149C7.5 8.149 7.68 8.25 8 8.25C8.32 8.25 8.5 8.15 8.5 8.15V8.85C8.5 9.551 8.978 10.086 9.511 10.342C10.1067 10.6271 10.6096 11.0749 10.9615 11.6338C11.3135 12.1926 11.5002 12.8396 11.5 13.5V14.5H4.5Z"
                                                                            fill="black"
                                                                        />
                                                                    </svg>
                                                                    Expected
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="progressBarWrap">
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
                                                            <div class="durationContent">
                                                                <p class="startDate dateStyles">
                                                                    Assigned: 02 Oct 2023
                                                                </p>

                                                                <p class="endDate mb-0 dateStyles">
                                                                    Deadline: 14 Oct 2023
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="scoresWrap">
                                                        <p class="scoreText">Score:</p>
                                                        <p class="scoreValue"><span></span>-/10</p>
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
                                        <div class="assignmentsCardWrap">
                                            <div class="card">
                                                <div
                                                    class="d-flex justify-content-between w-100 cardHeading"
                                                >
                                                    <div>
                                                        <h6 class="card-title">Tags Test</h6>
                                                        <p class="card-text">
                                                            Frontend basics: HTML and CSS
                                                        </p>
                                                    </div>
                                                    <div class="submitBtnWrap">
                                                        <a href="#" class="btn"
                                                        >Show more
                                                            <img
                                                                src="img/dashboard/plusCircle.svg"
                                                                alt="inoura"
                                                            /></a>
                                                    </div>
                                                </div>
                                                <div class="cardBodyWrap d-flex">
                                                    <div class="w-100">
                                                        <div class="card-body p-0">
                                                            <div
                                                                class="profile d-flex align-items-center"
                                                            >
                                                                <img
                                                                    src="img/courseDetail/profilePic.svg"
                                                                    alt="inoura"
                                                                    class="profilePic"
                                                                />
                                                                <p class="profileName mb-0">by Jane Doe</p>
                                                            </div>
                                                            <div class="assignmentCompTag">
                                                                <button class="btn btnExpected">
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16"
                                                                        height="17"
                                                                        viewBox="0 0 16 17"
                                                                        fill="none"
                                                                    >
                                                                        <path
                                                                            d="M2 15C2 15.1326 2.05268 15.2598 2.14645 15.3536C2.24021 15.4473 2.36739 15.5 2.5 15.5H13.5C13.6326 15.5 13.7598 15.4473 13.8536 15.3536C13.9473 15.2598 14 15.1326 14 15C14 14.8674 13.9473 14.7402 13.8536 14.6464C13.7598 14.5527 13.6326 14.5 13.5 14.5H12.5V13.5C12.5002 12.651 12.2602 11.8192 11.8078 11.1008C11.3553 10.3824 10.7088 9.80659 9.943 9.44C9.653 9.301 9.5 9.063 9.5 8.85V8.15C9.5 7.937 9.654 7.699 9.943 7.56C10.7088 7.19341 11.3553 6.61764 11.8078 5.89922C12.2602 5.1808 12.5002 4.34903 12.5 3.5V2.5H13.5C13.6326 2.5 13.7598 2.44732 13.8536 2.35355C13.9473 2.25979 14 2.13261 14 2C14 1.86739 13.9473 1.74021 13.8536 1.64645C13.7598 1.55268 13.6326 1.5 13.5 1.5H2.5C2.36739 1.5 2.24021 1.55268 2.14645 1.64645C2.05268 1.74021 2 1.86739 2 2C2 2.13261 2.05268 2.25979 2.14645 2.35355C2.24021 2.44732 2.36739 2.5 2.5 2.5H3.5V3.5C3.49979 4.34903 3.73979 5.1808 4.19225 5.89922C4.64471 6.61764 5.29119 7.19341 6.057 7.56C6.347 7.699 6.5 7.937 6.5 8.15V8.85C6.5 9.063 6.346 9.301 6.057 9.44C5.29119 9.80659 4.64471 10.3824 4.19225 11.1008C3.73979 11.8192 3.49979 12.651 3.5 13.5V14.5H2.5C2.36739 14.5 2.24021 14.5527 2.14645 14.6464C2.05268 14.7402 2 14.8674 2 15ZM4.5 14.5V13.5C4.49982 12.8396 4.68649 12.1926 5.03845 11.6338C5.39041 11.0749 5.89329 10.6271 6.489 10.342C7.022 10.086 7.5 9.552 7.5 8.851V8.149C7.5 8.149 7.68 8.25 8 8.25C8.32 8.25 8.5 8.15 8.5 8.15V8.85C8.5 9.551 8.978 10.086 9.511 10.342C10.1067 10.6271 10.6096 11.0749 10.9615 11.6338C11.3135 12.1926 11.5002 12.8396 11.5 13.5V14.5H4.5Z"
                                                                            fill="black"
                                                                        />
                                                                    </svg>
                                                                    Expected
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="progressBarWrap">
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
                                                            <div class="durationContent">
                                                                <p class="startDate dateStyles">
                                                                    Assigned: 02 Oct 2023
                                                                </p>

                                                                <p class="endDate mb-0 dateStyles">
                                                                    Deadline: 14 Oct 2023
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="scoresWrap">
                                                        <p class="scoreText">Score:</p>
                                                        <p class="scoreValue"><span>8</span>/10</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div
                                                    class="d-flex justify-content-between w-100 cardHeading"
                                                >
                                                    <div>
                                                        <h6 class="card-title">Tags Test</h6>
                                                        <p class="card-text">
                                                            Frontend basics: HTML and CSS
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="cardBodyWrap d-flex">
                                                    <div class="w-100">
                                                        <div class="card-body p-0">
                                                            <div
                                                                class="profile d-flex align-items-center"
                                                            >
                                                                <img
                                                                    src="img/courseDetail/profilePic.svg"
                                                                    alt="inoura"
                                                                    class="profilePic"
                                                                />
                                                                <p class="profileName mb-0">by Jane Doe</p>
                                                            </div>
                                                            <div class="assignmentSubmitWrap">
                                                                <div class="submitDate">12 Oct 2023</div>
                                                                <div class="assignmentCompTag">
                                                                    <button class="btn btnAccepted">
                                                                        <svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="16"
                                                                            height="16"
                                                                            viewBox="0 0 16 16"
                                                                            fill="none"
                                                                        >
                                                                            <g clip-path="url(#clip0_1025_1321)">
                                                                                <path
                                                                                    d="M12.3546 4.35401C12.4011 4.30752 12.438 4.25233 12.4632 4.19159C12.4883 4.13085 12.5013 4.06575 12.5013 4.00001C12.5013 3.93426 12.4883 3.86916 12.4632 3.80842C12.438 3.74768 12.4011 3.69249 12.3546 3.64601C12.3081 3.59952 12.253 3.56264 12.1922 3.53748C12.1315 3.51232 12.0664 3.49937 12.0006 3.49937C11.9349 3.49937 11.8698 3.51232 11.809 3.53748C11.7483 3.56264 11.6931 3.59952 11.6466 3.64601L5.00063 10.293L1.85463 7.14601C1.80814 7.09952 1.75295 7.06264 1.69222 7.03748C1.63148 7.01232 1.56638 6.99937 1.50063 6.99937C1.36786 6.99937 1.24052 7.05212 1.14663 7.14601C1.05275 7.23989 1 7.36723 1 7.50001C1 7.63278 1.05275 7.76012 1.14663 7.85401L4.64663 11.354C4.69308 11.4006 4.74825 11.4375 4.809 11.4627C4.86974 11.4879 4.93486 11.5009 5.00063 11.5009C5.0664 11.5009 5.13152 11.4879 5.19227 11.4627C5.25301 11.4375 5.30819 11.4006 5.35463 11.354L12.3546 4.35401ZM8.14663 11.354L7.25063 10.457L7.95763 9.75001L8.50063 10.293L15.1466 3.64601C15.2405 3.55212 15.3679 3.49937 15.5006 3.49937C15.6334 3.49937 15.7607 3.55212 15.8546 3.64601C15.9485 3.73989 16.0013 3.86723 16.0013 4.00001C16.0013 4.13278 15.9485 4.26012 15.8546 4.35401L8.85463 11.354C8.80819 11.4006 8.75301 11.4375 8.69227 11.4627C8.63152 11.4879 8.5664 11.5009 8.50063 11.5009C8.43486 11.5009 8.36974 11.4879 8.309 11.4627C8.24825 11.4375 8.19308 11.4006 8.14663 11.354Z"
                                                                                    fill="black"
                                                                                />
                                                                                <path
                                                                                    d="M5.35463 7.14601L6.25063 8.04301L5.54363 8.75001L4.64663 7.85401C4.55275 7.76012 4.5 7.63278 4.5 7.50001C4.5 7.36723 4.55275 7.23989 4.64663 7.14601C4.74052 7.05212 4.86786 6.99937 5.00063 6.99937C5.13341 6.99937 5.26075 7.05212 5.35463 7.14601Z"
                                                                                    fill="#212529"
                                                                                />
                                                                            </g>
                                                                            <defs>
                                                                                <clipPath id="clip0_1025_1321">
                                                                                    <rect
                                                                                        width="16"
                                                                                        height="16"
                                                                                        fill="white"
                                                                                    />
                                                                                </clipPath>
                                                                            </defs>
                                                                        </svg>
                                                                        Accepted
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progressBarWrap">
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
                                                            <div class="durationContent">
                                                                <p class="startDate dateStyles">
                                                                    Assigned: 02 Oct 2023
                                                                </p>

                                                                <p class="endDate mb-0 dateStyles">
                                                                    Deadline: 14 Oct 2023
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="scoresWrap">
                                                        <p class="scoreText">Score:</p>
                                                        <p class="scoreValue"><span>8</span>/10</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div
                                                    class="d-flex justify-content-between w-100 cardHeading"
                                                >
                                                    <div>
                                                        <h6 class="card-title">Tags Test</h6>
                                                        <p class="card-text">
                                                            Frontend basics: HTML and CSS
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="cardBodyWrap d-flex">
                                                    <div class="w-100">
                                                        <div class="card-body p-0">
                                                            <div
                                                                class="profile d-flex align-items-center"
                                                            >
                                                                <img
                                                                    src="img/courseDetail/profilePic.svg"
                                                                    alt="inoura"
                                                                    class="profilePic"
                                                                />
                                                                <p class="profileName mb-0">by Jane Doe</p>
                                                            </div>
                                                            <div class="assignmentSubmitWrap">
                                                                <div class="submitDate">12 Oct 2023</div>
                                                                <div class="assignmentCompTag">
                                                                    <button class="btn btnAccepted">
                                                                        <svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="16"
                                                                            height="16"
                                                                            viewBox="0 0 16 16"
                                                                            fill="none"
                                                                        >
                                                                            <g clip-path="url(#clip0_1025_1321)">
                                                                                <path
                                                                                    d="M12.3546 4.35401C12.4011 4.30752 12.438 4.25233 12.4632 4.19159C12.4883 4.13085 12.5013 4.06575 12.5013 4.00001C12.5013 3.93426 12.4883 3.86916 12.4632 3.80842C12.438 3.74768 12.4011 3.69249 12.3546 3.64601C12.3081 3.59952 12.253 3.56264 12.1922 3.53748C12.1315 3.51232 12.0664 3.49937 12.0006 3.49937C11.9349 3.49937 11.8698 3.51232 11.809 3.53748C11.7483 3.56264 11.6931 3.59952 11.6466 3.64601L5.00063 10.293L1.85463 7.14601C1.80814 7.09952 1.75295 7.06264 1.69222 7.03748C1.63148 7.01232 1.56638 6.99937 1.50063 6.99937C1.36786 6.99937 1.24052 7.05212 1.14663 7.14601C1.05275 7.23989 1 7.36723 1 7.50001C1 7.63278 1.05275 7.76012 1.14663 7.85401L4.64663 11.354C4.69308 11.4006 4.74825 11.4375 4.809 11.4627C4.86974 11.4879 4.93486 11.5009 5.00063 11.5009C5.0664 11.5009 5.13152 11.4879 5.19227 11.4627C5.25301 11.4375 5.30819 11.4006 5.35463 11.354L12.3546 4.35401ZM8.14663 11.354L7.25063 10.457L7.95763 9.75001L8.50063 10.293L15.1466 3.64601C15.2405 3.55212 15.3679 3.49937 15.5006 3.49937C15.6334 3.49937 15.7607 3.55212 15.8546 3.64601C15.9485 3.73989 16.0013 3.86723 16.0013 4.00001C16.0013 4.13278 15.9485 4.26012 15.8546 4.35401L8.85463 11.354C8.80819 11.4006 8.75301 11.4375 8.69227 11.4627C8.63152 11.4879 8.5664 11.5009 8.50063 11.5009C8.43486 11.5009 8.36974 11.4879 8.309 11.4627C8.24825 11.4375 8.19308 11.4006 8.14663 11.354Z"
                                                                                    fill="black"
                                                                                />
                                                                                <path
                                                                                    d="M5.35463 7.14601L6.25063 8.04301L5.54363 8.75001L4.64663 7.85401C4.55275 7.76012 4.5 7.63278 4.5 7.50001C4.5 7.36723 4.55275 7.23989 4.64663 7.14601C4.74052 7.05212 4.86786 6.99937 5.00063 6.99937C5.13341 6.99937 5.26075 7.05212 5.35463 7.14601Z"
                                                                                    fill="#212529"
                                                                                />
                                                                            </g>
                                                                            <defs>
                                                                                <clipPath id="clip0_1025_1321">
                                                                                    <rect
                                                                                        width="16"
                                                                                        height="16"
                                                                                        fill="white"
                                                                                    />
                                                                                </clipPath>
                                                                            </defs>
                                                                        </svg>
                                                                        Accepted
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progressBarWrap">
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
                                                            <div class="durationContent">
                                                                <p class="startDate dateStyles">
                                                                    Assigned: 02 Oct 2023
                                                                </p>

                                                                <p class="endDate mb-0 dateStyles">
                                                                    Deadline: 14 Oct 2023
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="scoresWrap">
                                                        <p class="scoreText">Score:</p>
                                                        <p class="scoreValue"><span>8</span>/10</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div
                                                    class="d-flex justify-content-between w-100 cardHeading"
                                                >
                                                    <div>
                                                        <h6 class="card-title">Tags Test</h6>
                                                        <p class="card-text">
                                                            Frontend basics: HTML and CSS
                                                        </p>
                                                    </div>
                                                    <div class="submitBtnWrap">
                                                        <a href="#" class="btn"
                                                        >Show more
                                                            <img
                                                                src="img/dashboard/plusCircle.svg"
                                                                alt="inoura"
                                                            /></a>
                                                    </div>
                                                </div>
                                                <div class="cardBodyWrap d-flex">
                                                    <div class="w-100">
                                                        <div class="card-body p-0">
                                                            <div
                                                                class="profile d-flex align-items-center"
                                                            >
                                                                <img
                                                                    src="img/courseDetail/profilePic.svg"
                                                                    alt="inoura"
                                                                    class="profilePic"
                                                                />
                                                                <p class="profileName mb-0">by Jane Doe</p>
                                                            </div>
                                                            <div class="assignmentCompTag">
                                                                <button class="btn btnExpected">
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16"
                                                                        height="17"
                                                                        viewBox="0 0 16 17"
                                                                        fill="none"
                                                                    >
                                                                        <path
                                                                            d="M2 15C2 15.1326 2.05268 15.2598 2.14645 15.3536C2.24021 15.4473 2.36739 15.5 2.5 15.5H13.5C13.6326 15.5 13.7598 15.4473 13.8536 15.3536C13.9473 15.2598 14 15.1326 14 15C14 14.8674 13.9473 14.7402 13.8536 14.6464C13.7598 14.5527 13.6326 14.5 13.5 14.5H12.5V13.5C12.5002 12.651 12.2602 11.8192 11.8078 11.1008C11.3553 10.3824 10.7088 9.80659 9.943 9.44C9.653 9.301 9.5 9.063 9.5 8.85V8.15C9.5 7.937 9.654 7.699 9.943 7.56C10.7088 7.19341 11.3553 6.61764 11.8078 5.89922C12.2602 5.1808 12.5002 4.34903 12.5 3.5V2.5H13.5C13.6326 2.5 13.7598 2.44732 13.8536 2.35355C13.9473 2.25979 14 2.13261 14 2C14 1.86739 13.9473 1.74021 13.8536 1.64645C13.7598 1.55268 13.6326 1.5 13.5 1.5H2.5C2.36739 1.5 2.24021 1.55268 2.14645 1.64645C2.05268 1.74021 2 1.86739 2 2C2 2.13261 2.05268 2.25979 2.14645 2.35355C2.24021 2.44732 2.36739 2.5 2.5 2.5H3.5V3.5C3.49979 4.34903 3.73979 5.1808 4.19225 5.89922C4.64471 6.61764 5.29119 7.19341 6.057 7.56C6.347 7.699 6.5 7.937 6.5 8.15V8.85C6.5 9.063 6.346 9.301 6.057 9.44C5.29119 9.80659 4.64471 10.3824 4.19225 11.1008C3.73979 11.8192 3.49979 12.651 3.5 13.5V14.5H2.5C2.36739 14.5 2.24021 14.5527 2.14645 14.6464C2.05268 14.7402 2 14.8674 2 15ZM4.5 14.5V13.5C4.49982 12.8396 4.68649 12.1926 5.03845 11.6338C5.39041 11.0749 5.89329 10.6271 6.489 10.342C7.022 10.086 7.5 9.552 7.5 8.851V8.149C7.5 8.149 7.68 8.25 8 8.25C8.32 8.25 8.5 8.15 8.5 8.15V8.85C8.5 9.551 8.978 10.086 9.511 10.342C10.1067 10.6271 10.6096 11.0749 10.9615 11.6338C11.3135 12.1926 11.5002 12.8396 11.5 13.5V14.5H4.5Z"
                                                                            fill="black"
                                                                        />
                                                                    </svg>
                                                                    Expected
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="progressBarWrap">
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
                                                            <div class="durationContent">
                                                                <p class="startDate dateStyles">
                                                                    Assigned: 02 Oct 2023
                                                                </p>

                                                                <p class="endDate mb-0 dateStyles">
                                                                    Deadline: 14 Oct 2023
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="scoresWrap">
                                                        <p class="scoreText">Score:</p>
                                                        <p class="scoreValue"><span></span>8/10</p>
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
