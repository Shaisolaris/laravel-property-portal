<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- mainCSS -->
    <link rel="stylesheet" href="css/styles.css" />
    <!-- calendar -->
    <link rel="stylesheet" href="css/calendar.css" />
    <!-- fontCSS -->
    <link rel="stylesheet" href="css/font.css" />
    <!-- BootstrapCSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.min.js"></script>
    <!-- custom js -->
    <script src="js/index.js"></script>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="dashboardSchool">
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
                    <a class="nav-link pl-0" href="{{ url('/design/school') }}"
                      >Explore School of Inora</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/design/school') }}">Blog</a>
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
      <div class="courseSection">
        <div class="container px-0">
          <div class="row">
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
              <div id="calendar"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- jquery -->
    <!-- <script src="js/jquery.js"></script> -->

    <!-- bootstrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- slicks slider -->
    <script src="js/slick.min.js"></script>
  </body>
</html>
