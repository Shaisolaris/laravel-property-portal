<!DOCTYPE html>
<html lang="en">
<head>
    @include('web.public_academy.layout.head')
    <title>Assignments</title>
</head>

<body>
<div class="myAssignmentsWrap">
    @include('web.public_academy.layout.nav')
    <div class="subjectDetail">
        <div class="container px-lg-0">
            <div class="row">
                @include('web.public_academy.layout.academySidebar')
                <div class="col-xl-9 col-lg-12">
                    <div class="mentorTabWrap">
                        <h2 class="heading">Assignments</h2>
                        <div class="courseOverview">
                            <div class="tabbingWrapper">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-allMentors-tab" data-toggle="pill" href="#pills-allMentors" role="tab"
                                           aria-controls="pills-allMentors" aria-selected="true">
                                            All
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-activeAssignment-tab" data-toggle="pill" href="#pills-activeAssignment" role="tab"
                                           aria-controls="pills-activeAssignment" aria-selected="false">
                                            Active
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-favoritedMentor-tab" data-toggle="pill" href="#pills-favoritedMentor" role="tab"
                                           aria-controls="pills-favoritedMentor" aria-selected="false">
                                            Completed
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tabContentWrapper">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-allMentors" role="tabpanel" aria-labelledby="pills-allMentors-tab">
                                        <div class="assignmentsCardWrap">
                                            @if($assignments->count() > 0)
                                                @foreach($assignments as $assignment)
                                                    <div class="card">
                                                        <div class="d-flex justify-content-between w-100 cardHeading">
                                                            <div>
                                                                <h6 class="card-title">{{ $assignment->title }}</h6>
                                                                <p class="card-text">{{ $assignment->webinar->title }}</p>
                                                            </div>
                                                            <div class="submitBtnWrap">
                                                                <a href="{{ url('/academy/dashboard/assignment/details/' . $assignment->id) }}" class="btn">
                                                                    Show more <img src="/design/img/dashboard/plusCircle.svg" alt="inoura"/>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="cardBodyWrap d-flex">
                                                            <div class="w-100">
                                                                <div class="card-body p-0">
                                                                    <div class="profile d-flex align-items-center">
                                                                        <img src="{{ $assignment->assignmentHistory->instructor->getAvatar(40) ?? ""}}" alt="inoura"
                                                                             class="profilePic"/>
                                                                        <p class="profileName mb-0">by {{ $assignment->assignmentHistory->instructor->full_name ?? ""}}</p>
                                                                    </div>
                                                                    <div class="assignmentCompTag">
                                                                        <button class="btn btnExpected">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                                                                <path
                                                                                    d="M2 15C2 15.1326 2.05268 15.2598 2.14645 15.3536C2.24021 15.4473 2.36739 15.5 2.5 15.5H13.5C13.6326 15.5 13.7598 15.4473 13.8536 15.3536C13.9473 15.2598 14 15.1326 14 15C14 14.8674 13.9473 14.7402 13.8536 14.6464C13.7598 14.5527 13.6326 14.5 13.5 14.5H12.5V13.5C12.5002 12.651 12.2602 11.8192 11.8078 11.1008C11.3553 10.3824 10.7088 9.80659 9.943 9.44C9.653 9.301 9.5 9.063 9.5 8.85V8.15C9.5 7.937 9.654 7.699 9.943 7.56C10.7088 7.19341 11.3553 6.61764 11.8078 5.89922C12.2602 5.1808 12.5002 4.34903 12.5 3.5V2.5H13.5C13.6326 2.5 13.7598 2.44732 13.8536 2.35355C13.9473 2.25979 14 2.13261 14 2C14 1.86739 13.9473 1.74021 13.8536 1.64645C13.7598 1.55268 13.6326 1.5 13.5 1.5H2.5C2.36739 1.5 2.24021 1.55268 2.14645 1.64645C2.05268 1.74021 2 1.86739 2 2C2 2.13261 2.05268 2.25979 2.14645 2.35355C2.24021 2.44732 2.36739 2.5 2.5 2.5H3.5V3.5C3.49979 4.34903 3.73979 5.1808 4.19225 5.89922C4.64471 6.61764 5.29119 7.19341 6.057 7.56C6.347 7.699 6.5 7.937 6.5 8.15V8.85C6.5 9.063 6.346 9.301 6.057 9.44C5.29119 9.80659 4.64471 10.3824 4.19225 11.1008C3.73979 11.8192 3.49979 12.651 3.5 13.5V14.5H2.5C2.36739 14.5 2.24021 14.5527 2.14645 14.6464C2.05268 14.7402 2 14.8674 2 15ZM4.5 14.5V13.5C4.49982 12.8396 4.68649 12.1926 5.03845 11.6338C5.39041 11.0749 5.89329 10.6271 6.489 10.342C7.022 10.086 7.5 9.552 7.5 8.851V8.149C7.5 8.149 7.68 8.25 8 8.25C8.32 8.25 8.5 8.15 8.5 8.15V8.85C8.5 9.551 8.978 10.086 9.511 10.342C10.1067 10.6271 10.6096 11.0749 10.9615 11.6338C11.3135 12.1926 11.5002 12.8396 11.5 13.5V14.5H4.5Z"
                                                                                    fill="black"
                                                                                />
                                                                            </svg>
                                                                            @if(empty($assignment->assignmentHistory) or ($assignment->assignmentHistory->status == \App\Models\WebinarAssignmentHistory::$notSubmitted))
                                                                                {{ trans('update.assignment_history_status_not_submitted') }}
                                                                            @else
                                                                                @switch($assignment->assignmentHistory->status)
                                                                                    @case(\App\Models\WebinarAssignmentHistory::$passed)
                                                                                        {{ trans('quiz.passed') }}
                                                                                        @break
                                                                                    @case(\App\Models\WebinarAssignmentHistory::$pending)
                                                                                        {{ trans('public.pending') }}
                                                                                        @break
                                                                                    @case(\App\Models\WebinarAssignmentHistory::$notPassed)
                                                                                        {{ trans('quiz.failed') }}
                                                                                        @break
                                                                                @endswitch
                                                                            @endif
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="progressBarWrap">
                                                                    <div class="progress myCoureseProgressBar">
                                                                        <div class="progress-bar" style="width: 44%" role="progressbar" aria-valuenow="44%" aria-valuemin="0"
                                                                             aria-valuemax="100"></div>
                                                                    </div>
                                                                    <div class="durationContent">
                                                                        <p class="startDate dateStyles">
                                                                            Assigned: {{ !empty($assignment->created_at) ? dateTimeFormat($assignment->created_at, 'j M Y') : '-' }}
                                                                        </p>

                                                                        <p class="endDate mb-0 dateStyles">
                                                                            Deadline: {{ !empty($assignment->deadline) ? dateTimeFormat($assignment->deadlineTime, 'j M Y') : '-' }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="scoresWrap">
                                                                <p class="scoreText">Score:</p>
                                                                <p class="scoreValue"><span>{{ $assignment->assignmentHistory->grade ?? 0 }}/{{ $assignment->grade }}</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-activeAssignment" role="tabpanel" aria-labelledby="pills-activeAssignment-tab">
                                        <div class="assignmentsCardWrap">
                                            <div class="card">
                                                <div class="d-flex justify-content-between w-100 cardHeading">
                                                    <div>
                                                        <h6 class="card-title">Sorry! No record found.</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-favoritedMentor" role="tabpanel" aria-labelledby="pills-favoritedMentor-tab">
                                        <div class="assignmentsCardWrap">
                                            <div class="card">
                                                <div class="d-flex justify-content-between w-100 cardHeading">
                                                    <div>
                                                        <h6 class="card-title">Sorry! No record found.</h6>
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
    </div>
</div>
@include('web.public_academy.layout.script')
</body>
</html>
