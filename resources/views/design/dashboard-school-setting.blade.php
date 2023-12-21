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
    <title>Messages</title>
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
                <div class="col-xl-3 col-lg-12 sideBarColumn">
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
                    <div class="paymentTabbing">
                        <h4 class="heading">Payment information</h4>
                        <div class="courseOverview">
                            <div class="tabbingWrapper">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a
                                            class="nav-link active"
                                            id="pills-profile-tab"
                                            data-toggle="pill"
                                            href="#pills-profile"
                                            role="tab"
                                            aria-controls="pills-profile"
                                            aria-selected="true"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="17"
                                                viewBox="0 0 16 17"
                                                fill="none"
                                            >
                                                <g clip-path="url(#clip0_1193_9008)">
                                                    <path
                                                        d="M8 9.55078C8.66304 9.55078 9.29893 9.28739 9.76777 8.81855C10.2366 8.34971 10.5 7.71382 10.5 7.05078C10.5 6.38774 10.2366 5.75186 9.76777 5.28301C9.29893 4.81417 8.66304 4.55078 8 4.55078C7.33696 4.55078 6.70107 4.81417 6.23223 5.28301C5.76339 5.75186 5.5 6.38774 5.5 7.05078C5.5 7.71382 5.76339 8.34971 6.23223 8.81855C6.70107 9.28739 7.33696 9.55078 8 9.55078Z"
                                                        fill="#154BD8"
                                                    />
                                                    <path
                                                        d="M2 2.5C1.46957 2.5 0.960859 2.71071 0.585786 3.08579C0.210714 3.46086 0 3.96957 0 4.5L0 12.5C0 13.0304 0.210714 13.5391 0.585786 13.9142C0.960859 14.2893 1.46957 14.5 2 14.5H14C14.5304 14.5 15.0391 14.2893 15.4142 13.9142C15.7893 13.5391 16 13.0304 16 12.5V4.5C16 3.96957 15.7893 3.46086 15.4142 3.08579C15.0391 2.71071 14.5304 2.5 14 2.5H2ZM12.798 13.5C12.345 12.23 11.038 10.5 8 10.5C4.963 10.5 3.655 12.23 3.202 13.5H2C1.73478 13.5 1.48043 13.3946 1.29289 13.2071C1.10536 13.0196 1 12.7652 1 12.5V4.5C1 4.23478 1.10536 3.98043 1.29289 3.79289C1.48043 3.60536 1.73478 3.5 2 3.5H14C14.2652 3.5 14.5196 3.60536 14.7071 3.79289C14.8946 3.98043 15 4.23478 15 4.5V12.5C15 12.7652 14.8946 13.0196 14.7071 13.2071C14.5196 13.3946 14.2652 13.5 14 13.5H12.798Z"
                                                        fill="#154BD8"
                                                    />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1193_9008">
                                                        <rect
                                                            width="16"
                                                            height="16"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                        />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            Profile</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            id="pills-userNotification-tab"
                                            data-toggle="pill"
                                            href="#pills-userNotification"
                                            role="tab"
                                            aria-controls="pills-userNotification"
                                            aria-selected="false"
                                        ><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="17"
                                                viewBox="0 0 16 17"
                                                fill="none"
                                            >
                                                <g clip-path="url(#clip0_1193_6442)">
                                                    <path
                                                        d="M8 16.5009C8.53043 16.5009 9.03914 16.2902 9.41421 15.9151C9.78929 15.54 10 15.0313 10 14.5009H6C6 15.0313 6.21071 15.54 6.58579 15.9151C6.96086 16.2902 7.46957 16.5009 8 16.5009ZM8 2.41887L7.203 2.57987C6.29896 2.76408 5.48633 3.25498 4.90265 3.9695C4.31897 4.68402 4.0001 5.57826 4 6.50087C4 7.12887 3.866 8.69787 3.541 10.2429C3.381 11.0099 3.165 11.8089 2.878 12.5009H13.122C12.835 11.8089 12.62 11.0109 12.459 10.2429C12.134 8.69787 12 7.12887 12 6.50087C11.9997 5.57843 11.6807 4.68442 11.097 3.97011C10.5134 3.2558 9.70087 2.76504 8.797 2.58087L8 2.41787V2.41887ZM14.22 12.5009C14.443 12.9479 14.701 13.3019 15 13.5009H1C1.299 13.3019 1.557 12.9479 1.78 12.5009C2.68 10.7009 3 7.38088 3 6.50087C3 4.08087 4.72 2.06087 7.005 1.59987C6.99104 1.46083 7.00638 1.3204 7.05003 1.18765C7.09368 1.0549 7.16467 0.932765 7.25842 0.829133C7.35217 0.725501 7.4666 0.642669 7.59433 0.585979C7.72206 0.529289 7.86026 0.5 8 0.5C8.13974 0.5 8.27794 0.529289 8.40567 0.585979C8.5334 0.642669 8.64783 0.725501 8.74158 0.829133C8.83533 0.932765 8.90632 1.0549 8.94997 1.18765C8.99362 1.3204 9.00896 1.46083 8.995 1.59987C10.1253 1.82978 11.1414 2.44324 11.8712 3.33638C12.6011 4.22952 12.9999 5.34745 13 6.50087C13 7.38088 13.32 10.7009 14.22 12.5009Z"
                                                        fill="#154BD8"
                                                    />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1193_6442">
                                                        <rect
                                                            width="16"
                                                            height="16"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                        />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            Notification</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            id="pills-settingsPassword-tab"
                                            data-toggle="pill"
                                            href="#pills-settingsPassword"
                                            role="tab"
                                            aria-controls="pills-settingsPassword"
                                            aria-selected="false"
                                        ><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="17"
                                                viewBox="0 0 16 17"
                                                fill="none"
                                            >
                                                <g clip-path="url(#clip0_1193_4492)">
                                                    <path
                                                        d="M5.33801 2.09C4.38559 2.35248 3.43965 2.6379 2.50101 2.946C2.41529 2.97376 2.3391 3.02504 2.28111 3.09399C2.22312 3.16295 2.18567 3.2468 2.17301 3.336C1.61901 7.493 2.89901 10.526 4.42601 12.524C5.07252 13.3784 5.84341 14.1311 6.71301 14.757C7.05901 15.001 7.36501 15.177 7.60601 15.29C7.72601 15.347 7.82401 15.385 7.89901 15.408C7.93181 15.4195 7.96562 15.4279 8.00001 15.433C8.03398 15.4275 8.06743 15.4191 8.10001 15.408C8.17601 15.385 8.27401 15.347 8.39401 15.29C8.63401 15.177 8.94101 15 9.28701 14.757C10.1566 14.1311 10.9275 13.3784 11.574 12.524C13.101 10.527 14.381 7.493 13.827 3.336C13.8145 3.24676 13.777 3.16285 13.719 3.09388C13.661 3.02491 13.5848 2.97366 13.499 2.946C12.848 2.733 11.749 2.386 10.662 2.091C9.55201 1.79 8.53101 1.567 8.00001 1.567C7.47001 1.567 6.44801 1.79 5.33801 2.091V2.09ZM5.07201 1.06C6.15701 0.765 7.31001 0.5 8.00001 0.5C8.69001 0.5 9.84301 0.765 10.928 1.06C12.038 1.36 13.157 1.715 13.815 1.93C14.0901 2.02085 14.334 2.18747 14.5187 2.4107C14.7034 2.63394 14.8213 2.90474 14.859 3.192C15.455 7.669 14.072 10.987 12.394 13.182C11.6824 14.121 10.834 14.9479 9.87701 15.635C9.5461 15.8728 9.19549 16.0819 8.82901 16.26C8.54901 16.392 8.24801 16.5 8.00001 16.5C7.75201 16.5 7.45201 16.392 7.17101 16.26C6.80452 16.0819 6.45391 15.8728 6.12301 15.635C5.16603 14.9478 4.31759 14.121 3.60601 13.182C1.92801 10.987 0.545005 7.669 1.14101 3.192C1.17869 2.90474 1.29665 2.63394 1.48132 2.4107C1.666 2.18747 1.9099 2.02085 2.18501 1.93C3.1402 1.61681 4.10281 1.32672 5.07201 1.06Z"
                                                        fill="#154BD8"
                                                    />
                                                    <path
                                                        d="M9.5 6.99921C9.50016 7.30954 9.40407 7.61228 9.22497 7.8657C9.04587 8.11913 8.79258 8.31077 8.5 8.41421L8.885 10.4042C8.89901 10.4766 8.89684 10.5512 8.87864 10.6226C8.86045 10.6941 8.82668 10.7606 8.77976 10.8175C8.73283 10.8743 8.67392 10.9201 8.60723 10.9515C8.54054 10.9829 8.46772 10.9992 8.394 10.9992H7.606C7.53236 10.9991 7.45966 10.9827 7.3931 10.9512C7.32653 10.9197 7.26774 10.8739 7.22093 10.8171C7.17412 10.7602 7.14044 10.6937 7.1223 10.6224C7.10416 10.551 7.10201 10.4765 7.116 10.4042L7.5 8.41421C7.24076 8.32256 7.0117 8.16141 6.83786 7.94838C6.66401 7.73535 6.55206 7.47863 6.51425 7.20627C6.47644 6.93392 6.51422 6.65641 6.62345 6.40408C6.73269 6.15175 6.90919 5.93429 7.13365 5.77548C7.35812 5.61667 7.62192 5.52262 7.89623 5.50359C8.17053 5.48457 8.44479 5.54131 8.68903 5.66762C8.93327 5.79392 9.13809 5.98493 9.28111 6.21977C9.42414 6.45461 9.49986 6.72425 9.5 6.99921Z"
                                                        fill="#154BD8"
                                                    />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1193_4492">
                                                        <rect
                                                            width="16"
                                                            height="16"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                        />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            Password</a
                                        >
                                    </li>
                                </ul>
                            </div>
                            <div class="tabContentWrapper">
                                <div class="tab-content" id="pills-tabContent">
                                    <div
                                        class="tab-pane fade show active"
                                        id="pills-profile"
                                        role="tabpanel"
                                        aria-labelledby="pills-profile-tab"
                                    >
                                        <div class="userProfile">
                                            <div class="card">
                                                <div class="card-header px-0">
                                                    <h3>Profile Photo</h3>
                                                    <div class="profileImgDetail">
                                                        <img
                                                            src="img/dashboard/photo.svg"
                                                            alt="image"
                                                        />
                                                        <div class="profileUpload">
                                                            <p>
                                                                This information will be visible to other
                                                                users when they access your profile or view
                                                                your posts. Maximum file size: 2MB.
                                                            </p>
                                                            <a class="btn uploadBtn"
                                                            ><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="16"
                                                                    height="16"
                                                                    viewBox="0 0 16 16"
                                                                    fill="none"
                                                                >
                                                                    <path
                                                                        d="M0.5 9.8999C0.632608 9.8999 0.759785 9.95258 0.853553 10.0463C0.947322 10.1401 1 10.2673 1 10.3999V12.8999C1 13.1651 1.10536 13.4195 1.29289 13.607C1.48043 13.7945 1.73478 13.8999 2 13.8999H14C14.2652 13.8999 14.5196 13.7945 14.7071 13.607C14.8946 13.4195 15 13.1651 15 12.8999V10.3999C15 10.2673 15.0527 10.1401 15.1464 10.0463C15.2402 9.95258 15.3674 9.8999 15.5 9.8999C15.6326 9.8999 15.7598 9.95258 15.8536 10.0463C15.9473 10.1401 16 10.2673 16 10.3999V12.8999C16 13.4303 15.7893 13.939 15.4142 14.3141C15.0391 14.6892 14.5304 14.8999 14 14.8999H2C1.46957 14.8999 0.960859 14.6892 0.585786 14.3141C0.210714 13.939 0 13.4303 0 12.8999V10.3999C0 10.2673 0.0526784 10.1401 0.146447 10.0463C0.240215 9.95258 0.367392 9.8999 0.5 9.8999Z"
                                                                        fill="#154BD8"
                                                                    />
                                                                    <path
                                                                        d="M7.64663 11.854C7.69308 11.9006 7.74825 11.9375 7.809 11.9627C7.86974 11.9879 7.93486 12.0009 8.00063 12.0009C8.0664 12.0009 8.13152 11.9879 8.19227 11.9627C8.25301 11.9375 8.30819 11.9006 8.35463 11.854L11.3546 8.854C11.4485 8.76011 11.5013 8.63278 11.5013 8.5C11.5013 8.36722 11.4485 8.23989 11.3546 8.146C11.2607 8.05211 11.1334 7.99937 11.0006 7.99937C10.8679 7.99937 10.7405 8.05211 10.6466 8.146L8.50063 10.293V1.5C8.50063 1.36739 8.44795 1.24021 8.35419 1.14645C8.26042 1.05268 8.13324 1 8.00063 1C7.86802 1 7.74085 1.05268 7.64708 1.14645C7.55331 1.24021 7.50063 1.36739 7.50063 1.5V10.293L5.35463 8.146C5.26075 8.05211 5.13341 7.99937 5.00063 7.99937C4.86786 7.99937 4.74052 8.05211 4.64663 8.146C4.55275 8.23989 4.5 8.36722 4.5 8.5C4.5 8.63278 4.55275 8.76011 4.64663 8.854L7.64663 11.854Z"
                                                                        fill="#154BD8"
                                                                    />
                                                                </svg>
                                                                Upload</a
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <h3>Basic Information</h3>
                                                    <div
                                                        class="profileDetail d-flex align-items-center"
                                                    >
                                                        <p class="flex-grow-0">Display Name</p>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between flex-grow-1"
                                                        >
                                                            <h6>Jane Doe</h6>
                                                            <button class="btn editBtn">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="16"
                                                                    height="16"
                                                                    viewBox="0 0 16 16"
                                                                    fill="none"
                                                                >
                                                                    <path
                                                                        d="M15.5017 1.93991C15.5951 2.03363 15.6476 2.16057 15.6476 2.2929C15.6476 2.42524 15.5951 2.55218 15.5017 2.6459L14.4587 3.6899L12.4587 1.68991L13.5017 0.645905C13.5955 0.552169 13.7226 0.499512 13.8552 0.499512C13.9878 0.499512 14.115 0.552169 14.2087 0.645905L15.5017 1.93891V1.93991ZM13.7517 4.3959L11.7517 2.3959L4.93872 9.2099C4.88368 9.26493 4.84225 9.33204 4.81772 9.4059L4.01272 11.8199C3.99812 11.8639 3.99604 11.9111 4.00673 11.9562C4.01741 12.0014 4.04044 12.0426 4.07322 12.0754C4.10601 12.1082 4.14727 12.1312 4.19239 12.1419C4.23751 12.1526 4.28471 12.1505 4.32872 12.1359L6.74272 11.3309C6.81648 11.3067 6.88359 11.2656 6.93872 11.2109L13.7517 4.3969V4.3959Z"
                                                                        fill="#154BD8"
                                                                    />
                                                                    <path
                                                                        fill-rule="evenodd"
                                                                        clip-rule="evenodd"
                                                                        d="M1 13.5C1 13.8978 1.15804 14.2794 1.43934 14.5607C1.72064 14.842 2.10218 15 2.5 15H13.5C13.8978 15 14.2794 14.842 14.5607 14.5607C14.842 14.2794 15 13.8978 15 13.5V7.5C15 7.36739 14.9473 7.24021 14.8536 7.14645C14.7598 7.05268 14.6326 7 14.5 7C14.3674 7 14.2402 7.05268 14.1464 7.14645C14.0527 7.24021 14 7.36739 14 7.5V13.5C14 13.6326 13.9473 13.7598 13.8536 13.8536C13.7598 13.9473 13.6326 14 13.5 14H2.5C2.36739 14 2.24021 13.9473 2.14645 13.8536C2.05268 13.7598 2 13.6326 2 13.5V2.5C2 2.36739 2.05268 2.24021 2.14645 2.14645C2.24021 2.05268 2.36739 2 2.5 2H9C9.13261 2 9.25979 1.94732 9.35355 1.85355C9.44732 1.75979 9.5 1.63261 9.5 1.5C9.5 1.36739 9.44732 1.24021 9.35355 1.14645C9.25979 1.05268 9.13261 1 9 1H2.5C2.10218 1 1.72064 1.15804 1.43934 1.43934C1.15804 1.72064 1 2.10218 1 2.5V13.5Z"
                                                                        fill="#154BD8"
                                                                    />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="profileDetail d-flex align-md-items-center flex-column flex-md-row"
                                                    >
                                                        <p class="flex-grow-0 dobText">Date of Birth</p>
                                                        <div class="dobSelector d-flex flex-column">
                                                            <div
                                                                class="d-flex align-items-center selectContentWrap"
                                                            >
                                                                <div class="selectWrap">
                                                                    <select class="custom-select">
                                                                        <option selected>01</option>
                                                                        <option value="1">02</option>
                                                                        <option value="2">03</option>
                                                                        <option value="3">04</option>
                                                                    </select>
                                                                </div>
                                                                <div class="selectWrap">
                                                                    <select class="custom-select">
                                                                        <option selected>14</option>
                                                                        <option value="1">15</option>
                                                                        <option value="2">16</option>
                                                                        <option value="3">17</option>
                                                                    </select>
                                                                </div>
                                                                <div class="selectWrap">
                                                                    <select class="custom-select">
                                                                        <option selected>1998</option>
                                                                        <option value="1">1999</option>
                                                                        <option value="2">2000</option>
                                                                        <option value="3">2001</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="btnWrap">
                                                                <button class="btn btn_blue">Save</button>
                                                                <button class="btn btn_yellow">
                                                                    Cancel
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="profileDetail d-flex align-items-center"
                                                    >
                                                        <p class="flex-grow-0">Gender</p>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between flex-grow-1"
                                                        >
                                                            <h6>Female</h6>
                                                            <button class="btn editBtn">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="16"
                                                                    height="16"
                                                                    viewBox="0 0 16 16"
                                                                    fill="none"
                                                                >
                                                                    <path
                                                                        d="M15.5017 1.93991C15.5951 2.03363 15.6476 2.16057 15.6476 2.2929C15.6476 2.42524 15.5951 2.55218 15.5017 2.6459L14.4587 3.6899L12.4587 1.68991L13.5017 0.645905C13.5955 0.552169 13.7226 0.499512 13.8552 0.499512C13.9878 0.499512 14.115 0.552169 14.2087 0.645905L15.5017 1.93891V1.93991ZM13.7517 4.3959L11.7517 2.3959L4.93872 9.2099C4.88368 9.26493 4.84225 9.33204 4.81772 9.4059L4.01272 11.8199C3.99812 11.8639 3.99604 11.9111 4.00673 11.9562C4.01741 12.0014 4.04044 12.0426 4.07322 12.0754C4.10601 12.1082 4.14727 12.1312 4.19239 12.1419C4.23751 12.1526 4.28471 12.1505 4.32872 12.1359L6.74272 11.3309C6.81648 11.3067 6.88359 11.2656 6.93872 11.2109L13.7517 4.3969V4.3959Z"
                                                                        fill="#154BD8"
                                                                    />
                                                                    <path
                                                                        fill-rule="evenodd"
                                                                        clip-rule="evenodd"
                                                                        d="M1 13.5C1 13.8978 1.15804 14.2794 1.43934 14.5607C1.72064 14.842 2.10218 15 2.5 15H13.5C13.8978 15 14.2794 14.842 14.5607 14.5607C14.842 14.2794 15 13.8978 15 13.5V7.5C15 7.36739 14.9473 7.24021 14.8536 7.14645C14.7598 7.05268 14.6326 7 14.5 7C14.3674 7 14.2402 7.05268 14.1464 7.14645C14.0527 7.24021 14 7.36739 14 7.5V13.5C14 13.6326 13.9473 13.7598 13.8536 13.8536C13.7598 13.9473 13.6326 14 13.5 14H2.5C2.36739 14 2.24021 13.9473 2.14645 13.8536C2.05268 13.7598 2 13.6326 2 13.5V2.5C2 2.36739 2.05268 2.24021 2.14645 2.14645C2.24021 2.05268 2.36739 2 2.5 2H9C9.13261 2 9.25979 1.94732 9.35355 1.85355C9.44732 1.75979 9.5 1.63261 9.5 1.5C9.5 1.36739 9.44732 1.24021 9.35355 1.14645C9.25979 1.05268 9.13261 1 9 1H2.5C2.10218 1 1.72064 1.15804 1.43934 1.43934C1.15804 1.72064 1 2.10218 1 2.5V13.5Z"
                                                                        fill="#154BD8"
                                                                    />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="profileDetail d-flex align-items-center"
                                                    >
                                                        <p class="flex-grow-0">Timezone</p>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between flex-grow-1"
                                                        >
                                                            <h6>Europe/Warsaw (UTC+02:00)</h6>
                                                            <button class="btn editBtn">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="16"
                                                                    height="16"
                                                                    viewBox="0 0 16 16"
                                                                    fill="none"
                                                                >
                                                                    <path
                                                                        d="M15.5017 1.93991C15.5951 2.03363 15.6476 2.16057 15.6476 2.2929C15.6476 2.42524 15.5951 2.55218 15.5017 2.6459L14.4587 3.6899L12.4587 1.68991L13.5017 0.645905C13.5955 0.552169 13.7226 0.499512 13.8552 0.499512C13.9878 0.499512 14.115 0.552169 14.2087 0.645905L15.5017 1.93891V1.93991ZM13.7517 4.3959L11.7517 2.3959L4.93872 9.2099C4.88368 9.26493 4.84225 9.33204 4.81772 9.4059L4.01272 11.8199C3.99812 11.8639 3.99604 11.9111 4.00673 11.9562C4.01741 12.0014 4.04044 12.0426 4.07322 12.0754C4.10601 12.1082 4.14727 12.1312 4.19239 12.1419C4.23751 12.1526 4.28471 12.1505 4.32872 12.1359L6.74272 11.3309C6.81648 11.3067 6.88359 11.2656 6.93872 11.2109L13.7517 4.3969V4.3959Z"
                                                                        fill="#154BD8"
                                                                    />
                                                                    <path
                                                                        fill-rule="evenodd"
                                                                        clip-rule="evenodd"
                                                                        d="M1 13.5C1 13.8978 1.15804 14.2794 1.43934 14.5607C1.72064 14.842 2.10218 15 2.5 15H13.5C13.8978 15 14.2794 14.842 14.5607 14.5607C14.842 14.2794 15 13.8978 15 13.5V7.5C15 7.36739 14.9473 7.24021 14.8536 7.14645C14.7598 7.05268 14.6326 7 14.5 7C14.3674 7 14.2402 7.05268 14.1464 7.14645C14.0527 7.24021 14 7.36739 14 7.5V13.5C14 13.6326 13.9473 13.7598 13.8536 13.8536C13.7598 13.9473 13.6326 14 13.5 14H2.5C2.36739 14 2.24021 13.9473 2.14645 13.8536C2.05268 13.7598 2 13.6326 2 13.5V2.5C2 2.36739 2.05268 2.24021 2.14645 2.14645C2.24021 2.05268 2.36739 2 2.5 2H9C9.13261 2 9.25979 1.94732 9.35355 1.85355C9.44732 1.75979 9.5 1.63261 9.5 1.5C9.5 1.36739 9.44732 1.24021 9.35355 1.14645C9.25979 1.05268 9.13261 1 9 1H2.5C2.10218 1 1.72064 1.15804 1.43934 1.43934C1.15804 1.72064 1 2.10218 1 2.5V13.5Z"
                                                                        fill="#154BD8"
                                                                    />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="profileDetail d-flex align-items-center"
                                                    >
                                                        <p class="flex-grow-0">Languages</p>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between flex-grow-1"
                                                        >
                                                            <h6>English, Pashto</h6>
                                                            <button class="btn editBtn">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="16"
                                                                    height="16"
                                                                    viewBox="0 0 16 16"
                                                                    fill="none"
                                                                >
                                                                    <path
                                                                        d="M15.5017 1.93991C15.5951 2.03363 15.6476 2.16057 15.6476 2.2929C15.6476 2.42524 15.5951 2.55218 15.5017 2.6459L14.4587 3.6899L12.4587 1.68991L13.5017 0.645905C13.5955 0.552169 13.7226 0.499512 13.8552 0.499512C13.9878 0.499512 14.115 0.552169 14.2087 0.645905L15.5017 1.93891V1.93991ZM13.7517 4.3959L11.7517 2.3959L4.93872 9.2099C4.88368 9.26493 4.84225 9.33204 4.81772 9.4059L4.01272 11.8199C3.99812 11.8639 3.99604 11.9111 4.00673 11.9562C4.01741 12.0014 4.04044 12.0426 4.07322 12.0754C4.10601 12.1082 4.14727 12.1312 4.19239 12.1419C4.23751 12.1526 4.28471 12.1505 4.32872 12.1359L6.74272 11.3309C6.81648 11.3067 6.88359 11.2656 6.93872 11.2109L13.7517 4.3969V4.3959Z"
                                                                        fill="#154BD8"
                                                                    />
                                                                    <path
                                                                        fill-rule="evenodd"
                                                                        clip-rule="evenodd"
                                                                        d="M1 13.5C1 13.8978 1.15804 14.2794 1.43934 14.5607C1.72064 14.842 2.10218 15 2.5 15H13.5C13.8978 15 14.2794 14.842 14.5607 14.5607C14.842 14.2794 15 13.8978 15 13.5V7.5C15 7.36739 14.9473 7.24021 14.8536 7.14645C14.7598 7.05268 14.6326 7 14.5 7C14.3674 7 14.2402 7.05268 14.1464 7.14645C14.0527 7.24021 14 7.36739 14 7.5V13.5C14 13.6326 13.9473 13.7598 13.8536 13.8536C13.7598 13.9473 13.6326 14 13.5 14H2.5C2.36739 14 2.24021 13.9473 2.14645 13.8536C2.05268 13.7598 2 13.6326 2 13.5V2.5C2 2.36739 2.05268 2.24021 2.14645 2.14645C2.24021 2.05268 2.36739 2 2.5 2H9C9.13261 2 9.25979 1.94732 9.35355 1.85355C9.44732 1.75979 9.5 1.63261 9.5 1.5C9.5 1.36739 9.44732 1.24021 9.35355 1.14645C9.25979 1.05268 9.13261 1 9 1H2.5C2.10218 1 1.72064 1.15804 1.43934 1.43934C1.15804 1.72064 1 2.10218 1 2.5V13.5Z"
                                                                        fill="#154BD8"
                                                                    />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="pills-userNotification"
                                        role="tabpanel"
                                        aria-labelledby="pills-userNotification-tab"
                                    >
                                        <div class="userNotification">
                                            <div
                                                class="card d-flex justify-content-between flex-row"
                                            >
                                                <div class="cardPayment">
                                                    <h6>
                                                        <img
                                                            src="img/dashboard/chat.svg"
                                                            alt="inoura"
                                                        />
                                                        Messages
                                                    </h6>
                                                    <p>Messages from other users</p>
                                                </div>
                                                <label class="toggleBtn">
                                                    <input type="checkbox" checked class="d-none" />
                                                    <span class="slider"></span>
                                                </label>
                                            </div>
                                            <div
                                                class="card d-flex justify-content-between flex-row"
                                            >
                                                <div class="cardPayment">
                                                    <h6>
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="16"
                                                            height="17"
                                                            viewBox="0 0 16 17"
                                                            fill="none"
                                                        >
                                                            <g clip-path="url(#clip0_1025_3051)">
                                                                <path
                                                                    d="M1 0.499916L0 1.49992L2.2 4.58092C2.29262 4.71066 2.41491 4.81638 2.55668 4.88927C2.69845 4.96215 2.85559 5.00009 3.015 4.99992H3.085C3.21648 4.99981 3.34669 5.02564 3.46818 5.07592C3.58966 5.12619 3.70004 5.19993 3.793 5.29292L6.468 7.96792L3.851 10.6219C3.40339 10.4902 2.93124 10.4645 2.472 10.547C2.01275 10.6295 1.57905 10.8179 1.2053 11.0972C0.831545 11.3765 0.528021 11.7391 0.318803 12.1562C0.109586 12.5732 0.000432201 13.0333 0 13.4999C0.000599463 13.9299 0.0936037 14.3546 0.272711 14.7455C0.451819 15.1364 0.712846 15.4841 1.03811 15.7653C1.36337 16.0465 1.74526 16.2544 2.15792 16.3751C2.57057 16.4958 3.00434 16.5264 3.42985 16.4648C3.85535 16.4032 4.26264 16.2508 4.62413 16.0181C4.98561 15.7853 5.29284 15.4776 5.52501 15.1157C5.75717 14.7538 5.90884 14.3463 5.96975 13.9207C6.03065 13.4951 5.99936 13.0614 5.878 12.6489L8.532 10.0319L9.5 10.9999L9.195 11.9139C9.13639 12.0901 9.12799 12.2791 9.17073 12.4598C9.21347 12.6405 9.30567 12.8057 9.437 12.9369L12.707 16.2069C12.7997 16.3001 12.9098 16.3741 13.0311 16.4245C13.1525 16.475 13.2826 16.501 13.414 16.501C13.5454 16.501 13.6755 16.475 13.7969 16.4245C13.9182 16.3741 14.0283 16.3001 14.121 16.2069L15.707 14.6209C15.8002 14.5283 15.8741 14.4181 15.9246 14.2968C15.9751 14.1754 16.001 14.0453 16.001 13.9139C16.001 13.7825 15.9751 13.6524 15.9246 13.5311C15.8741 13.4097 15.8002 13.2996 15.707 13.2069L12.437 9.93692C12.3058 9.80559 12.1405 9.71339 11.9599 9.67065C11.7792 9.6279 11.5902 9.63631 11.414 9.69492L10.5 9.99992L9.54 9.03992L12.22 6.39692C12.6646 6.51559 13.1305 6.53058 13.5818 6.44073C14.0331 6.35087 14.4577 6.15858 14.8229 5.87867C15.1882 5.59876 15.4842 5.23871 15.6883 4.82628C15.8924 4.41385 15.999 3.96007 16 3.49992C16 3.23092 15.965 2.96992 15.898 2.72292L13.758 4.86392L12 4.49992L11.636 2.74292L13.777 0.601916C13.2677 0.464978 12.7313 0.464722 12.2219 0.601175C11.7124 0.737629 11.248 1.00597 10.8753 1.37915C10.5026 1.75232 10.2349 2.21715 10.0991 2.72677C9.96338 3.23639 9.96437 3.7728 10.102 4.28192L7.462 6.95992L4.793 4.29292C4.60545 4.10542 4.50006 3.85111 4.5 3.58592V3.51492C4.50002 3.35568 4.462 3.19873 4.38912 3.05715C4.31624 2.91557 4.21061 2.79343 4.081 2.70092L1 0.499916ZM10.646 11.1459C10.6924 11.0994 10.7476 11.0624 10.8084 11.0372C10.8691 11.012 10.9342 10.999 11 10.999C11.0658 10.999 11.1309 11.012 11.1916 11.0372C11.2524 11.0624 11.3076 11.0994 11.354 11.1459L14.268 14.0609C14.3591 14.1552 14.4095 14.2815 14.4083 14.4126C14.4072 14.5437 14.3546 14.6691 14.2619 14.7618C14.1692 14.8545 14.0438 14.9071 13.9127 14.9083C13.7816 14.9094 13.6553 14.859 13.561 14.7679L10.646 11.8539C10.5994 11.8075 10.5625 11.7523 10.5373 11.6915C10.5121 11.6308 10.4991 11.5657 10.4991 11.4999C10.4991 11.4341 10.5121 11.369 10.5373 11.3083C10.5625 11.2475 10.5994 11.1924 10.646 11.1459ZM3 11.4999L3.471 11.7419L4 11.7679L4.287 12.2129L4.732 12.4999L4.758 13.0289L5 13.4999L4.758 13.9709L4.732 14.4999L4.287 14.7869L4 15.2319L3.471 15.2579L3 15.4999L2.529 15.2579L2 15.2319L1.713 14.7869L1.268 14.4999L1.242 13.9709L1 13.4999L1.242 13.0289L1.268 12.4999L1.713 12.2129L2 11.7679L2.529 11.7419L3 11.4999Z"
                                                                    fill="#676A6C"
                                                                />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_1025_3051">
                                                                    <rect
                                                                        width="16"
                                                                        height="16"
                                                                        fill="white"
                                                                        transform="translate(0 0.5)"
                                                                    />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                        Learning Tools
                                                    </h6>
                                                    <p>New prompts and topics</p>
                                                </div>
                                                <div class="toggleChecBox">
                                                    <label class="toggleBtn">
                                                        <input type="checkbox" checked class="d-none" />
                                                        <span class="slider"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div
                                                class="card d-flex justify-content-between flex-row"
                                            >
                                                <div class="cardPayment">
                                                    <h6>
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="16"
                                                            height="17"
                                                            viewBox="0 0 16 17"
                                                            fill="none"
                                                        >
                                                            <g clip-path="url(#clip0_1025_2833)">
                                                                <path
                                                                    d="M5.5 2.5C4.57174 2.5 3.6815 2.86875 3.02513 3.52513C2.36875 4.1815 2 5.07174 2 6V11C2 11.9283 2.36875 12.8185 3.02513 13.4749C3.6815 14.1313 4.57174 14.5 5.5 14.5H10.5C11.4283 14.5 12.3185 14.1313 12.9749 13.4749C13.6313 12.8185 14 11.9283 14 11V8.5C14 8.36739 14.0527 8.24021 14.1464 8.14645C14.2402 8.05268 14.3674 8 14.5 8C14.6326 8 14.7598 8.05268 14.8536 8.14645C14.9473 8.24021 15 8.36739 15 8.5V11C15 12.1935 14.5259 13.3381 13.682 14.182C12.8381 15.0259 11.6935 15.5 10.5 15.5H5.5C4.30653 15.5 3.16193 15.0259 2.31802 14.182C1.47411 13.3381 1 12.1935 1 11V6C1 4.80653 1.47411 3.66193 2.31802 2.81802C3.16193 1.97411 4.30653 1.5 5.5 1.5H8C8.13261 1.5 8.25979 1.55268 8.35355 1.64645C8.44732 1.74021 8.5 1.86739 8.5 2C8.5 2.13261 8.44732 2.25979 8.35355 2.35355C8.25979 2.44732 8.13261 2.5 8 2.5H5.5Z"
                                                                    fill="#676A6C"
                                                                />
                                                                <path
                                                                    d="M16 3.5C16 4.29565 15.6839 5.05871 15.1213 5.62132C14.5587 6.18393 13.7956 6.5 13 6.5C12.2044 6.5 11.4413 6.18393 10.8787 5.62132C10.3161 5.05871 10 4.29565 10 3.5C10 2.70435 10.3161 1.94129 10.8787 1.37868C11.4413 0.81607 12.2044 0.5 13 0.5C13.7956 0.5 14.5587 0.81607 15.1213 1.37868C15.6839 1.94129 16 2.70435 16 3.5Z"
                                                                    fill="#676A6C"
                                                                />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_1025_2833">
                                                                    <rect
                                                                        width="16"
                                                                        height="16"
                                                                        fill="white"
                                                                        transform="translate(0 0.5)"
                                                                    />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                        Messages
                                                    </h6>
                                                    <p>
                                                        Notifications related to learning tips,
                                                        newsletters, and feature updates
                                                    </p>
                                                </div>
                                                <div class="toggleChecBox">
                                                    <label class="toggleBtn">
                                                        <input type="checkbox" checked class="d-none" />
                                                        <span class="slider"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div
                                                class="card d-flex justify-content-between flex-row"
                                            >
                                                <div class="cardPayment">
                                                    <h6>
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="16"
                                                            height="17"
                                                            viewBox="0 0 16 17"
                                                            fill="none"
                                                        >
                                                            <path
                                                                d="M13.442 3.058C13.5001 3.11604 13.5461 3.18495 13.5775 3.26078C13.6089 3.33662 13.6251 3.41791 13.6251 3.5C13.6251 3.58209 13.6089 3.66338 13.5775 3.73922C13.5461 3.81505 13.5001 3.88396 13.442 3.942L3.442 13.942C3.38396 14 3.31505 14.0461 3.23921 14.0775C3.16337 14.1089 3.08209 14.1251 3 14.1251C2.91791 14.1251 2.83663 14.1089 2.76079 14.0775C2.68495 14.0461 2.61604 14 2.558 13.942C2.49996 13.884 2.45391 13.815 2.4225 13.7392C2.39109 13.6634 2.37492 13.5821 2.37492 13.5C2.37492 13.4179 2.39109 13.3366 2.4225 13.2608C2.45391 13.185 2.49996 13.116 2.558 13.058L12.558 3.058C12.616 2.99995 12.6849 2.95389 12.7608 2.92247C12.8366 2.89106 12.9179 2.87488 13 2.87488C13.0821 2.87488 13.1634 2.89106 13.2392 2.92247C13.3151 2.95389 13.384 2.99995 13.442 3.058ZM4.5 6.5C4.10218 6.5 3.72064 6.34196 3.43934 6.06066C3.15804 5.77936 3 5.39782 3 5C3 4.60218 3.15804 4.22064 3.43934 3.93934C3.72064 3.65804 4.10218 3.5 4.5 3.5C4.89782 3.5 5.27936 3.65804 5.56066 3.93934C5.84196 4.22064 6 4.60218 6 5C6 5.39782 5.84196 5.77936 5.56066 6.06066C5.27936 6.34196 4.89782 6.5 4.5 6.5ZM4.5 7.5C5.16304 7.5 5.79893 7.23661 6.26777 6.76777C6.73661 6.29893 7 5.66304 7 5C7 4.33696 6.73661 3.70107 6.26777 3.23223C5.79893 2.76339 5.16304 2.5 4.5 2.5C3.83696 2.5 3.20107 2.76339 2.73223 3.23223C2.26339 3.70107 2 4.33696 2 5C2 5.66304 2.26339 6.29893 2.73223 6.76777C3.20107 7.23661 3.83696 7.5 4.5 7.5ZM11.5 13.5C11.1022 13.5 10.7206 13.342 10.4393 13.0607C10.158 12.7794 10 12.3978 10 12C10 11.6022 10.158 11.2206 10.4393 10.9393C10.7206 10.658 11.1022 10.5 11.5 10.5C11.8978 10.5 12.2794 10.658 12.5607 10.9393C12.842 11.2206 13 11.6022 13 12C13 12.3978 12.842 12.7794 12.5607 13.0607C12.2794 13.342 11.8978 13.5 11.5 13.5ZM11.5 14.5C12.163 14.5 12.7989 14.2366 13.2678 13.7678C13.7366 13.2989 14 12.663 14 12C14 11.337 13.7366 10.7011 13.2678 10.2322C12.7989 9.76339 12.163 9.5 11.5 9.5C10.837 9.5 10.2011 9.76339 9.73223 10.2322C9.26339 10.7011 9 11.337 9 12C9 12.663 9.26339 13.2989 9.73223 13.7678C10.2011 14.2366 10.837 14.5 11.5 14.5Z"
                                                                fill="#676A6C"
                                                            />
                                                        </svg>
                                                        Promotions
                                                    </h6>
                                                    <p>Promotions, offers, and coupons</p>
                                                </div>
                                                <div class="toggleChecBox">
                                                    <label class="toggleBtn">
                                                        <input type="checkbox" checked class="d-none" />
                                                        <span class="slider"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="pills-settingsPassword"
                                        role="tabpanel"
                                        aria-labelledby="pills-settingsPassword-tab"
                                    >
                                        <div class="settingsPassword">
                                            <div class="passwordWrap">
                                                <h5>Email</h5>
                                                <h6>janedoexample@gmail.com</h6>
                                                <button class="btn">Change</button>
                                            </div>
                                            <div class="passwordChangeWrap">
                                                <div class="passwordWrap">
                                                    <h5>Password</h5>
                                                    <h6>*********</h6>
                                                    <button class="btn">Update</button>
                                                </div>
                                                <div>
                                                    <form>
                                                        <div class="form-group">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                id="formGroupExampleInput"
                                                                placeholder="Enter old password"
                                                            />
                                                        </div>
                                                        <div class="form-group">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                id="formGroupExampleInput2"
                                                                placeholder="Enter new password"
                                                            />
                                                        </div>
                                                        <div class="form-group">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                id="formGroupExampleInput3"
                                                                placeholder="Re-enter new password"
                                                            />
                                                        </div>
                                                        <div class="btnWrap">
                                                            <butto class="btn btn_blue"
                                                            >Change password</butto
                                                            >
                                                            <butto class="btn btn_yellow">Cancel</butto>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="passwordWrap">
                                                <h5>Email</h5>
                                                <h6>janedoexample@gmail.com</h6>
                                                <button class="btn">Change</button>
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
