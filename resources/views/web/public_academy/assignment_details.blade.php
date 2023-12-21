<!DOCTYPE html>
<html lang="en">
<head>
    @include('web.public_academy.layout.head')
    <title>Assignment Details</title>
</head>
<body>
<div class="navbarWraper assignmentProgressNavBar">
    <div class="topBar myCourseAssignment">
        <div class="container">
            <div class="row align-items-center justify-content-center px-2 px-sm-0 myCourseAssignmentRow">
                <div class="d-flex logoWrapper">
                    <div class="logo d-lg-block d-none">
                        <a class="" href="{{ url('/academy') }}">
                            <img src="/design/img/navbar/Logo.svg" alt="logo"/>
                        </a>
                    </div>
                    <div class="contactWrapper d-flex align-items-md-center">
                        <div class="header_text">
                            <p>{{ $assignmentDetails->webinar->title ?? "" }}</p>
                            <div class="progress myCoureseProgressBar">
                                <div class="progress-bar" style="width: {{ $assignmentDetails->webinar->getProgress() }}%" role="progressbar"
                                     aria-valuenow="{{ $assignmentDetails->webinar->getProgress() }}%" aria-valuemin="0" aria-valuemax="100"></div>
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
                        <img src="{{ $assignmentDetails->assignmentHistory->instructor->getAvatar(40) ?? ""}}"
                             alt="{{ $assignmentDetails->assignmentHistory->instructor->full_name ?? ""}}" class="profilePic"/>
                        <p class="profileName mb-0">by {{ $assignmentDetails->assignmentHistory->instructor->full_name ?? ""}}</p>
                    </div>
                    <div class="assignment_Wrapper">
                        <div class="imge_Wrapper">
                            <img src="/design/img/courseDetail/listOl.svg" alt="inoura"/>
                        </div>
                        <p>Assignments (1)</p>
                    </div>
                    <div class="share_Wrapper">
                        <img src="/design/img/dashboard/link.svg" alt="share"/>
                        <p>Share</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="myAssignmentBrief">
    <div class="container">
        <div class="newAssignments">
            <div class="headingWrap d-flex align-items-center justify-content-between">
                <h3>New</h3>
            </div>
            <div class="assignmentsCardWrap">
                <div class="card">
                    <div class="d-flex justify-content-between w-100 cardHeading">
                        <div>
                            <h6 class="card-title">{{ $assignmentDetails->title }}</h6>
                            <p class="card-text">{{ $assignmentDetails->webinar->title }}</p>
                        </div>
                        <div class="submitBtnWrap">
                            <a href="#" class="btn">Show more
                                <img src="/design/img/dashboard/plusCircle.svg" alt="inoura"/></a>
                        </div>
                    </div>
                    <div class="cardBodyWrap d-flex">
                        <div class="w-100">
                            <div class="card-body p-0">
                                <div class="profile d-flex align-items-center">
                                    <img src="{{ $assignmentDetails->assignmentHistory->instructor->getAvatar(40) ?? ""}}"
                                         alt="{{ $assignmentDetails->assignmentHistory->instructor->full_name ?? ""}}" class="profilePic"/>
                                    <p class="profileName mb-0">by {{ $assignmentDetails->assignmentHistory->instructor->full_name ?? ""}}</p>
                                </div>
                                <div class="assignmentCompTag">
                                    <button class="btn btnExpected">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                            <path
                                                d="M2 15C2 15.1326 2.05268 15.2598 2.14645 15.3536C2.24021 15.4473 2.36739 15.5 2.5 15.5H13.5C13.6326 15.5 13.7598 15.4473 13.8536 15.3536C13.9473 15.2598 14 15.1326 14 15C14 14.8674 13.9473 14.7402 13.8536 14.6464C13.7598 14.5527 13.6326 14.5 13.5 14.5H12.5V13.5C12.5002 12.651 12.2602 11.8192 11.8078 11.1008C11.3553 10.3824 10.7088 9.80659 9.943 9.44C9.653 9.301 9.5 9.063 9.5 8.85V8.15C9.5 7.937 9.654 7.699 9.943 7.56C10.7088 7.19341 11.3553 6.61764 11.8078 5.89922C12.2602 5.1808 12.5002 4.34903 12.5 3.5V2.5H13.5C13.6326 2.5 13.7598 2.44732 13.8536 2.35355C13.9473 2.25979 14 2.13261 14 2C14 1.86739 13.9473 1.74021 13.8536 1.64645C13.7598 1.55268 13.6326 1.5 13.5 1.5H2.5C2.36739 1.5 2.24021 1.55268 2.14645 1.64645C2.05268 1.74021 2 1.86739 2 2C2 2.13261 2.05268 2.25979 2.14645 2.35355C2.24021 2.44732 2.36739 2.5 2.5 2.5H3.5V3.5C3.49979 4.34903 3.73979 5.1808 4.19225 5.89922C4.64471 6.61764 5.29119 7.19341 6.057 7.56C6.347 7.699 6.5 7.937 6.5 8.15V8.85C6.5 9.063 6.346 9.301 6.057 9.44C5.29119 9.80659 4.64471 10.3824 4.19225 11.1008C3.73979 11.8192 3.49979 12.651 3.5 13.5V14.5H2.5C2.36739 14.5 2.24021 14.5527 2.14645 14.6464C2.05268 14.7402 2 14.8674 2 15ZM4.5 14.5V13.5C4.49982 12.8396 4.68649 12.1926 5.03845 11.6338C5.39041 11.0749 5.89329 10.6271 6.489 10.342C7.022 10.086 7.5 9.552 7.5 8.851V8.149C7.5 8.149 7.68 8.25 8 8.25C8.32 8.25 8.5 8.15 8.5 8.15V8.85C8.5 9.551 8.978 10.086 9.511 10.342C10.1067 10.6271 10.6096 11.0749 10.9615 11.6338C11.3135 12.1926 11.5002 12.8396 11.5 13.5V14.5H4.5Z"
                                                fill="black"
                                            />
                                        </svg>
                                        Expected
                                    </button>
                                </div>
                            </div>
                            <div class="progressBarWrap">
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
                                    <p class="startDate dateStyles">
                                        Assigned: {{ !empty($assignmentDetails->created_at) ? dateTimeFormat($assignmentDetails->created_at, 'j M Y') : '-' }}</p>
                                    <p class="endDate mb-0 dateStyles">{{ !empty($assignmentDetails->deadline) ? dateTimeFormat($assignmentDetails->deadlineTime, 'j M Y') : '-' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="scoresWrap">
                            <p>Score:</p>
                            <p class="scoreValue"><span>{{ $assignmentDetails->assignmentHistory->grade ?? 0 }}/{{ $assignmentDetails->grade }}</span></p>
                        </div>
                    </div>
                    <div class="accordionWrap">
                        <div class="assignmentAccordion" id="myAssignmentBrief">
                            <div class="assignmentDescription">
                                <button class="btn accordionBtn d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#assginmentBrief"
                                        aria-expanded="true" aria-controls="assginmentBrief">
                                    <h6>Brief</h6>
                                    <img src="/design/img/courseList/downIcon.svg"/>
                                </button>

                                <div id="assginmentBrief" class="collapse show" aria-labelledby="headingOne" data-parent="#myAssignmentBrief">
                                    <div class="accordionBody">
                                        <div class="content">
                                            <p>Here's what needs to be done:</p>
                                            {!! $assignmentDetails->description !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="assignmentDescription">
                                <button class="btn accordionBtn d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#assginmentEducation"
                                        aria-expanded="true" aria-controls="assginmentEducation">
                                    <h6>Educational materials</h6>
                                    <img src="/design/img/courseList/downIcon.svg"/>
                                </button>

                                <div id="assginmentEducation" class="collapse w-100" aria-labelledby="headingOne" data-parent="#myAssignmentBrief">
                                    <div class="accordionBody">
                                        <div class="content">
                                            <div class="educationMaterial">
                                                <div class="">
                                                    <div class="card educationCard">
                                                        <img src="/design/img/dashboard/img.png" alt="inoura" class="card-img-top cardImg"/>
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
                                                        <img src="/design/img/dashboard/img.png" alt="inoura" class="card-img-top cardImg"/>
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
                                                        <img src="/design/img/dashboard/img.png" alt="inoura" class="card-img-top cardImg"/>
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
                                <button class="btn accordionBtn d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#assginmentLoadingWork"
                                        aria-expanded="true" aria-controls="assginmentLoadingWork">
                                    <h6>Loading work</h6>
                                    <img src="/design/img/courseList/downIcon.svg"/>
                                </button>

                                <div id="assginmentLoadingWork" class="collapse w-100" aria-labelledby="headingOne" data-parent="#myAssignmentBrief">
                                    <div class="accordionBody">
                                        <div class="content">
                                            <div class="LoadingWorkWrap">
                                                <form class="w-100">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control border-0" id="exampleInputEmail1" aria-describedby="emailHelp"
                                                               placeholder="Start writing something..."/>
                                                    </div>
                                                </form>
                                                <div class="sendBtnWrap">
                                                    <div class="lectureDetails d-flex align-items-center">
                                                        <div class="icons">
                                                            <img src="/design/img/dashboard/link-45deg.svg" alt="inoura"/>
                                                        </div>
                                                        <div class="icons">
                                                            <img src="/design/img/dashboard/paperclip.svg" alt="inoura"/>
                                                        </div>
                                                        <div class="icons">
                                                            <img src="/design/img/dashboard/galleryIcon.svg" alt="inoura"/>
                                                        </div>
                                                    </div>
                                                    <a href="#">
                                                        Send
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                                            <g clip-path="url(#clip0_1025_4134)">
                                                                <path
                                                                    d="M15.8542 0.646028C15.9234 0.71536 15.9707 0.803502 15.9903 0.899505C16.0098 0.995508 16.0008 1.09514 15.9642 1.18603L10.1452 15.733C10.0939 15.8611 10.0083 15.9726 9.89771 16.0552C9.78715 16.1378 9.65596 16.1883 9.51856 16.2011C9.38116 16.2139 9.2429 16.1886 9.11897 16.1279C8.99505 16.0672 8.89027 15.9734 8.81618 15.857L5.63818 10.862L0.643176 7.68403C0.526494 7.61001 0.432527 7.5052 0.371646 7.38116C0.310764 7.25711 0.285334 7.11866 0.298161 6.98108C0.310988 6.8435 0.361574 6.71214 0.444337 6.60148C0.5271 6.49083 0.638822 6.4052 0.767176 6.35403L15.3142 0.537028C15.4051 0.50044 15.5047 0.49136 15.6007 0.510916C15.6967 0.530473 15.7848 0.577803 15.8542 0.647028V0.646028ZM6.63618 10.57L9.39718 14.908L14.1302 3.07603L6.63618 10.57ZM13.4232 2.36903L1.59118 7.10203L5.93018 9.86203L13.4242 2.36903H13.4232Z"
                                                                    fill="#154BD8"
                                                                />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_1025_4134">
                                                                    <rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
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
            <div
                class="headingWrap d-flex align-items-center justify-content-between"
            >
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
                                    <img
                                        src="/design/img/courseDetail/profilePic.svg"
                                        alt="inoura"
                                        class="profilePic"
                                    />
                                    <p class="profileName mb-0">by Jane Doe</p>
                                </div>
                                <div class="assignmentSubmitWrap">
                                    <div class="submitDate">12 Oct 2023</div>
                                    <div class="assignmentCompTag">
                                        <button class="btn btnAccepted">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                viewBox="0 0 16 16"
                                                fill="none"
                                            >
                                                <g clip-path="url(#clip0_1025_1321)">
                                                    <path
                                                        d="M12.3546 4.35401C12.4011 4.30752 12.438 4.25233 12.4632 4.19159C12.4883 4.13085 12.5013 4.06575 12.5013 4.00001C12.5013 3.93426 12.4883 3.86916 12.4632 3.80842C12.438 3.74768 12.4011 3.69249 12.3546 3.64601C12.3081 3.59952 12.253 3.56264 12.1922 3.53748C12.1315 3.51232 12.0664 3.49937 12.0006 3.49937C11.9349 3.49937 11.8698 3.51232 11.809 3.53748C11.7483 3.56264 11.6931 3.59952 11.6466 3.64601L5.00063 10.293L1.85463 7.14601C1.80814 7.09952 1.75295 7.06264 1.69222 7.03748C1.63148 7.01232 1.56638 6.99937 1.50063 6.99937C1.36786 6.99937 1.24052 7.05212 1.14663 7.14601C1.05275 7.23989 1 7.36723 1 7.50001C1 7.63278 1.05275 7.76012 1.14663 7.85401L4.64663 11.354C4.69308 11.4006 4.74825 11.4375 4.809 11.4627C4.86974 11.4879 4.93486 11.5009 5.00063 11.5009C5.0664 11.5009 5.13152 11.4879 5.19227 11.4627C5.25301 11.4375 5.30819 11.4006 5.35463 11.354L12.3546 4.35401ZM8.14663 11.354L7.25063 10.457L7.95763 9.75001L8.50063 10.293L15.1466 3.64601C15.2405 3.55212 15.3679 3.49937 15.5006 3.49937C15.6334 3.49937 15.7607 3.55212 15.8546 3.64601C15.9485 3.73989 16.0013 3.86723 16.0013 4.00001C16.0013 4.13278 15.9485 4.26012 15.8546 4.35401L8.85463 11.354C8.80819 11.4006 8.75301 11.4375 8.69227 11.4627C8.63152 11.4879 8.5664 11.5009 8.50063 11.5009C8.43486 11.5009 8.36974 11.4879 8.309 11.4627C8.24825 11.4375 8.19308 11.4006 8.14663 11.354Z"
                                                        fill="black"
                                                    />
                                                    <path
                                                        d="M5.35463 7.14601L6.25063 8.04301L5.54363 8.75001L4.64663 7.85401C4.55275 7.76012 4.5 7.63278 4.5 7.50001C4.5 7.36723 4.55275 7.23989 4.64663 7.14601C4.74052 7.05212 4.86786 6.99937 5.00063 6.99937C5.13341 6.99937 5.26075 7.05212 5.35463 7.14601Z"
                                                        fill="#212529"
                                                    />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1025_1321">
                                                        <rect width="16" height="16" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            Accepted
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="progressBarWrap">
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
                                    <img
                                        src="/design/img/courseDetail/profilePic.svg"
                                        alt="inoura"
                                        class="profilePic"
                                    />
                                    <p class="profileName mb-0">by Jane Doe</p>
                                </div>
                                <div class="assignmentSubmitWrap">
                                    <div class="submitDate">12 Oct 2023</div>
                                    <div class="assignmentCompTag">
                                        <button class="btn btnAccepted">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                viewBox="0 0 16 16"
                                                fill="none"
                                            >
                                                <g clip-path="url(#clip0_1025_1321)">
                                                    <path
                                                        d="M12.3546 4.35401C12.4011 4.30752 12.438 4.25233 12.4632 4.19159C12.4883 4.13085 12.5013 4.06575 12.5013 4.00001C12.5013 3.93426 12.4883 3.86916 12.4632 3.80842C12.438 3.74768 12.4011 3.69249 12.3546 3.64601C12.3081 3.59952 12.253 3.56264 12.1922 3.53748C12.1315 3.51232 12.0664 3.49937 12.0006 3.49937C11.9349 3.49937 11.8698 3.51232 11.809 3.53748C11.7483 3.56264 11.6931 3.59952 11.6466 3.64601L5.00063 10.293L1.85463 7.14601C1.80814 7.09952 1.75295 7.06264 1.69222 7.03748C1.63148 7.01232 1.56638 6.99937 1.50063 6.99937C1.36786 6.99937 1.24052 7.05212 1.14663 7.14601C1.05275 7.23989 1 7.36723 1 7.50001C1 7.63278 1.05275 7.76012 1.14663 7.85401L4.64663 11.354C4.69308 11.4006 4.74825 11.4375 4.809 11.4627C4.86974 11.4879 4.93486 11.5009 5.00063 11.5009C5.0664 11.5009 5.13152 11.4879 5.19227 11.4627C5.25301 11.4375 5.30819 11.4006 5.35463 11.354L12.3546 4.35401ZM8.14663 11.354L7.25063 10.457L7.95763 9.75001L8.50063 10.293L15.1466 3.64601C15.2405 3.55212 15.3679 3.49937 15.5006 3.49937C15.6334 3.49937 15.7607 3.55212 15.8546 3.64601C15.9485 3.73989 16.0013 3.86723 16.0013 4.00001C16.0013 4.13278 15.9485 4.26012 15.8546 4.35401L8.85463 11.354C8.80819 11.4006 8.75301 11.4375 8.69227 11.4627C8.63152 11.4879 8.5664 11.5009 8.50063 11.5009C8.43486 11.5009 8.36974 11.4879 8.309 11.4627C8.24825 11.4375 8.19308 11.4006 8.14663 11.354Z"
                                                        fill="black"
                                                    />
                                                    <path
                                                        d="M5.35463 7.14601L6.25063 8.04301L5.54363 8.75001L4.64663 7.85401C4.55275 7.76012 4.5 7.63278 4.5 7.50001C4.5 7.36723 4.55275 7.23989 4.64663 7.14601C4.74052 7.05212 4.86786 6.99937 5.00063 6.99937C5.13341 6.99937 5.26075 7.05212 5.35463 7.14601Z"
                                                        fill="#212529"
                                                    />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1025_1321">
                                                        <rect width="16" height="16" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            Accepted
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="progressBarWrap">
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
                                    <img
                                        src="/design/img/courseDetail/profilePic.svg"
                                        alt="inoura"
                                        class="profilePic"
                                    />
                                    <p class="profileName mb-0">by Jane Doe</p>
                                </div>
                                <div class="assignmentSubmitWrap">
                                    <div class="submitDate">12 Oct 2023</div>
                                    <div class="assignmentCompTag">
                                        <button class="btn btnAccepted">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                viewBox="0 0 16 16"
                                                fill="none"
                                            >
                                                <g clip-path="url(#clip0_1025_1321)">
                                                    <path
                                                        d="M12.3546 4.35401C12.4011 4.30752 12.438 4.25233 12.4632 4.19159C12.4883 4.13085 12.5013 4.06575 12.5013 4.00001C12.5013 3.93426 12.4883 3.86916 12.4632 3.80842C12.438 3.74768 12.4011 3.69249 12.3546 3.64601C12.3081 3.59952 12.253 3.56264 12.1922 3.53748C12.1315 3.51232 12.0664 3.49937 12.0006 3.49937C11.9349 3.49937 11.8698 3.51232 11.809 3.53748C11.7483 3.56264 11.6931 3.59952 11.6466 3.64601L5.00063 10.293L1.85463 7.14601C1.80814 7.09952 1.75295 7.06264 1.69222 7.03748C1.63148 7.01232 1.56638 6.99937 1.50063 6.99937C1.36786 6.99937 1.24052 7.05212 1.14663 7.14601C1.05275 7.23989 1 7.36723 1 7.50001C1 7.63278 1.05275 7.76012 1.14663 7.85401L4.64663 11.354C4.69308 11.4006 4.74825 11.4375 4.809 11.4627C4.86974 11.4879 4.93486 11.5009 5.00063 11.5009C5.0664 11.5009 5.13152 11.4879 5.19227 11.4627C5.25301 11.4375 5.30819 11.4006 5.35463 11.354L12.3546 4.35401ZM8.14663 11.354L7.25063 10.457L7.95763 9.75001L8.50063 10.293L15.1466 3.64601C15.2405 3.55212 15.3679 3.49937 15.5006 3.49937C15.6334 3.49937 15.7607 3.55212 15.8546 3.64601C15.9485 3.73989 16.0013 3.86723 16.0013 4.00001C16.0013 4.13278 15.9485 4.26012 15.8546 4.35401L8.85463 11.354C8.80819 11.4006 8.75301 11.4375 8.69227 11.4627C8.63152 11.4879 8.5664 11.5009 8.50063 11.5009C8.43486 11.5009 8.36974 11.4879 8.309 11.4627C8.24825 11.4375 8.19308 11.4006 8.14663 11.354Z"
                                                        fill="black"
                                                    />
                                                    <path
                                                        d="M5.35463 7.14601L6.25063 8.04301L5.54363 8.75001L4.64663 7.85401C4.55275 7.76012 4.5 7.63278 4.5 7.50001C4.5 7.36723 4.55275 7.23989 4.64663 7.14601C4.74052 7.05212 4.86786 6.99937 5.00063 6.99937C5.13341 6.99937 5.26075 7.05212 5.35463 7.14601Z"
                                                        fill="#212529"
                                                    />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1025_1321">
                                                        <rect width="16" height="16" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            Accepted
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="progressBarWrap">
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
@include('web.public_academy.layout.script')
</body>
</html>
