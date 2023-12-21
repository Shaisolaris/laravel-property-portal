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
    <title>My Assignments</title>
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
        <div class="container px-0">
            <div class="row row_gap_20">
                <div class="col-lg-3">
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
                                    <p>Courses</p>
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
                <div class="col-lg-9">
                    <div class="classes_Heading">
                        <h2>Assignments</h2>
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
                                            id="pills-allAssignments-tab"
                                            data-toggle="pill"
                                            href="#pills-allAssignments"
                                            role="tab"
                                            aria-controls="pills-allAssignments"
                                            aria-selected="true"
                                        >
                                            All</a
                                        >
                                    </li>
                                    <li class="nav-item classes_navItems">
                                        <a
                                            class="nav-link classes_navLink"
                                            id="pills--activeAssignments-tab"
                                            data-toggle="pill"
                                            href="#pills--activeAssignments"
                                            role="tab"
                                            aria-controls="pills--activeAssignments"
                                            aria-selected="false"
                                        >Active</a
                                        >
                                    </li>
                                    <li class="nav-item classes_navItems">
                                        <a
                                            class="nav-link classes_navLink"
                                            id="pills-completedAssignments-tab"
                                            data-toggle="pill"
                                            href="#pills-completedAssignments"
                                            role="tab"
                                            aria-controls="pills-completedAssignments"
                                            aria-selected="false"
                                        >Completed</a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <!-- tabpanel one Starts -->
                        <div
                            class="tab-pane fade show active"
                            id="pills-allAssignments"
                            role="tabpanel"
                            aria-labelledby="pills-allAssignments-tab"
                        >
                            <div class="tabOverview">
                                <div
                                    class="assginments_Card d-flex align-items-center justify-content-between flex-column"
                                >
                                    <div
                                        class="d-flex align-items-center justify-content-between w-100 flex-wrap"
                                    >
                                        <div class="assignmentTopic">
                                            <img src="img/myAssignment/img1.svg" alt="image" />
                                            <div class="name_Wrapper">
                                                <h4>World Literature</h4>
                                                <p>Practical task</p>
                                            </div>
                                        </div>
                                        <div class="mentorWrap">
                                            <h6>Mentor</h6>
                                            <div class="profile d-flex align-items-center">
                                                <img
                                                    src="img/courseDetail/profilePic.svg"
                                                    alt="inoura"
                                                    class="profilePic"
                                                />
                                                <p class="profileName mb-0">Mrs. Doe</p>
                                            </div>
                                        </div>
                                        <div class="durationWrapper">
                                            <h6>Due on</h6>
                                            <div class="tags date d-flex align-items-center">
                                                <img
                                                    src="img/myAssignment/calendar4.svg"
                                                    alt="inoura"
                                                />
                                                <p class="assignmentDate mb-0">Jan 23, Fri</p>
                                            </div>
                                        </div>
                                        <div class="assignmentStatus">
                                            <h6>Status</h6>
                                            <div class="assignmentCompTag">
                                                <button class="btn btnAssignExpected">
                                                    <img
                                                        src="img/myAssignment/clock-history.svg"
                                                        alt="inoura"
                                                    />
                                                    Expected
                                                </button>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="submitBtnWrap" id="assignmentSubmit">
                                                <a href="#" class="btn">
                                                    Submit
                                                    <img
                                                        src="img/dashboard/plusCircle.svg"
                                                        alt="inoura"
                                                        id="icon"
                                                    />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="assignmentSubmitDetails" class="accordionWrap">
                                        <div class="assignmentAccordion" id="myAssignmentBrief">
                                            <div class="assignmentDescription">
                                                <button
                                                    class="btn accordionBtn d-flex justify-content-between"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#assginmentBrief"
                                                    aria-expanded="true"
                                                    aria-controls="assginmentBrief"
                                                >
                                                    <h6>Brief</h6>
                                                    <img src="img/courseList/downIcon.svg" />
                                                </button>

                                                <div
                                                    id="assginmentBrief"
                                                    class="collapse show"
                                                    aria-labelledby="headingOne"
                                                    data-parent="#myAssignmentBrief"
                                                >
                                                    <div class="accordionBody">
                                                        <div class="content">
                                                            <p>Here's what needs to be done:</p>
                                                            <ol class="">
                                                                <li>
                                                                    Open the Figma file with the design
                                                                    system. The link to this file is located
                                                                    in the Individual Variations section.
                                                                    Click "Open in Figma" to have the file
                                                                    appear in your drafts.
                                                                </li>
                                                                <li>
                                                                    Return to the Individual Variations
                                                                    section and select the next Figma link to
                                                                    find PNG images of screens.
                                                                </li>
                                                                <li>
                                                                    Inside the design system file, create a
                                                                    separate page. Then, copy and paste your
                                                                    version of the images for replication into
                                                                    this page.
                                                                </li>
                                                                <li>
                                                                    Using the PNG images as references,
                                                                    reproduce screens as follows:
                                                                    <ul>
                                                                        <li>
                                                                            Use only components from the design
                                                                            system; do not create your own.
                                                                        </li>
                                                                        <li>
                                                                            Do not detach components; adjust their
                                                                            appearance using the component
                                                                            parameters on the right-hand panel.
                                                                        </li>
                                                                        <li>
                                                                            Configure typography and colors using
                                                                            the styles.
                                                                        </li>
                                                                        <li>
                                                                            You may use additional auto-layout for
                                                                            organizing components and elements as
                                                                            needed.
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="assignmentDescription">
                                                <button
                                                    class="btn accordionBtn d-flex justify-content-between"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#assginmentEducation"
                                                    aria-expanded="true"
                                                    aria-controls="assginmentEducation"
                                                >
                                                    <h6>Educational materials</h6>
                                                    <img src="img/courseList/downIcon.svg" />
                                                </button>

                                                <div
                                                    id="assginmentEducation"
                                                    class="collapse w-100"
                                                    aria-labelledby="headingOne"
                                                    data-parent="#myAssignmentBrief"
                                                >
                                                    <div class="accordionBody">
                                                        <div class="content">
                                                            <div class="educationMaterial">
                                                                <div class="">
                                                                    <div class="card educationCard">
                                                                        <img
                                                                            src="img/dashboard/img.png"
                                                                            alt="inoura"
                                                                            class="card-img-top cardImg"
                                                                        />
                                                                        <div class="card-body">
                                                                            <div class="cardData">
                                                                                <h3 class="card-title">
                                                                                    <span>Video:</span> Design system
                                                                                    organization in Figma
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class="card educationCard">
                                                                        <img
                                                                            src="img/dashboard/img.png"
                                                                            alt="inoura"
                                                                            class="card-img-top cardImg"
                                                                        />
                                                                        <div class="card-body">
                                                                            <div class="cardData">
                                                                                <h3 class="card-title">
                                                                                    <span>Video:</span> Design system
                                                                                    organization in Figma
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class="card educationCard">
                                                                        <img
                                                                            src="img/dashboard/img.png"
                                                                            alt="inoura"
                                                                            class="card-img-top cardImg"
                                                                        />
                                                                        <div class="card-body">
                                                                            <div class="cardData">
                                                                                <h3 class="card-title">
                                                                                    <span>Video:</span> Design system
                                                                                    organization in Figma
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="assignmentDescription">
                                                <button
                                                    class="btn accordionBtn d-flex justify-content-between"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#assginmentLoadingWork"
                                                    aria-expanded="true"
                                                    aria-controls="assginmentLoadingWork"
                                                >
                                                    <h6>Loading work</h6>
                                                    <img src="img/courseList/downIcon.svg" />
                                                </button>

                                                <div
                                                    id="assginmentLoadingWork"
                                                    class="collapse w-100"
                                                    aria-labelledby="headingOne"
                                                    data-parent="#myAssignmentBrief"
                                                >
                                                    <div class="accordionBody">
                                                        <div class="content">
                                                            <div class="LoadingWorkWrap">
                                                                <form class="w-100">
                                                                    <div class="form-group">
                                                                        <input
                                                                            type="text"
                                                                            class="form-control border-0"
                                                                            id="exampleInputEmail1"
                                                                            aria-describedby="emailHelp"
                                                                            placeholder="Start writing something..."
                                                                        />
                                                                    </div>
                                                                </form>
                                                                <div class="sendBtnWrap">
                                                                    <div
                                                                        class="lectureDetails d-flex align-items-center"
                                                                    >
                                                                        <div class="icons">
                                                                            <img
                                                                                src="img/dashboard/link-45deg.svg"
                                                                                alt="inoura"
                                                                            />
                                                                        </div>
                                                                        <div class="icons">
                                                                            <img
                                                                                src="img/dashboard/paperclip.svg"
                                                                                alt="inoura"
                                                                            />
                                                                        </div>
                                                                        <div class="icons">
                                                                            <img
                                                                                src="img/dashboard/galleryIcon.svg"
                                                                                alt="inoura"
                                                                            />
                                                                        </div>
                                                                    </div>
                                                                    <a href="#"
                                                                    >Send<svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="16"
                                                                            height="17"
                                                                            viewBox="0 0 16 17"
                                                                            fill="none"
                                                                        >
                                                                            <g clip-path="url(#clip0_1025_4134)">
                                                                                <path
                                                                                    d="M15.8542 0.646028C15.9234 0.71536 15.9707 0.803502 15.9903 0.899505C16.0098 0.995508 16.0008 1.09514 15.9642 1.18603L10.1452 15.733C10.0939 15.8611 10.0083 15.9726 9.89771 16.0552C9.78715 16.1378 9.65596 16.1883 9.51856 16.2011C9.38116 16.2139 9.2429 16.1886 9.11897 16.1279C8.99505 16.0672 8.89027 15.9734 8.81618 15.857L5.63818 10.862L0.643176 7.68403C0.526494 7.61001 0.432527 7.5052 0.371646 7.38116C0.310764 7.25711 0.285334 7.11866 0.298161 6.98108C0.310988 6.8435 0.361574 6.71214 0.444337 6.60148C0.5271 6.49083 0.638822 6.4052 0.767176 6.35403L15.3142 0.537028C15.4051 0.50044 15.5047 0.49136 15.6007 0.510916C15.6967 0.530473 15.7848 0.577803 15.8542 0.647028V0.646028ZM6.63618 10.57L9.39718 14.908L14.1302 3.07603L6.63618 10.57ZM13.4232 2.36903L1.59118 7.10203L5.93018 9.86203L13.4242 2.36903H13.4232Z"
                                                                                    fill="#154BD8"
                                                                                />
                                                                            </g>
                                                                            <defs>
                                                                                <clipPath id="clip0_1025_4134">
                                                                                    <rect
                                                                                        width="16"
                                                                                        height="16"
                                                                                        fill="white"
                                                                                        transform="translate(0 0.5)"
                                                                                    />
                                                                                </clipPath>
                                                                            </defs>
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="assginments_Card d-flex align-items-center justify-content-between"
                                >
                                    <div class="assignmentTopic">
                                        <img src="img/myAssignment/img2.svg" alt="image" />
                                        <div class="name_Wrapper">
                                            <h4>World Literature</h4>
                                            <p>Practical task</p>
                                        </div>
                                    </div>
                                    <div class="mentorWrap">
                                        <h6>Mentor</h6>
                                        <div class="profile d-flex align-items-center">
                                            <img
                                                src="img/courseDetail/profilePic.svg"
                                                alt="inoura"
                                                class="profilePic"
                                            />
                                            <p class="profileName mb-0">Mrs. Doe</p>
                                        </div>
                                    </div>
                                    <div class="durationWrapper">
                                        <h6>Due on</h6>
                                        <div class="tags date d-flex align-items-center">
                                            <img
                                                src="img/myAssignment/calendar4.svg"
                                                alt="inoura"
                                            />
                                            <p class="assignmentDate mb-0">Jan 23, Fri</p>
                                        </div>
                                    </div>
                                    <div class="assignmentStatus">
                                        <h6>Status</h6>
                                        <div class="assignmentCompTag">
                                            <button class="btn btnAssignExpected">
                                                <img
                                                    src="img/myAssignment/clock-history.svg"
                                                    alt="inoura"
                                                />
                                                On Check
                                            </button>
                                        </div>
                                    </div>
                                    <div class="completionSubmitWrap">
                                        <div class="scoresWrap bgYellow textYellow">
                                            <p>Score:</p>
                                            <div class="fontW500"><span>8</span>/10</div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="assginments_Card d-flex align-items-center justify-content-between"
                                >
                                    <div class="assignmentTopic">
                                        <img src="img/myAssignment/img3.svg" alt="image" />
                                        <div class="name_Wrapper">
                                            <h4>World Literature</h4>
                                            <p>Practical task</p>
                                        </div>
                                    </div>
                                    <div class="mentorWrap">
                                        <h6>Mentor</h6>
                                        <div class="profile d-flex align-items-center">
                                            <img
                                                src="img/courseDetail/profilePic.svg"
                                                alt="inoura"
                                                class="profilePic"
                                            />
                                            <p class="profileName mb-0">Mrs. Doe</p>
                                        </div>
                                    </div>
                                    <div class="durationWrapper">
                                        <h6>Due on</h6>
                                        <div class="tags date d-flex align-items-center">
                                            <img
                                                src="img/myAssignment/calendar4.svg"
                                                alt="inoura"
                                            />
                                            <p class="assignmentDate mb-0">Jan 23, Fri</p>
                                        </div>
                                    </div>
                                    <div class="assignmentStatus">
                                        <h6>Status</h6>
                                        <div class="assignmentCompTag">
                                            <button class="btn btnAssignNotAccepted">
                                                <img
                                                    src="img/myAssignment/clock-history.svg"
                                                    alt="inoura"
                                                />
                                                Not accepted
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="submitBtnWrap">
                                            <a href="#" class="btn"
                                            >Submit
                                                <img
                                                    src="img/dashboard/plusCircle.svg"
                                                    alt="inoura"
                                                /></a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="assginments_Card d-flex align-items-center justify-content-between"
                                >
                                    <div class="assignmentTopic">
                                        <img src="img/myAssignment/img1.svg" alt="image" />
                                        <div class="name_Wrapper">
                                            <h4>World Literature</h4>
                                            <p>Practical task</p>
                                        </div>
                                    </div>
                                    <div class="mentorWrap">
                                        <h6>Mentor</h6>
                                        <div class="profile d-flex align-items-center">
                                            <img
                                                src="img/courseDetail/profilePic.svg"
                                                alt="inoura"
                                                class="profilePic"
                                            />
                                            <p class="profileName mb-0">Mrs. Doe</p>
                                        </div>
                                    </div>
                                    <div class="durationWrapper">
                                        <h6>Due on</h6>
                                        <div class="tags date d-flex align-items-center">
                                            <img
                                                src="img/myAssignment/calendar4.svg"
                                                alt="inoura"
                                            />
                                            <p class="assignmentDate mb-0">Jan 23, Fri</p>
                                        </div>
                                    </div>
                                    <div class="assignmentStatus">
                                        <h6>Status</h6>
                                        <div class="assignmentCompTag">
                                            <button class="btn btnAssignAccepted">
                                                <img
                                                    src="img/myAssignment/check-circle.svg"
                                                    alt="inoura"
                                                />
                                                Accepted
                                            </button>
                                        </div>
                                    </div>
                                    <div class="completionSubmitWrap">
                                        <div class="scoresWrap bgBlue textBlue">
                                            <p>Score:</p>
                                            <div class="fontW500"><span>8</span>/10</div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="assginments_Card d-flex align-items-center justify-content-between"
                                >
                                    <div class="assignmentTopic">
                                        <img src="img/myAssignment/img3.svg" alt="image" />
                                        <div class="name_Wrapper">
                                            <h4>World Literature</h4>
                                            <p>Practical task</p>
                                        </div>
                                    </div>
                                    <div class="mentorWrap">
                                        <h6>Mentor</h6>
                                        <div class="profile d-flex align-items-center">
                                            <img
                                                src="img/courseDetail/profilePic.svg"
                                                alt="inoura"
                                                class="profilePic"
                                            />
                                            <p class="profileName mb-0">Mrs. Doe</p>
                                        </div>
                                    </div>
                                    <div class="durationWrapper">
                                        <h6>Due on</h6>
                                        <div class="tags date d-flex align-items-center">
                                            <img
                                                src="img/myAssignment/calendar4.svg"
                                                alt="inoura"
                                            />
                                            <p class="assignmentDate mb-0">Jan 23, Fri</p>
                                        </div>
                                    </div>
                                    <div class="assignmentStatus">
                                        <h6>Status</h6>
                                        <div class="assignmentCompTag">
                                            <button class="btn btnAssignNotAccepted">
                                                <img
                                                    src="img/myAssignment/clock-history.svg"
                                                    alt="inoura"
                                                />
                                                Not accepted
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="submitBtnWrap">
                                            <a href="#" class="btn"
                                            >Submit
                                                <img
                                                    src="img/dashboard/plusCircle.svg"
                                                    alt="inoura"
                                                /></a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="assginments_Card d-flex align-items-center justify-content-between"
                                >
                                    <div class="assignmentTopic">
                                        <img src="img/myAssignment/img1.svg" alt="image" />
                                        <div class="name_Wrapper">
                                            <h4>World Literature</h4>
                                            <p>Practical task</p>
                                        </div>
                                    </div>
                                    <div class="mentorWrap">
                                        <h6>Mentor</h6>
                                        <div class="profile d-flex align-items-center">
                                            <img
                                                src="img/courseDetail/profilePic.svg"
                                                alt="inoura"
                                                class="profilePic"
                                            />
                                            <p class="profileName mb-0">Mrs. Doe</p>
                                        </div>
                                    </div>
                                    <div class="durationWrapper">
                                        <h6>Due on</h6>
                                        <div class="tags date d-flex align-items-center">
                                            <img
                                                src="img/myAssignment/calendar4.svg"
                                                alt="inoura"
                                            />
                                            <p class="assignmentDate mb-0">Jan 23, Fri</p>
                                        </div>
                                    </div>
                                    <div class="assignmentStatus">
                                        <h6>Status</h6>
                                        <div class="assignmentCompTag">
                                            <button class="btn btnAssignAccepted">
                                                <img
                                                    src="img/myAssignment/check-circle.svg"
                                                    alt="inoura"
                                                />
                                                Accepted
                                            </button>
                                        </div>
                                    </div>
                                    <div class="completionSubmitWrap">
                                        <div class="scoresWrap bgBlue textBlue">
                                            <p>Score:</p>
                                            <div class="fontW500"><span>8</span>/10</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabpanel one Ends -->

                        <!-- tabpanel Two Starts -->
                        <div
                            class="tab-pane fade"
                            id="pills--activeAssignments"
                            role="tabpanel"
                            aria-labelledby="pills--activeAssignments-tab"
                        >
                            <div class="tabOverview">
                                <div
                                    class="assginments_Card d-flex align-items-center justify-content-between flex-column"
                                >
                                    <div
                                        class="d-flex align-items-center justify-content-between w-100 flex-wrap"
                                    >
                                        <div class="assignmentTopic">
                                            <img src="img/myAssignment/img1.svg" alt="image" />
                                            <div class="name_Wrapper">
                                                <h4>World Literature</h4>
                                                <p>Practical task</p>
                                            </div>
                                        </div>
                                        <div class="mentorWrap">
                                            <h6>Mentor</h6>
                                            <div class="profile d-flex align-items-center">
                                                <img
                                                    src="img/courseDetail/profilePic.svg"
                                                    alt="inoura"
                                                    class="profilePic"
                                                />
                                                <p class="profileName mb-0">Mrs. Doe</p>
                                            </div>
                                        </div>
                                        <div class="durationWrapper">
                                            <h6>Due on</h6>
                                            <div class="tags date d-flex align-items-center">
                                                <img
                                                    src="img/myAssignment/calendar4.svg"
                                                    alt="inoura"
                                                />
                                                <p class="assignmentDate mb-0">Jan 23, Fri</p>
                                            </div>
                                        </div>
                                        <div class="assignmentStatus">
                                            <h6>Status</h6>
                                            <div class="assignmentCompTag">
                                                <button class="btn btnAssignExpected">
                                                    <img
                                                        src="img/myAssignment/clock-history.svg"
                                                        alt="inoura"
                                                    />
                                                    Expected
                                                </button>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="submitBtnWrap" id="assignmentSubmit">
                                                <a href="#" class="btn">
                                                    Submit
                                                    <img
                                                        src="img/dashboard/plusCircle.svg"
                                                        alt="inoura"
                                                        id="icon"
                                                    />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="assignmentSubmitDetails" class="accordionWrap">
                                        <div class="assignmentAccordion" id="myAssignmentBrief">
                                            <div class="assignmentDescription">
                                                <button
                                                    class="btn accordionBtn d-flex justify-content-between"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#assginmentBrief"
                                                    aria-expanded="true"
                                                    aria-controls="assginmentBrief"
                                                >
                                                    <h6>Brief</h6>
                                                    <img src="img/courseList/downIcon.svg" />
                                                </button>

                                                <div
                                                    id="assginmentBrief"
                                                    class="collapse show"
                                                    aria-labelledby="headingOne"
                                                    data-parent="#myAssignmentBrief"
                                                >
                                                    <div class="accordionBody">
                                                        <div class="content">
                                                            <p>Here's what needs to be done:</p>
                                                            <ol class="">
                                                                <li>
                                                                    Open the Figma file with the design
                                                                    system. The link to this file is located
                                                                    in the Individual Variations section.
                                                                    Click "Open in Figma" to have the file
                                                                    appear in your drafts.
                                                                </li>
                                                                <li>
                                                                    Return to the Individual Variations
                                                                    section and select the next Figma link to
                                                                    find PNG images of screens.
                                                                </li>
                                                                <li>
                                                                    Inside the design system file, create a
                                                                    separate page. Then, copy and paste your
                                                                    version of the images for replication into
                                                                    this page.
                                                                </li>
                                                                <li>
                                                                    Using the PNG images as references,
                                                                    reproduce screens as follows:
                                                                    <ul>
                                                                        <li>
                                                                            Use only components from the design
                                                                            system; do not create your own.
                                                                        </li>
                                                                        <li>
                                                                            Do not detach components; adjust their
                                                                            appearance using the component
                                                                            parameters on the right-hand panel.
                                                                        </li>
                                                                        <li>
                                                                            Configure typography and colors using
                                                                            the styles.
                                                                        </li>
                                                                        <li>
                                                                            You may use additional auto-layout for
                                                                            organizing components and elements as
                                                                            needed.
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="assignmentDescription">
                                                <button
                                                    class="btn accordionBtn d-flex justify-content-between"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#assginmentEducation"
                                                    aria-expanded="true"
                                                    aria-controls="assginmentEducation"
                                                >
                                                    <h6>Educational materials</h6>
                                                    <img src="img/courseList/downIcon.svg" />
                                                </button>

                                                <div
                                                    id="assginmentEducation"
                                                    class="collapse w-100"
                                                    aria-labelledby="headingOne"
                                                    data-parent="#myAssignmentBrief"
                                                >
                                                    <div class="accordionBody">
                                                        <div class="content">
                                                            <div class="educationMaterial">
                                                                <div class="">
                                                                    <div class="card educationCard">
                                                                        <img
                                                                            src="img/dashboard/img.png"
                                                                            alt="inoura"
                                                                            class="card-img-top cardImg"
                                                                        />
                                                                        <div class="card-body">
                                                                            <div class="cardData">
                                                                                <h3 class="card-title">
                                                                                    <span>Video:</span> Design system
                                                                                    organization in Figma
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class="card educationCard">
                                                                        <img
                                                                            src="img/dashboard/img.png"
                                                                            alt="inoura"
                                                                            class="card-img-top cardImg"
                                                                        />
                                                                        <div class="card-body">
                                                                            <div class="cardData">
                                                                                <h3 class="card-title">
                                                                                    <span>Video:</span> Design system
                                                                                    organization in Figma
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class="card educationCard">
                                                                        <img
                                                                            src="img/dashboard/img.png"
                                                                            alt="inoura"
                                                                            class="card-img-top cardImg"
                                                                        />
                                                                        <div class="card-body">
                                                                            <div class="cardData">
                                                                                <h3 class="card-title">
                                                                                    <span>Video:</span> Design system
                                                                                    organization in Figma
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="assignmentDescription">
                                                <button
                                                    class="btn accordionBtn d-flex justify-content-between"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#assginmentLoadingWork"
                                                    aria-expanded="true"
                                                    aria-controls="assginmentLoadingWork"
                                                >
                                                    <h6>Loading work</h6>
                                                    <img src="img/courseList/downIcon.svg" />
                                                </button>

                                                <div
                                                    id="assginmentLoadingWork"
                                                    class="collapse w-100"
                                                    aria-labelledby="headingOne"
                                                    data-parent="#myAssignmentBrief"
                                                >
                                                    <div class="accordionBody">
                                                        <div class="content">
                                                            <div class="LoadingWorkWrap">
                                                                <form class="w-100">
                                                                    <div class="form-group">
                                                                        <input
                                                                            type="text"
                                                                            class="form-control border-0"
                                                                            id="exampleInputEmail1"
                                                                            aria-describedby="emailHelp"
                                                                            placeholder="Start writing something..."
                                                                        />
                                                                    </div>
                                                                </form>
                                                                <div class="sendBtnWrap">
                                                                    <div
                                                                        class="lectureDetails d-flex align-items-center"
                                                                    >
                                                                        <div class="icons">
                                                                            <img
                                                                                src="img/dashboard/link-45deg.svg"
                                                                                alt="inoura"
                                                                            />
                                                                        </div>
                                                                        <div class="icons">
                                                                            <img
                                                                                src="img/dashboard/paperclip.svg"
                                                                                alt="inoura"
                                                                            />
                                                                        </div>
                                                                        <div class="icons">
                                                                            <img
                                                                                src="img/dashboard/galleryIcon.svg"
                                                                                alt="inoura"
                                                                            />
                                                                        </div>
                                                                    </div>
                                                                    <a href="#"
                                                                    >Send<svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="16"
                                                                            height="17"
                                                                            viewBox="0 0 16 17"
                                                                            fill="none"
                                                                        >
                                                                            <g clip-path="url(#clip0_1025_4134)">
                                                                                <path
                                                                                    d="M15.8542 0.646028C15.9234 0.71536 15.9707 0.803502 15.9903 0.899505C16.0098 0.995508 16.0008 1.09514 15.9642 1.18603L10.1452 15.733C10.0939 15.8611 10.0083 15.9726 9.89771 16.0552C9.78715 16.1378 9.65596 16.1883 9.51856 16.2011C9.38116 16.2139 9.2429 16.1886 9.11897 16.1279C8.99505 16.0672 8.89027 15.9734 8.81618 15.857L5.63818 10.862L0.643176 7.68403C0.526494 7.61001 0.432527 7.5052 0.371646 7.38116C0.310764 7.25711 0.285334 7.11866 0.298161 6.98108C0.310988 6.8435 0.361574 6.71214 0.444337 6.60148C0.5271 6.49083 0.638822 6.4052 0.767176 6.35403L15.3142 0.537028C15.4051 0.50044 15.5047 0.49136 15.6007 0.510916C15.6967 0.530473 15.7848 0.577803 15.8542 0.647028V0.646028ZM6.63618 10.57L9.39718 14.908L14.1302 3.07603L6.63618 10.57ZM13.4232 2.36903L1.59118 7.10203L5.93018 9.86203L13.4242 2.36903H13.4232Z"
                                                                                    fill="#154BD8"
                                                                                />
                                                                            </g>
                                                                            <defs>
                                                                                <clipPath id="clip0_1025_4134">
                                                                                    <rect
                                                                                        width="16"
                                                                                        height="16"
                                                                                        fill="white"
                                                                                        transform="translate(0 0.5)"
                                                                                    />
                                                                                </clipPath>
                                                                            </defs>
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="assginments_Card d-flex align-items-center justify-content-between"
                                >
                                    <div class="assignmentTopic">
                                        <img src="img/myAssignment/img2.svg" alt="image" />
                                        <div class="name_Wrapper">
                                            <h4>World Literature</h4>
                                            <p>Practical task</p>
                                        </div>
                                    </div>
                                    <div class="mentorWrap">
                                        <h6>Mentor</h6>
                                        <div class="profile d-flex align-items-center">
                                            <img
                                                src="img/courseDetail/profilePic.svg"
                                                alt="inoura"
                                                class="profilePic"
                                            />
                                            <p class="profileName mb-0">Mrs. Doe</p>
                                        </div>
                                    </div>
                                    <div class="durationWrapper">
                                        <h6>Due on</h6>
                                        <div class="tags date d-flex align-items-center">
                                            <img
                                                src="img/myAssignment/calendar4.svg"
                                                alt="inoura"
                                            />
                                            <p class="assignmentDate mb-0">Jan 23, Fri</p>
                                        </div>
                                    </div>
                                    <div class="assignmentStatus">
                                        <h6>Status</h6>
                                        <div class="assignmentCompTag">
                                            <button class="btn btnAssignExpected">
                                                <img
                                                    src="img/myAssignment/clock-history.svg"
                                                    alt="inoura"
                                                />
                                                On Check
                                            </button>
                                        </div>
                                    </div>
                                    <div class="completionSubmitWrap">
                                        <div class="scoresWrap bgYellow textYellow">
                                            <p>Score:</p>
                                            <div class="fontW500"><span>8</span>/10</div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="assginments_Card d-flex align-items-center justify-content-between"
                                >
                                    <div class="assignmentTopic">
                                        <img src="img/myAssignment/img3.svg" alt="image" />
                                        <div class="name_Wrapper">
                                            <h4>World Literature</h4>
                                            <p>Practical task</p>
                                        </div>
                                    </div>
                                    <div class="mentorWrap">
                                        <h6>Mentor</h6>
                                        <div class="profile d-flex align-items-center">
                                            <img
                                                src="img/courseDetail/profilePic.svg"
                                                alt="inoura"
                                                class="profilePic"
                                            />
                                            <p class="profileName mb-0">Mrs. Doe</p>
                                        </div>
                                    </div>
                                    <div class="durationWrapper">
                                        <h6>Due on</h6>
                                        <div class="tags date d-flex align-items-center">
                                            <img
                                                src="img/myAssignment/calendar4.svg"
                                                alt="inoura"
                                            />
                                            <p class="assignmentDate mb-0">Jan 23, Fri</p>
                                        </div>
                                    </div>
                                    <div class="assignmentStatus">
                                        <h6>Status</h6>
                                        <div class="assignmentCompTag">
                                            <button class="btn btnAssignNotAccepted">
                                                <img
                                                    src="img/myAssignment/clock-history.svg"
                                                    alt="inoura"
                                                />
                                                Not accepted
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="submitBtnWrap">
                                            <a href="#" class="btn"
                                            >Submit
                                                <img
                                                    src="img/dashboard/plusCircle.svg"
                                                    alt="inoura"
                                                /></a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="assginments_Card d-flex align-items-center justify-content-between"
                                >
                                    <div class="assignmentTopic">
                                        <img src="img/myAssignment/img1.svg" alt="image" />
                                        <div class="name_Wrapper">
                                            <h4>World Literature</h4>
                                            <p>Practical task</p>
                                        </div>
                                    </div>
                                    <div class="mentorWrap">
                                        <h6>Mentor</h6>
                                        <div class="profile d-flex align-items-center">
                                            <img
                                                src="img/courseDetail/profilePic.svg"
                                                alt="inoura"
                                                class="profilePic"
                                            />
                                            <p class="profileName mb-0">Mrs. Doe</p>
                                        </div>
                                    </div>
                                    <div class="durationWrapper">
                                        <h6>Due on</h6>
                                        <div class="tags date d-flex align-items-center">
                                            <img
                                                src="img/myAssignment/calendar4.svg"
                                                alt="inoura"
                                            />
                                            <p class="assignmentDate mb-0">Jan 23, Fri</p>
                                        </div>
                                    </div>
                                    <div class="assignmentStatus">
                                        <h6>Status</h6>
                                        <div class="assignmentCompTag">
                                            <button class="btn btnAssignAccepted">
                                                <img
                                                    src="img/myAssignment/check-circle.svg"
                                                    alt="inoura"
                                                />
                                                Accepted
                                            </button>
                                        </div>
                                    </div>
                                    <div class="completionSubmitWrap">
                                        <div class="scoresWrap bgBlue textBlue">
                                            <p>Score:</p>
                                            <div class="fontW500"><span>8</span>/10</div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="assginments_Card d-flex align-items-center justify-content-between"
                                >
                                    <div class="assignmentTopic">
                                        <img src="img/myAssignment/img3.svg" alt="image" />
                                        <div class="name_Wrapper">
                                            <h4>World Literature</h4>
                                            <p>Practical task</p>
                                        </div>
                                    </div>
                                    <div class="mentorWrap">
                                        <h6>Mentor</h6>
                                        <div class="profile d-flex align-items-center">
                                            <img
                                                src="img/courseDetail/profilePic.svg"
                                                alt="inoura"
                                                class="profilePic"
                                            />
                                            <p class="profileName mb-0">Mrs. Doe</p>
                                        </div>
                                    </div>
                                    <div class="durationWrapper">
                                        <h6>Due on</h6>
                                        <div class="tags date d-flex align-items-center">
                                            <img
                                                src="img/myAssignment/calendar4.svg"
                                                alt="inoura"
                                            />
                                            <p class="assignmentDate mb-0">Jan 23, Fri</p>
                                        </div>
                                    </div>
                                    <div class="assignmentStatus">
                                        <h6>Status</h6>
                                        <div class="assignmentCompTag">
                                            <button class="btn btnAssignNotAccepted">
                                                <img
                                                    src="img/myAssignment/clock-history.svg"
                                                    alt="inoura"
                                                />
                                                Not accepted
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="submitBtnWrap">
                                            <a href="#" class="btn"
                                            >Submit
                                                <img
                                                    src="img/dashboard/plusCircle.svg"
                                                    alt="inoura"
                                                /></a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="assginments_Card d-flex align-items-center justify-content-between"
                                >
                                    <div class="assignmentTopic">
                                        <img src="img/myAssignment/img1.svg" alt="image" />
                                        <div class="name_Wrapper">
                                            <h4>World Literature</h4>
                                            <p>Practical task</p>
                                        </div>
                                    </div>
                                    <div class="mentorWrap">
                                        <h6>Mentor</h6>
                                        <div class="profile d-flex align-items-center">
                                            <img
                                                src="img/courseDetail/profilePic.svg"
                                                alt="inoura"
                                                class="profilePic"
                                            />
                                            <p class="profileName mb-0">Mrs. Doe</p>
                                        </div>
                                    </div>
                                    <div class="durationWrapper">
                                        <h6>Due on</h6>
                                        <div class="tags date d-flex align-items-center">
                                            <img
                                                src="img/myAssignment/calendar4.svg"
                                                alt="inoura"
                                            />
                                            <p class="assignmentDate mb-0">Jan 23, Fri</p>
                                        </div>
                                    </div>
                                    <div class="assignmentStatus">
                                        <h6>Status</h6>
                                        <div class="assignmentCompTag">
                                            <button class="btn btnAssignAccepted">
                                                <img
                                                    src="img/myAssignment/check-circle.svg"
                                                    alt="inoura"
                                                />
                                                Accepted
                                            </button>
                                        </div>
                                    </div>
                                    <div class="completionSubmitWrap">
                                        <div class="scoresWrap bgBlue textBlue">
                                            <p>Score:</p>
                                            <div class="fontW500"><span>8</span>/10</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabpanel Two Ends -->

                        <!-- tabpanel Three Starts -->
                        <div
                            class="tab-pane fade"
                            id="pills-completedAssignments"
                            role="tabpanel"
                            aria-labelledby="pills-completedAssignments-tab"
                        >
                            <div class="tabOverview">
                                <div
                                    class="assginments_Card d-flex align-items-center justify-content-between flex-column"
                                >
                                    <div
                                        class="d-flex align-items-center justify-content-between w-100 flex-wrap"
                                    >
                                        <div class="assignmentTopic">
                                            <img src="img/myAssignment/img1.svg" alt="image" />
                                            <div class="name_Wrapper">
                                                <h4>World Literature</h4>
                                                <p>Practical task</p>
                                            </div>
                                        </div>
                                        <div class="mentorWrap">
                                            <h6>Mentor</h6>
                                            <div class="profile d-flex align-items-center">
                                                <img
                                                    src="img/courseDetail/profilePic.svg"
                                                    alt="inoura"
                                                    class="profilePic"
                                                />
                                                <p class="profileName mb-0">Mrs. Doe</p>
                                            </div>
                                        </div>
                                        <div class="durationWrapper">
                                            <h6>Due on</h6>
                                            <div class="tags date d-flex align-items-center">
                                                <img
                                                    src="img/myAssignment/calendar4.svg"
                                                    alt="inoura"
                                                />
                                                <p class="assignmentDate mb-0">Jan 23, Fri</p>
                                            </div>
                                        </div>
                                        <div class="assignmentStatus">
                                            <h6>Status</h6>
                                            <div class="assignmentCompTag">
                                                <button class="btn btnAssignExpected">
                                                    <img
                                                        src="img/myAssignment/clock-history.svg"
                                                        alt="inoura"
                                                    />
                                                    Expected
                                                </button>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="submitBtnWrap" id="assignmentSubmit">
                                                <a href="#" class="btn">
                                                    Submit
                                                    <img
                                                        src="img/dashboard/plusCircle.svg"
                                                        alt="inoura"
                                                        id="icon"
                                                    />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="assignmentSubmitDetails" class="accordionWrap">
                                        <div class="assignmentAccordion" id="myAssignmentBrief">
                                            <div class="assignmentDescription">
                                                <button
                                                    class="btn accordionBtn d-flex justify-content-between"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#assginmentBrief"
                                                    aria-expanded="true"
                                                    aria-controls="assginmentBrief"
                                                >
                                                    <h6>Brief</h6>
                                                    <img src="img/courseList/downIcon.svg" />
                                                </button>

                                                <div
                                                    id="assginmentBrief"
                                                    class="collapse show"
                                                    aria-labelledby="headingOne"
                                                    data-parent="#myAssignmentBrief"
                                                >
                                                    <div class="accordionBody">
                                                        <div class="content">
                                                            <p>Here's what needs to be done:</p>
                                                            <ol class="">
                                                                <li>
                                                                    Open the Figma file with the design
                                                                    system. The link to this file is located
                                                                    in the Individual Variations section.
                                                                    Click "Open in Figma" to have the file
                                                                    appear in your drafts.
                                                                </li>
                                                                <li>
                                                                    Return to the Individual Variations
                                                                    section and select the next Figma link to
                                                                    find PNG images of screens.
                                                                </li>
                                                                <li>
                                                                    Inside the design system file, create a
                                                                    separate page. Then, copy and paste your
                                                                    version of the images for replication into
                                                                    this page.
                                                                </li>
                                                                <li>
                                                                    Using the PNG images as references,
                                                                    reproduce screens as follows:
                                                                    <ul>
                                                                        <li>
                                                                            Use only components from the design
                                                                            system; do not create your own.
                                                                        </li>
                                                                        <li>
                                                                            Do not detach components; adjust their
                                                                            appearance using the component
                                                                            parameters on the right-hand panel.
                                                                        </li>
                                                                        <li>
                                                                            Configure typography and colors using
                                                                            the styles.
                                                                        </li>
                                                                        <li>
                                                                            You may use additional auto-layout for
                                                                            organizing components and elements as
                                                                            needed.
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="assignmentDescription">
                                                <button
                                                    class="btn accordionBtn d-flex justify-content-between"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#assginmentEducation"
                                                    aria-expanded="true"
                                                    aria-controls="assginmentEducation"
                                                >
                                                    <h6>Educational materials</h6>
                                                    <img src="img/courseList/downIcon.svg" />
                                                </button>

                                                <div
                                                    id="assginmentEducation"
                                                    class="collapse w-100"
                                                    aria-labelledby="headingOne"
                                                    data-parent="#myAssignmentBrief"
                                                >
                                                    <div class="accordionBody">
                                                        <div class="content">
                                                            <div class="educationMaterial">
                                                                <div class="">
                                                                    <div class="card educationCard">
                                                                        <img
                                                                            src="img/dashboard/img.png"
                                                                            alt="inoura"
                                                                            class="card-img-top cardImg"
                                                                        />
                                                                        <div class="card-body">
                                                                            <div class="cardData">
                                                                                <h3 class="card-title">
                                                                                    <span>Video:</span> Design system
                                                                                    organization in Figma
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class="card educationCard">
                                                                        <img
                                                                            src="img/dashboard/img.png"
                                                                            alt="inoura"
                                                                            class="card-img-top cardImg"
                                                                        />
                                                                        <div class="card-body">
                                                                            <div class="cardData">
                                                                                <h3 class="card-title">
                                                                                    <span>Video:</span> Design system
                                                                                    organization in Figma
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class="card educationCard">
                                                                        <img
                                                                            src="img/dashboard/img.png"
                                                                            alt="inoura"
                                                                            class="card-img-top cardImg"
                                                                        />
                                                                        <div class="card-body">
                                                                            <div class="cardData">
                                                                                <h3 class="card-title">
                                                                                    <span>Video:</span> Design system
                                                                                    organization in Figma
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="assignmentDescription">
                                                <button
                                                    class="btn accordionBtn d-flex justify-content-between"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#assginmentLoadingWork"
                                                    aria-expanded="true"
                                                    aria-controls="assginmentLoadingWork"
                                                >
                                                    <h6>Loading work</h6>
                                                    <img src="img/courseList/downIcon.svg" />
                                                </button>

                                                <div
                                                    id="assginmentLoadingWork"
                                                    class="collapse w-100"
                                                    aria-labelledby="headingOne"
                                                    data-parent="#myAssignmentBrief"
                                                >
                                                    <div class="accordionBody">
                                                        <div class="content">
                                                            <div class="LoadingWorkWrap">
                                                                <form class="w-100">
                                                                    <div class="form-group">
                                                                        <input
                                                                            type="text"
                                                                            class="form-control border-0"
                                                                            id="exampleInputEmail1"
                                                                            aria-describedby="emailHelp"
                                                                            placeholder="Start writing something..."
                                                                        />
                                                                    </div>
                                                                </form>
                                                                <div class="sendBtnWrap">
                                                                    <div
                                                                        class="lectureDetails d-flex align-items-center"
                                                                    >
                                                                        <div class="icons">
                                                                            <img
                                                                                src="img/dashboard/link-45deg.svg"
                                                                                alt="inoura"
                                                                            />
                                                                        </div>
                                                                        <div class="icons">
                                                                            <img
                                                                                src="img/dashboard/paperclip.svg"
                                                                                alt="inoura"
                                                                            />
                                                                        </div>
                                                                        <div class="icons">
                                                                            <img
                                                                                src="img/dashboard/galleryIcon.svg"
                                                                                alt="inoura"
                                                                            />
                                                                        </div>
                                                                    </div>
                                                                    <a href="#"
                                                                    >Send<svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="16"
                                                                            height="17"
                                                                            viewBox="0 0 16 17"
                                                                            fill="none"
                                                                        >
                                                                            <g clip-path="url(#clip0_1025_4134)">
                                                                                <path
                                                                                    d="M15.8542 0.646028C15.9234 0.71536 15.9707 0.803502 15.9903 0.899505C16.0098 0.995508 16.0008 1.09514 15.9642 1.18603L10.1452 15.733C10.0939 15.8611 10.0083 15.9726 9.89771 16.0552C9.78715 16.1378 9.65596 16.1883 9.51856 16.2011C9.38116 16.2139 9.2429 16.1886 9.11897 16.1279C8.99505 16.0672 8.89027 15.9734 8.81618 15.857L5.63818 10.862L0.643176 7.68403C0.526494 7.61001 0.432527 7.5052 0.371646 7.38116C0.310764 7.25711 0.285334 7.11866 0.298161 6.98108C0.310988 6.8435 0.361574 6.71214 0.444337 6.60148C0.5271 6.49083 0.638822 6.4052 0.767176 6.35403L15.3142 0.537028C15.4051 0.50044 15.5047 0.49136 15.6007 0.510916C15.6967 0.530473 15.7848 0.577803 15.8542 0.647028V0.646028ZM6.63618 10.57L9.39718 14.908L14.1302 3.07603L6.63618 10.57ZM13.4232 2.36903L1.59118 7.10203L5.93018 9.86203L13.4242 2.36903H13.4232Z"
                                                                                    fill="#154BD8"
                                                                                />
                                                                            </g>
                                                                            <defs>
                                                                                <clipPath id="clip0_1025_4134">
                                                                                    <rect
                                                                                        width="16"
                                                                                        height="16"
                                                                                        fill="white"
                                                                                        transform="translate(0 0.5)"
                                                                                    />
                                                                                </clipPath>
                                                                            </defs>
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="assginments_Card d-flex align-items-center justify-content-between"
                                >
                                    <div class="assignmentTopic">
                                        <img src="img/myAssignment/img2.svg" alt="image" />
                                        <div class="name_Wrapper">
                                            <h4>World Literature</h4>
                                            <p>Practical task</p>
                                        </div>
                                    </div>
                                    <div class="mentorWrap">
                                        <h6>Mentor</h6>
                                        <div class="profile d-flex align-items-center">
                                            <img
                                                src="img/courseDetail/profilePic.svg"
                                                alt="inoura"
                                                class="profilePic"
                                            />
                                            <p class="profileName mb-0">Mrs. Doe</p>
                                        </div>
                                    </div>
                                    <div class="durationWrapper">
                                        <h6>Due on</h6>
                                        <div class="tags date d-flex align-items-center">
                                            <img
                                                src="img/myAssignment/calendar4.svg"
                                                alt="inoura"
                                            />
                                            <p class="assignmentDate mb-0">Jan 23, Fri</p>
                                        </div>
                                    </div>
                                    <div class="assignmentStatus">
                                        <h6>Status</h6>
                                        <div class="assignmentCompTag">
                                            <button class="btn btnAssignExpected">
                                                <img
                                                    src="img/myAssignment/clock-history.svg"
                                                    alt="inoura"
                                                />
                                                On Check
                                            </button>
                                        </div>
                                    </div>
                                    <div class="completionSubmitWrap">
                                        <div class="scoresWrap bgYellow textYellow">
                                            <p>Score:</p>
                                            <div class="fontW500"><span>8</span>/10</div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="assginments_Card d-flex align-items-center justify-content-between"
                                >
                                    <div class="assignmentTopic">
                                        <img src="img/myAssignment/img3.svg" alt="image" />
                                        <div class="name_Wrapper">
                                            <h4>World Literature</h4>
                                            <p>Practical task</p>
                                        </div>
                                    </div>
                                    <div class="mentorWrap">
                                        <h6>Mentor</h6>
                                        <div class="profile d-flex align-items-center">
                                            <img
                                                src="img/courseDetail/profilePic.svg"
                                                alt="inoura"
                                                class="profilePic"
                                            />
                                            <p class="profileName mb-0">Mrs. Doe</p>
                                        </div>
                                    </div>
                                    <div class="durationWrapper">
                                        <h6>Due on</h6>
                                        <div class="tags date d-flex align-items-center">
                                            <img
                                                src="img/myAssignment/calendar4.svg"
                                                alt="inoura"
                                            />
                                            <p class="assignmentDate mb-0">Jan 23, Fri</p>
                                        </div>
                                    </div>
                                    <div class="assignmentStatus">
                                        <h6>Status</h6>
                                        <div class="assignmentCompTag">
                                            <button class="btn btnAssignNotAccepted">
                                                <img
                                                    src="img/myAssignment/clock-history.svg"
                                                    alt="inoura"
                                                />
                                                Not accepted
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="submitBtnWrap">
                                            <a href="#" class="btn"
                                            >Submit
                                                <img
                                                    src="img/dashboard/plusCircle.svg"
                                                    alt="inoura"
                                                /></a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="assginments_Card d-flex align-items-center justify-content-between"
                                >
                                    <div class="assignmentTopic">
                                        <img src="img/myAssignment/img1.svg" alt="image" />
                                        <div class="name_Wrapper">
                                            <h4>World Literature</h4>
                                            <p>Practical task</p>
                                        </div>
                                    </div>
                                    <div class="mentorWrap">
                                        <h6>Mentor</h6>
                                        <div class="profile d-flex align-items-center">
                                            <img
                                                src="img/courseDetail/profilePic.svg"
                                                alt="inoura"
                                                class="profilePic"
                                            />
                                            <p class="profileName mb-0">Mrs. Doe</p>
                                        </div>
                                    </div>
                                    <div class="durationWrapper">
                                        <h6>Due on</h6>
                                        <div class="tags date d-flex align-items-center">
                                            <img
                                                src="img/myAssignment/calendar4.svg"
                                                alt="inoura"
                                            />
                                            <p class="assignmentDate mb-0">Jan 23, Fri</p>
                                        </div>
                                    </div>
                                    <div class="assignmentStatus">
                                        <h6>Status</h6>
                                        <div class="assignmentCompTag">
                                            <button class="btn btnAssignAccepted">
                                                <img
                                                    src="img/myAssignment/check-circle.svg"
                                                    alt="inoura"
                                                />
                                                Accepted
                                            </button>
                                        </div>
                                    </div>
                                    <div class="completionSubmitWrap">
                                        <div class="scoresWrap bgBlue textBlue">
                                            <p>Score:</p>
                                            <div class="fontW500"><span>8</span>/10</div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="assginments_Card d-flex align-items-center justify-content-between"
                                >
                                    <div class="assignmentTopic">
                                        <img src="img/myAssignment/img3.svg" alt="image" />
                                        <div class="name_Wrapper">
                                            <h4>World Literature</h4>
                                            <p>Practical task</p>
                                        </div>
                                    </div>
                                    <div class="mentorWrap">
                                        <h6>Mentor</h6>
                                        <div class="profile d-flex align-items-center">
                                            <img
                                                src="img/courseDetail/profilePic.svg"
                                                alt="inoura"
                                                class="profilePic"
                                            />
                                            <p class="profileName mb-0">Mrs. Doe</p>
                                        </div>
                                    </div>
                                    <div class="durationWrapper">
                                        <h6>Due on</h6>
                                        <div class="tags date d-flex align-items-center">
                                            <img
                                                src="img/myAssignment/calendar4.svg"
                                                alt="inoura"
                                            />
                                            <p class="assignmentDate mb-0">Jan 23, Fri</p>
                                        </div>
                                    </div>
                                    <div class="assignmentStatus">
                                        <h6>Status</h6>
                                        <div class="assignmentCompTag">
                                            <button class="btn btnAssignNotAccepted">
                                                <img
                                                    src="img/myAssignment/clock-history.svg"
                                                    alt="inoura"
                                                />
                                                Not accepted
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="submitBtnWrap">
                                            <a href="#" class="btn"
                                            >Submit
                                                <img
                                                    src="img/dashboard/plusCircle.svg"
                                                    alt="inoura"
                                                /></a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="assginments_Card d-flex align-items-center justify-content-between"
                                >
                                    <div class="assignmentTopic">
                                        <img src="img/myAssignment/img1.svg" alt="image" />
                                        <div class="name_Wrapper">
                                            <h4>World Literature</h4>
                                            <p>Practical task</p>
                                        </div>
                                    </div>
                                    <div class="mentorWrap">
                                        <h6>Mentor</h6>
                                        <div class="profile d-flex align-items-center">
                                            <img
                                                src="img/courseDetail/profilePic.svg"
                                                alt="inoura"
                                                class="profilePic"
                                            />
                                            <p class="profileName mb-0">Mrs. Doe</p>
                                        </div>
                                    </div>
                                    <div class="durationWrapper">
                                        <h6>Due on</h6>
                                        <div class="tags date d-flex align-items-center">
                                            <img
                                                src="img/myAssignment/calendar4.svg"
                                                alt="inoura"
                                            />
                                            <p class="assignmentDate mb-0">Jan 23, Fri</p>
                                        </div>
                                    </div>
                                    <div class="assignmentStatus">
                                        <h6>Status</h6>
                                        <div class="assignmentCompTag">
                                            <button class="btn btnAssignAccepted">
                                                <img
                                                    src="img/myAssignment/check-circle.svg"
                                                    alt="inoura"
                                                />
                                                Accepted
                                            </button>
                                        </div>
                                    </div>
                                    <div class="completionSubmitWrap">
                                        <div class="scoresWrap bgBlue textBlue">
                                            <p>Score:</p>
                                            <div class="fontW500"><span>8</span>/10</div>
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
