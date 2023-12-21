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
    <div class="shortAndCausalCourses">
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
                    <a class="nav-link pl-0" href="/">Academy of Inoura</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="categories.html"
                      >School of Inoura
                    </a>
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
                  <a href="#">
                    <img src="img/navbar/handbag.svg" alt="inoura" />
                  </a>
                  <a>
                    <button class="btn contactUsBtn" type="submit">
                      Create an account
                    </button>
                  </a>
                  <a>
                    <button class="btn loginBtn" type="submit">Login</button>
                  </a>
                </form>
              </div>
            </nav>
          </div>
        </div>
      </div>

      <section class="exploreCategories">
        <div class="container">
          <div class="categoriesContent">
            <h1>Choose your direction</h1>
            <div>
              <div
                class="input-group exploreCategoriesInput align-items-center"
                id="exploreCategoriesInput"
              >
                <div class="searchBtn">
                  <img src="img/heroSection/search.svg" alt="search" />
                </div>
                <input
                  type="text"
                  class="form-control"
                  placeholder="What do you want to learn?"
                  aria-label="What do you want to learn?"
                  aria-describedby="button-addon2"
                />
                <div class="input-group-append" id="seachBtn">
                  <button class="btn" type="button" id="button-addon2">
                    Search
                  </button>
                </div>
              </div>
              <div class="categorySearchBox" id="categorySearchBox">
                <div class="searchBoxWrapper">
                  <p class="popularSearch">Popular search</p>
                  <div class="btnWrapper">
                    <button type="button" class="btn">web design</button>
                    <button type="button" class="btn">
                      android development
                    </button>
                    <button type="button" class="btn">business</button>
                    <button type="button" class="btn">fashion</button>
                    <button type="button" class="btn">Graphic Design</button>
                    <button type="button" class="btn">
                      Frontend Development
                    </button>
                  </div>
                  <hr />
                  <p class="searchHistory">Search history</p>
                  <div class="btnBadge">
                    <button type="button" class="btn">web design</button>
                    <button type="button" class="btn">
                      android development
                      <img src="img/categoriesPage/close.svg" alt="inoura" />
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <h6 class="trending">
              <span>Trending:</span> Web Design, Marketing, iOS Development
            </h6>
          </div>
        </div>
      </section>
      <section class="causalCourseCardSection">
        <div class="container">
          <h3>Explore Categories if you're not sure what to search for</h3>
          <div class="row categoriesCardWrap justify-content-center">
            <div class="card courseCard">
              <div class="card-body p-0">
                <div>
                  <h3 class="card-title">Math: Pre-K - 8th grade</h3>

                  <p class="card-text">
                    Pre-K through grade 2, Early math review, 2nd grade - 8th
                    grade, See Pre-K - 8th Math
                  </p>
                </div>
                <div class="cardImgWrap">
                  <img
                    class="img-fluid text-center cardImg"
                    src="img/shortCourses/img1.png"
                  />
                  <img
                    src="img/shortCourses/imghv1.png"
                    alt="inoura lms"
                    class="hoverImg"
                  />
                </div>
                <div class="cardBtn">
                  <button type="button" class="btn">
                    Explore
                    <img
                      src="img/categoriesPage/arrowUpRight.svg"
                      alt="inoura lms"
                      class="arrowUpRight"
                    />
                  </button>
                </div>
              </div>
            </div>
            <div class="card courseCard">
              <div class="card-body p-0">
                <div>
                  <h3 class="card-title">Math: Pre-K - 8th grade</h3>

                  <p class="card-text">
                    Pre-K through grade 2, Early math review, 2nd grade - 8th
                    grade, See Pre-K - 8th Math
                  </p>
                </div>
                <div class="cardImgWrap">
                  <img
                    class="img-fluid text-center cardImg"
                    src="img/shortCourses/img2.png"
                  />
                  <img
                    src="img/shortCourses/imghv2.png"
                    alt="inoura lms"
                    class="hoverImg"
                  />
                </div>
                <div class="cardBtn">
                  <button type="button" class="btn">
                    Explore
                    <img
                      src="img/categoriesPage/arrowUpRight.svg"
                      alt="inoura lms"
                      class="arrowUpRight"
                    />
                  </button>
                </div>
              </div>
            </div>
            <div class="card courseCard">
              <div class="card-body p-0">
                <div>
                  <h3 class="card-title">Math: Pre-K - 8th grade</h3>

                  <p class="card-text">
                    Pre-K through grade 2, Early math review, 2nd grade - 8th
                    grade, See Pre-K - 8th Math
                  </p>
                </div>
                <div class="cardImgWrap">
                  <img
                    class="img-fluid text-center cardImg"
                    src="img/shortCourses/img3.png"
                  />
                  <img
                    src="img/shortCourses/imghv3.png"
                    alt="inoura lms"
                    class="hoverImg"
                  />
                </div>
                <div class="cardBtn">
                  <button type="button" class="btn">
                    Explore
                    <img
                      src="img/categoriesPage/arrowUpRight.svg"
                      alt="inoura lms"
                      class="arrowUpRight"
                    />
                  </button>
                </div>
              </div>
            </div>
            <div class="card courseCard">
              <div class="card-body p-0">
                <div>
                  <h3 class="card-title">Math: Pre-K - 8th grade</h3>

                  <p class="card-text">
                    Pre-K through grade 2, Early math review, 2nd grade - 8th
                    grade, See Pre-K - 8th Math
                  </p>
                </div>
                <div class="cardImgWrap">
                  <img
                    class="img-fluid text-center cardImg"
                    src="img/shortCourses/img4.png"
                  />
                  <img
                    src="img/shortCourses/imghv4.png"
                    alt="inoura lms"
                    class="hoverImg"
                  />
                </div>
                <div class="cardBtn">
                  <button type="button" class="btn">
                    Explore
                    <img
                      src="img/categoriesPage/arrowUpRight.svg"
                      alt="inoura lms"
                      class="arrowUpRight"
                    />
                  </button>
                </div>
              </div>
            </div>
            <div class="card courseCard">
              <div class="card-body p-0">
                <div>
                  <h3 class="card-title">Math: Pre-K - 8th grade</h3>

                  <p class="card-text">
                    Pre-K through grade 2, Early math review, 2nd grade - 8th
                    grade, See Pre-K - 8th Math
                  </p>
                </div>
                <div class="cardImgWrap">
                  <img
                    class="img-fluid text-center cardImg"
                    src="img/shortCourses/img1.png"
                  />
                  <img
                    src="img/shortCourses/imghv1.png"
                    alt="inoura lms"
                    class="hoverImg"
                  />
                </div>
                <div class="cardBtn">
                  <button type="button" class="btn">
                    Explore
                    <img
                      src="img/categoriesPage/arrowUpRight.svg"
                      alt="inoura lms"
                      class="arrowUpRight"
                    />
                  </button>
                </div>
              </div>
            </div>
            <div class="card courseCard">
              <div class="card-body p-0">
                <div>
                  <h3 class="card-title">Math: Pre-K - 8th grade</h3>

                  <p class="card-text">
                    Pre-K through grade 2, Early math review, 2nd grade - 8th
                    grade, See Pre-K - 8th Math
                  </p>
                </div>
                <div class="cardImgWrap">
                  <img
                    class="img-fluid text-center cardImg"
                    src="img/shortCourses/img2.png"
                  />
                  <img
                    src="img/shortCourses/imghv2.png"
                    alt="inoura lms"
                    class="hoverImg"
                  />
                </div>
                <div class="cardBtn">
                  <button type="button" class="btn">
                    Explore
                    <img
                      src="img/categoriesPage/arrowUpRight.svg"
                      alt="inoura lms"
                      class="arrowUpRight"
                    />
                  </button>
                </div>
              </div>
            </div>
            <div class="card courseCard">
              <div class="card-body p-0">
                <div>
                  <h3 class="card-title">Math: Pre-K - 8th grade</h3>

                  <p class="card-text">
                    Pre-K through grade 2, Early math review, 2nd grade - 8th
                    grade, See Pre-K - 8th Math
                  </p>
                </div>
                <div class="cardImgWrap">
                  <img
                    class="img-fluid text-center cardImg"
                    src="img/shortCourses/img3.png"
                  />
                  <img
                    src="img/shortCourses/imghv3.png"
                    alt="inoura lms"
                    class="hoverImg"
                  />
                </div>
                <div class="cardBtn">
                  <button type="button" class="btn">
                    Explore
                    <img
                      src="img/categoriesPage/arrowUpRight.svg"
                      alt="inoura lms"
                      class="arrowUpRight"
                    />
                  </button>
                </div>
              </div>
            </div>
            <div class="card courseCard">
              <div class="card-body p-0">
                <div>
                  <h3 class="card-title">Math: Pre-K - 8th grade</h3>
                  <p class="card-text">
                    Pre-K through grade 2, Early math review, 2nd grade - 8th
                    grade, See Pre-K - 8th Math
                  </p>
                </div>
                <div class="cardImgWrap">
                  <img
                    class="img-fluid text-center cardImg"
                    src="img/shortCourses/img4.png"
                  />
                  <img
                    src="img/shortCourses/imghv4.png"
                    alt="inoura lms"
                    class="hoverImg"
                  />
                </div>
                <div class="cardBtn">
                  <button type="button" class="btn">
                    Explore
                    <img
                      src="img/categoriesPage/arrowUpRight.svg"
                      alt="inoura lms"
                      class="arrowUpRight"
                    />
                  </button>
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
