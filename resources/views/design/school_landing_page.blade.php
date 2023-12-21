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
    <title>Presale Inoura LMS</title>
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
                            <a class="nav-link pl-0" href="{{ url('/design/academy') }}">Academy of Inoura</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/design/school') }}">
                                School of Inoura
                            </a>
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
                        <a href="#">
                            <img src="img/navbar/handbag.svg" alt="inoura" />
                        </a>
                        <a href="{{ url('/register') }}">
                            <button class="btn contactUsBtn" type="submit">
                                Create an account
                            </button>
                        </a>
                        <a href="{{ url('/login') }}">
                            <button class="btn loginBtn" type="submit">Login</button>
                        </a>
                    </form>
                </div>
            </nav>
        </div>
    </div>
</div>
<section class="school-hero">
    <div class="container bg-cover position-relative">
        <div class="row d-lg-none d-flex">
            <div
                class="input-group mb-3 schoolHeroSectionInput align-items-center position-relative mobViewInput"
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
                <div class="input-group-append">
                    <a href="{{ url('/design/class-list') }}">
                        <button class="btn" type="button" id="button-addon2">
                            Search
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="inner-section">
            <h1 class="heading">
                Empowering Afghan Dreams: Education for Everyone
            </h1>
            <div class="sub-heading">
                Unlocking Potential, One Classroom at a Time
            </div>
        </div>
        <div class="row align-items-end bannerRow">
            <div class="col d-lg-block d-flex justify-content-center">
                <img class="img-fluid ml-lg-4" src="img/schoolhero/girl2.png" />
            </div>
            <div class="col-lg-5 d-lg-block d-flex justify-content-center">
                <img class="img-fluid" src="img/schoolhero/girl.png" />
            </div>
            <div class="col d-lg-block d-flex justify-content-center">
                <img class="img-fluid" src="img/schoolhero/girl3.png" />
            </div>
        </div>
        <div class="row d-none d-lg-flex">
            <div
                class="input-group mb-3 schoolHeroSectionInput align-items-center"
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
                <div class="input-group-append">
                    <a href="{{ url('/design/class-list') }}">
                        <button class="btn" type="button" id="button-addon2">
                            Search
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <svg
        xmlns="http://www.w3.org/2000/svg"
        width="1440"
        height="174"
        viewBox="0 0 1440 174"
        fill="none"
        class="hero-shape d-sm-block d-none"
    >
        <path
            d="M1517 167.217C1317 167.217 1192.6 167.217 740 167.217C287.403 167.217 71.5001 169.5 -22.4999 169.5C-251 185.5 254.5 20.5 728.5 0C1227.5 17.2832 1715.5 209 1517 167.217Z"
            fill="white"
        />
    </svg>
</section>

