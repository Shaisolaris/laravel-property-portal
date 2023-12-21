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
    <title>My Grades</title>
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
                <div class="col-xl-9 col-lg-12">
                    <div class="classes_Heading">
                        <h2>Grades</h2>
                    </div>
                    <div class="percentage_Wrapper">
                        <!-- Card 1 starts -->
                        <div class="card">
                            <div class="grade_div">
                                <p>84,2</p>
                            </div>
                            <div class="text_div">
                                <p>Midterm<br />(20%)</p>
                            </div>
                        </div>
                        <!-- Card 1 ends -->

                        <!-- Card 2 starts -->
                        <div class="card">
                            <div class="grade_div">
                                <p>84,2</p>
                            </div>
                            <div class="text_div">
                                <p>Homework<br />(20%)</p>
                            </div>
                        </div>
                        <!-- Card 2 ends -->

                        <!-- Card 3 starts -->
                        <div class="card">
                            <div class="grade_div">
                                <p>84,2</p>
                            </div>
                            <div class="text_div">
                                <p>Final Exam<br />(20%)</p>
                            </div>
                        </div>
                        <!-- Card 3 ends -->

                        <!-- Card 4 starts -->
                        <div class="card">
                            <div class="avg_div">
                                <p>Average score</p>
                            </div>
                            <div class="avgScore_div">
                                <p>83</p>
                            </div>
                        </div>
                        <!-- Card 4 ends -->
                    </div>

                    <!-- Grading Table Starts -->
                    <div class="card tableWrapper table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Subject</th>
                                <th scope="col">Teacher</th>
                                <th class="table_Terms_Head" scope="col">
                                    Midterm (20%)
                                </th>
                                <th class="table_Terms_Head" scope="col">
                                    Homework (20%)
                                </th>
                                <th class="table_Terms_Head" scope="col">
                                    Final Exam (60%)
                                </th>
                                <th scope="col">Grade</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="table_Subject_Wrapper">
                                        <div class="image_Wrapper">
                                            <img
                                                src="img/dashboard-school/plus-slash-minus.svg"
                                                alt=""
                                            />
                                        </div>
                                        <p>Mathematics</p>
                                    </div>
                                </th>
                                <td>
                                    <div class="table_Teacher_Wrapper">
                                        <div class="image_Wrapper">
                                            <img src="img/courseDetail/profilePic.svg" alt="" />
                                        </div>
                                        <p>Mrs. Doe</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="midterm_Value">
                                        <p>85</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="midterm_Value_Yellow">
                                        <p>55</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="midterm_Value_Red">
                                        <p>85</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="table_grade">
                                        <p>80,5</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="table_Subject_Wrapper">
                                        <div class="image_Wrapper">
                                            <img
                                                src="img/dashboard-school/incognito.svg"
                                                alt=""
                                            />
                                        </div>
                                        <p>English</p>
                                    </div>
                                </th>
                                <td>
                                    <div class="table_Teacher_Wrapper">
                                        <div class="image_Wrapper">
                                            <img src="img/courseDetail/profilePic.svg" alt="" />
                                        </div>
                                        <p>Mrs. Doe</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="midterm_Value">
                                        <p>85</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="midterm_Value">
                                        <p>88</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="midterm_Value">
                                        <p>78</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="table_grade">
                                        <p>80,5</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="table_Subject_Wrapper">
                                        <div class="image_Wrapper">
                                            <img
                                                src="img/dashboard-school/book-half.svg"
                                                alt=""
                                            />
                                        </div>
                                        <p>Literature</p>
                                    </div>
                                </th>
                                <td>
                                    <div class="table_Teacher_Wrapper">
                                        <div class="image_Wrapper">
                                            <img src="img/courseDetail/profilePic.svg" alt="" />
                                        </div>
                                        <p>Mrs. Doe</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="midterm_Value">
                                        <p>85</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="midterm_Value">
                                        <p>88</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="midterm_Value">
                                        <p>78</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="table_grade">
                                        <p>80,5</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="table_Subject_Wrapper">
                                        <div class="image_Wrapper">
                                            <img
                                                src="img/dashboard-school/hourglass-bottom.svg"
                                                alt=""
                                            />
                                        </div>
                                        <p>Physics</p>
                                    </div>
                                </th>
                                <td>
                                    <div class="table_Teacher_Wrapper">
                                        <div class="image_Wrapper">
                                            <img src="img/courseDetail/profilePic.svg" alt="" />
                                        </div>
                                        <p>Mrs. Doe</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="midterm_Value">
                                        <p>85</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="midterm_Value">
                                        <p>88</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="midterm_Value">
                                        <p>78</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="table_grade">
                                        <p>80,5</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="table_Subject_Wrapper">
                                        <div class="image_Wrapper">
                                            <img src="img/dashboard-school/virus2.svg" alt="" />
                                        </div>
                                        <p>Chemistry</p>
                                    </div>
                                </th>
                                <td>
                                    <div class="table_Teacher_Wrapper">
                                        <div class="image_Wrapper">
                                            <img src="img/courseDetail/profilePic.svg" alt="" />
                                        </div>
                                        <p>Mrs. Doe</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="midterm_Value">
                                        <p>85</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="midterm_Value">
                                        <p>88</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="midterm_Value">
                                        <p>78</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="table_grade">
                                        <p>80,5</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="table_Subject_Wrapper">
                                        <div class="image_Wrapper">
                                            <img
                                                src="img/dashboard-school/translate.svg"
                                                alt=""
                                            />
                                        </div>
                                        <p>Languages</p>
                                    </div>
                                </th>
                                <td>
                                    <div class="table_Teacher_Wrapper">
                                        <div class="image_Wrapper">
                                            <img src="img/courseDetail/profilePic.svg" alt="" />
                                        </div>
                                        <p>Mrs. Doe</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="midterm_Value">
                                        <p>85</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="midterm_Value">
                                        <p>88</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="midterm_Value">
                                        <p>78</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="table_grade">
                                        <p>80,5</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="table_Subject_Wrapper">
                                        <div class="image_Wrapper">
                                            <img
                                                src="img/dashboard-school/cash-coin.svg"
                                                alt=""
                                            />
                                        </div>
                                        <p>Economy</p>
                                    </div>
                                </th>
                                <td>
                                    <div class="table_Teacher_Wrapper">
                                        <div class="image_Wrapper">
                                            <img src="img/courseDetail/profilePic.svg" alt="" />
                                        </div>
                                        <p>Mrs. Doe</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="midterm_Value">
                                        <p>85</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="midterm_Value">
                                        <p>88</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="midterm_Value">
                                        <p>78</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="table_grade">
                                        <p>80,5</p>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Grading Table ends -->
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
