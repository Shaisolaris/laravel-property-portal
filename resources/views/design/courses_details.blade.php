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
<div class="courseDetailWrapper">
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
                            <a href="{{ url('/design/my-courses') }}" class="profileDetail">My Courses</a>

                            <a href="" class="navIcons">
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

    <div class="courseSection">
        <div class="container px-lg-0">
            <div class="row">
                <div class="col-lg-4">
                    <div class="courseInfo">
                        <div class="card">
                            <div class="cardVideo">
                                <div class="videoContainer">
                                    <img
                                        src="img/courseDetail/video.png"
                                        alt="Video Thumbnail"
                                        onclick="playVideo()"
                                    />
                                    <img
                                        class="playButton"
                                        src="img/courseDetail/playButton.svg"
                                        alt="Play Button"
                                        onclick="playVideo()"
                                    />
                                    <!-- <img
                                      class="pauseButton"
                                      src="img/courseDetail/pauseFll.svg"
                                      alt="Play Button"
                                      onclick="playVideo()"
                                    /> -->
                                    <video id="videoPlayer" controls>
                                        <source
                                            src="img/courseDetail/coursevideo.mp4"
                                            type="video/mp4"
                                        />
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5>$13 <span>$16</span></h5>
                                <div class="detailsWrap">
                                    <div
                                        class="details d-flex justify-content-between align-items-center"
                                    >
                                        <div class="lectureDetails d-flex align-items-center">
                                            <div class="icons">
                                                <img
                                                    src="img/courseDetail/listUl.svg"
                                                    alt="inoura"
                                                />
                                            </div>
                                            <h6 class="mb-0">Lectures</h6>
                                        </div>
                                        <p class="mb-0">11</p>
                                    </div>
                                    <div
                                        class="details d-flex justify-content-between align-items-center"
                                    >
                                        <div class="lectureDetails d-flex align-items-center">
                                            <div class="icons">
                                                <img
                                                    src="img/courseDetail/listStars.svg"
                                                    alt="inoura"
                                                />
                                            </div>
                                            <h6 class="mb-0">Quizzes</h6>
                                        </div>
                                        <p class="mb-0">1</p>
                                    </div>
                                    <div
                                        class="details d-flex justify-content-between align-items-center"
                                    >
                                        <div class="lectureDetails d-flex align-items-center">
                                            <div class="icons">
                                                <img
                                                    src="img/courseDetail/listTask.svg"
                                                    alt="inoura"
                                                />
                                            </div>
                                            <h6 class="mb-0">Assignments</h6>
                                        </div>
                                        <p class="mb-0">1</p>
                                    </div>
                                    <div
                                        class="details d-flex justify-content-between align-items-center"
                                    >
                                        <div class="lectureDetails d-flex align-items-center">
                                            <div class="icons">
                                                <img
                                                    src="img/courseDetail/clipboardData.svg"
                                                    alt="inoura"
                                                />
                                            </div>
                                            <h6 class="mb-0">Skill level</h6>
                                        </div>
                                        <p class="mb-0">Beginner</p>
                                    </div>
                                    <div
                                        class="details d-flex justify-content-between align-items-center"
                                    >
                                        <div class="lectureDetails d-flex align-items-center">
                                            <div class="icons">
                                                <img
                                                    src="img/courseDetail/calendarRange.svg"
                                                    alt="inoura"
                                                />
                                            </div>
                                            <h6 class="mb-0">Expiry period</h6>
                                        </div>
                                        <p class="mb-0">Lifetime</p>
                                    </div>
                                </div>
                                <a href="#">
                                    <button class="btn cardBtn">Enroll now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="courseDetail">
                        <!-- breadCrumb -->
                        <div class="cardDescrption">
                            <div class="breadCrumbWrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item">
                                            <a href="#">Courses</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Development
                                        </li>
                                    </ol>
                                </nav>
                                <div class="descrptionWrapper">
                                    <h2 class="title">
                                        Design Thinking for Beginners: Develop Innovative Ideas
                                    </h2>
                                    <p class="descpText">
                                        Apply the five-step design thinking process to identify
                                        and creatively solve problems using a human-centered
                                        approach.
                                    </p>
                                    <div class="profileWrap d-flex align-items-center">
                                        <div class="profile d-flex align-items-center">
                                            <img
                                                src="img/courseDetail/profilePic.svg"
                                                alt="inoura"
                                                class="profilePic"
                                            />
                                            <p class="profileName mb-0">by Jane Doe</p>
                                        </div>
                                        <div class="rating d-flex align-items-center">
                                            <div class="starRating d-flex">
                                                <img
                                                    src="img/courseDetail/starFill.svg"
                                                    alt="inoura"
                                                />
                                                <img
                                                    src="img/courseDetail/starFill.svg"
                                                    alt="inoura"
                                                />
                                                <img
                                                    src="img/courseDetail/starFill.svg"
                                                    alt="inoura"
                                                />
                                                <img
                                                    src="img/courseDetail/starFill.svg"
                                                    alt="inoura"
                                                />
                                                <img
                                                    src="img/courseDetail/starFill.svg"
                                                    alt="inoura"
                                                />
                                            </div>
                                            <div class="reviews">(538)</div>
                                        </div>
                                    </div>
                                    <div class="d-flex tagWrapper">
                                        <div class="tags duration d-flex align-items-center">
                                            <img src="img/topCourses/clock.svg" alt="inoura" />
                                            <div class="time">24:12:22</div>
                                        </div>
                                        <div class="tags enrollment d-flex align-items-center">
                                            <img src="img/courseDetail/person.svg" alt="inoura" />
                                            <div><span>1</span>Enrolled</div>
                                        </div>
                                        <div class="tags enrollmen d-flex align-items-centert">
                                            <img
                                                src="img/courseDetail/translate.svg"
                                                alt="inoura"
                                            />
                                            <div>English</div>
                                        </div>
                                        <div class="tags date d-flex align-items-center">
                                            <img
                                                src="img/courseDetail/calendar.svg"
                                                alt="inoura"
                                            />
                                            <div><span>Last updated:</span>Thu, 13-Jul-2020</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courseOverview">
                            <div class="tabbingWrapper">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a
                                            class="nav-link active"
                                            id="pills-overview-tab"
                                            data-toggle="pill"
                                            href="#pills-overview"
                                            role="tab"
                                            aria-controls="pills-overview"
                                            aria-selected="true"
                                        >
                                            Overview</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            id="pills-curriculum-tab"
                                            data-toggle="pill"
                                            href="#pills-curriculum"
                                            role="tab"
                                            aria-controls="pills-curriculum"
                                            aria-selected="false"
                                        >Curriculum</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            id="pills-instructor-tab"
                                            data-toggle="pill"
                                            href="#pills-instructor"
                                            role="tab"
                                            aria-controls="pills-instructor"
                                            aria-selected="false"
                                        >Instructor</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            id="pills-reviews-tab"
                                            data-toggle="pill"
                                            href="#pills-reviews"
                                            role="tab"
                                            aria-controls="pills-reviews"
                                            aria-selected="false"
                                        >Reviews</a
                                        >
                                    </li>
                                </ul>
                            </div>
                            <div class="tabContentWrapper">
                                <div class="tab-content" id="pills-tabContent">
                                    <div
                                        class="tab-pane fade show active"
                                        id="pills-overview"
                                        role="tabpanel"
                                        aria-labelledby="pills-overview-tab"
                                    >
                                        <div class="tabOverview">
                                            <div class="content">
                                                <h6>Description</h6>
                                                <p>
                                                    Think of a problem or challenge you had to solve
                                                    at work recently. How did you approach it? Did you
                                                    find yourself overwhelmed with the number of
                                                    possible solutions? Were you unsure how to even
                                                    start? Design thinking can help.
                                                </p>
                                                <p>
                                                    Design thinking is a five-step human-centered
                                                    process for creative problem solving. It was
                                                    popularized by the Stanford d.school and IDEO, and
                                                    has been used by organizations around the world to
                                                    solve knotty problems. It is all about
                                                    understanding your user's needs and solving the
                                                    right problem. By using this human-centered design
                                                    approach, you can develop products and services
                                                    that truly help your user.
                                                </p>
                                                <p>
                                                    This course is meant to serve as an introduction
                                                    to the principles of design thinking and touches
                                                    on ways you can implement it in your workplace.
                                                    The material is best suited for students who are
                                                    new to design thinking or want a refresher on the
                                                    core concepts. Luckily, design thinking can be
                                                    applied to almost any field; no matter what your
                                                    profession, design thinking can help you discover
                                                    and implement the best solutions to problems you
                                                    encounter.
                                                </p>
                                            </div>
                                            <div class="content">
                                                <h6>Benefits</h6>
                                                <div class="row flex-wrap">
                                                    <div class="col-md-6">
                                                        <ul class="">
                                                            <li>
                                                                Apply the 5-step design thinking process to
                                                                a design challenge in your organization.
                                                            </li>
                                                            <li>
                                                                Empathize with your user through interviews
                                                                and observations, in order to take a
                                                                human-centered approach to a problem.
                                                            </li>
                                                            <li>
                                                                Define your core problem by synthesizing and
                                                                analyzing information gathered during your
                                                                empathy work.
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <ul class="">
                                                            <li>
                                                                Ideate solutions to your problem by
                                                                brainstorming using "How might we..."
                                                                statements.
                                                            </li>
                                                            <li>
                                                                Prototype your ideas rapidly to identify the
                                                                best possible solution for your problem.
                                                            </li>
                                                            <li>
                                                                Test your prototypes with users to gather
                                                                feedback on your proposed solution.
                                                            </li>
                                                            <li>
                                                                Pitch design thinking to your team or
                                                                organization using storytelling.
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="pills-curriculum"
                                        role="tabpanel"
                                        aria-labelledby="pills-curriculum-tab"
                                    >
                                        <div class="tabCurriculum">
                                            <h6>Plan</h6>
                                            <div class="d-flex tagWrapper">
                                                <div
                                                    class="tags enrollment d-flex align-items-center"
                                                >
                                                    <img
                                                        src="img/courseDetail/listOl.svg"
                                                        alt="inoura"
                                                    />
                                                    <div><span>6</span> sections</div>
                                                </div>
                                                <div
                                                    class="tags enrollmen d-flex align-items-centert"
                                                >
                                                    <img
                                                        src="img/courseDetail/menuUp.svg"
                                                        alt="inoura"
                                                    />
                                                    <div><span>24</span> lectures</div>
                                                </div>
                                                <div
                                                    class="tags duration d-flex align-items-center"
                                                >
                                                    <img
                                                        src="img/topCourses/clock.svg"
                                                        alt="inoura"
                                                    />
                                                    <div class="time">47m total length</div>
                                                </div>
                                            </div>
                                            <div class="accordion" id="sidebardropdown">
                                                <div class="courseTableContent">
                                                    <button
                                                        class="btn accordionBtn d-flex justify-content-between"
                                                        type="button"
                                                        data-toggle="collapse"
                                                        data-target="#tableOfContent1"
                                                        aria-expanded="true"
                                                        aria-controls="tableOfContent1"
                                                    >
                                                        <div
                                                            class="lecturesTitle d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/Arrowdown.svg"
                                                                alt="inoura"
                                                            />
                                                            <h3 class="mb-0">Introduction</h3>
                                                        </div>
                                                        <div
                                                            class="totalLectures d-flex align-items-center"
                                                        >
                                                            <p class="mb-0"><span>4</span> lectures</p>
                                                            <p class="mb-0"><span>4</span> min</p>
                                                        </div>
                                                    </button>

                                                    <div
                                                        id="tableOfContent1"
                                                        class="collapse show"
                                                        aria-labelledby="headingOne"
                                                        data-parent="#sidebardropdown"
                                                    >
                                                        <div class="accordionBody">
                                                            <div
                                                                class="subTableOfContent d-flex justify-content-between"
                                                            >
                                                                <div
                                                                    class="lecturesTitle d-flex align-items-center"
                                                                >
                                                                    <img
                                                                        src="img/courseDetail/collectionPlay.svg"
                                                                        alt="inoura"
                                                                    />
                                                                    <h6 class="mb-0">
                                                                        Introduction & Hello!
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="lectureDuration d-flex align-items-center"
                                                                >
                                                                    <p class="mb-0">01:04</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="subTableOfContent d-flex justify-content-between"
                                                            >
                                                                <div
                                                                    class="lecturesTitle d-flex align-items-center"
                                                                >
                                                                    <img
                                                                        src="img/courseDetail/collectionPlay.svg"
                                                                        alt="inoura"
                                                                    />
                                                                    <h6 class="mb-0">
                                                                        CPE Review Quiz: Section 2
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="lectureDuration d-flex align-items-center"
                                                                >
                                                                    <p class="mb-0">01:04</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="subTableOfContent d-flex justify-content-between"
                                                            >
                                                                <div
                                                                    class="lecturesTitle d-flex align-items-center"
                                                                >
                                                                    <img
                                                                        src="img/courseDetail/collectionPlay.svg"
                                                                        alt="inoura"
                                                                    />
                                                                    <h6 class="mb-0">
                                                                        Who Uses Design Thinking?
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="lectureDuration d-flex align-items-center"
                                                                >
                                                                    <p class="mb-0">01:04</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="subTableOfContent d-flex justify-content-between"
                                                            >
                                                                <div
                                                                    class="lecturesTitle d-flex align-items-center"
                                                                >
                                                                    <img
                                                                        src="img/courseDetail/collectionPlay.svg"
                                                                        alt="inoura"
                                                                    />
                                                                    <h6 class="mb-0">
                                                                        The Value of Design Thinking
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="lectureDuration d-flex align-items-center"
                                                                >
                                                                    <p class="mb-0">01:04</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="courseTableContent">
                                                    <button
                                                        class="btn accordionBtn d-flex justify-content-between"
                                                        type="button"
                                                        data-toggle="collapse"
                                                        data-target="#tableOfContent2"
                                                        aria-expanded="true"
                                                        aria-controls="tableOfContent2"
                                                    >
                                                        <div
                                                            class="lecturesTitle d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/Arrowdown.svg"
                                                                alt="inoura"
                                                            />
                                                            <h3 class="mb-0">Introduction</h3>
                                                        </div>
                                                        <div
                                                            class="totalLectures d-flex align-items-center"
                                                        >
                                                            <p class="mb-0"><span>4</span> lectures</p>
                                                            <p class="mb-0"><span>4</span> min</p>
                                                        </div>
                                                    </button>

                                                    <div
                                                        id="tableOfContent2"
                                                        class="collapse"
                                                        aria-labelledby="headingOne"
                                                        data-parent="#sidebardropdown"
                                                    >
                                                        <div class="accordionBody">
                                                            <div
                                                                class="subTableOfContent d-flex justify-content-between"
                                                            >
                                                                <div
                                                                    class="lecturesTitle d-flex align-items-center"
                                                                >
                                                                    <img
                                                                        src="img/courseDetail/collectionPlay.svg"
                                                                        alt="inoura"
                                                                    />
                                                                    <h6 class="mb-0">
                                                                        Introduction & Hello!
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="lectureDuration d-flex align-items-center"
                                                                >
                                                                    <p class="mb-0">01:04</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="courseTableContent">
                                                    <button
                                                        class="btn accordionBtn d-flex justify-content-between"
                                                        type="button"
                                                        data-toggle="collapse"
                                                        data-target="#tableOfContent3"
                                                        aria-expanded="true"
                                                        aria-controls="tableOfContent3"
                                                    >
                                                        <div
                                                            class="lecturesTitle d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/Arrowdown.svg"
                                                                alt="inoura"
                                                            />
                                                            <h3 class="mb-0">Introduction</h3>
                                                        </div>
                                                        <div
                                                            class="totalLectures d-flex align-items-center"
                                                        >
                                                            <p class="mb-0"><span>4</span> lectures</p>
                                                            <p class="mb-0"><span>4</span> min</p>
                                                        </div>
                                                    </button>

                                                    <div
                                                        id="tableOfContent3"
                                                        class="collapse"
                                                        aria-labelledby="headingOne"
                                                        data-parent="#sidebardropdown"
                                                    >
                                                        <div class="accordionBody">
                                                            <div
                                                                class="subTableOfContent d-flex justify-content-between"
                                                            >
                                                                <div
                                                                    class="lecturesTitle d-flex align-items-center"
                                                                >
                                                                    <img
                                                                        src="img/courseDetail/collectionPlay.svg"
                                                                        alt="inoura"
                                                                    />
                                                                    <h6 class="mb-0">
                                                                        Introduction & Hello!
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="lectureDuration d-flex align-items-center"
                                                                >
                                                                    <p class="mb-0">01:04</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="courseTableContent">
                                                    <button
                                                        class="btn accordionBtn d-flex justify-content-between"
                                                        type="button"
                                                        data-toggle="collapse"
                                                        data-target="#tableOfContent5"
                                                        aria-expanded="true"
                                                        aria-controls="tableOfContent5"
                                                    >
                                                        <div
                                                            class="lecturesTitle d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/Arrowdown.svg"
                                                                alt="inoura"
                                                            />
                                                            <h3 class="mb-0">Introduction</h3>
                                                        </div>
                                                        <div
                                                            class="totalLectures d-flex align-items-center"
                                                        >
                                                            <p class="mb-0"><span>4</span> lectures</p>
                                                            <p class="mb-0"><span>4</span> min</p>
                                                        </div>
                                                    </button>

                                                    <div
                                                        id="tableOfContent5"
                                                        class="collapse"
                                                        aria-labelledby="headingOne"
                                                        data-parent="#sidebardropdown"
                                                    >
                                                        <div class="accordionBody">
                                                            <div
                                                                class="subTableOfContent d-flex justify-content-between"
                                                            >
                                                                <div
                                                                    class="lecturesTitle d-flex align-items-center"
                                                                >
                                                                    <img
                                                                        src="img/courseDetail/collectionPlay.svg"
                                                                        alt="inoura"
                                                                    />
                                                                    <h6 class="mb-0">
                                                                        Introduction & Hello!
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="lectureDuration d-flex align-items-center"
                                                                >
                                                                    <p class="mb-0">01:04</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="courseTableContent">
                                                    <button
                                                        class="btn accordionBtn d-flex justify-content-between"
                                                        type="button"
                                                        data-toggle="collapse"
                                                        data-target="#tableOfContent4"
                                                        aria-expanded="true"
                                                        aria-controls="tableOfContent4"
                                                    >
                                                        <div
                                                            class="lecturesTitle d-flex align-items-center"
                                                        >
                                                            <img
                                                                src="img/courseDetail/Arrowdown.svg"
                                                                alt="inoura"
                                                            />
                                                            <h3 class="mb-0">Introduction</h3>
                                                        </div>
                                                        <div
                                                            class="totalLectures d-flex align-items-center"
                                                        >
                                                            <p class="mb-0"><span>4</span> lectures</p>
                                                            <p class="mb-0"><span>4</span> min</p>
                                                        </div>
                                                    </button>

                                                    <div
                                                        id="tableOfContent4"
                                                        class="collapse"
                                                        aria-labelledby="headingOne"
                                                        data-parent="#sidebardropdown"
                                                    >
                                                        <div class="accordionBody">
                                                            <div
                                                                class="subTableOfContent d-flex justify-content-between"
                                                            >
                                                                <div
                                                                    class="lecturesTitle d-flex align-items-center"
                                                                >
                                                                    <img
                                                                        src="img/courseDetail/collectionPlay.svg"
                                                                        alt="inoura"
                                                                    />
                                                                    <h6 class="mb-0">
                                                                        Introduction & Hello!
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="lectureDuration d-flex align-items-center"
                                                                >
                                                                    <p class="mb-0">01:04</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="pills-instructor"
                                        role="tabpanel"
                                        aria-labelledby="pills-instructor-tab"
                                    >
                                        <div class="tabInstructor">
                                            <h6>Jane Doe</h6>
                                            <div class="d-flex tagWrapper">
                                                <div
                                                    class="tags enrollment d-flex align-items-center"
                                                >
                                                    <img
                                                        src="img/courseDetail/star.svg"
                                                        alt="inoura"
                                                    />
                                                    <div>4.4 (2,199 Reviews)</div>
                                                </div>
                                                <div
                                                    class="tags enrollmen d-flex align-items-centert"
                                                >
                                                    <img
                                                        src="img/courseDetail/collection.svg"
                                                        alt="inoura"
                                                    />
                                                    <div>5 283 Lessons</div>
                                                </div>
                                                <div
                                                    class="tags duration d-flex align-items-center"
                                                >
                                                    <img
                                                        src="img/courseDetail/playBtn.svg"
                                                        alt="inoura"
                                                    />
                                                    <div class="time">3 Courses</div>
                                                </div>
                                            </div>
                                            <div class="instructorInfo">
                                                <div class="card">
                                                    <div
                                                        class="row row_gap_20 text-center text-md-left"
                                                    >
                                                        <div class="col-md-3 pr-md-0 imgCol">
                                                            <img
                                                                src="img/courseDetail/instructorImg.svg"
                                                                class="card-img"
                                                                alt="inoura"
                                                            />
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="card-body">
                                                                <h5 class="card-title">
                                                                    Learning Experience Designer at Lyft
                                                                </h5>
                                                                <div class="card-text">
                                                                    <p>
                                                                        Laura is a Learning Experience Designer
                                                                        at Lyft and an Ideo U teaching team
                                                                        lead. In past lives, she's been a User
                                                                        Experience Designer at SAP, taught at
                                                                        the Stanford d.school, and has conducted
                                                                        hundreds of design thinking workshops.
                                                                    </p>
                                                                    <p>
                                                                        When she's not teaching people about
                                                                        using game mechanics for learning or
                                                                        interview techniques for empathy work,
                                                                        Laura can be found competing in
                                                                        triathlons, riding hundreds of miles on
                                                                        her bike for fun, or hunting for the
                                                                        best gluten-free bakeries around.
                                                                    </p>
                                                                </div>
                                                                <a class="viewMore" href="#"
                                                                >View Details
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16"
                                                                        height="17"
                                                                        viewBox="0 0 16 17"
                                                                        fill="none"
                                                                    >
                                                                        <path
                                                                            fill-rule="evenodd"
                                                                            clip-rule="evenodd"
                                                                            d="M13.9997 3C13.9997 2.86739 13.947 2.74021 13.8532 2.64645C13.7594 2.55268 13.6323 2.5 13.4997 2.5H7.49965C7.36705 2.5 7.23987 2.55268 7.1461 2.64645C7.05233 2.74021 6.99965 2.86739 6.99965 3C6.99965 3.13261 7.05233 3.25979 7.1461 3.35355C7.23987 3.44732 7.36705 3.5 7.49965 3.5H12.2927L2.14565 13.646C2.09917 13.6925 2.06229 13.7477 2.03713 13.8084C2.01197 13.8692 1.99902 13.9343 1.99902 14C1.99902 14.0657 2.01197 14.1308 2.03713 14.1916C2.06229 14.2523 2.09917 14.3075 2.14565 14.354C2.19214 14.4005 2.24733 14.4374 2.30807 14.4625C2.36881 14.4877 2.43391 14.5006 2.49966 14.5006C2.5654 14.5006 2.6305 14.4877 2.69124 14.4625C2.75198 14.4374 2.80717 14.4005 2.85366 14.354L12.9997 4.207V9C12.9997 9.13261 13.0523 9.25979 13.1461 9.35355C13.2399 9.44732 13.367 9.5 13.4997 9.5C13.6323 9.5 13.7594 9.44732 13.8532 9.35355C13.947 9.25979 13.9997 9.13261 13.9997 9V3Z"
                                                                            fill="#154BD8"
                                                                        />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="pills-reviews"
                                        role="tabpanel"
                                        aria-labelledby="pills-reviews-tab"
                                    >
                                        <div class="tabReview">
                                            <h6 class="d-flex align-items-center col_gap_20">
                                                Course rating <span>4 </span>
                                                <span> (538</span>Reviews)
                                            </h6>
                                            <div class="reviewCardWrap">
                                                <div class="row m-0">
                                                    <div class="col-sm-6 p-0 column">
                                                        <div class="card">
                                                            <div class="profileInfo d-flex">
                                                                <div class="profileDP">JS</div>
                                                                <div class="profileName">
                                                                    <h5>Jagjit S.</h5>
                                                                    <div class="rewiews">
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <span class=""> a month ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p>
                                                                It was a great learning experience. Laura
                                                                broke down the design thinking concept into
                                                                detailed steps along with "in action" videos
                                                                and useful templates which were really
                                                                helpful in the understanding the step by
                                                                step...
                                                            </p>
                                                            <a href="#"
                                                            >Show more
                                                                <img
                                                                    src="img/courseDetail/chevronDownBlue.svg"
                                                                    alt="inoura"
                                                                /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 p-0 column">
                                                        <div class="card">
                                                            <div class="profileInfo d-flex">
                                                                <div class="profileDP">JS</div>
                                                                <div class="profileName">
                                                                    <h5>Jagjit S.</h5>
                                                                    <div class="rewiews">
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <span class=""> a month ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p>
                                                                It was a great learning experience. Laura
                                                                broke down the design thinking concept into
                                                                detailed steps along with "in action" videos
                                                                and useful templates which were really
                                                                helpful in the understanding the step by
                                                                step...
                                                            </p>
                                                            <a href="#"
                                                            >Show more
                                                                <img
                                                                    src="img/courseDetail/chevronDownBlue.svg"
                                                                    alt="inoura"
                                                                /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 p-0 column">
                                                        <div class="card">
                                                            <div class="profileInfo d-flex">
                                                                <div class="profileDP">JS</div>
                                                                <div class="profileName">
                                                                    <h5>Jagjit S.</h5>
                                                                    <div class="rewiews">
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <span class=""> a month ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p>
                                                                It was a great learning experience. Laura
                                                                broke down the design thinking concept into
                                                                detailed steps along with "in action" videos
                                                                and useful templates which were really
                                                                helpful in the understanding the step by
                                                                step...
                                                            </p>
                                                            <a href="#"
                                                            >Show more
                                                                <img
                                                                    src="img/courseDetail/chevronDownBlue.svg"
                                                                    alt="inoura"
                                                                /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 p-0 column">
                                                        <div class="card">
                                                            <div class="profileInfo d-flex">
                                                                <div class="profileDP">JS</div>
                                                                <div class="profileName">
                                                                    <h5>Jagjit S.</h5>
                                                                    <div class="rewiews">
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <span class=""> a month ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p>
                                                                It was a great learning experience. Laura
                                                                broke down the design thinking concept into
                                                                detailed steps along with "in action" videos
                                                                and useful templates which were really
                                                                helpful in the understanding the step by
                                                                step...
                                                            </p>
                                                            <a href="#"
                                                            >Show more
                                                                <img
                                                                    src="img/courseDetail/chevronDownBlue.svg"
                                                                    alt="inoura"
                                                                /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 p-0 column">
                                                        <div class="card">
                                                            <div class="profileInfo d-flex">
                                                                <div class="profileDP">JS</div>
                                                                <div class="profileName">
                                                                    <h5>Jagjit S.</h5>
                                                                    <div class="rewiews">
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <span class=""> a month ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p>
                                                                It was a great learning experience. Laura
                                                                broke down the design thinking concept into
                                                                detailed steps along with "in action" videos
                                                                and useful templates which were really
                                                                helpful in the understanding the step by
                                                                step...
                                                            </p>
                                                            <a href="#"
                                                            >Show more
                                                                <img
                                                                    src="img/courseDetail/chevronDownBlue.svg"
                                                                    alt="inoura"
                                                                /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 p-0 column">
                                                        <div class="card">
                                                            <div class="profileInfo d-flex">
                                                                <div class="profileDP">JS</div>
                                                                <div class="profileName">
                                                                    <h5>Jagjit S.</h5>
                                                                    <div class="rewiews">
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <img
                                                                            src="img/courseDetail/starFillBlack.svg"
                                                                        />
                                                                        <span class=""> a month ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p>
                                                                It was a great learning experience. Laura
                                                                broke down the design thinking concept into
                                                                detailed steps along with "in action" videos
                                                                and useful templates which were really
                                                                helpful in the understanding the step by
                                                                step...
                                                            </p>
                                                            <a href="#"
                                                            >Show more
                                                                <img
                                                                    src="img/courseDetail/chevronDownBlue.svg"
                                                                    alt="inoura"
                                                                /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex justify-content-center align-items-center"
                                            >
                                                <button
                                                    class="btn d-flex justify-content-centet align-items-center"
                                                >
                                                    Show all reviews
                                                    <div>
                                                        <img
                                                            src="img/courseDetail/chevronDownBlue.svg"
                                                            alt="inoura"
                                                        />
                                                    </div>
                                                </button>
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