<!-- Different Grades -->
<section class="differentGrades">
    <div class="container">
        <img
            src="img/starsIcon/pinkLargeStar.svg"
            alt="inoura"
            class="pinkLargeStar position-absolute"
        />
        <img
            src="img/starsIcon/yellowSmallStar.svg"
            alt="inoura"
            class="yellowStar position-absolute"
        />
        <div class="headingWrapper">
            <div class="heading">
                <h2>
                    Different
                    <span class="position-relative"
                    >Grades<img
                            src="img/starsIcon/blueMediumLine.svg"
                            alt="inoura"
                            class="underlineImg"
                        /></span>
                </h2>
                <p>
                    These are the most popular grades among listen grades learners
                    worldwide
                </p>
            </div>
            <div class="allCourseCta">
                <a href="{{ url('design/short-and-causal-courses') }}">
                    <p>
                        All grades
                        <img
                            src="img/topCourses/rightArrow.svg"
                            alt="Inoura"
                            class="ml-2"
                        />
                    </p>
                </a>
            </div>
        </div>
    </div>
    <div class="rowWrapper">
        <div class="differentGradesLatest">
            <div class="">
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
                            <a href="{{ url('/design/short-and-causal-courses') }}">
                                <button type="button" class="btn">
                                    Explore
                                    <img
                                        src="img/categoriesPage/arrowUpRight.svg"
                                        alt="inoura lms"
                                        class="arrowUpRight"
                                    />
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
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
                            <a href="{{ url('/design/short-and-causal-courses') }}">
                                <button type="button" class="btn">
                                    Explore
                                    <img
                                        src="img/categoriesPage/arrowUpRight.svg"
                                        alt="inoura lms"
                                        class="arrowUpRight"
                                    />
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
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
                            <a href="{{ url('/design/short-and-causal-courses') }}">
                                <button type="button" class="btn">
                                    Explore
                                    <img
                                        src="img/categoriesPage/arrowUpRight.svg"
                                        alt="inoura lms"
                                        class="arrowUpRight"
                                    />
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
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
                            <a href="{{ url('/design/short-and-causal-courses') }}">
                                <button type="button" class="btn">
                                    Explore
                                    <img
                                        src="img/categoriesPage/arrowUpRight.svg"
                                        alt="inoura lms"
                                        class="arrowUpRight"
                                    />
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
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
                            <a href="{{ url('/design/short-and-causal-courses') }}">
                                <button type="button" class="btn">
                                    Explore
                                    <img
                                        src="img/categoriesPage/arrowUpRight.svg"
                                        alt="inoura lms"
                                        class="arrowUpRight"
                                    />
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TopInstructors-->
<section class="TopInstructors">
    <div class="headingWrapper text-center">
        <div class="heading">
            <h2>
            <span class="position-relative"
            >Top<img
                    src="img/starsIcon/yellowSmallLine.svg"
                    alt="inoura"
                    class="underlineImg"
                /></span>
                Instructors
            </h2>
            <p>
                These are the most popular courses among listen courses learners
                worldwide
            </p>
        </div>
    </div>
    <div class="container position-relative">
        <img
            src="img/starsIcon/blueSmallStar.svg"
            alt="inoura"
            class="blueStar position-absolute"
        />
        <img
            src="img/starsIcon/yellowLargeStar.svg"
            alt="inoura"
            class="yellowStar position-absolute"
        />
        <div class="row justify-content-md-between justify-content-center">
            <div class="card cardContent bg-transparent border-0 text-center">
                <div class="instructorImgWrap position-relative">
                    <img
                        src="img/topInstructor/img1/bgBlue.svg"
                        alt="inoura"
                        class="bgBlue"
                    />
                    <img
                        src="img/topInstructor/img1/blueCircle.svg"
                        alt="inoura"
                        class="blueCircle position-absolute"
                    />
                    <img
                        src="img/topInstructor/img1/profileImg.svg"
                        alt="inoura"
                        class="profileImg position-absolute"
                    />
                </div>
                <h3 class="position-relative">
                    Mathew Anderson<img
                        src="img/starsIcon/lightBlueLine.svg"
                        alt="inoura"
                        class="underlineImg"
                    />
                </h3>
            </div>
            <div class="card cardContent bg-transparent border-0 text-center">
                <div class="instructorTwoWrap position-relative">
                    <img
                        src="img/topInstructor/img2/pinkStar.svg"
                        alt="inoura"
                        class="starImg"
                    />
                    <img
                        src="img/topInstructor/img2/pinkUpper.svg"
                        alt="inoura"
                        class="pinkUpper position-absolute"
                    />
                    <img
                        src="img/topInstructor/img2/pinkBottom.svg"
                        alt="inoura"
                        class="pinkBottom position-absolute"
                    />
                    <img
                        src="img/topInstructor/img2/profileImg.svg"
                        alt="inoura"
                        class="profileImg position-absolute"
                    />
                </div>
                <h3 class="position-relative">
                    Mathew Anderson<img
                        src="img/starsIcon/instructorPinkLine.svg"
                        alt="inoura"
                        class="underlineImg"
                    />
                </h3>
            </div>
            <div class="card cardContent bg-transparent border-0 text-center">
                <div class="instructorThreeWrap position-relative">
                    <img
                        src="img/topInstructor/img3/bgYellow.svg"
                        alt="inoura"
                        class="bgYellow"
                    />
                    <img
                        src="img/topInstructor/img3/yellowUpperCircle.svg"
                        alt="inoura"
                        class="yellowUpperCircle position-absolute"
                    />
                    <img
                        src="img/topInstructor/img3/yellowMiddleCircle.svg"
                        alt="inoura"
                        class="yellowMiddleCircle position-absolute"
                    />
                    <img
                        src="img/topInstructor/img3/yellowBottomCircle.svg"
                        alt="inoura"
                        class="yellowBottomCircle position-absolute"
                    />
                    <img
                        src="img/topInstructor/img3/profileImg.svg"
                        alt="inoura"
                        class="profileImg position-absolute"
                    />
                </div>
                <h3 class="position-relative">
                    Mathew Anderson<img
                        src="img/starsIcon/instructorYellowLine.svg"
                        alt="inoura"
                        class="underlineImg"
                    />
                </h3>
            </div>
            <div class="card cardContent bg-transparent border-0 text-center">
                <div class="instructorFourWrap">
                    <img
                        src="img/topInstructor/img4/circleImg.svg"
                        alt="inoura"
                        class="circleImg1 position-absolute"
                    />
                    <img
                        src="img/topInstructor/img4/circleImg.svg"
                        alt="inoura"
                        class="circleImg2 position-absolute"
                    />
                    <img
                        src="img/topInstructor/img4/circleImg.svg"
                        alt="inoura"
                        class="circleImg3 position-absolute"
                    />
                    <img
                        src="img/topInstructor/img4/circleImg.svg"
                        alt="inoura"
                        class="circleImg4 position-absolute"
                    />
                    <img
                        src="img/topInstructor/img4/circleImg.svg"
                        alt="inoura"
                        class="circleImg5 position-absolute"
                    />
                    <img
                        src="img/topInstructor/img4/circleImg.svg"
                        alt="inoura"
                        class="circleImg6 position-absolute"
                    />
                    <img
                        src="img/topInstructor/img4/profileImg.png"
                        alt="inoura"
                        class="profileImg position-absolute"
                    />
                </div>
                <h3 class="position-relative">
                    Mathew Anderson<img
                        src="img/starsIcon/instructorGreenLine.svg"
                        alt="inoura"
                        class="underlineImg"
                    />
                </h3>
            </div>
        </div>
        <div class="allInstructorsCta text-center">
            <p>
                All teachers
                <img
                    src="img/topCourses/rightArrow.svg"
                    alt="Inoura"
                    class="ml-2"
                />
            </p>
        </div>
    </div>
