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
    <title>My Courses</title>
</head>
<body>
<div class="navbarWraper assignmentProgressNavBar">
    <!-- Topbar -->
    <div class="topBar myCourseAssignment">
        <div class="container">
            <div class="row align-items-center px-2 px-sm-0 row_gap_8">
                <div class="d-flex logoWrapper">
                    <div class="logo">
                        <a class="" href="{{ url('/design/academy') }}">
                            <img src="img/navbar/Logo.svg" alt="logo" />
                        </a>
                    </div>
                    <div class="contactWrapper d-flex align-items-md-center">
                        <div class="header_text">
                            <p class="mb-0">
                                Live Session: Quantum Physics and New General relativity
                            </p>
                        </div>
                    </div>
                </div>
                <div class="languageSelector">
                    <div class="profile d-flex align-items-center">
                        <img
                            src="img/courseDetail/profilePic.svg"
                            alt="inoura"
                            class="profilePic"
                        />
                        <p class="profileName mb-0">by Jane Doe</p>
                    </div>
                    <div class="share_Wrapper">
                        <img src="img/dashboard/link.svg" alt="share" />
                        <p>Share</p>
                    </div>
                    <div class="leaveSessionWrapper">
                        <p>Leave the Session</p>
                        <div class="imge_Wrapper">
                            <img
                                src="img/mentor-session/boxArrowRight.svg"
                                alt="inoura"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="myMentorSession">
    <div class="container">
        <div class="row row_gap_20 flex-lg-row flex-column-reverse">
            <div class="col-lg-8">
                <div class="cardVideo">
                    <div class="videoContainer">
                        <img
                            src="img/mentor-session/videoImg.png"
                            alt="Video Thumbnail"
                            onclick="playVideo()"
                            class="videoThumbnail"
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
                <!-- Image for Courses -->

                <!-- Description and Benefit -->
                <div class="descriptionBenefit_Wrapper">
                    <div class="content">
                        <h6>Description</h6>
                        <p>
                            Think of a problem or challenge you had to solve at work
                            recently. How did you approach it? Did you find yourself
                            overwhelmed with the number of possible solutions? Were you
                            unsure how to even start? Design thinking can help.
                        </p>
                        <p>
                            Design thinking is a five-step human-centered process for
                            creative problem solving. It was popularized by the Stanford
                            d.school and IDEO, and has been used by organizations around
                            the world to solve knotty problems. It is all about
                            understanding your user's needs and solving the right problem.
                            By using this human-centered design approach, you can develop
                            products and services that truly help your user.
                        </p>
                        <p>
                            This course is meant to serve as an introduction to the
                            principles of design thinking and touches on ways you can
                            implement it in your workplace. The material is best suited
                            for students who are new to design thinking or want a
                            refresher on the core concepts. Luckily, design thinking can
                            be applied to almost any field; no matter what your
                            profession, design thinking can help you discover and
                            implement the best solutions to problems you encounter.
                        </p>
                    </div>
                    <div class="content">
                        <h6>Benefits</h6>
                        <div class="row flex-wrap">
                            <div class="col-md-6">
                                <ul class="">
                                    <li>
                                        Apply the 5-step design thinking process to a design
                                        challenge in your organization.
                                    </li>
                                    <li>
                                        Empathize with your user through interviews and
                                        observations, in order to take a human-centered approach
                                        to a problem.
                                    </li>
                                    <li>
                                        Define your core problem by synthesizing and analyzing
                                        information gathered during your empathy work.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="">
                                    <li>
                                        Ideate solutions to your problem by brainstorming using
                                        "How might we..." statements.
                                    </li>
                                    <li>
                                        Prototype your ideas rapidly to identify the best
                                        possible solution for your problem.
                                    </li>
                                    <li>
                                        Test your prototypes with users to gather feedback on
                                        your proposed solution.
                                    </li>
                                    <li>
                                        Pitch design thinking to your team or organization using
                                        storytelling.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Description and Benefit -->

                <!-- Mentor card -->
                <div class="mentorCard_Wrapper">
                    <div class="tabInstructor">
                        <h6>Mentor</h6>
                        <div class="instructorInfo">
                            <div class="card">
                                <div class="row align-items-start text-center text-md-left">
                                    <div class="col-md-3 pr-0 mb-3 mb-md-0">
                                        <img
                                            src="img/courseDetail/instructorImg.svg"
                                            class="card-img"
                                            alt="inoura"
                                        />
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body">
                                            <h4>Mark Smith</h4>
                                            <h5 class="card-title">
                                                Learning Experience Designer at Lyft
                                            </h5>
                                            <div class="card-text">
                                                <p>
                                                    Laura is a Learning Experience Designer at Lyft
                                                    and an Ideo U teaching team lead. In past lives,
                                                    she's been a User Experience Designer at SAP,
                                                    taught at the Stanford d.school, and has conducted
                                                    hundreds of design thinking workshops.
                                                </p>
                                                <p>
                                                    When she's not teaching people about using game
                                                    mechanics for learning or interview techniques for
                                                    empathy work, Laura can be found competing in
                                                    triathlons, riding hundreds of miles on her bike
                                                    for fun, or hunting for the best gluten-free
                                                    bakeries around.
                                                </p>
                                            </div>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mentor card -->
                <!-- mobile section more sessions -->
                <div class="moreSessionsWrap d-lg-none d-block">
                    <h3 class="heading">More Sessions</h3>
                    <div class="mySessionsMentor">
                        <div class="card courseCard">
                            <div class="cardImgWrap">
                                <div class="favourite">
                                    <img src="img/courseList/heart.svg" />
                                </div>
                                <img
                                    src="img/dashboard/img.png"
                                    alt="inoura"
                                    class="card-img-top cardImg"
                                />
                            </div>
                            <div class="card-body">
                                <div class="cardData">
                                    <div class="d-flex justify-content-between">
                                        <div class="profile d-flex align-items-center">
                                            <img
                                                src="img/courseDetail/profilePic.svg"
                                                alt="inoura"
                                                class="profilePic"
                                            />
                                            <p class="profileName mb-0">Mrs. Doe</p>
                                        </div>
                                        <div>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="25"
                                                height="24"
                                                viewBox="0 0 25 24"
                                                fill="none"
                                            >
                                                <g clip-path="url(#clip0_1025_1725)">
                                                    <path
                                                        d="M5.24145 4.57498C4.26632 5.55001 3.4928 6.70757 2.96506 7.98155C2.43732 9.25554 2.1657 10.621 2.1657 12C2.1657 13.3789 2.43732 14.7444 2.96506 16.0184C3.4928 17.2924 4.26632 18.4499 5.24145 19.425C5.37807 19.5664 5.45367 19.7559 5.45196 19.9525C5.45025 20.1492 5.37137 20.3373 5.23232 20.4763C5.09326 20.6154 4.90515 20.6943 4.7085 20.696C4.51186 20.6977 4.3224 20.6221 4.18095 20.4855C3.06658 19.3712 2.18262 18.0483 1.57952 16.5923C0.976425 15.1364 0.666016 13.5759 0.666016 12C0.666016 10.4241 0.976425 8.86358 1.57952 7.40763C2.18262 5.95169 3.06658 4.62879 4.18095 3.51448C4.3224 3.37786 4.51186 3.30226 4.7085 3.30397C4.90515 3.30568 5.09326 3.38456 5.23232 3.52361C5.37137 3.66267 5.45025 3.85078 5.45196 4.04743C5.45367 4.24407 5.37807 4.43352 5.24145 4.57498ZM8.42445 7.75798C7.29963 8.88314 6.66773 10.409 6.66773 12C6.66773 13.591 7.29963 15.1168 8.42445 16.242C8.49418 16.3117 8.5495 16.3945 8.58724 16.4856C8.62498 16.5767 8.6444 16.6744 8.6444 16.773C8.6444 16.8716 8.62498 16.9692 8.58724 17.0604C8.5495 17.1515 8.49418 17.2342 8.42445 17.304C8.35472 17.3737 8.27194 17.429 8.18083 17.4668C8.08972 17.5045 7.99207 17.5239 7.89345 17.5239C7.79484 17.5239 7.69719 17.5045 7.60608 17.4668C7.51497 17.429 7.43218 17.3737 7.36245 17.304C6.6658 16.6075 6.11318 15.7806 5.73615 14.8706C5.35911 13.9605 5.16505 12.9851 5.16505 12C5.16505 11.0149 5.35911 10.0395 5.73615 9.12939C6.11318 8.21932 6.6658 7.39244 7.36245 6.69598C7.50328 6.55515 7.69429 6.47603 7.89345 6.47603C8.09262 6.47603 8.28362 6.55515 8.42445 6.69598C8.56528 6.83681 8.6444 7.02781 8.6444 7.22698C8.6444 7.42614 8.56528 7.61715 8.42445 7.75798ZM16.9085 6.69598C16.9781 6.62613 17.0609 6.57072 17.152 6.53291C17.2431 6.4951 17.3408 6.47564 17.4395 6.47564C17.5381 6.47564 17.6358 6.4951 17.7269 6.53291C17.818 6.57072 17.9008 6.62613 17.9705 6.69598C18.6671 7.39244 19.2197 8.21932 19.5968 9.12939C19.9738 10.0395 20.1679 11.0149 20.1679 12C20.1679 12.9851 19.9738 13.9605 19.5968 14.8706C19.2197 15.7806 18.6671 16.6075 17.9705 17.304C17.9007 17.3737 17.8179 17.429 17.7268 17.4668C17.6357 17.5045 17.5381 17.5239 17.4395 17.5239C17.3408 17.5239 17.2432 17.5045 17.1521 17.4668C17.061 17.429 16.9782 17.3737 16.9085 17.304C16.8387 17.2342 16.7834 17.1515 16.7457 17.0604C16.7079 16.9692 16.6885 16.8716 16.6885 16.773C16.6885 16.6744 16.7079 16.5767 16.7457 16.4856C16.7834 16.3945 16.8387 16.3117 16.9085 16.242C18.0333 15.1168 18.6652 13.591 18.6652 12C18.6652 10.409 18.0333 8.88314 16.9085 7.75798C16.8386 7.68831 16.7832 7.60555 16.7454 7.51443C16.7076 7.42331 16.6881 7.32563 16.6881 7.22698C16.6881 7.12833 16.7076 7.03064 16.7454 6.93953C16.7832 6.84841 16.8386 6.76565 16.9085 6.69598ZM20.0915 3.51598C20.2321 3.37537 20.4228 3.29639 20.6217 3.29639C20.8206 3.29639 21.0113 3.37537 21.152 3.51598C23.4021 5.76637 24.6661 8.81839 24.6661 12.0007C24.6661 15.1831 23.4021 18.2351 21.152 20.4855C21.0105 20.6221 20.8211 20.6977 20.6244 20.696C20.4278 20.6943 20.2396 20.6154 20.1006 20.4763C19.9615 20.3373 19.8827 20.1492 19.8809 19.9525C19.8792 19.7559 19.9548 19.5664 20.0915 19.425C21.0666 18.4499 21.8401 17.2924 22.3678 16.0184C22.8956 14.7444 23.1672 13.3789 23.1672 12C23.1672 10.621 22.8956 9.25554 22.3678 7.98155C21.8401 6.70757 21.0666 5.55001 20.0915 4.57498C19.9508 4.43433 19.8719 4.2436 19.8719 4.04473C19.8719 3.84585 19.9508 3.65512 20.0915 3.51448V3.51598ZM15.6665 12C15.6665 12.7956 15.3504 13.5587 14.7878 14.1213C14.2252 14.6839 13.4621 15 12.6665 15C11.8708 15 11.1077 14.6839 10.5451 14.1213C9.98252 13.5587 9.66645 12.7956 9.66645 12C9.66645 11.2043 9.98252 10.4413 10.5451 9.87866C11.1077 9.31605 11.8708 8.99998 12.6665 8.99998C13.4621 8.99998 14.2252 9.31605 14.7878 9.87866C15.3504 10.4413 15.6665 11.2043 15.6665 12Z"
                                                        fill="#676A6C"
                                                    />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1025_1725">
                                                        <rect
                                                            width="24"
                                                            height="24"
                                                            fill="white"
                                                            transform="translate(0.666016)"
                                                        />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <h3 class="card-title">
                                        WordPress Theme Development with Bootstrap
                                    </h3>
                                    <p class="card-text">
                                        Discover a world of learning opportunities through our
                                        upcoming courses, where industry experts and thought
                                        leaders will guide you in acquiring new expertise,
                                        expanding your horizons, and reaching your full
                                        potential.
                                    </p>

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
                                                +12
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card courseCard">
                            <div class="cardImgWrap">
                                <div class="favourite">
                                    <img src="img/courseList/heart.svg" />
                                </div>
                                <img
                                    src="img/dashboard/img2.png"
                                    alt="inoura"
                                    class="card-img-top cardImg"
                                />
                            </div>
                            <div class="card-body">
                                <div class="cardData">
                                    <div class="d-flex justify-content-between">
                                        <div class="profile d-flex align-items-center">
                                            <img
                                                src="img/courseDetail/profilePic.svg"
                                                alt="inoura"
                                                class="profilePic"
                                            />
                                            <p class="profileName mb-0">Mrs. Doe</p>
                                        </div>
                                        <div>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="25"
                                                height="24"
                                                viewBox="0 0 25 24"
                                                fill="none"
                                            >
                                                <g clip-path="url(#clip0_1025_1725)">
                                                    <path
                                                        d="M5.24145 4.57498C4.26632 5.55001 3.4928 6.70757 2.96506 7.98155C2.43732 9.25554 2.1657 10.621 2.1657 12C2.1657 13.3789 2.43732 14.7444 2.96506 16.0184C3.4928 17.2924 4.26632 18.4499 5.24145 19.425C5.37807 19.5664 5.45367 19.7559 5.45196 19.9525C5.45025 20.1492 5.37137 20.3373 5.23232 20.4763C5.09326 20.6154 4.90515 20.6943 4.7085 20.696C4.51186 20.6977 4.3224 20.6221 4.18095 20.4855C3.06658 19.3712 2.18262 18.0483 1.57952 16.5923C0.976425 15.1364 0.666016 13.5759 0.666016 12C0.666016 10.4241 0.976425 8.86358 1.57952 7.40763C2.18262 5.95169 3.06658 4.62879 4.18095 3.51448C4.3224 3.37786 4.51186 3.30226 4.7085 3.30397C4.90515 3.30568 5.09326 3.38456 5.23232 3.52361C5.37137 3.66267 5.45025 3.85078 5.45196 4.04743C5.45367 4.24407 5.37807 4.43352 5.24145 4.57498ZM8.42445 7.75798C7.29963 8.88314 6.66773 10.409 6.66773 12C6.66773 13.591 7.29963 15.1168 8.42445 16.242C8.49418 16.3117 8.5495 16.3945 8.58724 16.4856C8.62498 16.5767 8.6444 16.6744 8.6444 16.773C8.6444 16.8716 8.62498 16.9692 8.58724 17.0604C8.5495 17.1515 8.49418 17.2342 8.42445 17.304C8.35472 17.3737 8.27194 17.429 8.18083 17.4668C8.08972 17.5045 7.99207 17.5239 7.89345 17.5239C7.79484 17.5239 7.69719 17.5045 7.60608 17.4668C7.51497 17.429 7.43218 17.3737 7.36245 17.304C6.6658 16.6075 6.11318 15.7806 5.73615 14.8706C5.35911 13.9605 5.16505 12.9851 5.16505 12C5.16505 11.0149 5.35911 10.0395 5.73615 9.12939C6.11318 8.21932 6.6658 7.39244 7.36245 6.69598C7.50328 6.55515 7.69429 6.47603 7.89345 6.47603C8.09262 6.47603 8.28362 6.55515 8.42445 6.69598C8.56528 6.83681 8.6444 7.02781 8.6444 7.22698C8.6444 7.42614 8.56528 7.61715 8.42445 7.75798ZM16.9085 6.69598C16.9781 6.62613 17.0609 6.57072 17.152 6.53291C17.2431 6.4951 17.3408 6.47564 17.4395 6.47564C17.5381 6.47564 17.6358 6.4951 17.7269 6.53291C17.818 6.57072 17.9008 6.62613 17.9705 6.69598C18.6671 7.39244 19.2197 8.21932 19.5968 9.12939C19.9738 10.0395 20.1679 11.0149 20.1679 12C20.1679 12.9851 19.9738 13.9605 19.5968 14.8706C19.2197 15.7806 18.6671 16.6075 17.9705 17.304C17.9007 17.3737 17.8179 17.429 17.7268 17.4668C17.6357 17.5045 17.5381 17.5239 17.4395 17.5239C17.3408 17.5239 17.2432 17.5045 17.1521 17.4668C17.061 17.429 16.9782 17.3737 16.9085 17.304C16.8387 17.2342 16.7834 17.1515 16.7457 17.0604C16.7079 16.9692 16.6885 16.8716 16.6885 16.773C16.6885 16.6744 16.7079 16.5767 16.7457 16.4856C16.7834 16.3945 16.8387 16.3117 16.9085 16.242C18.0333 15.1168 18.6652 13.591 18.6652 12C18.6652 10.409 18.0333 8.88314 16.9085 7.75798C16.8386 7.68831 16.7832 7.60555 16.7454 7.51443C16.7076 7.42331 16.6881 7.32563 16.6881 7.22698C16.6881 7.12833 16.7076 7.03064 16.7454 6.93953C16.7832 6.84841 16.8386 6.76565 16.9085 6.69598ZM20.0915 3.51598C20.2321 3.37537 20.4228 3.29639 20.6217 3.29639C20.8206 3.29639 21.0113 3.37537 21.152 3.51598C23.4021 5.76637 24.6661 8.81839 24.6661 12.0007C24.6661 15.1831 23.4021 18.2351 21.152 20.4855C21.0105 20.6221 20.8211 20.6977 20.6244 20.696C20.4278 20.6943 20.2396 20.6154 20.1006 20.4763C19.9615 20.3373 19.8827 20.1492 19.8809 19.9525C19.8792 19.7559 19.9548 19.5664 20.0915 19.425C21.0666 18.4499 21.8401 17.2924 22.3678 16.0184C22.8956 14.7444 23.1672 13.3789 23.1672 12C23.1672 10.621 22.8956 9.25554 22.3678 7.98155C21.8401 6.70757 21.0666 5.55001 20.0915 4.57498C19.9508 4.43433 19.8719 4.2436 19.8719 4.04473C19.8719 3.84585 19.9508 3.65512 20.0915 3.51448V3.51598ZM15.6665 12C15.6665 12.7956 15.3504 13.5587 14.7878 14.1213C14.2252 14.6839 13.4621 15 12.6665 15C11.8708 15 11.1077 14.6839 10.5451 14.1213C9.98252 13.5587 9.66645 12.7956 9.66645 12C9.66645 11.2043 9.98252 10.4413 10.5451 9.87866C11.1077 9.31605 11.8708 8.99998 12.6665 8.99998C13.4621 8.99998 14.2252 9.31605 14.7878 9.87866C15.3504 10.4413 15.6665 11.2043 15.6665 12Z"
                                                        fill="#676A6C"
                                                    />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1025_1725">
                                                        <rect
                                                            width="24"
                                                            height="24"
                                                            fill="white"
                                                            transform="translate(0.666016)"
                                                        />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <h3 class="card-title">
                                        WordPress Theme Development with Bootstrap
                                    </h3>
                                    <p class="card-text">
                                        Discover a world of learning opportunities through our
                                        upcoming courses, where industry experts and thought
                                        leaders will guide you in acquiring new expertise,
                                        expanding your horizons, and reaching your full
                                        potential.
                                    </p>

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
                                                +12
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mobile section more sessions -->
            </div>
            <div class="col-lg-4">
                <!-- // rightColumn -->
                <!-- live Comments -->
                <div class="chatBoxWrap">
                    <div class="card">
                        <div class="cardHeader text-center">
                            <span>Live Comments</span>
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
                                <div class="loadMoreInnstructor instructorProfile">+12</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="chatBox">
                                <li class="agent msgWrap">
                      <span class="chatImg">
                        <img
                            src="img/dashboard/1.svg"
                            alt="Admin"
                            class="img-circle"
                        />
                      </span>
                                    <div class="chatBody">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Curabitur bibendum ornare dolor, quis
                                            ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="agent msgWrap">
                      <span class="chatImg">
                        <img
                            src="img/dashboard/1.svg"
                            alt="Admin"
                            class="img-circle"
                        />
                      </span>
                                    <div class="chatBody">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Curabitur bibendum ornare dolor, quis
                                            ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="agent msgWrap">
                      <span class="chatImg">
                        <img
                            src="img/dashboard/1.svg"
                            alt="Admin"
                            class="img-circle"
                        />
                      </span>
                                    <div class="chatBody">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Curabitur bibendum ornare dolor, quis
                                            ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="agent msgWrap">
                      <span class="chatImg">
                        <img
                            src="img/dashboard/1.svg"
                            alt="Admin"
                            class="img-circle"
                        />
                      </span>
                                    <div class="chatBody">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Curabitur bibendum ornare dolor, quis
                                            ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="admin msgWrap">
                                    <div class="chatBody">
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    <span class="chatImg">
                        <img
                            src="img/dashboard/2.svg"
                            alt="Agent"
                            class="img-circle"
                        />
                      </span>
                                </li>
                                <li class="admin msgWrap">
                                    <div class="chatBody">
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    <span class="chatImg">
                        <img
                            src="img/dashboard/2.svg"
                            alt="Agent"
                            class="img-circle"
                        />
                      </span>
                                </li>
                                <li class="admin msgWrap">
                                    <div class="chatBody">
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    <span class="chatImg">
                        <img
                            src="img/dashboard/2.svg"
                            alt="Agent"
                            class="img-circle"
                        />
                      </span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <div class="input-group">
                                <input
                                    id="btn-input"
                                    type="text"
                                    class="form-control input-sm"
                                    placeholder="Type a comment..."
                                />
                                <span class="input-group-btn">
                      <button class="btn" id="btn-chat">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            fill="none"
                        >
                          <g clip-path="url(#clip0_266_9817)">
                            <path
                                d="M15.9647 0.685989C16.0011 0.595125 16.01 0.495585 15.9904 0.399709C15.9707 0.303832 15.9233 0.215836 15.8541 0.14663C15.7849 0.0774234 15.6969 0.0300499 15.601 0.0103825C15.5052 -0.00928499 15.4056 -0.000381488 15.3147 0.0359892L0.76775 5.85499H0.76675L0.31475 6.03499C0.22914 6.06914 0.154635 6.12629 0.0994654 6.20012C0.0442956 6.27395 0.0106078 6.3616 0.00212322 6.45338C-0.00636132 6.54516 0.0106876 6.63749 0.0513867 6.72019C0.0920859 6.80289 0.154851 6.87272 0.23275 6.92199L0.64275 7.18199L0.64375 7.18399L5.63875 10.362L8.81675 15.357L8.81875 15.359L9.07875 15.769C9.12817 15.8466 9.19805 15.909 9.28068 15.9495C9.36332 15.9899 9.45551 16.0068 9.54711 15.9982C9.63871 15.9896 9.72617 15.9559 9.79985 15.9009C9.87354 15.8458 9.9306 15.7714 9.96475 15.686L15.9647 0.685989ZM14.1317 2.57599L6.63775 10.07L6.42275 9.73199C6.38336 9.66996 6.33078 9.61738 6.26875 9.57799L5.93075 9.36299L13.4247 1.86899L14.6027 1.39799L14.1327 2.57599H14.1317Z"
                                fill="#676A6C"
                            />
                          </g>
                          <defs>
                            <clipPath id="clip0_266_9817">
                              <rect width="16" height="16" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- live Comments -->
                <!--desktop section more sessions -->
                <div class="moreSessionsWrap d-lg-block d-none">
                    <h3 class="heading">More Sessions</h3>
                    <div class="mySessionsMentor">
                        <div class="card courseCard">
                            <div class="cardImgWrap">
                                <div class="favourite">
                                    <img src="img/courseList/heart.svg" />
                                </div>
                                <img
                                    src="img/dashboard/img.png"
                                    alt="inoura"
                                    class="card-img-top cardImg"
                                />
                            </div>
                            <div class="card-body">
                                <div class="cardData">
                                    <div class="d-flex justify-content-between">
                                        <div class="profile d-flex align-items-center">
                                            <img
                                                src="img/courseDetail/profilePic.svg"
                                                alt="inoura"
                                                class="profilePic"
                                            />
                                            <p class="profileName mb-0">Mrs. Doe</p>
                                        </div>
                                        <div>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="25"
                                                height="24"
                                                viewBox="0 0 25 24"
                                                fill="none"
                                            >
                                                <g clip-path="url(#clip0_1025_1725)">
                                                    <path
                                                        d="M5.24145 4.57498C4.26632 5.55001 3.4928 6.70757 2.96506 7.98155C2.43732 9.25554 2.1657 10.621 2.1657 12C2.1657 13.3789 2.43732 14.7444 2.96506 16.0184C3.4928 17.2924 4.26632 18.4499 5.24145 19.425C5.37807 19.5664 5.45367 19.7559 5.45196 19.9525C5.45025 20.1492 5.37137 20.3373 5.23232 20.4763C5.09326 20.6154 4.90515 20.6943 4.7085 20.696C4.51186 20.6977 4.3224 20.6221 4.18095 20.4855C3.06658 19.3712 2.18262 18.0483 1.57952 16.5923C0.976425 15.1364 0.666016 13.5759 0.666016 12C0.666016 10.4241 0.976425 8.86358 1.57952 7.40763C2.18262 5.95169 3.06658 4.62879 4.18095 3.51448C4.3224 3.37786 4.51186 3.30226 4.7085 3.30397C4.90515 3.30568 5.09326 3.38456 5.23232 3.52361C5.37137 3.66267 5.45025 3.85078 5.45196 4.04743C5.45367 4.24407 5.37807 4.43352 5.24145 4.57498ZM8.42445 7.75798C7.29963 8.88314 6.66773 10.409 6.66773 12C6.66773 13.591 7.29963 15.1168 8.42445 16.242C8.49418 16.3117 8.5495 16.3945 8.58724 16.4856C8.62498 16.5767 8.6444 16.6744 8.6444 16.773C8.6444 16.8716 8.62498 16.9692 8.58724 17.0604C8.5495 17.1515 8.49418 17.2342 8.42445 17.304C8.35472 17.3737 8.27194 17.429 8.18083 17.4668C8.08972 17.5045 7.99207 17.5239 7.89345 17.5239C7.79484 17.5239 7.69719 17.5045 7.60608 17.4668C7.51497 17.429 7.43218 17.3737 7.36245 17.304C6.6658 16.6075 6.11318 15.7806 5.73615 14.8706C5.35911 13.9605 5.16505 12.9851 5.16505 12C5.16505 11.0149 5.35911 10.0395 5.73615 9.12939C6.11318 8.21932 6.6658 7.39244 7.36245 6.69598C7.50328 6.55515 7.69429 6.47603 7.89345 6.47603C8.09262 6.47603 8.28362 6.55515 8.42445 6.69598C8.56528 6.83681 8.6444 7.02781 8.6444 7.22698C8.6444 7.42614 8.56528 7.61715 8.42445 7.75798ZM16.9085 6.69598C16.9781 6.62613 17.0609 6.57072 17.152 6.53291C17.2431 6.4951 17.3408 6.47564 17.4395 6.47564C17.5381 6.47564 17.6358 6.4951 17.7269 6.53291C17.818 6.57072 17.9008 6.62613 17.9705 6.69598C18.6671 7.39244 19.2197 8.21932 19.5968 9.12939C19.9738 10.0395 20.1679 11.0149 20.1679 12C20.1679 12.9851 19.9738 13.9605 19.5968 14.8706C19.2197 15.7806 18.6671 16.6075 17.9705 17.304C17.9007 17.3737 17.8179 17.429 17.7268 17.4668C17.6357 17.5045 17.5381 17.5239 17.4395 17.5239C17.3408 17.5239 17.2432 17.5045 17.1521 17.4668C17.061 17.429 16.9782 17.3737 16.9085 17.304C16.8387 17.2342 16.7834 17.1515 16.7457 17.0604C16.7079 16.9692 16.6885 16.8716 16.6885 16.773C16.6885 16.6744 16.7079 16.5767 16.7457 16.4856C16.7834 16.3945 16.8387 16.3117 16.9085 16.242C18.0333 15.1168 18.6652 13.591 18.6652 12C18.6652 10.409 18.0333 8.88314 16.9085 7.75798C16.8386 7.68831 16.7832 7.60555 16.7454 7.51443C16.7076 7.42331 16.6881 7.32563 16.6881 7.22698C16.6881 7.12833 16.7076 7.03064 16.7454 6.93953C16.7832 6.84841 16.8386 6.76565 16.9085 6.69598ZM20.0915 3.51598C20.2321 3.37537 20.4228 3.29639 20.6217 3.29639C20.8206 3.29639 21.0113 3.37537 21.152 3.51598C23.4021 5.76637 24.6661 8.81839 24.6661 12.0007C24.6661 15.1831 23.4021 18.2351 21.152 20.4855C21.0105 20.6221 20.8211 20.6977 20.6244 20.696C20.4278 20.6943 20.2396 20.6154 20.1006 20.4763C19.9615 20.3373 19.8827 20.1492 19.8809 19.9525C19.8792 19.7559 19.9548 19.5664 20.0915 19.425C21.0666 18.4499 21.8401 17.2924 22.3678 16.0184C22.8956 14.7444 23.1672 13.3789 23.1672 12C23.1672 10.621 22.8956 9.25554 22.3678 7.98155C21.8401 6.70757 21.0666 5.55001 20.0915 4.57498C19.9508 4.43433 19.8719 4.2436 19.8719 4.04473C19.8719 3.84585 19.9508 3.65512 20.0915 3.51448V3.51598ZM15.6665 12C15.6665 12.7956 15.3504 13.5587 14.7878 14.1213C14.2252 14.6839 13.4621 15 12.6665 15C11.8708 15 11.1077 14.6839 10.5451 14.1213C9.98252 13.5587 9.66645 12.7956 9.66645 12C9.66645 11.2043 9.98252 10.4413 10.5451 9.87866C11.1077 9.31605 11.8708 8.99998 12.6665 8.99998C13.4621 8.99998 14.2252 9.31605 14.7878 9.87866C15.3504 10.4413 15.6665 11.2043 15.6665 12Z"
                                                        fill="#676A6C"
                                                    />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1025_1725">
                                                        <rect
                                                            width="24"
                                                            height="24"
                                                            fill="white"
                                                            transform="translate(0.666016)"
                                                        />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <h3 class="card-title">
                                        WordPress Theme Development with Bootstrap
                                    </h3>
                                    <p class="card-text">
                                        Discover a world of learning opportunities through our
                                        upcoming courses, where industry experts and thought
                                        leaders will guide you in acquiring new expertise,
                                        expanding your horizons, and reaching your full
                                        potential.
                                    </p>

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
                                                +12
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card courseCard">
                            <div class="cardImgWrap">
                                <div class="favourite">
                                    <img src="img/courseList/heart.svg" />
                                </div>
                                <img
                                    src="img/dashboard/img2.png"
                                    alt="inoura"
                                    class="card-img-top cardImg"
                                />
                            </div>
                            <div class="card-body">
                                <div class="cardData">
                                    <div class="d-flex justify-content-between">
                                        <div class="profile d-flex align-items-center">
                                            <img
                                                src="img/courseDetail/profilePic.svg"
                                                alt="inoura"
                                                class="profilePic"
                                            />
                                            <p class="profileName mb-0">Mrs. Doe</p>
                                        </div>
                                        <div>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="25"
                                                height="24"
                                                viewBox="0 0 25 24"
                                                fill="none"
                                            >
                                                <g clip-path="url(#clip0_1025_1725)">
                                                    <path
                                                        d="M5.24145 4.57498C4.26632 5.55001 3.4928 6.70757 2.96506 7.98155C2.43732 9.25554 2.1657 10.621 2.1657 12C2.1657 13.3789 2.43732 14.7444 2.96506 16.0184C3.4928 17.2924 4.26632 18.4499 5.24145 19.425C5.37807 19.5664 5.45367 19.7559 5.45196 19.9525C5.45025 20.1492 5.37137 20.3373 5.23232 20.4763C5.09326 20.6154 4.90515 20.6943 4.7085 20.696C4.51186 20.6977 4.3224 20.6221 4.18095 20.4855C3.06658 19.3712 2.18262 18.0483 1.57952 16.5923C0.976425 15.1364 0.666016 13.5759 0.666016 12C0.666016 10.4241 0.976425 8.86358 1.57952 7.40763C2.18262 5.95169 3.06658 4.62879 4.18095 3.51448C4.3224 3.37786 4.51186 3.30226 4.7085 3.30397C4.90515 3.30568 5.09326 3.38456 5.23232 3.52361C5.37137 3.66267 5.45025 3.85078 5.45196 4.04743C5.45367 4.24407 5.37807 4.43352 5.24145 4.57498ZM8.42445 7.75798C7.29963 8.88314 6.66773 10.409 6.66773 12C6.66773 13.591 7.29963 15.1168 8.42445 16.242C8.49418 16.3117 8.5495 16.3945 8.58724 16.4856C8.62498 16.5767 8.6444 16.6744 8.6444 16.773C8.6444 16.8716 8.62498 16.9692 8.58724 17.0604C8.5495 17.1515 8.49418 17.2342 8.42445 17.304C8.35472 17.3737 8.27194 17.429 8.18083 17.4668C8.08972 17.5045 7.99207 17.5239 7.89345 17.5239C7.79484 17.5239 7.69719 17.5045 7.60608 17.4668C7.51497 17.429 7.43218 17.3737 7.36245 17.304C6.6658 16.6075 6.11318 15.7806 5.73615 14.8706C5.35911 13.9605 5.16505 12.9851 5.16505 12C5.16505 11.0149 5.35911 10.0395 5.73615 9.12939C6.11318 8.21932 6.6658 7.39244 7.36245 6.69598C7.50328 6.55515 7.69429 6.47603 7.89345 6.47603C8.09262 6.47603 8.28362 6.55515 8.42445 6.69598C8.56528 6.83681 8.6444 7.02781 8.6444 7.22698C8.6444 7.42614 8.56528 7.61715 8.42445 7.75798ZM16.9085 6.69598C16.9781 6.62613 17.0609 6.57072 17.152 6.53291C17.2431 6.4951 17.3408 6.47564 17.4395 6.47564C17.5381 6.47564 17.6358 6.4951 17.7269 6.53291C17.818 6.57072 17.9008 6.62613 17.9705 6.69598C18.6671 7.39244 19.2197 8.21932 19.5968 9.12939C19.9738 10.0395 20.1679 11.0149 20.1679 12C20.1679 12.9851 19.9738 13.9605 19.5968 14.8706C19.2197 15.7806 18.6671 16.6075 17.9705 17.304C17.9007 17.3737 17.8179 17.429 17.7268 17.4668C17.6357 17.5045 17.5381 17.5239 17.4395 17.5239C17.3408 17.5239 17.2432 17.5045 17.1521 17.4668C17.061 17.429 16.9782 17.3737 16.9085 17.304C16.8387 17.2342 16.7834 17.1515 16.7457 17.0604C16.7079 16.9692 16.6885 16.8716 16.6885 16.773C16.6885 16.6744 16.7079 16.5767 16.7457 16.4856C16.7834 16.3945 16.8387 16.3117 16.9085 16.242C18.0333 15.1168 18.6652 13.591 18.6652 12C18.6652 10.409 18.0333 8.88314 16.9085 7.75798C16.8386 7.68831 16.7832 7.60555 16.7454 7.51443C16.7076 7.42331 16.6881 7.32563 16.6881 7.22698C16.6881 7.12833 16.7076 7.03064 16.7454 6.93953C16.7832 6.84841 16.8386 6.76565 16.9085 6.69598ZM20.0915 3.51598C20.2321 3.37537 20.4228 3.29639 20.6217 3.29639C20.8206 3.29639 21.0113 3.37537 21.152 3.51598C23.4021 5.76637 24.6661 8.81839 24.6661 12.0007C24.6661 15.1831 23.4021 18.2351 21.152 20.4855C21.0105 20.6221 20.8211 20.6977 20.6244 20.696C20.4278 20.6943 20.2396 20.6154 20.1006 20.4763C19.9615 20.3373 19.8827 20.1492 19.8809 19.9525C19.8792 19.7559 19.9548 19.5664 20.0915 19.425C21.0666 18.4499 21.8401 17.2924 22.3678 16.0184C22.8956 14.7444 23.1672 13.3789 23.1672 12C23.1672 10.621 22.8956 9.25554 22.3678 7.98155C21.8401 6.70757 21.0666 5.55001 20.0915 4.57498C19.9508 4.43433 19.8719 4.2436 19.8719 4.04473C19.8719 3.84585 19.9508 3.65512 20.0915 3.51448V3.51598ZM15.6665 12C15.6665 12.7956 15.3504 13.5587 14.7878 14.1213C14.2252 14.6839 13.4621 15 12.6665 15C11.8708 15 11.1077 14.6839 10.5451 14.1213C9.98252 13.5587 9.66645 12.7956 9.66645 12C9.66645 11.2043 9.98252 10.4413 10.5451 9.87866C11.1077 9.31605 11.8708 8.99998 12.6665 8.99998C13.4621 8.99998 14.2252 9.31605 14.7878 9.87866C15.3504 10.4413 15.6665 11.2043 15.6665 12Z"
                                                        fill="#676A6C"
                                                    />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1025_1725">
                                                        <rect
                                                            width="24"
                                                            height="24"
                                                            fill="white"
                                                            transform="translate(0.666016)"
                                                        />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <h3 class="card-title">
                                        WordPress Theme Development with Bootstrap
                                    </h3>
                                    <p class="card-text">
                                        Discover a world of learning opportunities through our
                                        upcoming courses, where industry experts and thought
                                        leaders will guide you in acquiring new expertise,
                                        expanding your horizons, and reaching your full
                                        potential.
                                    </p>

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
                                                +12
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- desktop section more sessions -->
                <!-- right Tabbing -->
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
