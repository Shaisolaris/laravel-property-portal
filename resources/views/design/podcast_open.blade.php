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
          <div
            class="row align-items-center px-2 px-sm-0 myCourseAssignmentRow col_gap_8 row_gap_8 flex-xl-nowrap"
          >
            <div class="d-flex logoWrapper">
              <div class="logo d-lg-block d-none">
                <a class="" href="{{ url('/design/school') }}">
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
    <section class="myMentorSession podcast_call">
      <div class="container">
        <div class="row row_gap_20">
          <div class="col-lg-8 px-lg-0">
            <!-- Image for Courses -->
            <div class="courses_Detail_Wrapper">
              <img
                src="img/podcast/mainImg.png"
                alt="image"
                class="podcastImg"
              />
            </div>
            <!-- Image for Courses -->
            <!-- aduio player -->
            <div class="audioPlayerWrap d-flex col_gap_20">
              <div>
                <div class="playerBtnWraper">
                  <img src="img/podcast/playBtn.svg" alt="inoura" />
                </div>
              </div>
              <div class="audioProgressBarWrap d-flex align-items-md-center">
                <div class="header_text">
                  <img
                    src="img/podcast/audioFrame.svg"
                    alt="inoura"
                    class="img-fluid"
                  />
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
                  <div class="durationContent">
                    <p class="coverAudio audioDuration">15:30</p>

                    <p class="remainingAudio mb-0 audioDuration">45:15</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- aduio player -->
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
            </div>
            <!-- Description and Benefit -->

            <!-- Mentor card -->
            <div class="mentorCard_Wrapper">
              <div class="tabInstructor">
                <h6>Mentor</h6>
                <div class="instructorInfo">
                  <div class="card">
                    <div
                      class="row align-items-start row_gap_8 text-center text-lg-right"
                    >
                      <div class="col-md-3 pr-0">
                        <img
                          src="img/podcast/profilePic.png"
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
            <!-- More Podcasts-->
            <div class="moreSessionsWrap">
              <h3 class="heading">More Podcasts</h3>
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
                          <img
                            src="img/dashboard-school/micGrey.svg"
                            alt="inoura"
                          />
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
                          <img
                            src="img/dashboard-school/micGrey.svg"
                            alt="inoura"
                          />
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
            <!-- more sessions -->
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