</section>

<section class="liveSectionOne">
    <div class="container">
        <div
            class="row align-items-center justify-content-lg-between justify-content-center text-lg-left text-center tabContentColumn"
        >
            <div class="col-lg-6">
                <div class="championImg d-none d-lg-block">
                    <img
                        src="img/livesection/live1.png"
                        alt="inoura"
                        class="img-fluid"
                    />
                </div>
            </div>
            <div class="col-lg-6 headingWrapper">
                <h3>
                    Join <span class="clr-blue">live sessions</span> or watch
                    <span class="clr-pink">recorded video</span> lessons
                </h3>
                <div class="championImg d-lg-none d-block mb-4">
                    <img
                        src="img/livesection/live1.png"
                        alt="inoura"
                        class="img-fluid"
                    />
                </div>
                <p>
                    Embrace your untapped potential, push your limits, and unlock the
                    champion within you. This motivational title encourages you to tap
                    into your inner strength, overcome obstacles, and strive for
                    excellence in all areas of your life.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- liveSectionTwo -->
<section class="liveSectionTwo">
    <div class="container px-0">
        <div class="innerChampionSlider">
            <div>
                <div
                    class="row align-items-center position-relative justify-content-between tabContentColumn"
                >
                    <div class="col-lg-6 headingWrapper">
                        <h3 class="position-relative">
                            We will help you in studying any subject<img
                                src="img/starsIcon/yellowMediumLine.svg"
                                alt="inoura"
                                class="underlineImg d-md-block d-none"
                            />
                        </h3>
                        <div class="championImg d-lg-none d-block mb-4">
                            <img
                                src="img/livesection/live2.png"
                                alt="inoura"
                                class="img-fluid"
                            />
                        </div>

                        <img
                            src="img/starsIcon/pinkLargeStar.svg"
                            alt="inoura"
                            class="pinkStar position-absolute"
                        />
                        <p>
                            Embrace your untapped potential, push your limits, and unlock
                            the champion within you. This motivational title encourages
                            you to tap into your inner strength, overcome obstacles, and
                            strive for excellence in all areas of your life.
                        </p>
                        <img
                            src="img/starsIcon/blueSmallStar.svg"
                            alt="inoura"
                            class="blueStar position-absolute"
                        />
                    </div>
                    <div class="col-lg-6">
                        <div class="championImg d-none d-lg-block">
                            <img
                                src="img/livesection/live2.png"
                                alt="inoura"
                                class="img-fluid"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div
                    class="row align-items-center justify-content-between tabContentColumn"
                >
                    <div class="col-lg-6 headingWrapper">
                        <h3>We will help you in studying any subject</h3>
                        <div class="championImg d-lg-none d-block mb-4">
                            <img
                                src="img/livesection/live2.png"
                                alt="inoura"
                                class="img-fluid"
                            />
                        </div>
                        <p>
                            Embrace your untapped potential, push your limits, and unlock
                            the champion within you. This motivational title encourages
                            you to tap into your inner strength, overcome obstacles, and
                            strive for excellence in all areas of your life.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <div class="championImg d-none d-lg-block">
                            <img
                                src="img/livesection/live2.png"
                                alt="inoura"
                                class="img-fluid"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div
                    class="row align-items-center justify-content-between tabContentColumn"
                >
                    <div class="col-lg-6 headingWrapper">
                        <h3>We will help you in studying any subject</h3>
                        <div class="championImg d-lg-none d-block mb-4">
                            <img
                                src="img/livesection/live2.png"
                                alt="inoura"
                                class="img-fluid"
                            />
                        </div>
                        <p>
                            Embrace your untapped potential, push your limits, and unlock
                            the champion within you. This motivational title encourages
                            you to tap into your inner strength, overcome obstacles, and
                            strive for excellence in all areas of your life.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <div class="championImg d-none d-lg-block">
                            <img
                                src="img/livesection/live2.png"
                                alt="inoura"
                                class="img-fluid"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- faqs -->
