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
    <title>Messages</title>
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
    <div class="studentDashboard">
      <div class="subjectDetail">
        <div class="container px-lg-0">
          <div class="row row_gap_20">
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
            <div class="col-xl-9 col-lg-12">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card card_Wrapper">
                    <div class="col-lg-4 mainSerachWrapper">
                      <div class="searchWrapper">
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
                            placeholder="Search name or message..."
                            aria-label="Search..."
                            aria-describedby="button-addon2"
                          />
                        </div>
                        <div class="message_Tab">
                          <div class="img_Name_Wrapper">
                            <img
                              src="img/dashboard/2.svg"
                              class="card-img-top"
                              alt="image"
                            />
                            <div class="name_Wrapper">
                              <div class="name_Time_Wrapper">
                                <h2 class="card-title">Jane Dou</h2>
                                <p>08:45</p>
                              </div>
                              <p class="card-text">
                                Add a conclusion to the presentation
                              </p>
                            </div>
                          </div>
                        </div>
                        <hr />
                        <div class="message_Tab">
                          <div class="img_Name_Wrapper">
                            <img
                              src="img/dashboard/2.svg"
                              class="card-img-top"
                              alt="image"
                            />
                            <div class="name_Wrapper">
                              <div class="name_Time_Wrapper">
                                <h2 class="card-title">Jane Dou</h2>
                                <p>08:45</p>
                              </div>
                              <p class="card-text">
                                Add a conclusion to the presentation
                              </p>
                            </div>
                          </div>
                        </div>
                        <hr />
                        <div class="message_Tab">
                          <div class="img_Name_Wrapper">
                            <img
                              src="img/dashboard/2.svg"
                              class="card-img-top"
                              alt="image"
                            />
                            <div class="name_Wrapper">
                              <div class="name_Time_Wrapper">
                                <h2 class="card-title">Jane Dou</h2>
                                <p>08:45</p>
                              </div>
                              <p class="card-text">
                                Add a conclusion to the presentation Add a
                                conclusion to the presentation
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-8 messages_Column">
                      <div class="message_Header">
                        <div class="contact_Name">
                          <h2>Jane Doe</h2>
                        </div>
                      </div>
                      <div class="message_Body">
                        <div class="date_Wrapper">
                          <p>Sep 16 12:04</p>
                        </div>
                        <div class="message_Content_Send">
                          <p>
                            Hi! I have a question regarding the homework
                            assignment.
                          </p>
                          <img
                            src="img/dashboard/photo.svg"
                            class="card-img-top"
                            alt="image"
                          />
                        </div>

                        <div class="message_Content_Recieve">
                          <img
                            src="img/dashboard/photo.svg"
                            class="card-img-top"
                            alt="image"
                          />
                          <p>
                            Hello! Of course, I'm ready to help. What's on your
                            mind?
                          </p>
                        </div>

                        <div class="message_Content_Send">
                          <p>
                            The assignment requires creating a responsive layout
                            for a mobile device.
                          </p>
                          <img
                            src="img/dashboard/photo.svg"
                            class="card-img-top"
                            alt="image"
                          />
                        </div>

                        <div class="message_Content_Send">
                          <p>
                            However, I'm not entirely sure how to best arrange
                            the content on a small screen. Do you have any
                            advice?
                          </p>
                          <img
                            src="img/dashboard/photo.svg"
                            class="card-img-top"
                            alt="image"
                          />
                        </div>

                        <div class="message_Content_Recieve">
                          <img
                            src="img/dashboard/photo.svg"
                            class="card-img-top"
                            alt="image"
                          />
                          <p>
                            Certainly, adapting for mobile devices is crucial.
                            One approach is to consider the content hierarchy
                            and place the most essential elements first. Start
                            with the primary content and gradually add details
                            and supplementary information.
                          </p>
                        </div>
                      </div>

                      <div class="message_Footer">
                        <img src="img/dashboard/paperclip (1).svg" alt="clip" />
                        <input type="text" placeholder="Type a message..." />
                        <img src="img/dashboard/send-fill.svg" />
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
  </body>
</html>
