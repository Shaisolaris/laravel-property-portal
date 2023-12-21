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
                            <a class="nav-link" href="#">Blog</a>
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
<div class="paymentWrap">
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
                <!-- side bar column -->
                <div class="col-xl-9 col-lg-12">
                    <div class="paymentTabbing">
                        <h2 class="heading">Payment information</h2>
                        <div class="courseOverview">
                            <div class="tabbingWrapper">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a
                                            class="nav-link active"
                                            id="pills-Payment-tab"
                                            data-toggle="pill"
                                            href="#pills-Payment"
                                            role="tab"
                                            aria-controls="pills-Payment"
                                            aria-selected="true"
                                        >
                                            Payment</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            id="pills-paymentHistory-tab"
                                            data-toggle="pill"
                                            href="#pills-paymentHistory"
                                            role="tab"
                                            aria-controls="pills-paymentHistory"
                                            aria-selected="false"
                                        >History</a
                                        >
                                    </li>
                                </ul>
                            </div>
                            <div class="tabContentWrapper">
                                <div class="tab-content" id="pills-tabContent">
                                    <div
                                        class="tab-pane fade show active"
                                        id="pills-Payment"
                                        role="tabpanel"
                                        aria-labelledby="pills-Payment-tab"
                                    >
                                        <div class="paymentMethod">
                                            <div
                                                class="card d-flex justify-content-between flex-row"
                                            >
                                                <div class="cardPayment d-flex">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="48"
                                                        height="25"
                                                        viewBox="0 0 48 25"
                                                        fill="none"
                                                    >
                                                        <path
                                                            d="M19.4746 5.4248H27.9931V19.5748H19.4746V5.4248Z"
                                                            fill="#F26122"
                                                        />
                                                        <path
                                                            d="M23.697 19.5755C22.1535 20.8204 20.2304 21.4995 18.2475 21.5C17.0763 21.4896 15.9186 21.2485 14.8407 20.7905C13.7627 20.3325 12.7855 19.6666 11.965 18.8308C11.1445 17.995 10.4968 17.0056 10.0588 15.9194C9.62087 14.8331 9.40124 13.6712 9.41252 12.5C9.40144 11.3289 9.6212 10.167 10.0592 9.08085C10.4973 7.99467 11.145 7.00544 11.9655 6.16967C12.7859 5.33389 13.763 4.66794 14.8409 4.20987C15.9188 3.75181 17.0764 3.51059 18.2475 3.5C20.2305 3.5 22.1535 4.1795 23.697 5.4245C22.6457 6.27982 21.7982 7.35866 21.2162 8.58257C20.6341 9.80649 20.3321 11.1447 20.3321 12.5C20.3321 13.8553 20.6341 15.1935 21.2162 16.4174C21.7982 17.6413 22.6457 18.7202 23.697 19.5755Z"
                                                            fill="#EA1D25"
                                                        />
                                                        <path
                                                            d="M38.0067 12.5C38.0178 13.6711 37.7981 14.833 37.36 15.9191C36.922 17.0053 36.2742 17.9946 35.4538 18.8303C34.6333 19.6661 33.6562 20.3321 32.5783 20.7901C31.5004 21.2482 30.3429 21.4894 29.1717 21.5C27.1883 21.4998 25.2647 20.8206 23.7207 19.5755C24.7718 18.72 25.619 17.6411 26.2009 16.4172C26.7828 15.1933 27.0847 13.8552 27.0847 12.5C27.0847 11.1448 26.7828 9.80666 26.2009 8.58276C25.619 7.35887 24.7718 6.27998 23.7207 5.4245C25.2642 4.1796 27.1873 3.50046 29.1702 3.5C30.3416 3.51019 31.4994 3.75113 32.5775 4.20905C33.6557 4.66696 34.633 5.33287 35.4537 6.1687C36.2743 7.00454 36.9222 7.99392 37.3603 9.08028C37.7983 10.1666 38.018 11.3287 38.0067 12.5Z"
                                                            fill="#F69E1E"
                                                        />
                                                    </svg>
                                                    <div>
                                                        <h6>Credit card ends with:</h6>
                                                        <p>••••9532</p>
                                                    </div>
                                                </div>
                                                <div class="cardExpiryDate d-flex">
                                                    <div>
                                                        <h6>Expiration date:</h6>
                                                        <p>09.2029</p>
                                                    </div>
                                                </div>
                                                <div class="delBtn d-flex">
                                                    <button class="btn">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="16"
                                                            height="17"
                                                            viewBox="0 0 16 17"
                                                            fill="none"
                                                        >
                                                            <path
                                                                d="M14 3.5C14 3.57652 13.9875 3.65252 13.963 3.725L12.279 13.829C12.2011 14.2962 11.9599 14.7205 11.5984 15.0265C11.237 15.3325 10.7786 15.5003 10.305 15.5H5.694C5.22056 15.5001 4.76245 15.3322 4.40118 15.0262C4.0399 14.7202 3.79888 14.296 3.721 13.829L2.037 3.725C2.0125 3.65251 2.00001 3.57651 2 3.5C2 2.395 4.686 1.5 8 1.5C11.314 1.5 14 2.395 14 3.5ZM3.215 4.707L4.708 13.664C4.74682 13.8975 4.86721 14.1097 5.04776 14.2627C5.2283 14.4158 5.45729 14.4999 5.694 14.5H10.306C10.5427 14.4999 10.7717 14.4158 10.9522 14.2627C11.1328 14.1097 11.2532 13.8975 11.292 13.664L12.785 4.707C11.69 5.189 9.954 5.5 8 5.5C6.046 5.5 4.31 5.189 3.215 4.707Z"
                                                                fill="#154BD8"
                                                            />
                                                        </svg>
                                                        Delete
                                                    </button>
                                                </div>
                                            </div>
                                            <div
                                                class="card d-flex justify-content-between flex-row"
                                            >
                                                <div class="cardPayment d-flex">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="48"
                                                        height="25"
                                                        viewBox="0 0 48 25"
                                                        fill="none"
                                                    >
                                                        <path
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M31.4326 14.5347C31.4405 12.7013 29.9286 11.904 28.7193 11.268C27.9083 10.8387 27.234 10.4827 27.2446 9.93467C27.2539 9.51733 27.6495 9.07333 28.5123 8.96133C29.5233 8.86354 30.5419 9.04182 31.4604 9.47733L31.9861 7.016C31.0918 6.67828 30.1447 6.50355 29.1892 6.5C26.2344 6.5 24.1557 8.07733 24.1358 10.336C24.1172 12.0067 25.6212 12.94 26.7535 13.496C27.9189 14.064 28.3092 14.4293 28.3052 14.9387C28.3052 15.7187 27.3747 16.06 26.5159 16.0747C25.057 16.096 24.1929 15.6907 23.5066 15.3693L23.4456 15.3413L22.9053 17.884C23.6035 18.2053 24.8938 18.4867 26.2291 18.5C29.3711 18.5 31.4246 16.9413 31.4352 14.5293L31.4326 14.5347ZM19.0492 6.71733L14.2055 18.3253H11.045L8.66097 9.06C8.51496 8.48933 8.39018 8.28133 7.94949 8.04C7.23269 7.648 6.04599 7.28133 5 7.05333L5.07035 6.70667H10.1583C10.4896 6.70785 10.8096 6.82775 11.0607 7.0448C11.3118 7.26185 11.4776 7.56179 11.5282 7.89067L12.7865 14.6L15.8966 6.70133L19.0492 6.71733ZM42 18.3133H39.2364L38.8753 16.588H35.0404L34.4166 18.3227H31.2772L35.7625 7.56667C35.8648 7.31188 36.0407 7.09373 36.2676 6.94043C36.4946 6.78712 36.762 6.70569 37.0355 6.70667H39.5868L42 18.3133ZM35.9019 14.2013L37.4762 9.844L38.3735 14.212L35.9019 14.2013ZM20.8532 18.3147L23.3248 6.70667H20.3315L17.8585 18.3133H20.8532V18.3147Z"
                                                            fill="#122D98"
                                                        />
                                                    </svg>
                                                    <div>
                                                        <h6>Credit card ends with:</h6>
                                                        <p>••••9532</p>
                                                    </div>
                                                </div>
                                                <div class="cardExpiryDate d-flex">
                                                    <div>
                                                        <h6>Expiration date:</h6>
                                                        <p>09.2029</p>
                                                    </div>
                                                </div>
                                                <div class="delBtn d-flex">
                                                    <button class="btn">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="16"
                                                            height="17"
                                                            viewBox="0 0 16 17"
                                                            fill="none"
                                                        >
                                                            <path
                                                                d="M14 3.5C14 3.57652 13.9875 3.65252 13.963 3.725L12.279 13.829C12.2011 14.2962 11.9599 14.7205 11.5984 15.0265C11.237 15.3325 10.7786 15.5003 10.305 15.5H5.694C5.22056 15.5001 4.76245 15.3322 4.40118 15.0262C4.0399 14.7202 3.79888 14.296 3.721 13.829L2.037 3.725C2.0125 3.65251 2.00001 3.57651 2 3.5C2 2.395 4.686 1.5 8 1.5C11.314 1.5 14 2.395 14 3.5ZM3.215 4.707L4.708 13.664C4.74682 13.8975 4.86721 14.1097 5.04776 14.2627C5.2283 14.4158 5.45729 14.4999 5.694 14.5H10.306C10.5427 14.4999 10.7717 14.4158 10.9522 14.2627C11.1328 14.1097 11.2532 13.8975 11.292 13.664L12.785 4.707C11.69 5.189 9.954 5.5 8 5.5C6.046 5.5 4.31 5.189 3.215 4.707Z"
                                                                fill="#154BD8"
                                                            />
                                                        </svg>
                                                        Delete
                                                    </button>
                                                </div>
                                            </div>
                                            <div
                                                class="card d-flex justify-content-between flex-row"
                                            >
                                                <div class="cardPayment d-flex">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="48"
                                                        height="25"
                                                        viewBox="0 0 48 25"
                                                        fill="none"
                                                    >
                                                        <path
                                                            d="M19.4746 5.4248H27.9931V19.5748H19.4746V5.4248Z"
                                                            fill="#F26122"
                                                        />
                                                        <path
                                                            d="M23.697 19.5755C22.1535 20.8204 20.2304 21.4995 18.2475 21.5C17.0763 21.4896 15.9186 21.2485 14.8407 20.7905C13.7627 20.3325 12.7855 19.6666 11.965 18.8308C11.1445 17.995 10.4968 17.0056 10.0588 15.9194C9.62087 14.8331 9.40124 13.6712 9.41252 12.5C9.40144 11.3289 9.6212 10.167 10.0592 9.08085C10.4973 7.99467 11.145 7.00544 11.9655 6.16967C12.7859 5.33389 13.763 4.66794 14.8409 4.20987C15.9188 3.75181 17.0764 3.51059 18.2475 3.5C20.2305 3.5 22.1535 4.1795 23.697 5.4245C22.6457 6.27982 21.7982 7.35866 21.2162 8.58257C20.6341 9.80649 20.3321 11.1447 20.3321 12.5C20.3321 13.8553 20.6341 15.1935 21.2162 16.4174C21.7982 17.6413 22.6457 18.7202 23.697 19.5755Z"
                                                            fill="#EA1D25"
                                                        />
                                                        <path
                                                            d="M38.0067 12.5C38.0178 13.6711 37.7981 14.833 37.36 15.9191C36.922 17.0053 36.2742 17.9946 35.4538 18.8303C34.6333 19.6661 33.6562 20.3321 32.5783 20.7901C31.5004 21.2482 30.3429 21.4894 29.1717 21.5C27.1883 21.4998 25.2647 20.8206 23.7207 19.5755C24.7718 18.72 25.619 17.6411 26.2009 16.4172C26.7828 15.1933 27.0847 13.8552 27.0847 12.5C27.0847 11.1448 26.7828 9.80666 26.2009 8.58276C25.619 7.35887 24.7718 6.27998 23.7207 5.4245C25.2642 4.1796 27.1873 3.50046 29.1702 3.5C30.3416 3.51019 31.4994 3.75113 32.5775 4.20905C33.6557 4.66696 34.633 5.33287 35.4537 6.1687C36.2743 7.00454 36.9222 7.99392 37.3603 9.08028C37.7983 10.1666 38.018 11.3287 38.0067 12.5Z"
                                                            fill="#F69E1E"
                                                        />
                                                    </svg>
                                                    <div>
                                                        <h6>Credit card ends with:</h6>
                                                        <p>••••9532</p>
                                                    </div>
                                                </div>
                                                <div class="cardExpiryDate d-flex">
                                                    <div>
                                                        <h6>Expiration date:</h6>
                                                        <p>09.2029</p>
                                                    </div>
                                                </div>
                                                <div class="delBtn d-flex">
                                                    <button class="btn">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="16"
                                                            height="17"
                                                            viewBox="0 0 16 17"
                                                            fill="none"
                                                        >
                                                            <path
                                                                d="M14 3.5C14 3.57652 13.9875 3.65252 13.963 3.725L12.279 13.829C12.2011 14.2962 11.9599 14.7205 11.5984 15.0265C11.237 15.3325 10.7786 15.5003 10.305 15.5H5.694C5.22056 15.5001 4.76245 15.3322 4.40118 15.0262C4.0399 14.7202 3.79888 14.296 3.721 13.829L2.037 3.725C2.0125 3.65251 2.00001 3.57651 2 3.5C2 2.395 4.686 1.5 8 1.5C11.314 1.5 14 2.395 14 3.5ZM3.215 4.707L4.708 13.664C4.74682 13.8975 4.86721 14.1097 5.04776 14.2627C5.2283 14.4158 5.45729 14.4999 5.694 14.5H10.306C10.5427 14.4999 10.7717 14.4158 10.9522 14.2627C11.1328 14.1097 11.2532 13.8975 11.292 13.664L12.785 4.707C11.69 5.189 9.954 5.5 8 5.5C6.046 5.5 4.31 5.189 3.215 4.707Z"
                                                                fill="#154BD8"
                                                            />
                                                        </svg>
                                                        Delete
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="pills-paymentHistory"
                                        role="tabpanel"
                                        aria-labelledby="pills-paymentHistory-tab"
                                    >
                                        <div class="paymentHistory">
                                            <div class="table-responsive">
                                                <table
                                                    class="table table-borderless paymentHistoryTable"
                                                >
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Course</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Total Price</th>
                                                        <th scope="col">Payment type</th>
                                                        <th scope="col">Get a Receipt</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">
                                                            Master Interviewing Users & Customers |
                                                            GRAMS Certification
                                                        </th>
                                                        <td>Sep 2, 2023</td>
                                                        <td>$80.00</td>
                                                        <td>Card ***9532</td>
                                                        <td class="colReceipt">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="16"
                                                                height="17"
                                                                viewBox="0 0 16 17"
                                                                fill="none"
                                                            >
                                                                <path
                                                                    d="M1.92 1.00592C1.99826 0.993169 2.07843 0.999216 2.15389 1.02356C2.22935 1.0479 2.29794 1.08984 2.354 1.14592L3 1.79292L3.646 1.14592C3.69245 1.09935 3.74762 1.06241 3.80837 1.0372C3.86911 1.012 3.93423 0.999023 4 0.999023C4.06577 0.999023 4.13089 1.012 4.19163 1.0372C4.25238 1.06241 4.30755 1.09935 4.354 1.14592L5 1.79292L5.646 1.14592C5.69245 1.09935 5.74762 1.06241 5.80837 1.0372C5.86911 1.012 5.93423 0.999023 6 0.999023C6.06577 0.999023 6.13089 1.012 6.19163 1.0372C6.25238 1.06241 6.30755 1.09935 6.354 1.14592L7 1.79292L7.646 1.14592C7.69245 1.09935 7.74762 1.06241 7.80837 1.0372C7.86911 1.012 7.93423 0.999023 8 0.999023C8.06577 0.999023 8.13089 1.012 8.19163 1.0372C8.25238 1.06241 8.30755 1.09935 8.354 1.14592L9 1.79292L9.646 1.14592C9.69245 1.09935 9.74762 1.06241 9.80837 1.0372C9.86911 1.012 9.93423 0.999023 10 0.999023C10.0658 0.999023 10.1309 1.012 10.1916 1.0372C10.2524 1.06241 10.3076 1.09935 10.354 1.14592L11 1.79292L11.646 1.14592C11.6924 1.09935 11.7476 1.06241 11.8084 1.0372C11.8691 1.012 11.9342 0.999023 12 0.999023C12.0658 0.999023 12.1309 1.012 12.1916 1.0372C12.2524 1.06241 12.3076 1.09935 12.354 1.14592L13 1.79292L13.646 1.14592C13.702 1.08985 13.7706 1.0479 13.846 1.02354C13.9214 0.999177 14.0016 0.993093 14.0798 1.00579C14.158 1.01849 14.2321 1.0496 14.296 1.09657C14.3598 1.14354 14.4116 1.20501 14.447 1.27592L14.947 2.27592C14.9818 2.34545 15 2.42214 15 2.49992V14.4999C15 14.5777 14.9818 14.6544 14.947 14.7239L14.447 15.7239C14.4115 15.7946 14.3598 15.8559 14.296 15.9028C14.2323 15.9496 14.1583 15.9807 14.0802 15.9934C14.0021 16.0061 13.9221 16 13.8468 15.9758C13.7715 15.9515 13.703 15.9098 13.647 15.8539L13 15.2069L12.354 15.8539C12.3076 15.9005 12.2524 15.9374 12.1916 15.9626C12.1309 15.9878 12.0658 16.0008 12 16.0008C11.9342 16.0008 11.8691 15.9878 11.8084 15.9626C11.7476 15.9374 11.6924 15.9005 11.646 15.8539L11 15.2069L10.354 15.8539C10.3076 15.9005 10.2524 15.9374 10.1916 15.9626C10.1309 15.9878 10.0658 16.0008 10 16.0008C9.93423 16.0008 9.86911 15.9878 9.80837 15.9626C9.74762 15.9374 9.69245 15.9005 9.646 15.8539L9 15.2069L8.354 15.8539C8.30755 15.9005 8.25238 15.9374 8.19163 15.9626C8.13089 15.9878 8.06577 16.0008 8 16.0008C7.93423 16.0008 7.86911 15.9878 7.80837 15.9626C7.74762 15.9374 7.69245 15.9005 7.646 15.8539L7 15.2069L6.354 15.8539C6.30755 15.9005 6.25238 15.9374 6.19163 15.9626C6.13089 15.9878 6.06577 16.0008 6 16.0008C5.93423 16.0008 5.86911 15.9878 5.80837 15.9626C5.74762 15.9374 5.69245 15.9005 5.646 15.8539L5 15.2069L4.354 15.8539C4.30755 15.9005 4.25238 15.9374 4.19163 15.9626C4.13089 15.9878 4.06577 16.0008 4 16.0008C3.93423 16.0008 3.86911 15.9878 3.80837 15.9626C3.74762 15.9374 3.69245 15.9005 3.646 15.8539L3 15.2069L2.354 15.8539C2.29798 15.91 2.22943 15.9519 2.154 15.9763C2.07858 16.0007 1.99845 16.0067 1.92021 15.994C1.84197 15.9813 1.76787 15.9502 1.70403 15.9033C1.64018 15.8563 1.58842 15.7948 1.553 15.7239L1.053 14.7239C1.01815 14.6544 1.00001 14.5777 1 14.4999V2.49992C1.00001 2.42214 1.01815 2.34545 1.053 2.27592L1.553 1.27592C1.58841 1.20506 1.64015 1.14363 1.70396 1.09669C1.76777 1.04974 1.84181 1.01863 1.92 1.00592ZM2.137 2.34392L2 2.61792V14.3819L2.137 14.6559L2.647 14.1459C2.74076 14.0522 2.86792 13.9995 3.0005 13.9995C3.13308 13.9995 3.26024 14.0522 3.354 14.1459L4 14.7929L4.646 14.1469C4.69245 14.1004 4.74762 14.0634 4.80837 14.0382C4.86911 14.013 4.93423 14 5 14C5.06577 14 5.13089 14.013 5.19163 14.0382C5.25238 14.0634 5.30755 14.1004 5.354 14.1469L6 14.7929L6.646 14.1469C6.69245 14.1004 6.74762 14.0634 6.80837 14.0382C6.86911 14.013 6.93423 14 7 14C7.06577 14 7.13089 14.013 7.19163 14.0382C7.25238 14.0634 7.30755 14.1004 7.354 14.1469L8 14.7929L8.646 14.1469C8.69245 14.1004 8.74762 14.0634 8.80837 14.0382C8.86911 14.013 8.93423 14 9 14C9.06577 14 9.13089 14.013 9.19163 14.0382C9.25238 14.0634 9.30755 14.1004 9.354 14.1469L10 14.7929L10.646 14.1469C10.6924 14.1004 10.7476 14.0634 10.8084 14.0382C10.8691 14.013 10.9342 14 11 14C11.0658 14 11.1309 14.013 11.1916 14.0382C11.2524 14.0634 11.3076 14.1004 11.354 14.1469L12 14.7929L12.646 14.1469C12.6924 14.1004 12.7476 14.0634 12.8084 14.0382C12.8691 14.013 12.9342 14 13 14C13.0658 14 13.1309 14.013 13.1916 14.0382C13.2524 14.0634 13.3076 14.1004 13.354 14.1469L13.863 14.6559L14 14.3819V2.61792L13.863 2.34392L13.353 2.85392C13.2592 2.94765 13.1321 3.00031 12.9995 3.00031C12.8669 3.00031 12.7398 2.94765 12.646 2.85392L12 2.20692L11.354 2.85392C11.3076 2.90048 11.2524 2.93742 11.1916 2.96263C11.1309 2.98784 11.0658 3.00081 11 3.00081C10.9342 3.00081 10.8691 2.98784 10.8084 2.96263C10.7476 2.93742 10.6924 2.90048 10.646 2.85392L10 2.20692L9.354 2.85392C9.30755 2.90048 9.25238 2.93742 9.19163 2.96263C9.13089 2.98784 9.06577 3.00081 9 3.00081C8.93423 3.00081 8.86911 2.98784 8.80837 2.96263C8.74762 2.93742 8.69245 2.90048 8.646 2.85392L8 2.20692L7.354 2.85392C7.30755 2.90048 7.25238 2.93742 7.19163 2.96263C7.13089 2.98784 7.06577 3.00081 7 3.00081C6.93423 3.00081 6.86911 2.98784 6.80837 2.96263C6.74762 2.93742 6.69245 2.90048 6.646 2.85392L6 2.20692L5.354 2.85392C5.30755 2.90048 5.25238 2.93742 5.19163 2.96263C5.13089 2.98784 5.06577 3.00081 5 3.00081C4.93423 3.00081 4.86911 2.98784 4.80837 2.96263C4.74762 2.93742 4.69245 2.90048 4.646 2.85392L4 2.20692L3.354 2.85392C3.30755 2.90048 3.25238 2.93742 3.19163 2.96263C3.13089 2.98784 3.06577 3.00081 3 3.00081C2.93423 3.00081 2.86911 2.98784 2.80837 2.96263C2.74762 2.93742 2.69245 2.90048 2.646 2.85392L2.137 2.34392Z"
                                                                    fill="#154BD8"
                                                                />
                                                                <path
                                                                    d="M3 5C3 4.86739 3.05268 4.74021 3.14645 4.64645C3.24021 4.55268 3.36739 4.5 3.5 4.5H9.5C9.63261 4.5 9.75979 4.55268 9.85355 4.64645C9.94732 4.74021 10 4.86739 10 5C10 5.13261 9.94732 5.25979 9.85355 5.35355C9.75979 5.44732 9.63261 5.5 9.5 5.5H3.5C3.36739 5.5 3.24021 5.44732 3.14645 5.35355C3.05268 5.25979 3 5.13261 3 5ZM3 7C3 6.86739 3.05268 6.74021 3.14645 6.64645C3.24021 6.55268 3.36739 6.5 3.5 6.5H9.5C9.63261 6.5 9.75979 6.55268 9.85355 6.64645C9.94732 6.74021 10 6.86739 10 7C10 7.13261 9.94732 7.25979 9.85355 7.35355C9.75979 7.44732 9.63261 7.5 9.5 7.5H3.5C3.36739 7.5 3.24021 7.44732 3.14645 7.35355C3.05268 7.25979 3 7.13261 3 7ZM3 9C3 8.86739 3.05268 8.74021 3.14645 8.64645C3.24021 8.55268 3.36739 8.5 3.5 8.5H9.5C9.63261 8.5 9.75979 8.55268 9.85355 8.64645C9.94732 8.74021 10 8.86739 10 9C10 9.13261 9.94732 9.25979 9.85355 9.35355C9.75979 9.44732 9.63261 9.5 9.5 9.5H3.5C3.36739 9.5 3.24021 9.44732 3.14645 9.35355C3.05268 9.25979 3 9.13261 3 9ZM3 11C3 10.8674 3.05268 10.7402 3.14645 10.6464C3.24021 10.5527 3.36739 10.5 3.5 10.5H9.5C9.63261 10.5 9.75979 10.5527 9.85355 10.6464C9.94732 10.7402 10 10.8674 10 11C10 11.1326 9.94732 11.2598 9.85355 11.3536C9.75979 11.4473 9.63261 11.5 9.5 11.5H3.5C3.36739 11.5 3.24021 11.4473 3.14645 11.3536C3.05268 11.2598 3 11.1326 3 11ZM11 5C11 4.86739 11.0527 4.74021 11.1464 4.64645C11.2402 4.55268 11.3674 4.5 11.5 4.5H12.5C12.6326 4.5 12.7598 4.55268 12.8536 4.64645C12.9473 4.74021 13 4.86739 13 5C13 5.13261 12.9473 5.25979 12.8536 5.35355C12.7598 5.44732 12.6326 5.5 12.5 5.5H11.5C11.3674 5.5 11.2402 5.44732 11.1464 5.35355C11.0527 5.25979 11 5.13261 11 5ZM11 7C11 6.86739 11.0527 6.74021 11.1464 6.64645C11.2402 6.55268 11.3674 6.5 11.5 6.5H12.5C12.6326 6.5 12.7598 6.55268 12.8536 6.64645C12.9473 6.74021 13 6.86739 13 7C13 7.13261 12.9473 7.25979 12.8536 7.35355C12.7598 7.44732 12.6326 7.5 12.5 7.5H11.5C11.3674 7.5 11.2402 7.44732 11.1464 7.35355C11.0527 7.25979 11 7.13261 11 7ZM11 9C11 8.86739 11.0527 8.74021 11.1464 8.64645C11.2402 8.55268 11.3674 8.5 11.5 8.5H12.5C12.6326 8.5 12.7598 8.55268 12.8536 8.64645C12.9473 8.74021 13 8.86739 13 9C13 9.13261 12.9473 9.25979 12.8536 9.35355C12.7598 9.44732 12.6326 9.5 12.5 9.5H11.5C11.3674 9.5 11.2402 9.44732 11.1464 9.35355C11.0527 9.25979 11 9.13261 11 9ZM11 11C11 10.8674 11.0527 10.7402 11.1464 10.6464C11.2402 10.5527 11.3674 10.5 11.5 10.5H12.5C12.6326 10.5 12.7598 10.5527 12.8536 10.6464C12.9473 10.7402 13 10.8674 13 11C13 11.1326 12.9473 11.2598 12.8536 11.3536C12.7598 11.4473 12.6326 11.5 12.5 11.5H11.5C11.3674 11.5 11.2402 11.4473 11.1464 11.3536C11.0527 11.2598 11 11.1326 11 11Z"
                                                                    fill="#154BD8"
                                                                />
                                                            </svg>
                                                            Receipt
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">
                                                            Master Interviewing Users & Customers |
                                                            GRAMS Certification
                                                        </th>
                                                        <td>Sep 2, 2023</td>
                                                        <td>$80.00</td>
                                                        <td>Card ***9532</td>
                                                        <td class="colReceipt">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="16"
                                                                height="17"
                                                                viewBox="0 0 16 17"
                                                                fill="none"
                                                            >
                                                                <path
                                                                    d="M1.92 1.00592C1.99826 0.993169 2.07843 0.999216 2.15389 1.02356C2.22935 1.0479 2.29794 1.08984 2.354 1.14592L3 1.79292L3.646 1.14592C3.69245 1.09935 3.74762 1.06241 3.80837 1.0372C3.86911 1.012 3.93423 0.999023 4 0.999023C4.06577 0.999023 4.13089 1.012 4.19163 1.0372C4.25238 1.06241 4.30755 1.09935 4.354 1.14592L5 1.79292L5.646 1.14592C5.69245 1.09935 5.74762 1.06241 5.80837 1.0372C5.86911 1.012 5.93423 0.999023 6 0.999023C6.06577 0.999023 6.13089 1.012 6.19163 1.0372C6.25238 1.06241 6.30755 1.09935 6.354 1.14592L7 1.79292L7.646 1.14592C7.69245 1.09935 7.74762 1.06241 7.80837 1.0372C7.86911 1.012 7.93423 0.999023 8 0.999023C8.06577 0.999023 8.13089 1.012 8.19163 1.0372C8.25238 1.06241 8.30755 1.09935 8.354 1.14592L9 1.79292L9.646 1.14592C9.69245 1.09935 9.74762 1.06241 9.80837 1.0372C9.86911 1.012 9.93423 0.999023 10 0.999023C10.0658 0.999023 10.1309 1.012 10.1916 1.0372C10.2524 1.06241 10.3076 1.09935 10.354 1.14592L11 1.79292L11.646 1.14592C11.6924 1.09935 11.7476 1.06241 11.8084 1.0372C11.8691 1.012 11.9342 0.999023 12 0.999023C12.0658 0.999023 12.1309 1.012 12.1916 1.0372C12.2524 1.06241 12.3076 1.09935 12.354 1.14592L13 1.79292L13.646 1.14592C13.702 1.08985 13.7706 1.0479 13.846 1.02354C13.9214 0.999177 14.0016 0.993093 14.0798 1.00579C14.158 1.01849 14.2321 1.0496 14.296 1.09657C14.3598 1.14354 14.4116 1.20501 14.447 1.27592L14.947 2.27592C14.9818 2.34545 15 2.42214 15 2.49992V14.4999C15 14.5777 14.9818 14.6544 14.947 14.7239L14.447 15.7239C14.4115 15.7946 14.3598 15.8559 14.296 15.9028C14.2323 15.9496 14.1583 15.9807 14.0802 15.9934C14.0021 16.0061 13.9221 16 13.8468 15.9758C13.7715 15.9515 13.703 15.9098 13.647 15.8539L13 15.2069L12.354 15.8539C12.3076 15.9005 12.2524 15.9374 12.1916 15.9626C12.1309 15.9878 12.0658 16.0008 12 16.0008C11.9342 16.0008 11.8691 15.9878 11.8084 15.9626C11.7476 15.9374 11.6924 15.9005 11.646 15.8539L11 15.2069L10.354 15.8539C10.3076 15.9005 10.2524 15.9374 10.1916 15.9626C10.1309 15.9878 10.0658 16.0008 10 16.0008C9.93423 16.0008 9.86911 15.9878 9.80837 15.9626C9.74762 15.9374 9.69245 15.9005 9.646 15.8539L9 15.2069L8.354 15.8539C8.30755 15.9005 8.25238 15.9374 8.19163 15.9626C8.13089 15.9878 8.06577 16.0008 8 16.0008C7.93423 16.0008 7.86911 15.9878 7.80837 15.9626C7.74762 15.9374 7.69245 15.9005 7.646 15.8539L7 15.2069L6.354 15.8539C6.30755 15.9005 6.25238 15.9374 6.19163 15.9626C6.13089 15.9878 6.06577 16.0008 6 16.0008C5.93423 16.0008 5.86911 15.9878 5.80837 15.9626C5.74762 15.9374 5.69245 15.9005 5.646 15.8539L5 15.2069L4.354 15.8539C4.30755 15.9005 4.25238 15.9374 4.19163 15.9626C4.13089 15.9878 4.06577 16.0008 4 16.0008C3.93423 16.0008 3.86911 15.9878 3.80837 15.9626C3.74762 15.9374 3.69245 15.9005 3.646 15.8539L3 15.2069L2.354 15.8539C2.29798 15.91 2.22943 15.9519 2.154 15.9763C2.07858 16.0007 1.99845 16.0067 1.92021 15.994C1.84197 15.9813 1.76787 15.9502 1.70403 15.9033C1.64018 15.8563 1.58842 15.7948 1.553 15.7239L1.053 14.7239C1.01815 14.6544 1.00001 14.5777 1 14.4999V2.49992C1.00001 2.42214 1.01815 2.34545 1.053 2.27592L1.553 1.27592C1.58841 1.20506 1.64015 1.14363 1.70396 1.09669C1.76777 1.04974 1.84181 1.01863 1.92 1.00592ZM2.137 2.34392L2 2.61792V14.3819L2.137 14.6559L2.647 14.1459C2.74076 14.0522 2.86792 13.9995 3.0005 13.9995C3.13308 13.9995 3.26024 14.0522 3.354 14.1459L4 14.7929L4.646 14.1469C4.69245 14.1004 4.74762 14.0634 4.80837 14.0382C4.86911 14.013 4.93423 14 5 14C5.06577 14 5.13089 14.013 5.19163 14.0382C5.25238 14.0634 5.30755 14.1004 5.354 14.1469L6 14.7929L6.646 14.1469C6.69245 14.1004 6.74762 14.0634 6.80837 14.0382C6.86911 14.013 6.93423 14 7 14C7.06577 14 7.13089 14.013 7.19163 14.0382C7.25238 14.0634 7.30755 14.1004 7.354 14.1469L8 14.7929L8.646 14.1469C8.69245 14.1004 8.74762 14.0634 8.80837 14.0382C8.86911 14.013 8.93423 14 9 14C9.06577 14 9.13089 14.013 9.19163 14.0382C9.25238 14.0634 9.30755 14.1004 9.354 14.1469L10 14.7929L10.646 14.1469C10.6924 14.1004 10.7476 14.0634 10.8084 14.0382C10.8691 14.013 10.9342 14 11 14C11.0658 14 11.1309 14.013 11.1916 14.0382C11.2524 14.0634 11.3076 14.1004 11.354 14.1469L12 14.7929L12.646 14.1469C12.6924 14.1004 12.7476 14.0634 12.8084 14.0382C12.8691 14.013 12.9342 14 13 14C13.0658 14 13.1309 14.013 13.1916 14.0382C13.2524 14.0634 13.3076 14.1004 13.354 14.1469L13.863 14.6559L14 14.3819V2.61792L13.863 2.34392L13.353 2.85392C13.2592 2.94765 13.1321 3.00031 12.9995 3.00031C12.8669 3.00031 12.7398 2.94765 12.646 2.85392L12 2.20692L11.354 2.85392C11.3076 2.90048 11.2524 2.93742 11.1916 2.96263C11.1309 2.98784 11.0658 3.00081 11 3.00081C10.9342 3.00081 10.8691 2.98784 10.8084 2.96263C10.7476 2.93742 10.6924 2.90048 10.646 2.85392L10 2.20692L9.354 2.85392C9.30755 2.90048 9.25238 2.93742 9.19163 2.96263C9.13089 2.98784 9.06577 3.00081 9 3.00081C8.93423 3.00081 8.86911 2.98784 8.80837 2.96263C8.74762 2.93742 8.69245 2.90048 8.646 2.85392L8 2.20692L7.354 2.85392C7.30755 2.90048 7.25238 2.93742 7.19163 2.96263C7.13089 2.98784 7.06577 3.00081 7 3.00081C6.93423 3.00081 6.86911 2.98784 6.80837 2.96263C6.74762 2.93742 6.69245 2.90048 6.646 2.85392L6 2.20692L5.354 2.85392C5.30755 2.90048 5.25238 2.93742 5.19163 2.96263C5.13089 2.98784 5.06577 3.00081 5 3.00081C4.93423 3.00081 4.86911 2.98784 4.80837 2.96263C4.74762 2.93742 4.69245 2.90048 4.646 2.85392L4 2.20692L3.354 2.85392C3.30755 2.90048 3.25238 2.93742 3.19163 2.96263C3.13089 2.98784 3.06577 3.00081 3 3.00081C2.93423 3.00081 2.86911 2.98784 2.80837 2.96263C2.74762 2.93742 2.69245 2.90048 2.646 2.85392L2.137 2.34392Z"
                                                                    fill="#154BD8"
                                                                />
                                                                <path
                                                                    d="M3 5C3 4.86739 3.05268 4.74021 3.14645 4.64645C3.24021 4.55268 3.36739 4.5 3.5 4.5H9.5C9.63261 4.5 9.75979 4.55268 9.85355 4.64645C9.94732 4.74021 10 4.86739 10 5C10 5.13261 9.94732 5.25979 9.85355 5.35355C9.75979 5.44732 9.63261 5.5 9.5 5.5H3.5C3.36739 5.5 3.24021 5.44732 3.14645 5.35355C3.05268 5.25979 3 5.13261 3 5ZM3 7C3 6.86739 3.05268 6.74021 3.14645 6.64645C3.24021 6.55268 3.36739 6.5 3.5 6.5H9.5C9.63261 6.5 9.75979 6.55268 9.85355 6.64645C9.94732 6.74021 10 6.86739 10 7C10 7.13261 9.94732 7.25979 9.85355 7.35355C9.75979 7.44732 9.63261 7.5 9.5 7.5H3.5C3.36739 7.5 3.24021 7.44732 3.14645 7.35355C3.05268 7.25979 3 7.13261 3 7ZM3 9C3 8.86739 3.05268 8.74021 3.14645 8.64645C3.24021 8.55268 3.36739 8.5 3.5 8.5H9.5C9.63261 8.5 9.75979 8.55268 9.85355 8.64645C9.94732 8.74021 10 8.86739 10 9C10 9.13261 9.94732 9.25979 9.85355 9.35355C9.75979 9.44732 9.63261 9.5 9.5 9.5H3.5C3.36739 9.5 3.24021 9.44732 3.14645 9.35355C3.05268 9.25979 3 9.13261 3 9ZM3 11C3 10.8674 3.05268 10.7402 3.14645 10.6464C3.24021 10.5527 3.36739 10.5 3.5 10.5H9.5C9.63261 10.5 9.75979 10.5527 9.85355 10.6464C9.94732 10.7402 10 10.8674 10 11C10 11.1326 9.94732 11.2598 9.85355 11.3536C9.75979 11.4473 9.63261 11.5 9.5 11.5H3.5C3.36739 11.5 3.24021 11.4473 3.14645 11.3536C3.05268 11.2598 3 11.1326 3 11ZM11 5C11 4.86739 11.0527 4.74021 11.1464 4.64645C11.2402 4.55268 11.3674 4.5 11.5 4.5H12.5C12.6326 4.5 12.7598 4.55268 12.8536 4.64645C12.9473 4.74021 13 4.86739 13 5C13 5.13261 12.9473 5.25979 12.8536 5.35355C12.7598 5.44732 12.6326 5.5 12.5 5.5H11.5C11.3674 5.5 11.2402 5.44732 11.1464 5.35355C11.0527 5.25979 11 5.13261 11 5ZM11 7C11 6.86739 11.0527 6.74021 11.1464 6.64645C11.2402 6.55268 11.3674 6.5 11.5 6.5H12.5C12.6326 6.5 12.7598 6.55268 12.8536 6.64645C12.9473 6.74021 13 6.86739 13 7C13 7.13261 12.9473 7.25979 12.8536 7.35355C12.7598 7.44732 12.6326 7.5 12.5 7.5H11.5C11.3674 7.5 11.2402 7.44732 11.1464 7.35355C11.0527 7.25979 11 7.13261 11 7ZM11 9C11 8.86739 11.0527 8.74021 11.1464 8.64645C11.2402 8.55268 11.3674 8.5 11.5 8.5H12.5C12.6326 8.5 12.7598 8.55268 12.8536 8.64645C12.9473 8.74021 13 8.86739 13 9C13 9.13261 12.9473 9.25979 12.8536 9.35355C12.7598 9.44732 12.6326 9.5 12.5 9.5H11.5C11.3674 9.5 11.2402 9.44732 11.1464 9.35355C11.0527 9.25979 11 9.13261 11 9ZM11 11C11 10.8674 11.0527 10.7402 11.1464 10.6464C11.2402 10.5527 11.3674 10.5 11.5 10.5H12.5C12.6326 10.5 12.7598 10.5527 12.8536 10.6464C12.9473 10.7402 13 10.8674 13 11C13 11.1326 12.9473 11.2598 12.8536 11.3536C12.7598 11.4473 12.6326 11.5 12.5 11.5H11.5C11.3674 11.5 11.2402 11.4473 11.1464 11.3536C11.0527 11.2598 11 11.1326 11 11Z"
                                                                    fill="#154BD8"
                                                                />
                                                            </svg>
                                                            Receipt
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            Master Interviewing Users & Customers |
                                                            GRAMS Certification
                                                        </th>
                                                        <td>Sep 2, 2023</td>
                                                        <td>$80.00</td>
                                                        <td>Card ***9532</td>
                                                        <td class="colReceipt">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="16"
                                                                height="17"
                                                                viewBox="0 0 16 17"
                                                                fill="none"
                                                            >
                                                                <path
                                                                    d="M1.92 1.00592C1.99826 0.993169 2.07843 0.999216 2.15389 1.02356C2.22935 1.0479 2.29794 1.08984 2.354 1.14592L3 1.79292L3.646 1.14592C3.69245 1.09935 3.74762 1.06241 3.80837 1.0372C3.86911 1.012 3.93423 0.999023 4 0.999023C4.06577 0.999023 4.13089 1.012 4.19163 1.0372C4.25238 1.06241 4.30755 1.09935 4.354 1.14592L5 1.79292L5.646 1.14592C5.69245 1.09935 5.74762 1.06241 5.80837 1.0372C5.86911 1.012 5.93423 0.999023 6 0.999023C6.06577 0.999023 6.13089 1.012 6.19163 1.0372C6.25238 1.06241 6.30755 1.09935 6.354 1.14592L7 1.79292L7.646 1.14592C7.69245 1.09935 7.74762 1.06241 7.80837 1.0372C7.86911 1.012 7.93423 0.999023 8 0.999023C8.06577 0.999023 8.13089 1.012 8.19163 1.0372C8.25238 1.06241 8.30755 1.09935 8.354 1.14592L9 1.79292L9.646 1.14592C9.69245 1.09935 9.74762 1.06241 9.80837 1.0372C9.86911 1.012 9.93423 0.999023 10 0.999023C10.0658 0.999023 10.1309 1.012 10.1916 1.0372C10.2524 1.06241 10.3076 1.09935 10.354 1.14592L11 1.79292L11.646 1.14592C11.6924 1.09935 11.7476 1.06241 11.8084 1.0372C11.8691 1.012 11.9342 0.999023 12 0.999023C12.0658 0.999023 12.1309 1.012 12.1916 1.0372C12.2524 1.06241 12.3076 1.09935 12.354 1.14592L13 1.79292L13.646 1.14592C13.702 1.08985 13.7706 1.0479 13.846 1.02354C13.9214 0.999177 14.0016 0.993093 14.0798 1.00579C14.158 1.01849 14.2321 1.0496 14.296 1.09657C14.3598 1.14354 14.4116 1.20501 14.447 1.27592L14.947 2.27592C14.9818 2.34545 15 2.42214 15 2.49992V14.4999C15 14.5777 14.9818 14.6544 14.947 14.7239L14.447 15.7239C14.4115 15.7946 14.3598 15.8559 14.296 15.9028C14.2323 15.9496 14.1583 15.9807 14.0802 15.9934C14.0021 16.0061 13.9221 16 13.8468 15.9758C13.7715 15.9515 13.703 15.9098 13.647 15.8539L13 15.2069L12.354 15.8539C12.3076 15.9005 12.2524 15.9374 12.1916 15.9626C12.1309 15.9878 12.0658 16.0008 12 16.0008C11.9342 16.0008 11.8691 15.9878 11.8084 15.9626C11.7476 15.9374 11.6924 15.9005 11.646 15.8539L11 15.2069L10.354 15.8539C10.3076 15.9005 10.2524 15.9374 10.1916 15.9626C10.1309 15.9878 10.0658 16.0008 10 16.0008C9.93423 16.0008 9.86911 15.9878 9.80837 15.9626C9.74762 15.9374 9.69245 15.9005 9.646 15.8539L9 15.2069L8.354 15.8539C8.30755 15.9005 8.25238 15.9374 8.19163 15.9626C8.13089 15.9878 8.06577 16.0008 8 16.0008C7.93423 16.0008 7.86911 15.9878 7.80837 15.9626C7.74762 15.9374 7.69245 15.9005 7.646 15.8539L7 15.2069L6.354 15.8539C6.30755 15.9005 6.25238 15.9374 6.19163 15.9626C6.13089 15.9878 6.06577 16.0008 6 16.0008C5.93423 16.0008 5.86911 15.9878 5.80837 15.9626C5.74762 15.9374 5.69245 15.9005 5.646 15.8539L5 15.2069L4.354 15.8539C4.30755 15.9005 4.25238 15.9374 4.19163 15.9626C4.13089 15.9878 4.06577 16.0008 4 16.0008C3.93423 16.0008 3.86911 15.9878 3.80837 15.9626C3.74762 15.9374 3.69245 15.9005 3.646 15.8539L3 15.2069L2.354 15.8539C2.29798 15.91 2.22943 15.9519 2.154 15.9763C2.07858 16.0007 1.99845 16.0067 1.92021 15.994C1.84197 15.9813 1.76787 15.9502 1.70403 15.9033C1.64018 15.8563 1.58842 15.7948 1.553 15.7239L1.053 14.7239C1.01815 14.6544 1.00001 14.5777 1 14.4999V2.49992C1.00001 2.42214 1.01815 2.34545 1.053 2.27592L1.553 1.27592C1.58841 1.20506 1.64015 1.14363 1.70396 1.09669C1.76777 1.04974 1.84181 1.01863 1.92 1.00592ZM2.137 2.34392L2 2.61792V14.3819L2.137 14.6559L2.647 14.1459C2.74076 14.0522 2.86792 13.9995 3.0005 13.9995C3.13308 13.9995 3.26024 14.0522 3.354 14.1459L4 14.7929L4.646 14.1469C4.69245 14.1004 4.74762 14.0634 4.80837 14.0382C4.86911 14.013 4.93423 14 5 14C5.06577 14 5.13089 14.013 5.19163 14.0382C5.25238 14.0634 5.30755 14.1004 5.354 14.1469L6 14.7929L6.646 14.1469C6.69245 14.1004 6.74762 14.0634 6.80837 14.0382C6.86911 14.013 6.93423 14 7 14C7.06577 14 7.13089 14.013 7.19163 14.0382C7.25238 14.0634 7.30755 14.1004 7.354 14.1469L8 14.7929L8.646 14.1469C8.69245 14.1004 8.74762 14.0634 8.80837 14.0382C8.86911 14.013 8.93423 14 9 14C9.06577 14 9.13089 14.013 9.19163 14.0382C9.25238 14.0634 9.30755 14.1004 9.354 14.1469L10 14.7929L10.646 14.1469C10.6924 14.1004 10.7476 14.0634 10.8084 14.0382C10.8691 14.013 10.9342 14 11 14C11.0658 14 11.1309 14.013 11.1916 14.0382C11.2524 14.0634 11.3076 14.1004 11.354 14.1469L12 14.7929L12.646 14.1469C12.6924 14.1004 12.7476 14.0634 12.8084 14.0382C12.8691 14.013 12.9342 14 13 14C13.0658 14 13.1309 14.013 13.1916 14.0382C13.2524 14.0634 13.3076 14.1004 13.354 14.1469L13.863 14.6559L14 14.3819V2.61792L13.863 2.34392L13.353 2.85392C13.2592 2.94765 13.1321 3.00031 12.9995 3.00031C12.8669 3.00031 12.7398 2.94765 12.646 2.85392L12 2.20692L11.354 2.85392C11.3076 2.90048 11.2524 2.93742 11.1916 2.96263C11.1309 2.98784 11.0658 3.00081 11 3.00081C10.9342 3.00081 10.8691 2.98784 10.8084 2.96263C10.7476 2.93742 10.6924 2.90048 10.646 2.85392L10 2.20692L9.354 2.85392C9.30755 2.90048 9.25238 2.93742 9.19163 2.96263C9.13089 2.98784 9.06577 3.00081 9 3.00081C8.93423 3.00081 8.86911 2.98784 8.80837 2.96263C8.74762 2.93742 8.69245 2.90048 8.646 2.85392L8 2.20692L7.354 2.85392C7.30755 2.90048 7.25238 2.93742 7.19163 2.96263C7.13089 2.98784 7.06577 3.00081 7 3.00081C6.93423 3.00081 6.86911 2.98784 6.80837 2.96263C6.74762 2.93742 6.69245 2.90048 6.646 2.85392L6 2.20692L5.354 2.85392C5.30755 2.90048 5.25238 2.93742 5.19163 2.96263C5.13089 2.98784 5.06577 3.00081 5 3.00081C4.93423 3.00081 4.86911 2.98784 4.80837 2.96263C4.74762 2.93742 4.69245 2.90048 4.646 2.85392L4 2.20692L3.354 2.85392C3.30755 2.90048 3.25238 2.93742 3.19163 2.96263C3.13089 2.98784 3.06577 3.00081 3 3.00081C2.93423 3.00081 2.86911 2.98784 2.80837 2.96263C2.74762 2.93742 2.69245 2.90048 2.646 2.85392L2.137 2.34392Z"
                                                                    fill="#154BD8"
                                                                />
                                                                <path
                                                                    d="M3 5C3 4.86739 3.05268 4.74021 3.14645 4.64645C3.24021 4.55268 3.36739 4.5 3.5 4.5H9.5C9.63261 4.5 9.75979 4.55268 9.85355 4.64645C9.94732 4.74021 10 4.86739 10 5C10 5.13261 9.94732 5.25979 9.85355 5.35355C9.75979 5.44732 9.63261 5.5 9.5 5.5H3.5C3.36739 5.5 3.24021 5.44732 3.14645 5.35355C3.05268 5.25979 3 5.13261 3 5ZM3 7C3 6.86739 3.05268 6.74021 3.14645 6.64645C3.24021 6.55268 3.36739 6.5 3.5 6.5H9.5C9.63261 6.5 9.75979 6.55268 9.85355 6.64645C9.94732 6.74021 10 6.86739 10 7C10 7.13261 9.94732 7.25979 9.85355 7.35355C9.75979 7.44732 9.63261 7.5 9.5 7.5H3.5C3.36739 7.5 3.24021 7.44732 3.14645 7.35355C3.05268 7.25979 3 7.13261 3 7ZM3 9C3 8.86739 3.05268 8.74021 3.14645 8.64645C3.24021 8.55268 3.36739 8.5 3.5 8.5H9.5C9.63261 8.5 9.75979 8.55268 9.85355 8.64645C9.94732 8.74021 10 8.86739 10 9C10 9.13261 9.94732 9.25979 9.85355 9.35355C9.75979 9.44732 9.63261 9.5 9.5 9.5H3.5C3.36739 9.5 3.24021 9.44732 3.14645 9.35355C3.05268 9.25979 3 9.13261 3 9ZM3 11C3 10.8674 3.05268 10.7402 3.14645 10.6464C3.24021 10.5527 3.36739 10.5 3.5 10.5H9.5C9.63261 10.5 9.75979 10.5527 9.85355 10.6464C9.94732 10.7402 10 10.8674 10 11C10 11.1326 9.94732 11.2598 9.85355 11.3536C9.75979 11.4473 9.63261 11.5 9.5 11.5H3.5C3.36739 11.5 3.24021 11.4473 3.14645 11.3536C3.05268 11.2598 3 11.1326 3 11ZM11 5C11 4.86739 11.0527 4.74021 11.1464 4.64645C11.2402 4.55268 11.3674 4.5 11.5 4.5H12.5C12.6326 4.5 12.7598 4.55268 12.8536 4.64645C12.9473 4.74021 13 4.86739 13 5C13 5.13261 12.9473 5.25979 12.8536 5.35355C12.7598 5.44732 12.6326 5.5 12.5 5.5H11.5C11.3674 5.5 11.2402 5.44732 11.1464 5.35355C11.0527 5.25979 11 5.13261 11 5ZM11 7C11 6.86739 11.0527 6.74021 11.1464 6.64645C11.2402 6.55268 11.3674 6.5 11.5 6.5H12.5C12.6326 6.5 12.7598 6.55268 12.8536 6.64645C12.9473 6.74021 13 6.86739 13 7C13 7.13261 12.9473 7.25979 12.8536 7.35355C12.7598 7.44732 12.6326 7.5 12.5 7.5H11.5C11.3674 7.5 11.2402 7.44732 11.1464 7.35355C11.0527 7.25979 11 7.13261 11 7ZM11 9C11 8.86739 11.0527 8.74021 11.1464 8.64645C11.2402 8.55268 11.3674 8.5 11.5 8.5H12.5C12.6326 8.5 12.7598 8.55268 12.8536 8.64645C12.9473 8.74021 13 8.86739 13 9C13 9.13261 12.9473 9.25979 12.8536 9.35355C12.7598 9.44732 12.6326 9.5 12.5 9.5H11.5C11.3674 9.5 11.2402 9.44732 11.1464 9.35355C11.0527 9.25979 11 9.13261 11 9ZM11 11C11 10.8674 11.0527 10.7402 11.1464 10.6464C11.2402 10.5527 11.3674 10.5 11.5 10.5H12.5C12.6326 10.5 12.7598 10.5527 12.8536 10.6464C12.9473 10.7402 13 10.8674 13 11C13 11.1326 12.9473 11.2598 12.8536 11.3536C12.7598 11.4473 12.6326 11.5 12.5 11.5H11.5C11.3674 11.5 11.2402 11.4473 11.1464 11.3536C11.0527 11.2598 11 11.1326 11 11Z"
                                                                    fill="#154BD8"
                                                                />
                                                            </svg>
                                                            Receipt
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            Master Interviewing Users & Customers |
                                                            GRAMS Certification
                                                        </th>
                                                        <td>Sep 2, 2023</td>
                                                        <td>$80.00</td>
                                                        <td>Card ***9532</td>
                                                        <td class="colReceipt">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="16"
                                                                height="17"
                                                                viewBox="0 0 16 17"
                                                                fill="none"
                                                            >
                                                                <path
                                                                    d="M1.92 1.00592C1.99826 0.993169 2.07843 0.999216 2.15389 1.02356C2.22935 1.0479 2.29794 1.08984 2.354 1.14592L3 1.79292L3.646 1.14592C3.69245 1.09935 3.74762 1.06241 3.80837 1.0372C3.86911 1.012 3.93423 0.999023 4 0.999023C4.06577 0.999023 4.13089 1.012 4.19163 1.0372C4.25238 1.06241 4.30755 1.09935 4.354 1.14592L5 1.79292L5.646 1.14592C5.69245 1.09935 5.74762 1.06241 5.80837 1.0372C5.86911 1.012 5.93423 0.999023 6 0.999023C6.06577 0.999023 6.13089 1.012 6.19163 1.0372C6.25238 1.06241 6.30755 1.09935 6.354 1.14592L7 1.79292L7.646 1.14592C7.69245 1.09935 7.74762 1.06241 7.80837 1.0372C7.86911 1.012 7.93423 0.999023 8 0.999023C8.06577 0.999023 8.13089 1.012 8.19163 1.0372C8.25238 1.06241 8.30755 1.09935 8.354 1.14592L9 1.79292L9.646 1.14592C9.69245 1.09935 9.74762 1.06241 9.80837 1.0372C9.86911 1.012 9.93423 0.999023 10 0.999023C10.0658 0.999023 10.1309 1.012 10.1916 1.0372C10.2524 1.06241 10.3076 1.09935 10.354 1.14592L11 1.79292L11.646 1.14592C11.6924 1.09935 11.7476 1.06241 11.8084 1.0372C11.8691 1.012 11.9342 0.999023 12 0.999023C12.0658 0.999023 12.1309 1.012 12.1916 1.0372C12.2524 1.06241 12.3076 1.09935 12.354 1.14592L13 1.79292L13.646 1.14592C13.702 1.08985 13.7706 1.0479 13.846 1.02354C13.9214 0.999177 14.0016 0.993093 14.0798 1.00579C14.158 1.01849 14.2321 1.0496 14.296 1.09657C14.3598 1.14354 14.4116 1.20501 14.447 1.27592L14.947 2.27592C14.9818 2.34545 15 2.42214 15 2.49992V14.4999C15 14.5777 14.9818 14.6544 14.947 14.7239L14.447 15.7239C14.4115 15.7946 14.3598 15.8559 14.296 15.9028C14.2323 15.9496 14.1583 15.9807 14.0802 15.9934C14.0021 16.0061 13.9221 16 13.8468 15.9758C13.7715 15.9515 13.703 15.9098 13.647 15.8539L13 15.2069L12.354 15.8539C12.3076 15.9005 12.2524 15.9374 12.1916 15.9626C12.1309 15.9878 12.0658 16.0008 12 16.0008C11.9342 16.0008 11.8691 15.9878 11.8084 15.9626C11.7476 15.9374 11.6924 15.9005 11.646 15.8539L11 15.2069L10.354 15.8539C10.3076 15.9005 10.2524 15.9374 10.1916 15.9626C10.1309 15.9878 10.0658 16.0008 10 16.0008C9.93423 16.0008 9.86911 15.9878 9.80837 15.9626C9.74762 15.9374 9.69245 15.9005 9.646 15.8539L9 15.2069L8.354 15.8539C8.30755 15.9005 8.25238 15.9374 8.19163 15.9626C8.13089 15.9878 8.06577 16.0008 8 16.0008C7.93423 16.0008 7.86911 15.9878 7.80837 15.9626C7.74762 15.9374 7.69245 15.9005 7.646 15.8539L7 15.2069L6.354 15.8539C6.30755 15.9005 6.25238 15.9374 6.19163 15.9626C6.13089 15.9878 6.06577 16.0008 6 16.0008C5.93423 16.0008 5.86911 15.9878 5.80837 15.9626C5.74762 15.9374 5.69245 15.9005 5.646 15.8539L5 15.2069L4.354 15.8539C4.30755 15.9005 4.25238 15.9374 4.19163 15.9626C4.13089 15.9878 4.06577 16.0008 4 16.0008C3.93423 16.0008 3.86911 15.9878 3.80837 15.9626C3.74762 15.9374 3.69245 15.9005 3.646 15.8539L3 15.2069L2.354 15.8539C2.29798 15.91 2.22943 15.9519 2.154 15.9763C2.07858 16.0007 1.99845 16.0067 1.92021 15.994C1.84197 15.9813 1.76787 15.9502 1.70403 15.9033C1.64018 15.8563 1.58842 15.7948 1.553 15.7239L1.053 14.7239C1.01815 14.6544 1.00001 14.5777 1 14.4999V2.49992C1.00001 2.42214 1.01815 2.34545 1.053 2.27592L1.553 1.27592C1.58841 1.20506 1.64015 1.14363 1.70396 1.09669C1.76777 1.04974 1.84181 1.01863 1.92 1.00592ZM2.137 2.34392L2 2.61792V14.3819L2.137 14.6559L2.647 14.1459C2.74076 14.0522 2.86792 13.9995 3.0005 13.9995C3.13308 13.9995 3.26024 14.0522 3.354 14.1459L4 14.7929L4.646 14.1469C4.69245 14.1004 4.74762 14.0634 4.80837 14.0382C4.86911 14.013 4.93423 14 5 14C5.06577 14 5.13089 14.013 5.19163 14.0382C5.25238 14.0634 5.30755 14.1004 5.354 14.1469L6 14.7929L6.646 14.1469C6.69245 14.1004 6.74762 14.0634 6.80837 14.0382C6.86911 14.013 6.93423 14 7 14C7.06577 14 7.13089 14.013 7.19163 14.0382C7.25238 14.0634 7.30755 14.1004 7.354 14.1469L8 14.7929L8.646 14.1469C8.69245 14.1004 8.74762 14.0634 8.80837 14.0382C8.86911 14.013 8.93423 14 9 14C9.06577 14 9.13089 14.013 9.19163 14.0382C9.25238 14.0634 9.30755 14.1004 9.354 14.1469L10 14.7929L10.646 14.1469C10.6924 14.1004 10.7476 14.0634 10.8084 14.0382C10.8691 14.013 10.9342 14 11 14C11.0658 14 11.1309 14.013 11.1916 14.0382C11.2524 14.0634 11.3076 14.1004 11.354 14.1469L12 14.7929L12.646 14.1469C12.6924 14.1004 12.7476 14.0634 12.8084 14.0382C12.8691 14.013 12.9342 14 13 14C13.0658 14 13.1309 14.013 13.1916 14.0382C13.2524 14.0634 13.3076 14.1004 13.354 14.1469L13.863 14.6559L14 14.3819V2.61792L13.863 2.34392L13.353 2.85392C13.2592 2.94765 13.1321 3.00031 12.9995 3.00031C12.8669 3.00031 12.7398 2.94765 12.646 2.85392L12 2.20692L11.354 2.85392C11.3076 2.90048 11.2524 2.93742 11.1916 2.96263C11.1309 2.98784 11.0658 3.00081 11 3.00081C10.9342 3.00081 10.8691 2.98784 10.8084 2.96263C10.7476 2.93742 10.6924 2.90048 10.646 2.85392L10 2.20692L9.354 2.85392C9.30755 2.90048 9.25238 2.93742 9.19163 2.96263C9.13089 2.98784 9.06577 3.00081 9 3.00081C8.93423 3.00081 8.86911 2.98784 8.80837 2.96263C8.74762 2.93742 8.69245 2.90048 8.646 2.85392L8 2.20692L7.354 2.85392C7.30755 2.90048 7.25238 2.93742 7.19163 2.96263C7.13089 2.98784 7.06577 3.00081 7 3.00081C6.93423 3.00081 6.86911 2.98784 6.80837 2.96263C6.74762 2.93742 6.69245 2.90048 6.646 2.85392L6 2.20692L5.354 2.85392C5.30755 2.90048 5.25238 2.93742 5.19163 2.96263C5.13089 2.98784 5.06577 3.00081 5 3.00081C4.93423 3.00081 4.86911 2.98784 4.80837 2.96263C4.74762 2.93742 4.69245 2.90048 4.646 2.85392L4 2.20692L3.354 2.85392C3.30755 2.90048 3.25238 2.93742 3.19163 2.96263C3.13089 2.98784 3.06577 3.00081 3 3.00081C2.93423 3.00081 2.86911 2.98784 2.80837 2.96263C2.74762 2.93742 2.69245 2.90048 2.646 2.85392L2.137 2.34392Z"
                                                                    fill="#154BD8"
                                                                />
                                                                <path
                                                                    d="M3 5C3 4.86739 3.05268 4.74021 3.14645 4.64645C3.24021 4.55268 3.36739 4.5 3.5 4.5H9.5C9.63261 4.5 9.75979 4.55268 9.85355 4.64645C9.94732 4.74021 10 4.86739 10 5C10 5.13261 9.94732 5.25979 9.85355 5.35355C9.75979 5.44732 9.63261 5.5 9.5 5.5H3.5C3.36739 5.5 3.24021 5.44732 3.14645 5.35355C3.05268 5.25979 3 5.13261 3 5ZM3 7C3 6.86739 3.05268 6.74021 3.14645 6.64645C3.24021 6.55268 3.36739 6.5 3.5 6.5H9.5C9.63261 6.5 9.75979 6.55268 9.85355 6.64645C9.94732 6.74021 10 6.86739 10 7C10 7.13261 9.94732 7.25979 9.85355 7.35355C9.75979 7.44732 9.63261 7.5 9.5 7.5H3.5C3.36739 7.5 3.24021 7.44732 3.14645 7.35355C3.05268 7.25979 3 7.13261 3 7ZM3 9C3 8.86739 3.05268 8.74021 3.14645 8.64645C3.24021 8.55268 3.36739 8.5 3.5 8.5H9.5C9.63261 8.5 9.75979 8.55268 9.85355 8.64645C9.94732 8.74021 10 8.86739 10 9C10 9.13261 9.94732 9.25979 9.85355 9.35355C9.75979 9.44732 9.63261 9.5 9.5 9.5H3.5C3.36739 9.5 3.24021 9.44732 3.14645 9.35355C3.05268 9.25979 3 9.13261 3 9ZM3 11C3 10.8674 3.05268 10.7402 3.14645 10.6464C3.24021 10.5527 3.36739 10.5 3.5 10.5H9.5C9.63261 10.5 9.75979 10.5527 9.85355 10.6464C9.94732 10.7402 10 10.8674 10 11C10 11.1326 9.94732 11.2598 9.85355 11.3536C9.75979 11.4473 9.63261 11.5 9.5 11.5H3.5C3.36739 11.5 3.24021 11.4473 3.14645 11.3536C3.05268 11.2598 3 11.1326 3 11ZM11 5C11 4.86739 11.0527 4.74021 11.1464 4.64645C11.2402 4.55268 11.3674 4.5 11.5 4.5H12.5C12.6326 4.5 12.7598 4.55268 12.8536 4.64645C12.9473 4.74021 13 4.86739 13 5C13 5.13261 12.9473 5.25979 12.8536 5.35355C12.7598 5.44732 12.6326 5.5 12.5 5.5H11.5C11.3674 5.5 11.2402 5.44732 11.1464 5.35355C11.0527 5.25979 11 5.13261 11 5ZM11 7C11 6.86739 11.0527 6.74021 11.1464 6.64645C11.2402 6.55268 11.3674 6.5 11.5 6.5H12.5C12.6326 6.5 12.7598 6.55268 12.8536 6.64645C12.9473 6.74021 13 6.86739 13 7C13 7.13261 12.9473 7.25979 12.8536 7.35355C12.7598 7.44732 12.6326 7.5 12.5 7.5H11.5C11.3674 7.5 11.2402 7.44732 11.1464 7.35355C11.0527 7.25979 11 7.13261 11 7ZM11 9C11 8.86739 11.0527 8.74021 11.1464 8.64645C11.2402 8.55268 11.3674 8.5 11.5 8.5H12.5C12.6326 8.5 12.7598 8.55268 12.8536 8.64645C12.9473 8.74021 13 8.86739 13 9C13 9.13261 12.9473 9.25979 12.8536 9.35355C12.7598 9.44732 12.6326 9.5 12.5 9.5H11.5C11.3674 9.5 11.2402 9.44732 11.1464 9.35355C11.0527 9.25979 11 9.13261 11 9ZM11 11C11 10.8674 11.0527 10.7402 11.1464 10.6464C11.2402 10.5527 11.3674 10.5 11.5 10.5H12.5C12.6326 10.5 12.7598 10.5527 12.8536 10.6464C12.9473 10.7402 13 10.8674 13 11C13 11.1326 12.9473 11.2598 12.8536 11.3536C12.7598 11.4473 12.6326 11.5 12.5 11.5H11.5C11.3674 11.5 11.2402 11.4473 11.1464 11.3536C11.0527 11.2598 11 11.1326 11 11Z"
                                                                    fill="#154BD8"
                                                                />
                                                            </svg>
                                                            Receipt
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            Master Interviewing Users & Customers |
                                                            GRAMS Certification
                                                        </th>
                                                        <td>Sep 2, 2023</td>
                                                        <td>$80.00</td>
                                                        <td>Card ***9532</td>
                                                        <td class="colReceipt">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="16"
                                                                height="17"
                                                                viewBox="0 0 16 17"
                                                                fill="none"
                                                            >
                                                                <path
                                                                    d="M1.92 1.00592C1.99826 0.993169 2.07843 0.999216 2.15389 1.02356C2.22935 1.0479 2.29794 1.08984 2.354 1.14592L3 1.79292L3.646 1.14592C3.69245 1.09935 3.74762 1.06241 3.80837 1.0372C3.86911 1.012 3.93423 0.999023 4 0.999023C4.06577 0.999023 4.13089 1.012 4.19163 1.0372C4.25238 1.06241 4.30755 1.09935 4.354 1.14592L5 1.79292L5.646 1.14592C5.69245 1.09935 5.74762 1.06241 5.80837 1.0372C5.86911 1.012 5.93423 0.999023 6 0.999023C6.06577 0.999023 6.13089 1.012 6.19163 1.0372C6.25238 1.06241 6.30755 1.09935 6.354 1.14592L7 1.79292L7.646 1.14592C7.69245 1.09935 7.74762 1.06241 7.80837 1.0372C7.86911 1.012 7.93423 0.999023 8 0.999023C8.06577 0.999023 8.13089 1.012 8.19163 1.0372C8.25238 1.06241 8.30755 1.09935 8.354 1.14592L9 1.79292L9.646 1.14592C9.69245 1.09935 9.74762 1.06241 9.80837 1.0372C9.86911 1.012 9.93423 0.999023 10 0.999023C10.0658 0.999023 10.1309 1.012 10.1916 1.0372C10.2524 1.06241 10.3076 1.09935 10.354 1.14592L11 1.79292L11.646 1.14592C11.6924 1.09935 11.7476 1.06241 11.8084 1.0372C11.8691 1.012 11.9342 0.999023 12 0.999023C12.0658 0.999023 12.1309 1.012 12.1916 1.0372C12.2524 1.06241 12.3076 1.09935 12.354 1.14592L13 1.79292L13.646 1.14592C13.702 1.08985 13.7706 1.0479 13.846 1.02354C13.9214 0.999177 14.0016 0.993093 14.0798 1.00579C14.158 1.01849 14.2321 1.0496 14.296 1.09657C14.3598 1.14354 14.4116 1.20501 14.447 1.27592L14.947 2.27592C14.9818 2.34545 15 2.42214 15 2.49992V14.4999C15 14.5777 14.9818 14.6544 14.947 14.7239L14.447 15.7239C14.4115 15.7946 14.3598 15.8559 14.296 15.9028C14.2323 15.9496 14.1583 15.9807 14.0802 15.9934C14.0021 16.0061 13.9221 16 13.8468 15.9758C13.7715 15.9515 13.703 15.9098 13.647 15.8539L13 15.2069L12.354 15.8539C12.3076 15.9005 12.2524 15.9374 12.1916 15.9626C12.1309 15.9878 12.0658 16.0008 12 16.0008C11.9342 16.0008 11.8691 15.9878 11.8084 15.9626C11.7476 15.9374 11.6924 15.9005 11.646 15.8539L11 15.2069L10.354 15.8539C10.3076 15.9005 10.2524 15.9374 10.1916 15.9626C10.1309 15.9878 10.0658 16.0008 10 16.0008C9.93423 16.0008 9.86911 15.9878 9.80837 15.9626C9.74762 15.9374 9.69245 15.9005 9.646 15.8539L9 15.2069L8.354 15.8539C8.30755 15.9005 8.25238 15.9374 8.19163 15.9626C8.13089 15.9878 8.06577 16.0008 8 16.0008C7.93423 16.0008 7.86911 15.9878 7.80837 15.9626C7.74762 15.9374 7.69245 15.9005 7.646 15.8539L7 15.2069L6.354 15.8539C6.30755 15.9005 6.25238 15.9374 6.19163 15.9626C6.13089 15.9878 6.06577 16.0008 6 16.0008C5.93423 16.0008 5.86911 15.9878 5.80837 15.9626C5.74762 15.9374 5.69245 15.9005 5.646 15.8539L5 15.2069L4.354 15.8539C4.30755 15.9005 4.25238 15.9374 4.19163 15.9626C4.13089 15.9878 4.06577 16.0008 4 16.0008C3.93423 16.0008 3.86911 15.9878 3.80837 15.9626C3.74762 15.9374 3.69245 15.9005 3.646 15.8539L3 15.2069L2.354 15.8539C2.29798 15.91 2.22943 15.9519 2.154 15.9763C2.07858 16.0007 1.99845 16.0067 1.92021 15.994C1.84197 15.9813 1.76787 15.9502 1.70403 15.9033C1.64018 15.8563 1.58842 15.7948 1.553 15.7239L1.053 14.7239C1.01815 14.6544 1.00001 14.5777 1 14.4999V2.49992C1.00001 2.42214 1.01815 2.34545 1.053 2.27592L1.553 1.27592C1.58841 1.20506 1.64015 1.14363 1.70396 1.09669C1.76777 1.04974 1.84181 1.01863 1.92 1.00592ZM2.137 2.34392L2 2.61792V14.3819L2.137 14.6559L2.647 14.1459C2.74076 14.0522 2.86792 13.9995 3.0005 13.9995C3.13308 13.9995 3.26024 14.0522 3.354 14.1459L4 14.7929L4.646 14.1469C4.69245 14.1004 4.74762 14.0634 4.80837 14.0382C4.86911 14.013 4.93423 14 5 14C5.06577 14 5.13089 14.013 5.19163 14.0382C5.25238 14.0634 5.30755 14.1004 5.354 14.1469L6 14.7929L6.646 14.1469C6.69245 14.1004 6.74762 14.0634 6.80837 14.0382C6.86911 14.013 6.93423 14 7 14C7.06577 14 7.13089 14.013 7.19163 14.0382C7.25238 14.0634 7.30755 14.1004 7.354 14.1469L8 14.7929L8.646 14.1469C8.69245 14.1004 8.74762 14.0634 8.80837 14.0382C8.86911 14.013 8.93423 14 9 14C9.06577 14 9.13089 14.013 9.19163 14.0382C9.25238 14.0634 9.30755 14.1004 9.354 14.1469L10 14.7929L10.646 14.1469C10.6924 14.1004 10.7476 14.0634 10.8084 14.0382C10.8691 14.013 10.9342 14 11 14C11.0658 14 11.1309 14.013 11.1916 14.0382C11.2524 14.0634 11.3076 14.1004 11.354 14.1469L12 14.7929L12.646 14.1469C12.6924 14.1004 12.7476 14.0634 12.8084 14.0382C12.8691 14.013 12.9342 14 13 14C13.0658 14 13.1309 14.013 13.1916 14.0382C13.2524 14.0634 13.3076 14.1004 13.354 14.1469L13.863 14.6559L14 14.3819V2.61792L13.863 2.34392L13.353 2.85392C13.2592 2.94765 13.1321 3.00031 12.9995 3.00031C12.8669 3.00031 12.7398 2.94765 12.646 2.85392L12 2.20692L11.354 2.85392C11.3076 2.90048 11.2524 2.93742 11.1916 2.96263C11.1309 2.98784 11.0658 3.00081 11 3.00081C10.9342 3.00081 10.8691 2.98784 10.8084 2.96263C10.7476 2.93742 10.6924 2.90048 10.646 2.85392L10 2.20692L9.354 2.85392C9.30755 2.90048 9.25238 2.93742 9.19163 2.96263C9.13089 2.98784 9.06577 3.00081 9 3.00081C8.93423 3.00081 8.86911 2.98784 8.80837 2.96263C8.74762 2.93742 8.69245 2.90048 8.646 2.85392L8 2.20692L7.354 2.85392C7.30755 2.90048 7.25238 2.93742 7.19163 2.96263C7.13089 2.98784 7.06577 3.00081 7 3.00081C6.93423 3.00081 6.86911 2.98784 6.80837 2.96263C6.74762 2.93742 6.69245 2.90048 6.646 2.85392L6 2.20692L5.354 2.85392C5.30755 2.90048 5.25238 2.93742 5.19163 2.96263C5.13089 2.98784 5.06577 3.00081 5 3.00081C4.93423 3.00081 4.86911 2.98784 4.80837 2.96263C4.74762 2.93742 4.69245 2.90048 4.646 2.85392L4 2.20692L3.354 2.85392C3.30755 2.90048 3.25238 2.93742 3.19163 2.96263C3.13089 2.98784 3.06577 3.00081 3 3.00081C2.93423 3.00081 2.86911 2.98784 2.80837 2.96263C2.74762 2.93742 2.69245 2.90048 2.646 2.85392L2.137 2.34392Z"
                                                                    fill="#154BD8"
                                                                />
                                                                <path
                                                                    d="M3 5C3 4.86739 3.05268 4.74021 3.14645 4.64645C3.24021 4.55268 3.36739 4.5 3.5 4.5H9.5C9.63261 4.5 9.75979 4.55268 9.85355 4.64645C9.94732 4.74021 10 4.86739 10 5C10 5.13261 9.94732 5.25979 9.85355 5.35355C9.75979 5.44732 9.63261 5.5 9.5 5.5H3.5C3.36739 5.5 3.24021 5.44732 3.14645 5.35355C3.05268 5.25979 3 5.13261 3 5ZM3 7C3 6.86739 3.05268 6.74021 3.14645 6.64645C3.24021 6.55268 3.36739 6.5 3.5 6.5H9.5C9.63261 6.5 9.75979 6.55268 9.85355 6.64645C9.94732 6.74021 10 6.86739 10 7C10 7.13261 9.94732 7.25979 9.85355 7.35355C9.75979 7.44732 9.63261 7.5 9.5 7.5H3.5C3.36739 7.5 3.24021 7.44732 3.14645 7.35355C3.05268 7.25979 3 7.13261 3 7ZM3 9C3 8.86739 3.05268 8.74021 3.14645 8.64645C3.24021 8.55268 3.36739 8.5 3.5 8.5H9.5C9.63261 8.5 9.75979 8.55268 9.85355 8.64645C9.94732 8.74021 10 8.86739 10 9C10 9.13261 9.94732 9.25979 9.85355 9.35355C9.75979 9.44732 9.63261 9.5 9.5 9.5H3.5C3.36739 9.5 3.24021 9.44732 3.14645 9.35355C3.05268 9.25979 3 9.13261 3 9ZM3 11C3 10.8674 3.05268 10.7402 3.14645 10.6464C3.24021 10.5527 3.36739 10.5 3.5 10.5H9.5C9.63261 10.5 9.75979 10.5527 9.85355 10.6464C9.94732 10.7402 10 10.8674 10 11C10 11.1326 9.94732 11.2598 9.85355 11.3536C9.75979 11.4473 9.63261 11.5 9.5 11.5H3.5C3.36739 11.5 3.24021 11.4473 3.14645 11.3536C3.05268 11.2598 3 11.1326 3 11ZM11 5C11 4.86739 11.0527 4.74021 11.1464 4.64645C11.2402 4.55268 11.3674 4.5 11.5 4.5H12.5C12.6326 4.5 12.7598 4.55268 12.8536 4.64645C12.9473 4.74021 13 4.86739 13 5C13 5.13261 12.9473 5.25979 12.8536 5.35355C12.7598 5.44732 12.6326 5.5 12.5 5.5H11.5C11.3674 5.5 11.2402 5.44732 11.1464 5.35355C11.0527 5.25979 11 5.13261 11 5ZM11 7C11 6.86739 11.0527 6.74021 11.1464 6.64645C11.2402 6.55268 11.3674 6.5 11.5 6.5H12.5C12.6326 6.5 12.7598 6.55268 12.8536 6.64645C12.9473 6.74021 13 6.86739 13 7C13 7.13261 12.9473 7.25979 12.8536 7.35355C12.7598 7.44732 12.6326 7.5 12.5 7.5H11.5C11.3674 7.5 11.2402 7.44732 11.1464 7.35355C11.0527 7.25979 11 7.13261 11 7ZM11 9C11 8.86739 11.0527 8.74021 11.1464 8.64645C11.2402 8.55268 11.3674 8.5 11.5 8.5H12.5C12.6326 8.5 12.7598 8.55268 12.8536 8.64645C12.9473 8.74021 13 8.86739 13 9C13 9.13261 12.9473 9.25979 12.8536 9.35355C12.7598 9.44732 12.6326 9.5 12.5 9.5H11.5C11.3674 9.5 11.2402 9.44732 11.1464 9.35355C11.0527 9.25979 11 9.13261 11 9ZM11 11C11 10.8674 11.0527 10.7402 11.1464 10.6464C11.2402 10.5527 11.3674 10.5 11.5 10.5H12.5C12.6326 10.5 12.7598 10.5527 12.8536 10.6464C12.9473 10.7402 13 10.8674 13 11C13 11.1326 12.9473 11.2598 12.8536 11.3536C12.7598 11.4473 12.6326 11.5 12.5 11.5H11.5C11.3674 11.5 11.2402 11.4473 11.1464 11.3536C11.0527 11.2598 11 11.1326 11 11Z"
                                                                    fill="#154BD8"
                                                                />
                                                            </svg>
                                                            Receipt
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            Master Interviewing Users & Customers |
                                                            GRAMS Certification
                                                        </th>
                                                        <td>Sep 2, 2023</td>
                                                        <td>$80.00</td>
                                                        <td>Card ***9532</td>
                                                        <td class="colReceipt">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="16"
                                                                height="17"
                                                                viewBox="0 0 16 17"
                                                                fill="none"
                                                            >
                                                                <path
                                                                    d="M1.92 1.00592C1.99826 0.993169 2.07843 0.999216 2.15389 1.02356C2.22935 1.0479 2.29794 1.08984 2.354 1.14592L3 1.79292L3.646 1.14592C3.69245 1.09935 3.74762 1.06241 3.80837 1.0372C3.86911 1.012 3.93423 0.999023 4 0.999023C4.06577 0.999023 4.13089 1.012 4.19163 1.0372C4.25238 1.06241 4.30755 1.09935 4.354 1.14592L5 1.79292L5.646 1.14592C5.69245 1.09935 5.74762 1.06241 5.80837 1.0372C5.86911 1.012 5.93423 0.999023 6 0.999023C6.06577 0.999023 6.13089 1.012 6.19163 1.0372C6.25238 1.06241 6.30755 1.09935 6.354 1.14592L7 1.79292L7.646 1.14592C7.69245 1.09935 7.74762 1.06241 7.80837 1.0372C7.86911 1.012 7.93423 0.999023 8 0.999023C8.06577 0.999023 8.13089 1.012 8.19163 1.0372C8.25238 1.06241 8.30755 1.09935 8.354 1.14592L9 1.79292L9.646 1.14592C9.69245 1.09935 9.74762 1.06241 9.80837 1.0372C9.86911 1.012 9.93423 0.999023 10 0.999023C10.0658 0.999023 10.1309 1.012 10.1916 1.0372C10.2524 1.06241 10.3076 1.09935 10.354 1.14592L11 1.79292L11.646 1.14592C11.6924 1.09935 11.7476 1.06241 11.8084 1.0372C11.8691 1.012 11.9342 0.999023 12 0.999023C12.0658 0.999023 12.1309 1.012 12.1916 1.0372C12.2524 1.06241 12.3076 1.09935 12.354 1.14592L13 1.79292L13.646 1.14592C13.702 1.08985 13.7706 1.0479 13.846 1.02354C13.9214 0.999177 14.0016 0.993093 14.0798 1.00579C14.158 1.01849 14.2321 1.0496 14.296 1.09657C14.3598 1.14354 14.4116 1.20501 14.447 1.27592L14.947 2.27592C14.9818 2.34545 15 2.42214 15 2.49992V14.4999C15 14.5777 14.9818 14.6544 14.947 14.7239L14.447 15.7239C14.4115 15.7946 14.3598 15.8559 14.296 15.9028C14.2323 15.9496 14.1583 15.9807 14.0802 15.9934C14.0021 16.0061 13.9221 16 13.8468 15.9758C13.7715 15.9515 13.703 15.9098 13.647 15.8539L13 15.2069L12.354 15.8539C12.3076 15.9005 12.2524 15.9374 12.1916 15.9626C12.1309 15.9878 12.0658 16.0008 12 16.0008C11.9342 16.0008 11.8691 15.9878 11.8084 15.9626C11.7476 15.9374 11.6924 15.9005 11.646 15.8539L11 15.2069L10.354 15.8539C10.3076 15.9005 10.2524 15.9374 10.1916 15.9626C10.1309 15.9878 10.0658 16.0008 10 16.0008C9.93423 16.0008 9.86911 15.9878 9.80837 15.9626C9.74762 15.9374 9.69245 15.9005 9.646 15.8539L9 15.2069L8.354 15.8539C8.30755 15.9005 8.25238 15.9374 8.19163 15.9626C8.13089 15.9878 8.06577 16.0008 8 16.0008C7.93423 16.0008 7.86911 15.9878 7.80837 15.9626C7.74762 15.9374 7.69245 15.9005 7.646 15.8539L7 15.2069L6.354 15.8539C6.30755 15.9005 6.25238 15.9374 6.19163 15.9626C6.13089 15.9878 6.06577 16.0008 6 16.0008C5.93423 16.0008 5.86911 15.9878 5.80837 15.9626C5.74762 15.9374 5.69245 15.9005 5.646 15.8539L5 15.2069L4.354 15.8539C4.30755 15.9005 4.25238 15.9374 4.19163 15.9626C4.13089 15.9878 4.06577 16.0008 4 16.0008C3.93423 16.0008 3.86911 15.9878 3.80837 15.9626C3.74762 15.9374 3.69245 15.9005 3.646 15.8539L3 15.2069L2.354 15.8539C2.29798 15.91 2.22943 15.9519 2.154 15.9763C2.07858 16.0007 1.99845 16.0067 1.92021 15.994C1.84197 15.9813 1.76787 15.9502 1.70403 15.9033C1.64018 15.8563 1.58842 15.7948 1.553 15.7239L1.053 14.7239C1.01815 14.6544 1.00001 14.5777 1 14.4999V2.49992C1.00001 2.42214 1.01815 2.34545 1.053 2.27592L1.553 1.27592C1.58841 1.20506 1.64015 1.14363 1.70396 1.09669C1.76777 1.04974 1.84181 1.01863 1.92 1.00592ZM2.137 2.34392L2 2.61792V14.3819L2.137 14.6559L2.647 14.1459C2.74076 14.0522 2.86792 13.9995 3.0005 13.9995C3.13308 13.9995 3.26024 14.0522 3.354 14.1459L4 14.7929L4.646 14.1469C4.69245 14.1004 4.74762 14.0634 4.80837 14.0382C4.86911 14.013 4.93423 14 5 14C5.06577 14 5.13089 14.013 5.19163 14.0382C5.25238 14.0634 5.30755 14.1004 5.354 14.1469L6 14.7929L6.646 14.1469C6.69245 14.1004 6.74762 14.0634 6.80837 14.0382C6.86911 14.013 6.93423 14 7 14C7.06577 14 7.13089 14.013 7.19163 14.0382C7.25238 14.0634 7.30755 14.1004 7.354 14.1469L8 14.7929L8.646 14.1469C8.69245 14.1004 8.74762 14.0634 8.80837 14.0382C8.86911 14.013 8.93423 14 9 14C9.06577 14 9.13089 14.013 9.19163 14.0382C9.25238 14.0634 9.30755 14.1004 9.354 14.1469L10 14.7929L10.646 14.1469C10.6924 14.1004 10.7476 14.0634 10.8084 14.0382C10.8691 14.013 10.9342 14 11 14C11.0658 14 11.1309 14.013 11.1916 14.0382C11.2524 14.0634 11.3076 14.1004 11.354 14.1469L12 14.7929L12.646 14.1469C12.6924 14.1004 12.7476 14.0634 12.8084 14.0382C12.8691 14.013 12.9342 14 13 14C13.0658 14 13.1309 14.013 13.1916 14.0382C13.2524 14.0634 13.3076 14.1004 13.354 14.1469L13.863 14.6559L14 14.3819V2.61792L13.863 2.34392L13.353 2.85392C13.2592 2.94765 13.1321 3.00031 12.9995 3.00031C12.8669 3.00031 12.7398 2.94765 12.646 2.85392L12 2.20692L11.354 2.85392C11.3076 2.90048 11.2524 2.93742 11.1916 2.96263C11.1309 2.98784 11.0658 3.00081 11 3.00081C10.9342 3.00081 10.8691 2.98784 10.8084 2.96263C10.7476 2.93742 10.6924 2.90048 10.646 2.85392L10 2.20692L9.354 2.85392C9.30755 2.90048 9.25238 2.93742 9.19163 2.96263C9.13089 2.98784 9.06577 3.00081 9 3.00081C8.93423 3.00081 8.86911 2.98784 8.80837 2.96263C8.74762 2.93742 8.69245 2.90048 8.646 2.85392L8 2.20692L7.354 2.85392C7.30755 2.90048 7.25238 2.93742 7.19163 2.96263C7.13089 2.98784 7.06577 3.00081 7 3.00081C6.93423 3.00081 6.86911 2.98784 6.80837 2.96263C6.74762 2.93742 6.69245 2.90048 6.646 2.85392L6 2.20692L5.354 2.85392C5.30755 2.90048 5.25238 2.93742 5.19163 2.96263C5.13089 2.98784 5.06577 3.00081 5 3.00081C4.93423 3.00081 4.86911 2.98784 4.80837 2.96263C4.74762 2.93742 4.69245 2.90048 4.646 2.85392L4 2.20692L3.354 2.85392C3.30755 2.90048 3.25238 2.93742 3.19163 2.96263C3.13089 2.98784 3.06577 3.00081 3 3.00081C2.93423 3.00081 2.86911 2.98784 2.80837 2.96263C2.74762 2.93742 2.69245 2.90048 2.646 2.85392L2.137 2.34392Z"
                                                                    fill="#154BD8"
                                                                />
                                                                <path
                                                                    d="M3 5C3 4.86739 3.05268 4.74021 3.14645 4.64645C3.24021 4.55268 3.36739 4.5 3.5 4.5H9.5C9.63261 4.5 9.75979 4.55268 9.85355 4.64645C9.94732 4.74021 10 4.86739 10 5C10 5.13261 9.94732 5.25979 9.85355 5.35355C9.75979 5.44732 9.63261 5.5 9.5 5.5H3.5C3.36739 5.5 3.24021 5.44732 3.14645 5.35355C3.05268 5.25979 3 5.13261 3 5ZM3 7C3 6.86739 3.05268 6.74021 3.14645 6.64645C3.24021 6.55268 3.36739 6.5 3.5 6.5H9.5C9.63261 6.5 9.75979 6.55268 9.85355 6.64645C9.94732 6.74021 10 6.86739 10 7C10 7.13261 9.94732 7.25979 9.85355 7.35355C9.75979 7.44732 9.63261 7.5 9.5 7.5H3.5C3.36739 7.5 3.24021 7.44732 3.14645 7.35355C3.05268 7.25979 3 7.13261 3 7ZM3 9C3 8.86739 3.05268 8.74021 3.14645 8.64645C3.24021 8.55268 3.36739 8.5 3.5 8.5H9.5C9.63261 8.5 9.75979 8.55268 9.85355 8.64645C9.94732 8.74021 10 8.86739 10 9C10 9.13261 9.94732 9.25979 9.85355 9.35355C9.75979 9.44732 9.63261 9.5 9.5 9.5H3.5C3.36739 9.5 3.24021 9.44732 3.14645 9.35355C3.05268 9.25979 3 9.13261 3 9ZM3 11C3 10.8674 3.05268 10.7402 3.14645 10.6464C3.24021 10.5527 3.36739 10.5 3.5 10.5H9.5C9.63261 10.5 9.75979 10.5527 9.85355 10.6464C9.94732 10.7402 10 10.8674 10 11C10 11.1326 9.94732 11.2598 9.85355 11.3536C9.75979 11.4473 9.63261 11.5 9.5 11.5H3.5C3.36739 11.5 3.24021 11.4473 3.14645 11.3536C3.05268 11.2598 3 11.1326 3 11ZM11 5C11 4.86739 11.0527 4.74021 11.1464 4.64645C11.2402 4.55268 11.3674 4.5 11.5 4.5H12.5C12.6326 4.5 12.7598 4.55268 12.8536 4.64645C12.9473 4.74021 13 4.86739 13 5C13 5.13261 12.9473 5.25979 12.8536 5.35355C12.7598 5.44732 12.6326 5.5 12.5 5.5H11.5C11.3674 5.5 11.2402 5.44732 11.1464 5.35355C11.0527 5.25979 11 5.13261 11 5ZM11 7C11 6.86739 11.0527 6.74021 11.1464 6.64645C11.2402 6.55268 11.3674 6.5 11.5 6.5H12.5C12.6326 6.5 12.7598 6.55268 12.8536 6.64645C12.9473 6.74021 13 6.86739 13 7C13 7.13261 12.9473 7.25979 12.8536 7.35355C12.7598 7.44732 12.6326 7.5 12.5 7.5H11.5C11.3674 7.5 11.2402 7.44732 11.1464 7.35355C11.0527 7.25979 11 7.13261 11 7ZM11 9C11 8.86739 11.0527 8.74021 11.1464 8.64645C11.2402 8.55268 11.3674 8.5 11.5 8.5H12.5C12.6326 8.5 12.7598 8.55268 12.8536 8.64645C12.9473 8.74021 13 8.86739 13 9C13 9.13261 12.9473 9.25979 12.8536 9.35355C12.7598 9.44732 12.6326 9.5 12.5 9.5H11.5C11.3674 9.5 11.2402 9.44732 11.1464 9.35355C11.0527 9.25979 11 9.13261 11 9ZM11 11C11 10.8674 11.0527 10.7402 11.1464 10.6464C11.2402 10.5527 11.3674 10.5 11.5 10.5H12.5C12.6326 10.5 12.7598 10.5527 12.8536 10.6464C12.9473 10.7402 13 10.8674 13 11C13 11.1326 12.9473 11.2598 12.8536 11.3536C12.7598 11.4473 12.6326 11.5 12.5 11.5H11.5C11.3674 11.5 11.2402 11.4473 11.1464 11.3536C11.0527 11.2598 11 11.1326 11 11Z"
                                                                    fill="#154BD8"
                                                                />
                                                            </svg>
                                                            Receipt
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
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