<section class="faqs">
    <div class="heading">
        <h2>
            Frequently
            <span class="position-relative"
            >asked questions<img
                    src="img/starsIcon/yellowLargeLine.svg"
                    alt="inoura"
                    class="underlineImg"
                /></span>
        </h2>
        <p>
            Have something to know? Check here if you have any questions about us.
        </p>
    </div>
    <div class="container position-relative">
        <img
            src="img/starsIcon/yellowLargeStar.svg"
            alt="inoura"
            class="yellowStar position-absolute"
        />
        <div class="accordion" id="faqsAccordion">
            <div class="accordionContent">
                <button
                    class="btn accordionBtn d-flex justify-content-between"
                    type="button"
                    data-toggle="collapse"
                    data-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                >
                    <h2>What is a Learning Management System (LMS)?</h2>
                    <img src="img/faqs/plusIcon.svg" />
                </button>

                <div
                    id="collapseOne"
                    class="collapse"
                    aria-labelledby="headingOne"
                    data-parent="#faqsAccordion"
                >
                    <div class="accordionBody">
                        <p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                            accusamus terry richardson ad squid. 3 wolf moon officia aute,
                            non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                            aliqua put a bird on it squid single-origin coffee nulla
                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident.
                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                            beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable
                            VHS.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordionContent">
                <button
                    class="btn accordionBtn d-flex justify-content-between"
                    type="button"
                    data-toggle="collapse"
                    data-target="#collapseTwo"
                    aria-expanded="true"
                    aria-controls="collapseTwo"
                >
                    <h2>
                        How can an LMS benefit educational institutions and
                        organizations?
                    </h2>
                    <img src="img/faqs/plusIcon.svg" />
                </button>

                <div
                    id="collapseTwo"
                    class="collapse"
                    aria-labelledby="headingTwo"
                    data-parent="#faqsAccordion"
                >
                    <div class="accordionBody">
                        <p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                            accusamus terry richardson ad squid. 3 wolf moon officia aute,
                            non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                            aliqua put a bird on it squid single-origin coffee nulla
                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident.
                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                            beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable
                            VHS.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="allQuestionsCta text-center">
            <p>
                All questions
                <img
                    src="img/topCourses/rightArrow.svg"
                    alt="Inoura"
                    class="ml-2"
                />
            </p>
        </div>
    </div>
</section>

