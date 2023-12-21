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
    <div class="learningResources">
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
                    <a class="nav-link pl-0" href="/"
                      >Explore School of Inora</a
                    >
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
                  <a href="#" class="profile">
                    <img src="img/navbar/profileImg.svg" alt="inoura" />
                  </a>
                </form>
              </div>
            </nav>
          </div>
        </div>
      </div>

      <section class="resourcesWrap">
        <div class="container px-0">
          <div class="row">
            <!-- side bar column -->
            <div class="col-lg-3 sideBarColumn">
              <h2>Learning Resources</h2>
              <!-- search bar -->
              <div class="card sidebar_Card">
                <div
                  class="input-group resourcesSearchBar align-items-baseline"
                >
                  <div class="searchBtn">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      viewBox="0 0 16 16"
                      fill="none"
                    >
                      <g clip-path="url(#clip0_256_7173)">
                        <path
                          d="M11.7429 10.3441C12.7112 9.02279 13.1449 7.38459 12.9572 5.75725C12.7695 4.12991 11.9743 2.63344 10.7307 1.56723C9.48701 0.501022 7.88665 -0.0562959 6.24973 0.00677721C4.61282 0.0698504 3.06008 0.748663 1.90217 1.90741C0.744249 3.06615 0.0665484 4.61938 0.00464653 6.25633C-0.0572553 7.89329 0.501207 9.49326 1.56831 10.7361C2.6354 11.979 4.13244 12.7732 5.75992 12.9597C7.38739 13.1462 9.02528 12.7113 10.3459 11.7421H10.3449C10.3749 11.7821 10.4069 11.8201 10.4429 11.8571L14.2929 15.7071C14.4804 15.8947 14.7348 16.0002 15 16.0003C15.2653 16.0004 15.5198 15.8951 15.7074 15.7076C15.895 15.5201 16.0005 15.2657 16.0006 15.0005C16.0007 14.7352 15.8954 14.4807 15.7079 14.2931L11.8579 10.4431C11.8221 10.4069 11.7837 10.3735 11.7429 10.3431V10.3441ZM12.0009 6.5001C12.0009 7.22237 11.8586 7.93757 11.5822 8.60486C11.3058 9.27215 10.9007 9.87847 10.39 10.3892C9.87926 10.8999 9.27295 11.305 8.60566 11.5814C7.93837 11.8578 7.22317 12.0001 6.5009 12.0001C5.77863 12.0001 5.06343 11.8578 4.39614 11.5814C3.72885 11.305 3.12253 10.8999 2.61181 10.3892C2.10109 9.87847 1.69596 9.27215 1.41956 8.60486C1.14316 7.93757 1.0009 7.22237 1.0009 6.5001C1.0009 5.04141 1.58036 3.64246 2.61181 2.61101C3.64326 1.57956 5.04221 1.0001 6.5009 1.0001C7.95959 1.0001 9.35853 1.57956 10.39 2.61101C11.4214 3.64246 12.0009 5.04141 12.0009 6.5001Z"
                          fill="#676A6C"
                        />
                      </g>
                      <defs>
                        <clipPath id="clip0_256_7173">
                          <rect width="16" height="16" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                  </div>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search..."
                    aria-label="Search..."
                    aria-describedby="button-addon2"
                  />
                </div>
              </div>
              <!-- search bar -->
              <div class="card sidebar_Card">
                <h3>Categories</h3>
                <!-- List starts -->
                <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="list_Item_Flex">
                      <p>Design</p>
                      <div class="list_Image">
                        <img src="img/categoriesPage/close.svg" alt="inoura" />
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="list_Item_Flex">
                      <p>Development</p>
                      <div class="list_Image">
                        <img src="img/categoriesPage/close.svg" alt="inoura" />
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="list_Item_Flex">
                      <p>Business</p>
                      <div class="list_Image">
                        <img src="img/categoriesPage/close.svg" alt="inoura" />
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="list_Item_Flex">
                      <p>Education</p>
                      <div class="list_Image">
                        <img src="img/categoriesPage/close.svg" alt="inoura" />
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="list_Item_Flex">
                      <p>Finance</p>
                      <div class="list_Image">
                        <img src="img/categoriesPage/close.svg" alt="inoura" />
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="list_Item_Flex">
                      <p>Healthcare</p>
                      <div class="list_Image">
                        <img src="img/categoriesPage/close.svg" alt="inoura" />
                      </div>
                    </div>
                  </a>
                </div>
                <!-- List ends -->
              </div>
              <div class="card sidebar_Card">
                <h3>Tags</h3>
                <div class="categoriesTag d-flex flex-wrap">
                  <p>
                    Css
                    <img src="img/categoriesPage/close.svg" alt="inoura" />
                  </p>
                  <p class="activeTag">
                    HTML
                    <img src="img/categoriesPage/close.svg" alt="inoura" />
                  </p>
                  <p>
                    Java
                    <img src="img/categoriesPage/close.svg" alt="inoura" />
                  </p>
                  <p>
                    Java Script
                    <img src="img/categoriesPage/close.svg" alt="inoura" />
                  </p>
                </div>
              </div>
            </div>
            <!-- side bar column -->
            <div class="col-lg-9">
              <div class="courseGridCard">
                <div class="changeCategories">
                  <div class="categoriesTag d-flex flex-wrap">
                    <p class="activeTag">
                      Development
                      <img src="img/categoriesPage/close.svg" alt="inoura" />
                    </p>
                    <p class="activeTag">
                      HTML
                      <img src="img/categoriesPage/close.svg" alt="inoura" />
                    </p>
                    <p class="activeTag">
                      CSS
                      <img src="img/categoriesPage/close.svg" alt="inoura" />
                    </p>
                  </div>
                  <div class="listTabing">
                    <div class="listing">
                      <img src="img/courseList/list.svg" />
                    </div>
                    <div class="categoriesGrid">
                      <img src="img/courseList/grid.svg" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="card">
                      <div class="cardImgWrap">
                        <div class="favourite">
                          <img src="img/courseList/heart.svg" />
                        </div>
                        <img
                          src="img/learningResource/img1.svg"
                          alt="inoura"
                          class="card-img-top cardImg"
                        />
                      </div>
                      <div class="card-body">
                        <div class="cardData">
                          <h3 class="card-title">
                            WordPress Theme Development with Bootstrap
                          </h3>
                          <p class="card-text">
                            Discover a world of learning opportunities through
                            our upcoming courses, where industry experts and
                            thought leaders will guide you in acquiring new
                            expertise, expanding your horizons, and reaching
                            your full potential.
                          </p>
                        </div>
                        <hr class="line" />
                        <div class="pricingContent">
                          <div class="profile d-flex align-items-center">
                            <img
                              src="img/courseDetail/profilePic.svg"
                              alt="inoura"
                              class="profilePic"
                            />
                            <p class="profileName mb-0">John Doe</p>
                          </div>
                          <div class="timeWrapper">
                            <div class="d-flex chatTextWrap">
                              <img src="img/topCourses/clock.svg" alt="icon" />
                              <p class="time mb-0">18/09/2023</p>
                            </div>
                            <div class="d-flex chatTextWrap">
                              <img src="img/topCourses/clock.svg" alt="icon" />
                              <p class="time mb-0">284</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card">
                      <div class="cardImgWrap">
                        <div class="favourite">
                          <img src="img/courseList/heart.svg" />
                        </div>
                        <img
                          src="img/learningResource/img1.svg"
                          alt="inoura"
                          class="card-img-top cardImg"
                        />
                      </div>
                      <div class="card-body">
                        <div class="cardData">
                          <h3 class="card-title">
                            WordPress Theme Development with Bootstrap
                          </h3>
                          <p class="card-text">
                            Discover a world of learning opportunities through
                            our upcoming courses, where industry experts and
                            thought leaders will guide you in acquiring new
                            expertise, expanding your horizons, and reaching
                            your full potential.
                          </p>
                        </div>
                        <hr class="line" />
                        <div class="pricingContent">
                          <div class="profile d-flex align-items-center">
                            <img
                              src="img/courseDetail/profilePic.svg"
                              alt="inoura"
                              class="profilePic"
                            />
                            <p class="profileName mb-0">John Doe</p>
                          </div>
                          <div class="timeWrapper">
                            <div class="d-flex chatTextWrap">
                              <img src="img/topCourses/clock.svg" alt="icon" />
                              <p class="time mb-0">18/09/2023</p>
                            </div>
                            <div class="d-flex chatTextWrap">
                              <img src="img/topCourses/clock.svg" alt="icon" />
                              <p class="time mb-0">284</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card">
                      <div class="cardImgWrap">
                        <div class="favourite">
                          <img src="img/courseList/heart.svg" />
                        </div>
                        <img
                          src="img/learningResource/img1.svg"
                          alt="inoura"
                          class="card-img-top cardImg"
                        />
                      </div>
                      <div class="card-body">
                        <div class="cardData">
                          <h3 class="card-title">
                            WordPress Theme Development with Bootstrap
                          </h3>
                          <p class="card-text">
                            Discover a world of learning opportunities through
                            our upcoming courses, where industry experts and
                            thought leaders will guide you in acquiring new
                            expertise, expanding your horizons, and reaching
                            your full potential.
                          </p>
                        </div>
                        <hr class="line" />
                        <div class="pricingContent">
                          <div class="profile d-flex align-items-center">
                            <img
                              src="img/courseDetail/profilePic.svg"
                              alt="inoura"
                              class="profilePic"
                            />
                            <p class="profileName mb-0">John Doe</p>
                          </div>
                          <div class="timeWrapper">
                            <div class="d-flex chatTextWrap">
                              <img src="img/topCourses/clock.svg" alt="icon" />
                              <p class="time mb-0">18/09/2023</p>
                            </div>
                            <div class="d-flex chatTextWrap">
                              <img src="img/topCourses/clock.svg" alt="icon" />
                              <p class="time mb-0">284</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card">
                      <div class="cardImgWrap">
                        <div class="favourite">
                          <img src="img/courseList/heart.svg" />
                        </div>
                        <img
                          src="img/learningResource/img1.svg"
                          alt="inoura"
                          class="card-img-top cardImg"
                        />
                      </div>
                      <div class="card-body">
                        <div class="cardData">
                          <h3 class="card-title">
                            WordPress Theme Development with Bootstrap
                          </h3>
                          <p class="card-text">
                            Discover a world of learning opportunities through
                            our upcoming courses, where industry experts and
                            thought leaders will guide you in acquiring new
                            expertise, expanding your horizons, and reaching
                            your full potential.
                          </p>
                        </div>
                        <hr class="line" />
                        <div class="pricingContent">
                          <div class="profile d-flex align-items-center">
                            <img
                              src="img/courseDetail/profilePic.svg"
                              alt="inoura"
                              class="profilePic"
                            />
                            <p class="profileName mb-0">John Doe</p>
                          </div>
                          <div class="timeWrapper">
                            <div class="d-flex chatTextWrap">
                              <img src="img/topCourses/clock.svg" alt="icon" />
                              <p class="time mb-0">18/09/2023</p>
                            </div>
                            <div class="d-flex chatTextWrap">
                              <img src="img/topCourses/clock.svg" alt="icon" />
                              <p class="time mb-0">284</p>
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
      </section>
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
