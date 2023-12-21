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
    <link href="https://fonts.googleapis.com/css2?family=McLaren&display=swap" rel="stylesheet" />
    <title>My Courses</title>
</head>

<body>
    <div class="navbarWraper assignmentProgressNavBar">
        <!-- Topbar -->
        <div class="topBar myCourseAssignment">
            <div class="container">
                <div class="row align-items-center justify-content-center px-2 px-sm-0 myCourseAssignmentRow col_gap_8 row_gap_8 flex-xl-nowrap">
                    <div class="d-flex logoWrapper">
                        <div class="logo d-lg-block d-none">
                            <a class="" href="{{ url('/design/academy') }}">
                                <img src="img/navbar/Logo.svg" alt="logo" />
                            </a>
                        </div>
                        <div class="contactWrapper d-flex align-items-md-center">
                            <div class="header_text">
                                <p>
                                    Master Interviewing Users & Customers | GRAMS Certification
                                </p>
                                <div class="progress myCoureseProgressBar">
                                    <div class="progress-bar" style="width: 44%" role="progressbar" aria-valuenow="44%" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="durationContent">
                                    <p class="startDate dateStyles">Starts: 09 Oct 2023</p>

                                    <p class="endDate mb-0 dateStyles">Ends: 28 Oct 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="languageSelector">
                        <div class="profile d-flex align-items-center">
                            <img src="img/courseDetail/profilePic.svg" alt="inoura" class="profilePic" />
                            <p class="profileName mb-0">by Jane Doe</p>
                        </div>
                        <div class="assignment_Wrapper">
                            <div class="imge_Wrapper">
                                <img src="img/courseDetail/listOl.svg" alt="inoura" />
                            </div>
                            <p>Assignments <span>(1)</span></p>
                        </div>
                        <div class="share_Wrapper">
                            <img src="img/dashboard/link.svg" alt="share" />
                            <p>Share</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="myAssignmentBrief">
        <div class="container">
            <!-- newAssignments details -->
            <div class="newAssignments">
                <div class="headingWrap d-flex align-items-center justify-content-between">
                    <h3>New</h3>
                </div>
                <div class="assignmentsCardWrap">
                    <div class="card">
                        <div class="d-flex justify-content-between w-100 cardHeading">
                            <div>
                                <h6 class="card-title">Tags Test</h6>
                                <p class="card-text">Frontend basics: HTML and CSS</p>
                            </div>
                            <div class="submitBtnWrap">
                                <a href="#" class="btn">Show more
                                    <img src="img/dashboard/plusCircle.svg" alt="inoura" /></a>
                            </div>
                        </div>
                        <div class="cardBodyWrap d-flex">
                            <div class="w-100">
                                <div class="card-body p-0">
                                    <div class="profile d-flex align-items-center">
                                        <img src="img/courseDetail/profilePic.svg" alt="inoura" class="profilePic" />
                                        <p class="profileName mb-0">by Jane Doe</p>
                                    </div>
                                    <div class="assignmentCompTag">
                                        <button class="btn btnExpected">
                                            <img src="/public/design/img/starsIcon/hourglass-bottom.svg" alt="inoura" />
                                            Expected
                                        </button>
                                    </div>
                                </div>
                                <div class="progressBarWrap">
                                    <div class="progress myCoureseProgressBar">
                                        <div class="progress-bar" style="width: 44%" role="progressbar" aria-valuenow="44%" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="durationContent">
                                        <p class="startDate dateStyles">Assigned: 02 Oct 2023</p>

                                        <p class="endDate mb-0 dateStyles">
                                            Deadline: 14 Oct 2023
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="scoresWrap">
                                <p>Score:</p>
                                <p><span></span>-/10</p>
                            </div>
                        </div>
                        <div class="accordionWrap">
                            <div class="assignmentAccordion" id="myAssignmentBrief">
                                <div class="assignmentDescription">
                                    <button class="btn accordionBtn d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#assginmentBrief" aria-expanded="true" aria-controls="assginmentBrief">
                                        <h6>Brief</h6>
                                        <img src="img/courseList/downIcon.svg" />
                                    </button>

                                    <div id="assginmentBrief" class="collapse show" aria-labelledby="headingOne" data-parent="#myAssignmentBrief">
                                        <div class="accordionBody">
                                            <div class="content">
                                                <p>Here's what needs to be done:</p>
                                                <ol class="">
                                                    <li>
                                                        Open the Figma file with the design system. The
                                                        link to this file is located in the Individual
                                                        Variations section. Click "Open in Figma" to have
                                                        the file appear in your drafts.
                                                    </li>
                                                    <li>
                                                        Return to the Individual Variations section and
                                                        select the next Figma link to find PNG images of
                                                        screens.
                                                    </li>
                                                    <li>
                                                        Inside the design system file, create a separate
                                                        page. Then, copy and paste your version of the
                                                        images for replication into this page.
                                                    </li>
                                                    <li>
                                                        Using the PNG images as references, reproduce
                                                        screens as follows:
                                                        <ul>
                                                            <li>
                                                                Use only components from the design system; do
                                                                not create your own.
                                                            </li>
                                                            <li>
                                                                Do not detach components; adjust their
                                                                appearance using the component parameters on
                                                                the right-hand panel.
                                                            </li>
                                                            <li>
                                                                Configure typography and colors using the
                                                                styles.
                                                            </li>
                                                            <li>
                                                                You may use additional auto-layout for
                                                                organizing components and elements as needed.
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="assignmentDescription">
                                    <button class="btn accordionBtn d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#assginmentEducation" aria-expanded="true" aria-controls="assginmentEducation">
                                        <h6>Educational materials</h6>
                                        <img src="img/courseList/downIcon.svg" />
                                    </button>

                                    <div id="assginmentEducation" class="collapse w-100" aria-labelledby="headingOne" data-parent="#myAssignmentBrief">
                                        <div class="accordionBody">
                                            <div class="content">
                                                <div class="educationMaterial">
                                                    <div class="">
                                                        <div class="card educationCard">
                                                            <img src="img/dashboard/img.png" alt="inoura" class="card-img-top cardImg" />
                                                            <div class="card-body">
                                                                <div class="cardData">
                                                                    <h3 class="card-title">
                                                                        <span>Video:</span> Design system
                                                                        organization in Figma
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div class="card educationCard">
                                                            <img src="img/dashboard/img.png" alt="inoura" class="card-img-top cardImg" />
                                                            <div class="card-body">
                                                                <div class="cardData">
                                                                    <h3 class="card-title">
                                                                        <span>Video:</span> Design system
                                                                        organization in Figma
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div class="card educationCard">
                                                            <img src="img/dashboard/img.png" alt="inoura" class="card-img-top cardImg" />
                                                            <div class="card-body">
                                                                <div class="cardData">
                                                                    <h3 class="card-title">
                                                                        <span>Video:</span> Design system
                                                                        organization in Figma
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="assignmentDescription">
                                    <button class="btn accordionBtn d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#assginmentLoadingWork" aria-expanded="true" aria-controls="assginmentLoadingWork">
                                        <h6>Loading work</h6>
                                        <img src="img/courseList/downIcon.svg" />
                                    </button>

                                    <div id="assginmentLoadingWork" class="collapse w-100" aria-labelledby="headingOne" data-parent="#myAssignmentBrief">
                                        <div class="accordionBody">
                                            <div class="content">
                                                <div class="LoadingWorkWrap">
                                                    <form class="w-100">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control border-0" id="assignmentBriedLink" aria-describedby="emailHelp" placeholder="Start writing something..." />
                                                        </div>
                                                    </form>
                                                    <p id="selectedItems" class="d-flex flex-wrap col_gap_8 row_gap_8"></p>
                                                    <div class="sendBtnWrap">
                                                        <div class="lectureDetails d-flex align-items-center">
                                                            <div class="icons linkIcon" id="uploadLinkIcon">
                                                                <img src="img/dashboard/link-45deg.svg" alt="inoura" />
                                                            </div>
                                                            <div class="icons fileIcon" id="uploadFileIcon">
                                                                <img src="img/dashboard/paperclip.svg" alt="inoura" />
                                                            </div>
                                                            <input type="file" id="fileInput" multiple accept="application/*, .pdf, .doc, .txt" style="display: none" />
                                                            <div class="icons galleryIcon" id="uploadImageIcon">
                                                                <img src="img/dashboard/galleryIcon.svg" alt="inoura" />
                                                            </div>
                                                            <input type="file" id="imageInput" multiple accept="image/*" style="display: none" />
                                                        </div>
                                                        <a href="#">Send<img src="img/starsIcon/sendIcon.svg" alt="inoura" />
                                                        </a>
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

            <!-- Accepted Assignment -->
            <div class="acceptedAssignment">
                <div class="headingWrap d-flex align-items-center justify-content-between">
                    <h3>Accepted</h3>
                </div>
                <div class="assignmentsCardWrap">
                    <div class="card">
                        <div class="d-flex justify-content-between w-100 cardHeading">
                            <div>
                                <h6 class="card-title">Tags Test</h6>
                                <p class="card-text">Frontend basics: HTML and CSS</p>
                            </div>
                        </div>
                        <div class="cardBodyWrap d-flex">
                            <div class="w-100">
                                <div class="card-body p-0">
                                    <div class="profile d-flex align-items-center">
                                        <img src="img/courseDetail/profilePic.svg" alt="inoura" class="profilePic" />
                                        <p class="profileName mb-0">by Jane Doe</p>
                                    </div>
                                    <div class="assignmentSubmitWrap">
                                        <div class="submitDate">12 Oct 2023</div>
                                        <div class="assignmentCompTag">
                                            <button class="btn btnAccepted">
                                                <img src="/public/design/img/starsIcon/check2-all.svg" alt="inoura" />
                                                Accepted
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="progressBarWrap">
                                    <div class="progress myCoureseProgressBar">
                                        <div class="progress-bar" style="width: 44%" role="progressbar" aria-valuenow="44%" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="durationContent">
                                        <p class="startDate dateStyles">Assigned: 02 Oct 2023</p>

                                        <p class="endDate mb-0 dateStyles">
                                            Deadline: 14 Oct 2023
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="scoresWrap">
                                <p>Score:</p>
                                <p><span></span>8/10</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="d-flex justify-content-between w-100 cardHeading">
                            <div>
                                <h6 class="card-title">Tags Test</h6>
                                <p class="card-text">Frontend basics: HTML and CSS</p>
                            </div>
                        </div>
                        <div class="cardBodyWrap d-flex">
                            <div class="w-100">
                                <div class="card-body p-0">
                                    <div class="profile d-flex align-items-center">
                                        <img src="img/courseDetail/profilePic.svg" alt="inoura" class="profilePic" />
                                        <p class="profileName mb-0">by Jane Doe</p>
                                    </div>
                                    <div class="assignmentSubmitWrap">
                                        <div class="submitDate">12 Oct 2023</div>
                                        <div class="assignmentCompTag">
                                            <button class="btn btnAccepted">
                                                <img src="/public/design/img/starsIcon/check2-all.svg" alt="inoura" />
                                                Accepted
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="progressBarWrap">
                                    <div class="progress myCoureseProgressBar">
                                        <div class="progress-bar" style="width: 44%" role="progressbar" aria-valuenow="44%" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="durationContent">
                                        <p class="startDate dateStyles">Assigned: 02 Oct 2023</p>

                                        <p class="endDate mb-0 dateStyles">
                                            Deadline: 14 Oct 2023
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="scoresWrap">
                                <p>Score:</p>
                                <p><span></span>8/10</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="d-flex justify-content-between w-100 cardHeading">
                            <div>
                                <h6 class="card-title">Tags Test</h6>
                                <p class="card-text">Frontend basics: HTML and CSS</p>
                            </div>
                        </div>
                        <div class="cardBodyWrap d-flex">
                            <div class="w-100">
                                <div class="card-body p-0">
                                    <div class="profile d-flex align-items-center">
                                        <img src="img/courseDetail/profilePic.svg" alt="inoura" class="profilePic" />
                                        <p class="profileName mb-0">by Jane Doe</p>
                                    </div>
                                    <div class="assignmentSubmitWrap">
                                        <div class="submitDate">12 Oct 2023</div>
                                        <div class="assignmentCompTag">
                                            <button class="btn btnAccepted">
                                                <img src="/public/design/img/starsIcon/check2-all.svg" alt="inoura" />
                                                Accepted
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="progressBarWrap">
                                    <div class="progress myCoureseProgressBar">
                                        <div class="progress-bar" style="width: 44%" role="progressbar" aria-valuenow="44%" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="durationContent">
                                        <p class="startDate dateStyles">Assigned: 02 Oct 2023</p>

                                        <p class="endDate mb-0 dateStyles">
                                            Deadline: 14 Oct 2023
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="scoresWrap">
                                <p>Score:</p>
                                <p><span></span>8/10</p>
                            </div>
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