<!-- latestBlog -->
<section class="latestBlog">
    <div class="heading">
        <h2 class="latestBlogHeading">
            Visit our latest
            <span class="position-relative"
            >Blogs<img
                    src="img/starsIcon/yellowMediumLine.svg"
                    alt="inoura"
                    class="underlineImg"
                /></span>
        </h2>
        <p>Visit our valuable articles to get more information.</p>
    </div>
    <div class="container position-relative">
        <img
            src="img/starsIcon/yellowLargeStar.svg"
            alt="inoura"
            class="yellowStar position-absolute"
        />
        <img
            src="img/starsIcon/blueSmallStar.svg"
            alt="inoura"
            class="blueStar position-absolute"
        />
        <div class="row justify-content-center">
            <div class="card blogCard">
                <img
                    src="img/latestBlog/cardImg.png"
                    alt="inoura"
                    class="card-img-top cardImg"
                />
                <div class="imgOverlay">
                    <div
                        class="d-flex justify-content-center align-items-center h-100"
                    >
                        <p class="d-flex col_gap_8 mb-0">
                            Open
                            <img
                                src="img/starsIcon/rightArrow.svg"
                                alt="inoura"
                                class="arrowImg"
                            />
                        </p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="cardData">
                        <div class="tag">
                            <a href="#">Education</a>
                        </div>
                        <h3 class="card-title">
                            Parent Power: Will We Choose Pitchforks or Partnerships?
                        </h3>
                        <p class="card-text">
                            After two tumultuous years of intermittent school closures,
                            parents and caregivers…
                        </p>
                    </div>
                    <hr class="line" />
                    <div class="pricingContent">
                        <div class="profileDetail">
                            <img src="img/latestBlog/profileImg.png" alt="inoura" />
                            <h6 class="profileName">John D.</h6>
                        </div>
                        <div class="dateWrapper">
                            <p class="mb-0">Thu, 23 Dec 2020</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card blogCard">
                <img
                    src="img/latestBlog/cardImg.png"
                    alt="inoura"
                    class="card-img-top cardImg"
                />
                <div class="imgOverlay">
                    <div
                        class="d-flex justify-content-center align-items-center h-100"
                    >
                        <p class="d-flex col_gap_8 mb-0">
                            Open
                            <img
                                src="img/starsIcon/rightArrow.svg"
                                alt="inoura"
                                class="arrowImg"
                            />
                        </p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="cardData">
                        <div class="tag">
                            <a href="#">Education</a>
                        </div>
                        <h3 class="card-title">
                            Parent Power: Will We Choose Pitchforks or Partnerships?
                        </h3>
                        <p class="card-text">
                            After two tumultuous years of intermittent school closures,
                            parents and caregivers…
                        </p>
                    </div>
                    <hr class="line" />
                    <div class="pricingContent">
                        <div class="profileDetail">
                            <img src="img/latestBlog/profileImg.png" alt="inoura" />
                            <h6 class="profileName">John D.</h6>
                        </div>
                        <div class="dateWrapper">
                            <p class="mb-0">Thu, 23 Dec 2020</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card blogCard">
                <img
                    src="img/latestBlog/cardImg.png"
                    alt="inoura"
                    class="card-img-top cardImg"
                />
                <div class="imgOverlay">
                    <div
                        class="d-flex justify-content-center align-items-center h-100"
                    >
                        <p class="d-flex col_gap_8 mb-0">
                            Open
                            <img
                                src="img/starsIcon/rightArrow.svg"
                                alt="inoura"
                                class="arrowImg"
                            />
                        </p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="cardData">
                        <div class="tag">
                            <a href="#">Education</a>
                        </div>
                        <h3 class="card-title">
                            Parent Power: Will We Choose Pitchforks or Partnerships?
                        </h3>
                        <p class="card-text">
                            After two tumultuous years of intermittent school closures,
                            parents and caregivers…
                        </p>
                    </div>
                    <hr class="line" />
                    <div class="pricingContent">
                        <div class="profileDetail">
                            <img src="img/latestBlog/profileImg.png" alt="inoura" />
                            <h6 class="profileName">John D.</h6>
                        </div>
                        <div class="dateWrapper">
                            <p class="mb-0">Thu, 23 Dec 2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 leftColumn">
                <h2>Explore thousands of courses for the lowest price ever!</h2>
                <p>Subscribe to our newsletter</p>
                <div class="input-group mb-3 heroSectionInput align-items-center">
                    <div class="searchBtn">
                        <img src="img/footer/envelope.svg" alt="newsletter" />
                    </div>
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Enter your email address"
                        aria-label="Enter your email address"
                        aria-describedby="button-addon5"
                    />
                    <div class="input-group-append">
                        <button class="btn" type="button" id="button-addon5">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 rightColumn">
                <div class="row justify-content-md-between justify-content-center">
                    <div>
                        <h6 class="title">Top categories</h6>
                        <ul>
                            <li>HTML & CSS</li>
                            <li>Color Theory</li>
                            <li>Photoshop</li>
                            <li>WordPress Theme</li>
                            <li>Adobe Illustrator</li>
                        </ul>
                    </div>
                    <div>
                        <h6 class="title">Useful links</h6>
                        <ul>
                            <li>Blog</li>
                            <li>All Courses</li>
                            <li>Sign Up</li>
                            <li>+1 3233735739</li>
                        </ul>
                    </div>
                    <div>
                        <h6 class="title">Help</h6>
                        <ul>
                            <li>HTML & CSS</li>
                            <li>All Courses</li>
                            <li>Sign Up</li>
                            <li>Terms and condition</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
