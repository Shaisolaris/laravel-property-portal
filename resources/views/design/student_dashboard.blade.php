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
<div class="studentDashboard">
    <div class="subjectDetail">
        <div class="container px-lg-0">
            <div
                class="d-inline-flex mb-4 academySideMenuButton"
                id="academySideMenuButton"
            >
                <div class="btn btn-light">
                    <img src="img/starsIcon/menusidebar.svg" alt="inoura" />
                </div>
            </div>
            <div class="row row_gap_20">
                <!-- side bar column -->
                <div class="col-xl-3 col-lg-12 sideBarColumn" id="academySideMenu">
                    <div class="card sidebar_Card">
                        <div
                            class="d-flex justify-content-end mb-2 closeBtn"
                            id="closeAcademySideBtn"
                        >
                            <div class="btn btn-light">
                                <img src="img/categoriesPage/close.svg" alt="inoura" />
                            </div>
                        </div>
                        <!-- Image & Name Wrapper starts -->
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
                        <!-- Image & Name Wrapper ends -->

                        <!-- List starts -->
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
                        <!-- List ends -->
                    </div>
                </div>
                <!-- side bar column -->
                <div class="col-xl-6 col-lg-8 col-sm-12">
                    <div class="colummnContentWrap">
                        <!-- course completion and grades detail -->
                        <div class="courseCompletion">
                            <div class="card">
                                <div class="card-img">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        viewBox="0 0 16 16"
                                        fill="none"
                                    >
                                        <g clip-path="url(#clip0_82_4949)">
                                            <path
                                                d="M16 8C16 10.1217 15.1571 12.1566 13.6569 13.6569C12.1566 15.1571 10.1217 16 8 16C5.87827 16 3.84344 15.1571 2.34315 13.6569C0.842855 12.1566 0 10.1217 0 8C0 5.87827 0.842855 3.84344 2.34315 2.34315C3.84344 0.842855 5.87827 0 8 0C10.1217 0 12.1566 0.842855 13.6569 2.34315C15.1571 3.84344 16 5.87827 16 8ZM8 3.5C8 3.36739 7.94732 3.24021 7.85355 3.14645C7.75979 3.05268 7.63261 3 7.5 3C7.36739 3 7.24021 3.05268 7.14645 3.14645C7.05268 3.24021 7 3.36739 7 3.5V9C7.00003 9.08813 7.02335 9.17469 7.06761 9.25091C7.11186 9.32712 7.17547 9.39029 7.252 9.434L10.752 11.434C10.8669 11.4961 11.0014 11.5108 11.127 11.4749C11.2525 11.4391 11.3591 11.3556 11.4238 11.2422C11.4886 11.1288 11.5065 10.9946 11.4736 10.8683C11.4408 10.7419 11.3598 10.6334 11.248 10.566L8 8.71V3.5Z"
                                                fill="#676A6C"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_82_4949">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <h6 class="card-title">12h</h6>
                                <p class="card-text">Hours Spent</p>
                            </div>
                            <div class="card">
                                <div class="card-img">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="17"
                                        height="16"
                                        viewBox="0 0 17 16"
                                        fill="none"
                                    >
                                        <g clip-path="url(#clip0_960_3078)">
                                            <path
                                                d="M7.96359 1.55891C8.03594 1.52039 8.11664 1.50024 8.19859 1.50024C8.28055 1.50024 8.36125 1.52039 8.43359 1.55891L15.9336 5.55891C16.0135 5.60159 16.0802 5.66515 16.1268 5.74282C16.1734 5.82049 16.198 5.90935 16.198 5.99991C16.198 6.09047 16.1734 6.17933 16.1268 6.257C16.0802 6.33467 16.0135 6.39824 15.9336 6.44091L8.43359 10.4409C8.36125 10.4794 8.28055 10.4996 8.19859 10.4996C8.11664 10.4996 8.03594 10.4794 7.96359 10.4409L0.463594 6.44091C0.383722 6.39824 0.316939 6.33467 0.270376 6.257C0.223813 6.17933 0.199219 6.09047 0.199219 5.99991C0.199219 5.90935 0.223813 5.82049 0.270376 5.74282C0.316939 5.66515 0.383722 5.60159 0.463594 5.55891L7.96359 1.55891Z"
                                                fill="#676A6C"
                                            />
                                            <path
                                                d="M2.32359 8.56689L0.463594 9.55889C0.383722 9.60157 0.316939 9.66514 0.270376 9.74281C0.223813 9.82048 0.199219 9.90934 0.199219 9.99989C0.199219 10.0905 0.223813 10.1793 0.270376 10.257C0.316939 10.3347 0.383722 10.3982 0.463594 10.4409L7.96359 14.4409C8.03594 14.4794 8.11664 14.4996 8.19859 14.4996C8.28055 14.4996 8.36125 14.4794 8.43359 14.4409L15.9336 10.4409C16.0135 10.3982 16.0802 10.3347 16.1268 10.257C16.1734 10.1793 16.198 10.0905 16.198 9.99989C16.198 9.90934 16.1734 9.82048 16.1268 9.74281C16.0802 9.66514 16.0135 9.60157 15.9336 9.55889L14.0736 8.56689L8.90359 11.3229C8.68657 11.4385 8.44447 11.4989 8.19859 11.4989C7.95272 11.4989 7.71062 11.4385 7.49359 11.3229L2.32359 8.56689Z"
                                                fill="#676A6C"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_960_3078">
                                                <rect
                                                    width="16"
                                                    height="16"
                                                    fill="white"
                                                    transform="translate(0.199219)"
                                                />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <h6 class="card-title">80%</h6>
                                <p class="card-text">Progress</p>
                            </div>
                            <div class="card">
                                <div class="card-img">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="17"
                                        height="16"
                                        viewBox="0 0 17 16"
                                        fill="none"
                                    >
                                        <g clip-path="url(#clip0_960_1929)">
                                            <path
                                                d="M8.61091 2.04695C8.54483 2.01618 8.47281 2.00024 8.39991 2.00024C8.32702 2.00024 8.255 2.01618 8.18891 2.04695L0.688913 5.54695C0.600595 5.58817 0.526251 5.65431 0.475024 5.73722C0.423797 5.82014 0.39792 5.91622 0.400576 6.01365C0.403233 6.11108 0.434306 6.2056 0.489975 6.28561C0.545644 6.36561 0.623481 6.4276 0.713913 6.46395L8.21391 9.46395C8.3333 9.51179 8.46653 9.51179 8.58591 9.46395L14.3999 7.13995V12.9999C14.1347 12.9999 13.8803 13.1053 13.6928 13.2928C13.5053 13.4804 13.3999 13.7347 13.3999 13.9999V15.9999H16.3999V13.9999C16.3999 13.7347 16.2946 13.4804 16.107 13.2928C15.9195 13.1053 15.6651 12.9999 15.3999 12.9999V6.73895L16.0859 6.46395C16.1763 6.4276 16.2542 6.36561 16.3099 6.28561C16.3655 6.2056 16.3966 6.11108 16.3993 6.01365C16.4019 5.91622 16.376 5.82014 16.3248 5.73722C16.2736 5.65431 16.1992 5.58817 16.1109 5.54695L8.61091 2.04695Z"
                                                fill="#676A6C"
                                            />
                                            <path
                                                d="M4.57662 9.0321C4.51224 9.00784 4.44354 8.99714 4.37483 9.00065C4.30612 9.00416 4.23887 9.02182 4.1773 9.05251C4.11572 9.08321 4.06115 9.12628 4.01698 9.17903C3.97281 9.23179 3.94001 9.29309 3.92062 9.3591L3.42062 11.0591C3.3856 11.1784 3.39632 11.3066 3.45068 11.4184C3.50504 11.5303 3.59915 11.6179 3.71462 11.6641L8.21462 13.4641C8.33401 13.5119 8.46724 13.5119 8.58662 13.4641L13.0866 11.6641C13.2021 11.6179 13.2962 11.5303 13.3506 11.4184C13.4049 11.3066 13.4156 11.1784 13.3806 11.0591L12.8806 9.3591C12.8612 9.29309 12.8284 9.23179 12.7843 9.17903C12.7401 9.12628 12.6855 9.08321 12.6239 9.05251C12.5624 9.02182 12.4951 9.00416 12.4264 9.00065C12.3577 8.99714 12.289 9.00784 12.2246 9.0321L8.40062 10.4661L4.57662 9.0321Z"
                                                fill="#676A6C"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_960_1929">
                                                <rect
                                                    width="16"
                                                    height="16"
                                                    fill="white"
                                                    transform="translate(0.400391)"
                                                />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <h6 class="card-title">3 <span>Courses</span></h6>
                                <p class="card-text">Completed</p>
                            </div>
                            <div class="card">
                                <div class="card-img">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="17"
                                        height="16"
                                        viewBox="0 0 17 16"
                                        fill="none"
                                    >
                                        <g clip-path="url(#clip0_960_499)">
                                            <path
                                                d="M10.6658 0.869951C10.3966 0.594492 10.0751 0.375612 9.72016 0.226174C9.36519 0.0767365 8.98394 -0.000244141 8.5988 -0.000244141C8.21367 -0.000244141 7.83242 0.0767365 7.47745 0.226174C7.12249 0.375612 6.80097 0.594492 6.5318 0.869951L5.9098 1.50795L5.0198 1.49695C4.63455 1.49239 4.25228 1.56491 3.89547 1.71024C3.53865 1.85557 3.2145 2.07078 2.94206 2.34321C2.66963 2.61564 2.45442 2.9398 2.30909 3.29661C2.16376 3.65343 2.09125 4.0357 2.0958 4.42095L2.1058 5.31095L1.4698 5.93295C1.19434 6.20212 0.975465 6.52364 0.826028 6.8786C0.67659 7.23356 0.599609 7.61481 0.599609 7.99995C0.599609 8.38509 0.67659 8.76634 0.826028 9.1213C0.975465 9.47627 1.19434 9.79778 1.4698 10.067L2.1068 10.689L2.0958 11.579C2.09125 11.9642 2.16376 12.3465 2.30909 12.7033C2.45442 13.0601 2.66963 13.3843 2.94206 13.6567C3.2145 13.9291 3.53865 14.1443 3.89547 14.2897C4.25228 14.435 4.63455 14.5075 5.0198 14.503L5.9098 14.493L6.5318 15.129C6.80097 15.4044 7.12249 15.6233 7.47745 15.7727C7.83242 15.9222 8.21367 15.9991 8.5988 15.9991C8.98394 15.9991 9.36519 15.9222 9.72016 15.7727C10.0751 15.6233 10.3966 15.4044 10.6658 15.129L11.2878 14.492L12.1778 14.503C12.5631 14.5075 12.9453 14.435 13.3021 14.2897C13.659 14.1443 13.9831 13.9291 14.2555 13.6567C14.528 13.3843 14.7432 13.0601 14.8885 12.7033C15.0338 12.3465 15.1064 11.9642 15.1018 11.579L15.0918 10.689L15.7278 10.067C16.0033 9.79778 16.2221 9.47627 16.3716 9.1213C16.521 8.76634 16.598 8.38509 16.598 7.99995C16.598 7.61481 16.521 7.23356 16.3716 6.8786C16.2221 6.52364 16.0033 6.20212 15.7278 5.93295L15.0908 5.31095L15.1018 4.42095C15.1064 4.0357 15.0338 3.65343 14.8885 3.29661C14.7432 2.9398 14.528 2.61564 14.2555 2.34321C13.9831 2.07078 13.659 1.85557 13.3021 1.71024C12.9453 1.56491 12.5631 1.49239 12.1778 1.49695L11.2878 1.50695L10.6658 0.870951V0.869951ZM8.5988 3.99995C9.1338 3.99995 9.5528 4.46195 9.4988 4.99495L9.1488 8.50195C9.13704 8.63972 9.07401 8.76806 8.97216 8.86159C8.87031 8.95511 8.73708 9.007 8.5988 9.007C8.46053 9.007 8.32729 8.95511 8.22545 8.86159C8.1236 8.76806 8.06056 8.63972 8.0488 8.50195L7.6988 4.99495C7.68623 4.86918 7.70015 4.74218 7.73965 4.62212C7.77915 4.50206 7.84336 4.3916 7.92815 4.29786C8.01293 4.20413 8.11642 4.12919 8.23193 4.07788C8.34743 4.02657 8.47241 4.00002 8.5988 3.99995ZM8.6008 9.99995C8.86602 9.99995 9.12037 10.1053 9.30791 10.2928C9.49545 10.4804 9.6008 10.7347 9.6008 11C9.6008 11.2652 9.49545 11.5195 9.30791 11.7071C9.12037 11.8946 8.86602 12 8.6008 12C8.33559 12 8.08123 11.8946 7.8937 11.7071C7.70616 11.5195 7.6008 11.2652 7.6008 11C7.6008 10.7347 7.70616 10.4804 7.8937 10.2928C8.08123 10.1053 8.33559 9.99995 8.6008 9.99995Z"
                                                fill="#676A6C"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_960_499">
                                                <rect
                                                    width="16"
                                                    height="16"
                                                    fill="white"
                                                    transform="translate(0.599609)"
                                                />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <h6 class="card-title">4</h6>
                                <p class="card-text">Assignments</p>
                            </div>
                            <div class="card">
                                <div class="card-img">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="17"
                                        height="16"
                                        viewBox="0 0 17 16"
                                        fill="none"
                                    >
                                        <g clip-path="url(#clip0_960_2198)">
                                            <path
                                                d="M3.30116 0.5C3.30116 0.367392 3.35384 0.240215 3.44761 0.146447C3.54138 0.0526784 3.66855 0 3.80116 0L13.8012 0C13.9338 0 14.0609 0.0526784 14.1547 0.146447C14.2485 0.240215 14.3012 0.367392 14.3012 0.5C14.3012 1.038 14.2892 1.55 14.2672 2.036C14.6623 2.10143 15.0403 2.24532 15.379 2.45918C15.7176 2.67304 16.01 2.95255 16.2389 3.28121C16.4678 3.60987 16.6285 3.98104 16.7117 4.37283C16.7948 4.76461 16.7987 5.16908 16.7231 5.56239C16.6474 5.95569 16.4938 6.32986 16.2712 6.66284C16.0486 6.99581 15.7616 7.28085 15.4271 7.50114C15.0926 7.72144 14.7174 7.87252 14.3236 7.94549C13.9298 8.01846 13.5254 8.01183 13.1342 7.926C12.3442 9.791 11.2562 10.703 10.3012 10.937V13.11L11.7262 13.466C11.9202 13.514 12.1032 13.601 12.2632 13.721L14.1012 15.1C14.1851 15.163 14.2471 15.2507 14.2784 15.3509C14.3097 15.4511 14.3087 15.5586 14.2755 15.6581C14.2423 15.7577 14.1786 15.8443 14.0935 15.9056C14.0084 15.967 13.9061 16 13.8012 16H3.80116C3.69622 16 3.59394 15.967 3.50881 15.9056C3.42367 15.8443 3.36 15.7577 3.32682 15.6581C3.29363 15.5586 3.29261 15.4511 3.3239 15.3509C3.35519 15.2507 3.41721 15.163 3.50116 15.1L5.33916 13.721C5.49916 13.601 5.68216 13.514 5.87616 13.466L7.30116 13.11V10.937C6.34616 10.703 5.25816 9.791 4.46816 7.925C4.07675 8.01129 3.67201 8.01828 3.27785 7.94554C2.88369 7.87281 2.50811 7.72183 2.17327 7.50151C1.83844 7.2812 1.55115 6.99602 1.32837 6.66283C1.10559 6.32963 0.95183 5.95517 0.876182 5.56156C0.800534 5.16795 0.804527 4.76318 0.887926 4.37114C0.971324 3.97909 1.13244 3.60774 1.36175 3.279C1.59106 2.95027 1.88392 2.67082 2.22304 2.45715C2.56215 2.24349 2.94064 2.09995 3.33616 2.035C3.31262 1.52367 3.30095 1.01187 3.30116 0.5ZM3.40016 3.04C2.87835 3.13548 2.41583 3.43433 2.11437 3.87083C1.8129 4.30732 1.69718 4.84569 1.79266 5.3675C1.88814 5.88931 2.187 6.35183 2.62349 6.65329C3.05998 6.95476 3.59835 7.07048 4.12016 6.975C3.78716 5.925 3.53216 4.629 3.40016 3.04ZM13.4832 6.975C14.005 7.07048 14.5433 6.95476 14.9798 6.65329C15.4163 6.35183 15.7152 5.88931 15.8107 5.3675C15.9061 4.84569 15.7904 4.30732 15.489 3.87083C15.1875 3.43433 14.725 3.13548 14.2032 3.04C14.0702 4.63 13.8152 5.925 13.4832 6.975Z"
                                                fill="#676A6C"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_960_2198">
                                                <rect
                                                    width="16"
                                                    height="16"
                                                    fill="white"
                                                    transform="translate(0.800781)"
                                                />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <h6 class="card-title">A+</h6>
                                <p class="card-text">Latest Grades</p>
                            </div>
                        </div>

                        <!-- My Assignments details -->
                        <div class="myAssignments">
                            <div
                                class="headingWrap d-flex align-items-center justify-content-between"
                            >
                                <h3>My Assignments</h3>
                                <a href="{{ url('/design/my-assignments') }}"
                                >Open all<svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="17"
                                        viewBox="0 0 16 17"
                                        fill="none"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M4.64689 2.14592C4.69334 2.09935 4.74851 2.06241 4.80926 2.0372C4.87001 2.012 4.93513 1.99902 5.00089 1.99902C5.06666 1.99902 5.13178 2.012 5.19253 2.0372C5.25327 2.06241 5.30845 2.09935 5.35489 2.14592L11.3549 8.14592C11.4015 8.19236 11.4384 8.24754 11.4636 8.30828C11.4888 8.36903 11.5018 8.43415 11.5018 8.49992C11.5018 8.56568 11.4888 8.63081 11.4636 8.69155C11.4384 8.7523 11.4015 8.80747 11.3549 8.85392L5.35489 14.8539C5.26101 14.9478 5.13367 15.0005 5.00089 15.0005C4.86812 15.0005 4.74078 14.9478 4.64689 14.8539C4.55301 14.76 4.50026 14.6327 4.50026 14.4999C4.50026 14.3671 4.55301 14.2398 4.64689 14.1459L10.2939 8.49992L4.64689 2.85392C4.60033 2.80747 4.56339 2.7523 4.53818 2.69155C4.51297 2.63081 4.5 2.56568 4.5 2.49992C4.5 2.43415 4.51297 2.36903 4.53818 2.30828C4.56339 2.24754 4.60033 2.19236 4.64689 2.14592Z"
                                            fill="#154BD8"
                                        />
                                    </svg>
                                </a>
                            </div>
                            <div class="assignmentsCardWrap">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div>
                                            <h6 class="card-title">Tags Test</h6>
                                            <p class="card-text">Frontend basics: HTML and CSS</p>
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
                                </div>
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div>
                                            <h6 class="card-title">Grammar Test</h6>
                                            <p class="card-text">UX Writing</p>
                                        </div>
                                        <div class="assignmentCompTag">
                                            <button class="btn btnChecked">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="16"
                                                    height="17"
                                                    viewBox="0 0 16 17"
                                                    fill="none"
                                                >
                                                    <g clip-path="url(#clip0_960_10434)">
                                                        <path
                                                            d="M8.515 1.519C8.34363 1.50635 8.17184 1.50001 8 1.5V0.5C8.19654 0.500096 8.393 0.507434 8.589 0.522L8.515 1.519ZM10.519 1.969C10.1984 1.8453 9.86922 1.74537 9.534 1.67L9.753 0.694C10.136 0.78 10.513 0.894 10.879 1.036L10.519 1.969ZM11.889 2.679C11.746 2.58365 11.5996 2.49359 11.45 2.409L11.943 1.539C12.2849 1.73274 12.6121 1.95132 12.922 2.193L12.307 2.982C12.1714 2.87623 12.032 2.7755 11.889 2.68V2.679ZM13.723 4.469C13.5252 4.18798 13.3069 3.92192 13.07 3.673L13.794 2.983C14.064 3.268 14.314 3.573 14.541 3.893L13.723 4.469ZM14.467 5.821C14.4014 5.66246 14.33 5.50636 14.253 5.353L15.146 4.903C15.3226 5.25409 15.473 5.61774 15.596 5.991L14.646 6.304C14.5923 6.14087 14.5326 5.97976 14.467 5.821ZM14.997 8.328C14.9889 7.98434 14.9555 7.64174 14.897 7.303L15.882 7.133C15.949 7.519 15.988 7.911 15.998 8.303L14.998 8.328H14.997ZM14.866 9.866C14.899 9.696 14.926 9.527 14.947 9.356L15.94 9.479C15.892 9.86915 15.8151 10.2552 15.71 10.634L14.746 10.367C14.792 10.202 14.832 10.035 14.866 9.866ZM13.914 12.245C14.098 11.955 14.26 11.651 14.4 11.337L15.314 11.742C15.154 12.102 14.969 12.448 14.759 12.78L13.914 12.245ZM12.95 13.45C13.072 13.328 13.189 13.202 13.3 13.072L14.058 13.725C13.9296 13.8738 13.7959 14.0179 13.657 14.157L12.95 13.45Z"
                                                            fill="black"
                                                        />
                                                        <path
                                                            d="M7.99922 1.5C6.8481 1.50008 5.71476 1.78405 4.6996 2.32674C3.68443 2.86943 2.81876 3.6541 2.17927 4.61125C1.53979 5.5684 1.14621 6.66848 1.03341 7.81406C0.920612 8.95964 1.09207 10.1154 1.53259 11.1789C1.97312 12.2423 2.66912 13.1808 3.55894 13.9111C4.44877 14.6413 5.50495 15.1409 6.63395 15.3655C7.76295 15.5901 8.92991 15.5328 10.0315 15.1987C11.133 14.8645 12.1352 14.2639 12.9492 13.45L13.6562 14.157C12.726 15.0878 11.5805 15.7747 10.3213 16.157C9.06205 16.5393 7.72799 16.605 6.43728 16.3485C5.14658 16.0919 3.93907 15.521 2.92177 14.6862C1.90446 13.8515 1.10875 12.7787 0.605152 11.5629C0.101551 10.3471 -0.0943961 9.02588 0.0346716 7.71627C0.163739 6.40666 0.613837 5.1491 1.34509 4.05502C2.07633 2.96094 3.06615 2.06411 4.22684 1.444C5.38754 0.823895 6.68326 0.499651 7.99922 0.5V1.5Z"
                                                            fill="#212529"
                                                        />
                                                        <path
                                                            d="M7.5 3.5C7.63261 3.5 7.75979 3.55268 7.85355 3.64645C7.94732 3.74021 8 3.86739 8 4V9.21L11.248 11.066C11.3598 11.1334 11.4408 11.2419 11.4736 11.3683C11.5065 11.4946 11.4886 11.6288 11.4238 11.7422C11.3591 11.8556 11.2525 11.9391 11.127 11.9749C11.0014 12.0108 10.8669 11.9961 10.752 11.934L7.252 9.934C7.17547 9.89029 7.11186 9.82712 7.06761 9.75091C7.02335 9.67469 7.00003 9.58813 7 9.5V4C7 3.86739 7.05268 3.74021 7.14645 3.64645C7.24021 3.55268 7.36739 3.5 7.5 3.5Z"
                                                            fill="#212529"
                                                        />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_960_10434">
                                                            <rect
                                                                width="16"
                                                                height="16"
                                                                fill="white"
                                                                transform="translate(0 0.5)"
                                                            />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                On Chek
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div>
                                            <h6 class="card-title">Tags Test</h6>
                                            <p class="card-text">Frontend basics: HTML and CSS</p>
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
                                </div>
                            </div>
                        </div>

                        <!-- My Courses details -->
                        <div class="myCoursesDetail">
                            <div
                                class="headingWrap d-flex align-items-center justify-content-between"
                            >
                                <h3>My Courses</h3>
                                <a href="{{ url('/design/my-courses') }}"
                                >Open all<svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="17"
                                        viewBox="0 0 16 17"
                                        fill="none"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M4.64689 2.14592C4.69334 2.09935 4.74851 2.06241 4.80926 2.0372C4.87001 2.012 4.93513 1.99902 5.00089 1.99902C5.06666 1.99902 5.13178 2.012 5.19253 2.0372C5.25327 2.06241 5.30845 2.09935 5.35489 2.14592L11.3549 8.14592C11.4015 8.19236 11.4384 8.24754 11.4636 8.30828C11.4888 8.36903 11.5018 8.43415 11.5018 8.49992C11.5018 8.56568 11.4888 8.63081 11.4636 8.69155C11.4384 8.7523 11.4015 8.80747 11.3549 8.85392L5.35489 14.8539C5.26101 14.9478 5.13367 15.0005 5.00089 15.0005C4.86812 15.0005 4.74078 14.9478 4.64689 14.8539C4.55301 14.76 4.50026 14.6327 4.50026 14.4999C4.50026 14.3671 4.55301 14.2398 4.64689 14.1459L10.2939 8.49992L4.64689 2.85392C4.60033 2.80747 4.56339 2.7523 4.53818 2.69155C4.51297 2.63081 4.5 2.56568 4.5 2.49992C4.5 2.43415 4.51297 2.36903 4.53818 2.30828C4.56339 2.24754 4.60033 2.19236 4.64689 2.14592Z"
                                            fill="#154BD8"
                                        />
                                    </svg>
                                </a>
                            </div>
                            <div
                                class="myCoursesCardWrap flex-wrap flex-md-nowrap justify-content-center justify-content-sm-start"
                            >
                                <div class="card">
                                    <div class="cardHeader">
                                        <img
                                            src="img/dashboard/myCourseIcon.svg"
                                            alt="html"
                                            class="cardImg"
                                        />
                                        <h3 class="card-title">
                                            Frontend basics: HTML and CSS
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="durationContent">
                                            <p class="startDate dateStyles">
                                                Starts: 09 Oct 2023
                                            </p>

                                            <p class="endDate mb-0 dateStyles">
                                                Ends: 28 Oct 2023
                                            </p>
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
                                            <p class="progressBarValue">44%</p>
                                        </div>
                                        <div class="instructorWrap">
                                            <div class="instructorImages">
                                                <img
                                                    src="img/dashboard/1.svg"
                                                    alt="inoura"
                                                    class="instructorProfile"
                                                />
                                                <img
                                                    src="img/dashboard/2.svg"
                                                    alt="inoura"
                                                    class="instructorProfile"
                                                />
                                                <img
                                                    src="img/dashboard/3.svg"
                                                    alt="inoura"
                                                    class="instructorProfile"
                                                />
                                                <div class="loadMoreInnstructor instructorProfile">
                                                    +5
                                                </div>
                                            </div>
                                            <div
                                                class="cardBtn cardBlueArrow d-flex justify-content-end"
                                            >
                                                <img
                                                    src="img/dashboard/arrowupright.svg"
                                                    alt="inoura"
                                                    class="arrow"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="cardHeader">
                                        <img
                                            src="img/dashboard/myCourseIcon.svg"
                                            alt="html"
                                            class="cardImg"
                                        />
                                        <h3 class="card-title">
                                            Frontend basics: HTML and CSS
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="durationContent">
                                            <p class="startDate dateStyles">
                                                Starts: 09 Oct 2023
                                            </p>

                                            <p class="endDate mb-0 dateStyles">
                                                Ends: 28 Oct 2023
                                            </p>
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
                                            <p class="progressBarValue">44%</p>
                                        </div>
                                        <div class="instructorWrap">
                                            <div class="instructorImages">
                                                <img
                                                    src="img/dashboard/1.svg"
                                                    alt="inoura"
                                                    class="instructorProfile"
                                                />
                                                <img
                                                    src="img/dashboard/2.svg"
                                                    alt="inoura"
                                                    class="instructorProfile"
                                                />
                                                <img
                                                    src="img/dashboard/3.svg"
                                                    alt="inoura"
                                                    class="instructorProfile"
                                                />
                                                <div class="loadMoreInnstructor instructorProfile">
                                                    +5
                                                </div>
                                            </div>
                                            <div
                                                class="cardBtn cardBlueArrow d-flex justify-content-end"
                                            >
                                                <img
                                                    src="img/dashboard/arrowupright.svg"
                                                    alt="inoura"
                                                    class="arrow"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-12">
                    <div class="card timeSchedule_Card">
                        <div class="schedule_Wrapper">
                            <h3>Schedule</h3>
                        </div>
                        <div class="time_Content_Wrapper">
                            <div class="timeLine_Wrapper">
                                <hr />
                                <p>09:00</p>
                            </div>
                            <div class="timeFixed_Wrapper">
                                <div class="card fixed_Meeting">
                                    <h3>Visual Design</h3>
                                    <div class="fixedMeeting_timeWrapper">
                                        <img src="img/topCourses/clock.svg" alt="icon" />
                                        <p class="time mb-0">09:00 - 09:50</p>
                                    </div>
                                </div>
                                <p>10:00</p>
                            </div>
                            <div class="timeLine_Wrapper">
                                <hr />
                                <p>11:00</p>
                            </div>
                            <div class="timeLine_Wrapper">
                                <hr />
                                <p>12:00</p>
                            </div>
                            <div class="timeFixed_Wrapper">
                                <div class="card fixed_Meeting">
                                    <h3>Frontend basics: HTML and CSS</h3>
                                    <div class="fixedMeeting_timeWrapper">
                                        <img src="img/topCourses/clock.svg" alt="icon" />
                                        <p class="time mb-0">12:30 - 14:00</p>
                                    </div>
                                </div>
                                <p>13:00</p>
                            </div>
                            <!-- TimeStamp -->
                            <div class="timeStamp_Wrapper">
                                <hr />
                                <p>09:00</p>
                            </div>
                            <!-- TimeStamp -->
                        </div>
                    </div>
                    <div class="topMentorWrap">
                        <div
                            class="headingWrap d-flex align-items-center justify-content-between w-100"
                        >
                            <h3>Top Mentors</h3>
                            <a href="{{ url('/design/my-mentor') }}"
                            >View all<svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="17"
                                    viewBox="0 0 16 17"
                                    fill="none"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M4.64689 2.14592C4.69334 2.09935 4.74851 2.06241 4.80926 2.0372C4.87001 2.012 4.93513 1.99902 5.00089 1.99902C5.06666 1.99902 5.13178 2.012 5.19253 2.0372C5.25327 2.06241 5.30845 2.09935 5.35489 2.14592L11.3549 8.14592C11.4015 8.19236 11.4384 8.24754 11.4636 8.30828C11.4888 8.36903 11.5018 8.43415 11.5018 8.49992C11.5018 8.56568 11.4888 8.63081 11.4636 8.69155C11.4384 8.7523 11.4015 8.80747 11.3549 8.85392L5.35489 14.8539C5.26101 14.9478 5.13367 15.0005 5.00089 15.0005C4.86812 15.0005 4.74078 14.9478 4.64689 14.8539C4.55301 14.76 4.50026 14.6327 4.50026 14.4999C4.50026 14.3671 4.55301 14.2398 4.64689 14.1459L10.2939 8.49992L4.64689 2.85392C4.60033 2.80747 4.56339 2.7523 4.53818 2.69155C4.51297 2.63081 4.5 2.56568 4.5 2.49992C4.5 2.43415 4.51297 2.36903 4.53818 2.30828C4.56339 2.24754 4.60033 2.19236 4.64689 2.14592Z"
                                        fill="#154BD8"
                                    />
                                </svg>
                            </a>
                        </div>
                        <div class="mentorProfile">
                            <!-- Image & Name Wrapper starts -->
                            <div class="img_Name_Wrapper">
                                <img
                                    src="img/dashboard/2.svg"
                                    class="card-img-top"
                                    alt="image"
                                />
                                <div class="card-body name_Wrapper">
                                    <h6 class="card-title">Jane Dou</h6>
                                    <p class="card-text">Welcome Back</p>
                                    <div class="starImgWrap">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="12"
                                            height="12"
                                            viewBox="0 0 12 12"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_172_5848)">
                                                <path
                                                    d="M2.70994 11.5821C2.42044 11.7306 2.09194 11.4704 2.15044 11.1381L2.77294 7.59064L0.130693 5.07364C-0.116057 4.83814 0.0121932 4.40764 0.342943 4.36114L4.01644 3.83914L5.65444 0.593887C5.80219 0.301387 6.20194 0.301387 6.34969 0.593887L7.98769 3.83914L11.6612 4.36114C11.9919 4.40764 12.1202 4.83814 11.8727 5.07364L9.23119 7.59064L9.85369 11.1381C9.91219 11.4704 9.58369 11.7306 9.29419 11.5821L6.00094 9.89014L2.70919 11.5821H2.70994Z"
                                                    fill="#676A6C"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_172_5848">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="12"
                                            height="12"
                                            viewBox="0 0 12 12"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_172_5848)">
                                                <path
                                                    d="M2.70994 11.5821C2.42044 11.7306 2.09194 11.4704 2.15044 11.1381L2.77294 7.59064L0.130693 5.07364C-0.116057 4.83814 0.0121932 4.40764 0.342943 4.36114L4.01644 3.83914L5.65444 0.593887C5.80219 0.301387 6.20194 0.301387 6.34969 0.593887L7.98769 3.83914L11.6612 4.36114C11.9919 4.40764 12.1202 4.83814 11.8727 5.07364L9.23119 7.59064L9.85369 11.1381C9.91219 11.4704 9.58369 11.7306 9.29419 11.5821L6.00094 9.89014L2.70919 11.5821H2.70994Z"
                                                    fill="#676A6C"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_172_5848">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="12"
                                            height="12"
                                            viewBox="0 0 12 12"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_172_5848)">
                                                <path
                                                    d="M2.70994 11.5821C2.42044 11.7306 2.09194 11.4704 2.15044 11.1381L2.77294 7.59064L0.130693 5.07364C-0.116057 4.83814 0.0121932 4.40764 0.342943 4.36114L4.01644 3.83914L5.65444 0.593887C5.80219 0.301387 6.20194 0.301387 6.34969 0.593887L7.98769 3.83914L11.6612 4.36114C11.9919 4.40764 12.1202 4.83814 11.8727 5.07364L9.23119 7.59064L9.85369 11.1381C9.91219 11.4704 9.58369 11.7306 9.29419 11.5821L6.00094 9.89014L2.70919 11.5821H2.70994Z"
                                                    fill="#676A6C"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_172_5848">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="12"
                                            height="12"
                                            viewBox="0 0 12 12"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_172_5848)">
                                                <path
                                                    d="M2.70994 11.5821C2.42044 11.7306 2.09194 11.4704 2.15044 11.1381L2.77294 7.59064L0.130693 5.07364C-0.116057 4.83814 0.0121932 4.40764 0.342943 4.36114L4.01644 3.83914L5.65444 0.593887C5.80219 0.301387 6.20194 0.301387 6.34969 0.593887L7.98769 3.83914L11.6612 4.36114C11.9919 4.40764 12.1202 4.83814 11.8727 5.07364L9.23119 7.59064L9.85369 11.1381C9.91219 11.4704 9.58369 11.7306 9.29419 11.5821L6.00094 9.89014L2.70919 11.5821H2.70994Z"
                                                    fill="#676A6C"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_172_5848">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="12"
                                            height="12"
                                            viewBox="0 0 12 12"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_172_5848)">
                                                <path
                                                    d="M2.70994 11.5821C2.42044 11.7306 2.09194 11.4704 2.15044 11.1381L2.77294 7.59064L0.130693 5.07364C-0.116057 4.83814 0.0121932 4.40764 0.342943 4.36114L4.01644 3.83914L5.65444 0.593887C5.80219 0.301387 6.20194 0.301387 6.34969 0.593887L7.98769 3.83914L11.6612 4.36114C11.9919 4.40764 12.1202 4.83814 11.8727 5.07364L9.23119 7.59064L9.85369 11.1381C9.91219 11.4704 9.58369 11.7306 9.29419 11.5821L6.00094 9.89014L2.70919 11.5821H2.70994Z"
                                                    fill="#676A6C"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_172_5848">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="img_Name_Wrapper">
                                <img
                                    src="img/dashboard/3.svg"
                                    class="card-img-top"
                                    alt="image"
                                />
                                <div class="card-body name_Wrapper">
                                    <h6 class="card-title">Jane Dou</h6>
                                    <p class="card-text">Welcome Back</p>
                                    <div class="starImgWrap">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="12"
                                            height="12"
                                            viewBox="0 0 12 12"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_172_5848)">
                                                <path
                                                    d="M2.70994 11.5821C2.42044 11.7306 2.09194 11.4704 2.15044 11.1381L2.77294 7.59064L0.130693 5.07364C-0.116057 4.83814 0.0121932 4.40764 0.342943 4.36114L4.01644 3.83914L5.65444 0.593887C5.80219 0.301387 6.20194 0.301387 6.34969 0.593887L7.98769 3.83914L11.6612 4.36114C11.9919 4.40764 12.1202 4.83814 11.8727 5.07364L9.23119 7.59064L9.85369 11.1381C9.91219 11.4704 9.58369 11.7306 9.29419 11.5821L6.00094 9.89014L2.70919 11.5821H2.70994Z"
                                                    fill="#676A6C"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_172_5848">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="12"
                                            height="12"
                                            viewBox="0 0 12 12"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_172_5848)">
                                                <path
                                                    d="M2.70994 11.5821C2.42044 11.7306 2.09194 11.4704 2.15044 11.1381L2.77294 7.59064L0.130693 5.07364C-0.116057 4.83814 0.0121932 4.40764 0.342943 4.36114L4.01644 3.83914L5.65444 0.593887C5.80219 0.301387 6.20194 0.301387 6.34969 0.593887L7.98769 3.83914L11.6612 4.36114C11.9919 4.40764 12.1202 4.83814 11.8727 5.07364L9.23119 7.59064L9.85369 11.1381C9.91219 11.4704 9.58369 11.7306 9.29419 11.5821L6.00094 9.89014L2.70919 11.5821H2.70994Z"
                                                    fill="#676A6C"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_172_5848">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="12"
                                            height="12"
                                            viewBox="0 0 12 12"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_172_5848)">
                                                <path
                                                    d="M2.70994 11.5821C2.42044 11.7306 2.09194 11.4704 2.15044 11.1381L2.77294 7.59064L0.130693 5.07364C-0.116057 4.83814 0.0121932 4.40764 0.342943 4.36114L4.01644 3.83914L5.65444 0.593887C5.80219 0.301387 6.20194 0.301387 6.34969 0.593887L7.98769 3.83914L11.6612 4.36114C11.9919 4.40764 12.1202 4.83814 11.8727 5.07364L9.23119 7.59064L9.85369 11.1381C9.91219 11.4704 9.58369 11.7306 9.29419 11.5821L6.00094 9.89014L2.70919 11.5821H2.70994Z"
                                                    fill="#676A6C"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_172_5848">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="12"
                                            height="12"
                                            viewBox="0 0 12 12"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_172_5848)">
                                                <path
                                                    d="M2.70994 11.5821C2.42044 11.7306 2.09194 11.4704 2.15044 11.1381L2.77294 7.59064L0.130693 5.07364C-0.116057 4.83814 0.0121932 4.40764 0.342943 4.36114L4.01644 3.83914L5.65444 0.593887C5.80219 0.301387 6.20194 0.301387 6.34969 0.593887L7.98769 3.83914L11.6612 4.36114C11.9919 4.40764 12.1202 4.83814 11.8727 5.07364L9.23119 7.59064L9.85369 11.1381C9.91219 11.4704 9.58369 11.7306 9.29419 11.5821L6.00094 9.89014L2.70919 11.5821H2.70994Z"
                                                    fill="#676A6C"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_172_5848">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="12"
                                            height="12"
                                            viewBox="0 0 12 12"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_172_5848)">
                                                <path
                                                    d="M2.70994 11.5821C2.42044 11.7306 2.09194 11.4704 2.15044 11.1381L2.77294 7.59064L0.130693 5.07364C-0.116057 4.83814 0.0121932 4.40764 0.342943 4.36114L4.01644 3.83914L5.65444 0.593887C5.80219 0.301387 6.20194 0.301387 6.34969 0.593887L7.98769 3.83914L11.6612 4.36114C11.9919 4.40764 12.1202 4.83814 11.8727 5.07364L9.23119 7.59064L9.85369 11.1381C9.91219 11.4704 9.58369 11.7306 9.29419 11.5821L6.00094 9.89014L2.70919 11.5821H2.70994Z"
                                                    fill="#676A6C"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_172_5848">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="img_Name_Wrapper">
                                <img
                                    src="img/dashboard/2.svg"
                                    class="card-img-top"
                                    alt="image"
                                />
                                <div class="card-body name_Wrapper">
                                    <h6 class="card-title">Jane Dou</h6>
                                    <p class="card-text">Welcome Back</p>
                                    <div class="starImgWrap">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="12"
                                            height="12"
                                            viewBox="0 0 12 12"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_172_5848)">
                                                <path
                                                    d="M2.70994 11.5821C2.42044 11.7306 2.09194 11.4704 2.15044 11.1381L2.77294 7.59064L0.130693 5.07364C-0.116057 4.83814 0.0121932 4.40764 0.342943 4.36114L4.01644 3.83914L5.65444 0.593887C5.80219 0.301387 6.20194 0.301387 6.34969 0.593887L7.98769 3.83914L11.6612 4.36114C11.9919 4.40764 12.1202 4.83814 11.8727 5.07364L9.23119 7.59064L9.85369 11.1381C9.91219 11.4704 9.58369 11.7306 9.29419 11.5821L6.00094 9.89014L2.70919 11.5821H2.70994Z"
                                                    fill="#676A6C"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_172_5848">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="12"
                                            height="12"
                                            viewBox="0 0 12 12"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_172_5848)">
                                                <path
                                                    d="M2.70994 11.5821C2.42044 11.7306 2.09194 11.4704 2.15044 11.1381L2.77294 7.59064L0.130693 5.07364C-0.116057 4.83814 0.0121932 4.40764 0.342943 4.36114L4.01644 3.83914L5.65444 0.593887C5.80219 0.301387 6.20194 0.301387 6.34969 0.593887L7.98769 3.83914L11.6612 4.36114C11.9919 4.40764 12.1202 4.83814 11.8727 5.07364L9.23119 7.59064L9.85369 11.1381C9.91219 11.4704 9.58369 11.7306 9.29419 11.5821L6.00094 9.89014L2.70919 11.5821H2.70994Z"
                                                    fill="#676A6C"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_172_5848">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="12"
                                            height="12"
                                            viewBox="0 0 12 12"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_172_5848)">
                                                <path
                                                    d="M2.70994 11.5821C2.42044 11.7306 2.09194 11.4704 2.15044 11.1381L2.77294 7.59064L0.130693 5.07364C-0.116057 4.83814 0.0121932 4.40764 0.342943 4.36114L4.01644 3.83914L5.65444 0.593887C5.80219 0.301387 6.20194 0.301387 6.34969 0.593887L7.98769 3.83914L11.6612 4.36114C11.9919 4.40764 12.1202 4.83814 11.8727 5.07364L9.23119 7.59064L9.85369 11.1381C9.91219 11.4704 9.58369 11.7306 9.29419 11.5821L6.00094 9.89014L2.70919 11.5821H2.70994Z"
                                                    fill="#676A6C"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_172_5848">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="12"
                                            height="12"
                                            viewBox="0 0 12 12"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_172_5848)">
                                                <path
                                                    d="M2.70994 11.5821C2.42044 11.7306 2.09194 11.4704 2.15044 11.1381L2.77294 7.59064L0.130693 5.07364C-0.116057 4.83814 0.0121932 4.40764 0.342943 4.36114L4.01644 3.83914L5.65444 0.593887C5.80219 0.301387 6.20194 0.301387 6.34969 0.593887L7.98769 3.83914L11.6612 4.36114C11.9919 4.40764 12.1202 4.83814 11.8727 5.07364L9.23119 7.59064L9.85369 11.1381C9.91219 11.4704 9.58369 11.7306 9.29419 11.5821L6.00094 9.89014L2.70919 11.5821H2.70994Z"
                                                    fill="#676A6C"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_172_5848">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="12"
                                            height="12"
                                            viewBox="0 0 12 12"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_172_5848)">
                                                <path
                                                    d="M2.70994 11.5821C2.42044 11.7306 2.09194 11.4704 2.15044 11.1381L2.77294 7.59064L0.130693 5.07364C-0.116057 4.83814 0.0121932 4.40764 0.342943 4.36114L4.01644 3.83914L5.65444 0.593887C5.80219 0.301387 6.20194 0.301387 6.34969 0.593887L7.98769 3.83914L11.6612 4.36114C11.9919 4.40764 12.1202 4.83814 11.8727 5.07364L9.23119 7.59064L9.85369 11.1381C9.91219 11.4704 9.58369 11.7306 9.29419 11.5821L6.00094 9.89014L2.70919 11.5821H2.70994Z"
                                                    fill="#676A6C"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_172_5848">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="img_Name_Wrapper">
                                <img
                                    src="img/dashboard/1.svg"
                                    class="card-img-top"
                                    alt="image"
                                />
                                <div class="card-body name_Wrapper">
                                    <h6 class="card-title">Jane Dou</h6>
                                    <p class="card-text">Welcome Back</p>
                                    <div class="starImgWrap">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="12"
                                            height="12"
                                            viewBox="0 0 12 12"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_172_5848)">
                                                <path
                                                    d="M2.70994 11.5821C2.42044 11.7306 2.09194 11.4704 2.15044 11.1381L2.77294 7.59064L0.130693 5.07364C-0.116057 4.83814 0.0121932 4.40764 0.342943 4.36114L4.01644 3.83914L5.65444 0.593887C5.80219 0.301387 6.20194 0.301387 6.34969 0.593887L7.98769 3.83914L11.6612 4.36114C11.9919 4.40764 12.1202 4.83814 11.8727 5.07364L9.23119 7.59064L9.85369 11.1381C9.91219 11.4704 9.58369 11.7306 9.29419 11.5821L6.00094 9.89014L2.70919 11.5821H2.70994Z"
                                                    fill="#676A6C"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_172_5848">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="12"
                                            height="12"
                                            viewBox="0 0 12 12"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_172_5848)">
                                                <path
                                                    d="M2.70994 11.5821C2.42044 11.7306 2.09194 11.4704 2.15044 11.1381L2.77294 7.59064L0.130693 5.07364C-0.116057 4.83814 0.0121932 4.40764 0.342943 4.36114L4.01644 3.83914L5.65444 0.593887C5.80219 0.301387 6.20194 0.301387 6.34969 0.593887L7.98769 3.83914L11.6612 4.36114C11.9919 4.40764 12.1202 4.83814 11.8727 5.07364L9.23119 7.59064L9.85369 11.1381C9.91219 11.4704 9.58369 11.7306 9.29419 11.5821L6.00094 9.89014L2.70919 11.5821H2.70994Z"
                                                    fill="#676A6C"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_172_5848">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="12"
                                            height="12"
                                            viewBox="0 0 12 12"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_172_5848)">
                                                <path
                                                    d="M2.70994 11.5821C2.42044 11.7306 2.09194 11.4704 2.15044 11.1381L2.77294 7.59064L0.130693 5.07364C-0.116057 4.83814 0.0121932 4.40764 0.342943 4.36114L4.01644 3.83914L5.65444 0.593887C5.80219 0.301387 6.20194 0.301387 6.34969 0.593887L7.98769 3.83914L11.6612 4.36114C11.9919 4.40764 12.1202 4.83814 11.8727 5.07364L9.23119 7.59064L9.85369 11.1381C9.91219 11.4704 9.58369 11.7306 9.29419 11.5821L6.00094 9.89014L2.70919 11.5821H2.70994Z"
                                                    fill="#676A6C"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_172_5848">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="12"
                                            height="12"
                                            viewBox="0 0 12 12"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_172_5848)">
                                                <path
                                                    d="M2.70994 11.5821C2.42044 11.7306 2.09194 11.4704 2.15044 11.1381L2.77294 7.59064L0.130693 5.07364C-0.116057 4.83814 0.0121932 4.40764 0.342943 4.36114L4.01644 3.83914L5.65444 0.593887C5.80219 0.301387 6.20194 0.301387 6.34969 0.593887L7.98769 3.83914L11.6612 4.36114C11.9919 4.40764 12.1202 4.83814 11.8727 5.07364L9.23119 7.59064L9.85369 11.1381C9.91219 11.4704 9.58369 11.7306 9.29419 11.5821L6.00094 9.89014L2.70919 11.5821H2.70994Z"
                                                    fill="#676A6C"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_172_5848">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="12"
                                            height="12"
                                            viewBox="0 0 12 12"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_172_5848)">
                                                <path
                                                    d="M2.70994 11.5821C2.42044 11.7306 2.09194 11.4704 2.15044 11.1381L2.77294 7.59064L0.130693 5.07364C-0.116057 4.83814 0.0121932 4.40764 0.342943 4.36114L4.01644 3.83914L5.65444 0.593887C5.80219 0.301387 6.20194 0.301387 6.34969 0.593887L7.98769 3.83914L11.6612 4.36114C11.9919 4.40764 12.1202 4.83814 11.8727 5.07364L9.23119 7.59064L9.85369 11.1381C9.91219 11.4704 9.58369 11.7306 9.29419 11.5821L6.00094 9.89014L2.70919 11.5821H2.70994Z"
                                                    fill="#676A6C"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_172_5848">
                                                    <rect width="12" height="12" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- Image & Name Wrapper ends -->
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
