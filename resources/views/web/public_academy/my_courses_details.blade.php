<!DOCTYPE html>
<html lang="en">

<head>
    @include('web.public_academy.layout.head')
    <title>My Course Details</title>
</head>

<body>
    <div class="navbarWraper assignmentProgressNavBar">
        <div class="topBar myCourseAssignment">
            <div class="container">
                <div class="row align-items-center justify-content-center px-2 px-sm-0 myCourseAssignmentRow col_gap_8 row_gap_8 flex-xl-nowrap">
                    <div class="d-flex logoWrapper">
                        <div class="logo d-lg-block d-none">
                            <a class="" href="{{ url('/') }}">
                                <img src="/design/img/navbar/Logo.svg" alt="logo" />
                            </a>
                        </div>
                        <div class="contactWrapper d-flex align-items-md-center">
                            <div class="header_text">
                                <p>{{ $course->title }}</p>
                                <div class="progress myCoureseProgressBar">
                                    <div class="progress-bar" style="width: {{ $course->getProgress() }}%" role="progressbar" aria-valuenow="{{ $course->getProgress() }}%" aria-valuemin="0" aria-valuemax="100"></div>
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
                            <img src="{{ $course->teacher->getAvatar() }}" alt="{{ $course->teacher->full_name }}" class="profilePic" />
                            <p class="profileName mb-0">by {{ $course->teacher->full_name }}</p>
                        </div>
                        <div class="assignment_Wrapper">
                            <div class="imge_Wrapper">
                                <img src="/design/img/courseDetail/listOl.svg" alt="inoura" />
                            </div>
                            <p>Assignments <span>(1)</span></p>
                        </div>
                        <div class="share_Wrapper">
                            <img src="/design/img/dashboard/link.svg" alt="share" />
                            <p>Share</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section_courses_Detail_Wrapper">
        <div class="container">
            <div class="row flex-xl-row flex-column-reverse">
                <div class="col-xl-9 col-12 pl-xl-0 pr-xl-2">
                    <div class="courses_Detail_Wrapper">

                        <div class="videoContainerWrap">
                            <img src="{{ $course->getImage() }}" alt="Video Thumbnail" onclick="myCoursesPlayVideo()" class="videoThumbnail" />
                            <img class="playButton" src="/design/img/courseDetail/playButton.svg" alt="Play Button" onclick="myCoursesPlayVideo()" />
                            <video id="myCoursesVideoPlayer" controls>
                                <source id="videoPlayerSource" src="/design/img/courseDetail/coursevideo.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    <div class="badges_Wrapper">
                        <div class="tags enrollment d-flex align-items-center">
                            <img src="/design/img/dashboard/vr.svg" alt="inoura" />
                            <div>{{ $course->getProgress() }}% done</div>
                        </div>
                        <div class="tags enrollment d-flex align-items-center">
                            <img src="/design/img/courseDetail/listOl.svg" alt="inoura" />
                            <div>1/6 sections</div>
                        </div>
                        <div class="tags enrollment d-flex align-items-center">
                            <img src="/design/img/courseDetail/menuUp.svg" alt="inoura" />
                            <div>8/24 lectures</div>
                        </div>
                        <div class="tags enrollment d-flex align-items-center">
                            <img src="/design/img/topCourses/clock.svg" alt="inoura" />
                            <div>16/47m</div>
                        </div>
                    </div>
                    <div class="descriptionBenefit_Wrapper">
                        <div class="content">
                            <h6>Description</h6>
                            {!! $course->getDescriptionAttribute() !!}
                            <p></p>
                        </div>
                        @php
                        $learningMaterialsExtraDescription = !empty($course->webinarExtraDescription) ? $course->webinarExtraDescription->where('type','learning_materials') : null;
                        $companyLogosExtraDescription = !empty($course->webinarExtraDescription) ? $course->webinarExtraDescription->where('type','company_logos') : null;
                        $requirementsExtraDescription = !empty($course->webinarExtraDescription) ? $course->webinarExtraDescription->where('type','requirements') : null;
                        @endphp
                        @if(count($learningMaterialsExtraDescription) > 0)
                        <div class="content">
                            <h6>Benefits</h6>
                            <div class="row flex-wrap">
                                <div class="col-md-6">
                                    <ul class="">
                                        @foreach($learningMaterialsExtraDescription as $learningMaterial)
                                        <li>{{ $learningMaterial->value }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="mentorCard_Wrapper">
                        <div class="tabInstructor text-center text-md-left">
                            <h6>Mentor</h6>
                            <div class="instructorInfo">
                                <div class="card">
                                    <div class="row align-items-start">
                                        <div class="col-md-3 pr-0 mb-3 mb-md-0">
                                            <img src="{{ $course->teacher->getAvatar() }}" class="card-img" alt="{{ $course->teacher->full_name }}" />
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <h4>{{ $course->teacher->full_name }}</h4>
                                                <h5 class="card-title">
                                                    {{ $course->teacher->bio }}
                                                </h5>
                                                <div class="card-text">
                                                    {{ truncate($course->teacher->about, 200) }}
                                                    <p></p>
                                                </div>
                                                <div class="d-flex tagWrapper">
                                                    <div class="tags enrollment d-flex align-items-center">
                                                        <img src="/design/img/courseDetail/star.svg" alt="inoura" />
                                                        <div>{{ $course->teacher->rates() }} ({{ $course->teacher->reviewsCount() }} Reviews)</div>
                                                    </div>
                                                    <div class="tags enrollmen d-flex align-items-centert">
                                                        <img src="/design/img/courseDetail/collection.svg" alt="inoura" />
                                                        <div>5 283 Lessons</div>
                                                    </div>
                                                    <div class="tags duration d-flex align-items-center">
                                                        <img src="/design/img/courseDetail/playBtn.svg" alt="inoura" />
                                                        <div class="time">{{ count($course->teacher->webinars) }} Courses</div>
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
                @if(!empty($course->chapters) and count($course->chapters))
                <div class="col-xl-3 col-12 pl-xl-2 pr-xl-0 mb-4 mb-xl-0">
                    <div class="tabbing_Wrapper">
                        <div class="tabCurriculum">
                            <div class="accordion" id="sidebardropdown">
                                <div class="courseContent_Wrapper">
                                    <h6>Course Content</h6>
                                    <img src="/design/img/dashboard/x (1).svg" alt="X icon" />
                                </div>
                                @foreach($course->chapters as $chapter)
                                <div class="courseTableContent">
                                    <button class="btn accordionBtn d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#myCoursesDuration1" aria-expanded="true" aria-controls="myCoursesDuration1">
                                        <div class="lecturesTitle">
                                            <div class="accordionContent d-flex">
                                                <p>1. </p>
                                                <h3 class="mb-0">{{ $chapter->title }}</h3>
                                            </div>
                                            <div class="totalLectures d-flex align-items-center">
                                                <p class="mb-0">16/16 1h 19m</p>
                                            </div>
                                        </div>
                                        <img src="/design/img/courseDetail/Arrowdown.svg" alt="inoura" />
                                    </button>
                                    <div id="myCoursesDuration1" class="collapse show" aria-labelledby="headingOne" data-parent="#sidebardropdown">
                                        <div class="accordionBody">
                                            @if(!empty($chapter->chapterItems) and count($chapter->chapterItems))
                                            @foreach($chapter->chapterItems as $chapterItem)
                                            @if($chapterItem->type == \App\Models\WebinarChapterItem::$chapterSession and !empty($chapterItem->session) and $chapterItem->session->status == 'active')
                                            @elseif($chapterItem->type == \App\Models\WebinarChapterItem::$chapterFile and !empty($chapterItem->file) and $chapterItem->file->status == 'active')
                                            <div class="subTableOfContent d-flex justify-content-between" id="tableOfContentHeading" data-source="/design/img/courseDetail/coursevideo.mp4">
                                                <div class="lecturesTitle d-flex align-items-baseline">
                                                    <div class="form-check form-check-inline mr-0">
                                                        <div class="checkboxWrap">
                                                            <input class="form-check-input m-0" type="checkbox" id="allCategory" value="option1" disabled />
                                                        </div>
                                                    </div>
                                                    <div>
                                                    <p class="tableOfContentHeading">{{ $chapterItem->file->title }}</p>
                                                    <div class="lectureDuration d-flex align-items-center justify-content-start">
                                                        <img src="/design/img/topCourses/clock.svg" alt="inoura" />
                                                        <p class="mb-0">6 min</p>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @elseif($chapterItem->type == \App\Models\WebinarChapterItem::$chapterTextLesson and !empty($chapterItem->textLesson) and $chapterItem->textLesson->status == 'active')
                                            @elseif($chapterItem->type == \App\Models\WebinarChapterItem::$chapterAssignment and !empty($chapterItem->assignment) and $chapterItem->assignment->status == 'active')
                                            @elseif($chapterItem->type == \App\Models\WebinarChapterItem::$chapterQuiz and !empty($chapterItem->quiz) and $chapterItem->quiz->status == 'active')
                                            @endif
                                            @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>
    @include('web.public_academy.layout.script')
</body>

</html>