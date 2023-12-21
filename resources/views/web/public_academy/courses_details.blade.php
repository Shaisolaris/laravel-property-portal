<!DOCTYPE html>
<html lang="en">
<head>
    @include('web.public_academy.layout.head')
    @push('styles_top')
        <link rel="stylesheet" href="/assets/default/vendors/sweetalert2/dist/sweetalert2.min.css">
    @endpush
</head>
<body>
@if (!empty(session()->has('status')))
    <div class="alert alert-success my-25">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <h4 class="alert-heading">{{trans('cart.cart_add_success_title')}}</h4>
        <p class="">{{trans('cart.cart_add_success_msg')}}</p>
    </div>
@endif
@php
    session()->forget('status');
@endphp
<div class="courseDetailWrapper">
    @include('web.public_academy.layout.nav')
    <div class="courseSection">
        <div class="container px-lg-0">
            <div class="row">
                <div class="col-lg-4">
                    <div class="courseInfo">
                        <div class="card">
                            <div class="cardVideo">
                                <div class="videoContainer">
                                    <img
                                        src="{{ $course->getImage() }}"
                                        alt="Video Thumbnail"
                                        onclick="playVideo()"
                                        class="videoThumbnail"
                                    />
                                      <div class="favourite">
                                    <img src="/design/img/courseList/heart.svg" />
                                </div>
                                    @if($course->video_demo)
                                        <img
                                            class="playButton"
                                            src="/design/img/courseDetail/playButton.svg"
                                            alt="Play Button"
                                            onclick="playVideo()"
                                        />
                                        <video id="videoPlayer" controls>
                                            <source
                                                src="{{ $course->video_demo_source == 'upload' ?  url($course->video_demo) : $course->video_demo }}"
                                                type="video/mp4"/>
                                            Your browser does not support the video tag.
                                        </video>
                                    @endif
                                </div>
                            </div>
                            <div class="card-body">
                                @if($course->price > 0)
                                    <div id="priceBox"
                                         class="d-flex align-items-center justify-content-center mt-20 {{ !empty($activeSpecialOffer) ? ' flex-column ' : '' }}">
                                        <div class="text-center">
                                            @php
                                                $realPrice = handleCoursePagePrice($course->price);
                                            @endphp
                                            <span id="realPrice" data-value="{{ $course->price }}"
                                                  data-special-offer="{{ !empty($activeSpecialOffer) ? $activeSpecialOffer->percent : ''}}"
                                                  class="d-block @if(!empty($activeSpecialOffer)) font-16 text-gray text-decoration-line-through @else font-30 text-primary @endif">
                                                <h5>{{ $realPrice['price'] }}</h5>
                                        </span>

                                            @if(!empty($realPrice['tax']) and empty($activeSpecialOffer))
                                                {{--                                                <span class="d-block font-14 text-gray">+ {{ $realPrice['tax'] }} {{ trans('cart.tax') }}</span>--}}
                                            @endif
                                        </div>

                                        @if(!empty($activeSpecialOffer))
                                            <div class="text-center">
                                                @php
                                                    $priceWithDiscount = handleCoursePagePrice($course->getPrice());
                                                @endphp
                                                <span id="priceWithDiscount"
                                                      class="d-block font-30 text-primary">
                                                    <h5>{{ $priceWithDiscount['price'] }}</h5>
                                            </span>

                                                @if(!empty($priceWithDiscount['tax']))
                                                    {{--                                                    <span class="d-block font-14 text-gray">+ {{ $priceWithDiscount['tax'] }} {{ trans('cart.tax') }}</span>--}}
                                                @endif
                                            </div>
                                        @endif
                                    </div>
                                @else
                                    <div class="d-flex align-items-center mt-20">
                                        <h5>{{ trans('public.free') }}</h5>
                                    </div>
                                @endif

                                <div class="detailsWrap">
                                    <div
                                        class="details d-flex justify-content-between align-items-center"
                                    >
                                        <div class="lectureDetails d-flex align-items-center">
                                            <div class="icons">
                                                <img
                                                    src="/design/img/courseDetail/listUl.svg"
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
                                                    src="/design/img/courseDetail/listStars.svg"
                                                    alt="inoura"
                                                />
                                            </div>
                                            <h6 class="mb-0">Quizzes</h6>
                                        </div>
                                        <p class="mb-0">{{ count($course->quizzes) }}</p>
                                    </div>
                                    <div
                                        class="details d-flex justify-content-between align-items-center"
                                    >
                                        <div class="lectureDetails d-flex align-items-center">
                                            <div class="icons">
                                                <img
                                                    src="/design/img/courseDetail/listTask.svg"
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
                                                    src="/design/img/courseDetail/clipboardData.svg"
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
                                                    src="/design/img/courseDetail/calendarRange.svg"
                                                    alt="inoura"
                                                />
                                            </div>
                                            <h6 class="mb-0">Expiry period</h6>
                                        </div>
                                        <p class="mb-0">{{ $course->access_days }} {{ trans('public.days') }}</p>
                                    </div>
                                </div>

                                <form action="/cart/store" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="item_id" value="{{ $course->id }}">
                                    <input type="hidden" name="item_name" value="webinar_id">
                                    <a href="{{ !(auth()->check()) ? '/login' : '#' }}">
                                        <button class="btn cardBtn">Enroll now</button>
                                    </a>
                                </form>
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
                                        {{ clean($course->title, 't') }}
                                    </h2>
                                    <p class="descpText">
                                        Apply the five-step design thinking process to identify
                                        and creatively solve problems using a human-centered
                                        approach.
                                    </p>
                                    <div class="profileWrap d-flex align-items-center">
                                        <div class="profile d-flex align-items-center">
                                            <img
                                                src="/design/img/courseDetail/profilePic.svg"
                                                alt="inoura"
                                                class="profilePic"
                                            />
                                            <p class="profileName mb-0">by {{ $course->teacher->full_name }}</p>
                                        </div>
                                        <div class="rating d-flex align-items-center">
                                            <div class="starRating d-flex">
                                                @include('web.public_academy.components.rate',['rate' => $course->getRate()])
                                            </div>
                                            <div class="reviews">
                                                ({{ $course->reviews->count() > 0 ? $course->reviews->pluck('creator_id')->count() : 0 }}
                                                )
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex tagWrapper">
                                        <div class="tags duration d-flex align-items-center">
                                            <img src="/design/img/topCourses/clock.svg" alt="inoura"/>
                                            <div
                                                class="time">{{ convertMinutesToHourAndMinute(!empty($course->duration) ? $course->duration : 0) }} {{ trans('home.hours') }}</div>
                                        </div>
                                        <div class="tags enrollment d-flex align-items-center">
                                            <img src="/design/img/courseDetail/person.svg" alt="inoura"/>
                                            <div><span>{{ $course->sales_count }} </span>Enrolled</div>
                                        </div>
                                        <div class="tags enrollmen d-flex align-items-centert">
                                            <img
                                                src="/design/img/courseDetail/translate.svg"
                                                alt="inoura"
                                            />
                                            <div>English</div>
                                        </div>
                                        <div class="tags date d-flex align-items-center">
                                            <img
                                                src="/design/img/courseDetail/calendar.svg"
                                                alt="inoura"
                                            />
                                            <div>
                                                <span>Last updated:</span>{{ dateTimeFormat($course->updated_at,'j M Y') }}
                                            </div>
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
                                                <h6>{{ trans('product.Webinar_description') }}</h6>
                                                {!! nl2br($course->description) !!}
                                            </div>
                                            <div class="content">
                                                <h6>{{ trans('update.what_you_will_learn') }}</h6>
                                                <div class="row flex-wrap">
                                                    <div class="col-md-6">
                                                        <ul class="">
                                                            @php
                                                                $learningMaterialsExtraDescription = !empty($course->webinarExtraDescription) ? $course->webinarExtraDescription->where('type','learning_materials') : null;
                                                                $companyLogosExtraDescription = !empty($course->webinarExtraDescription) ? $course->webinarExtraDescription->where('type','company_logos') : null;
                                                                $requirementsExtraDescription = !empty($course->webinarExtraDescription) ? $course->webinarExtraDescription->where('type','requirements') : null;
                                                            @endphp
                                                            @foreach($learningMaterialsExtraDescription as $learningMaterial)
                                                                <li>{{ $learningMaterial->value }}</li>
                                                            @endforeach
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
                                                        src="/design/img/courseDetail/listOl.svg"
                                                        alt="inoura"
                                                    />
                                                    <div><span>6</span> sections</div>
                                                </div>
                                                <div
                                                    class="tags enrollmen d-flex align-items-centert"
                                                >
                                                    <img
                                                        src="/design/img/courseDetail/menuUp.svg"
                                                        alt="inoura"
                                                    />
                                                    <div><span>24</span> lectures</div>
                                                </div>
                                                <div
                                                    class="tags duration d-flex align-items-center"
                                                >
                                                    <img
                                                        src="/design/img/topCourses/clock.svg"
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
                                                                src="/design/img/courseDetail/Arrowdown.svg"
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
                                                                        src="/design/img/courseDetail/collectionPlay.svg"
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
                                                                        src="/design/img/courseDetail/collectionPlay.svg"
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
                                                                        src="/design/img/courseDetail/collectionPlay.svg"
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
                                                                        src="/design/img/courseDetail/collectionPlay.svg"
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
                                                                src="/design/img/courseDetail/Arrowdown.svg"
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
                                                                        src="/design/img/courseDetail/collectionPlay.svg"
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
                                                                src="/design/img/courseDetail/Arrowdown.svg"
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
                                                                        src="/design/img/courseDetail/collectionPlay.svg"
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
                                                                src="/design/img/courseDetail/Arrowdown.svg"
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
                                                                        src="/design/img/courseDetail/collectionPlay.svg"
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
                                                                src="/design/img/courseDetail/Arrowdown.svg"
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
                                                                        src="/design/img/courseDetail/collectionPlay.svg"
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
                                                        src="/design/img/courseDetail/star.svg"
                                                        alt="inoura"
                                                    />
                                                    <div>4.4 ({{ $course->teacher->reviewsCount() }} Reviews)</div>
                                                </div>
                                                <div
                                                    class="tags enrollmen d-flex align-items-centert"
                                                >
                                                    <img
                                                        src="/design/img/courseDetail/collection.svg"
                                                        alt="inoura"
                                                    />
                                                    <div>5 283 Lessons</div>
                                                </div>
                                                <div
                                                    class="tags duration d-flex align-items-center"
                                                >
                                                    <img
                                                        src="/design/img/courseDetail/playBtn.svg"
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
                                                                src="{{ $course->teacher->getAvatar() }}"
                                                                class="card-img"
                                                                alt="inoura"
                                                            />
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="card-body">
                                                                <h5 class="card-title">
                                                                    {{ $course->teacher->full_name }}
                                                                </h5>
                                                                <div class="card-text">
                                                                    {{ $course->teacher->about }}
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
                                                    @if($course->reviews->count() > 0)
                                                        @foreach($course->reviews as $review)
                                                            <div class="col-sm-6 p-0 column">
                                                                <div class="card">
                                                                    <div class="profileInfo d-flex">
                                                                        <div class="profileDP">JS</div>
                                                                        <div class="profileName">
                                                                            <h5>{{ $review->creator->full_name }}</h5>
                                                                            <div class="rewiews">
                                                                                <img
                                                                                    src="/design/img/courseDetail/starFillBlack.svg"
                                                                                />
                                                                                <img
                                                                                    src="/design/img/courseDetail/starFillBlack.svg"
                                                                                />
                                                                                <img
                                                                                    src="/design/img/courseDetail/starFillBlack.svg"
                                                                                />
                                                                                <img
                                                                                    src="/design/img/courseDetail/starFillBlack.svg"
                                                                                />
                                                                                <img
                                                                                    src="/design/img/courseDetail/starFillBlack.svg"
                                                                                />
                                                                                <span class=""> {{ dateTimeFormat($review->created_at, 'j M Y | H:i') }}</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <p>
                                                                        {!! clean($review->description,'description') !!}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
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
                                                            src="/design/img/courseDetail/chevronDownBlue.svg"
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
@include('web.public_academy.layout.script')
@include('web.default.course.share_modal')
@include('web.default.course.buy_with_point_modal')
@push('scripts_bottom')
    <script src="/assets/default/js/parts/time-counter-down.min.js"></script>
    <script src="/assets/default/vendors/barrating/jquery.barrating.min.js"></script>
    <script src="/assets/default/vendors/video/video.min.js"></script>
    <script src="/assets/default/vendors/video/youtube.min.js"></script>
    <script src="/assets/default/vendors/video/vimeo.js"></script>
    <script src="/assets/default/vendors/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="/assets/default/js/admin/advertising_modal.min.js"></script>

    <script>
        var webinarDemoLang = '{{ trans('webinars.webinar_demo') }}';
        var replyLang = '{{ trans('panel.reply') }}';
        var closeLang = '{{ trans('public.close') }}';
        var saveLang = '{{ trans('public.save') }}';
        var reportLang = '{{ trans('panel.report') }}';
        var reportSuccessLang = '{{ trans('panel.report_success') }}';
        var reportFailLang = '{{ trans('panel.report_fail') }}';
        var messageToReviewerLang = '{{ trans('public.message_to_reviewer') }}';
        var copyLang = '{{ trans('public.copy') }}';
        var copiedLang = '{{ trans('public.copied') }}';
        var learningToggleLangSuccess = '{{ trans('public.course_learning_change_status_success') }}';
        var learningToggleLangError = '{{ trans('public.course_learning_change_status_error') }}';
        var notLoginToastTitleLang = '{{ trans('public.not_login_toast_lang') }}';
        var notLoginToastMsgLang = '{{ trans('public.not_login_toast_msg_lang') }}';
        var notAccessToastTitleLang = '{{ trans('public.not_access_toast_lang') }}';
        var notAccessToastMsgLang = '{{ trans('public.not_access_toast_msg_lang') }}';
        var canNotTryAgainQuizToastTitleLang = '{{ trans('public.can_not_try_again_quiz_toast_lang') }}';
        var canNotTryAgainQuizToastMsgLang = '{{ trans('public.can_not_try_again_quiz_toast_msg_lang') }}';
        var canNotDownloadCertificateToastTitleLang = '{{ trans('public.can_not_download_certificate_toast_lang') }}';
        var canNotDownloadCertificateToastMsgLang = '{{ trans('public.can_not_download_certificate_toast_msg_lang') }}';
        var sessionFinishedToastTitleLang = '{{ trans('public.session_finished_toast_title_lang') }}';
        var sessionFinishedToastMsgLang = '{{ trans('public.session_finished_toast_msg_lang') }}';
        var sequenceContentErrorModalTitle = '{{ trans('update.sequence_content_error_modal_title') }}';
        var courseHasBoughtStatusToastTitleLang = '{{ trans('cart.fail_purchase') }}';
        var courseHasBoughtStatusToastMsgLang = '{{ trans('site.you_bought_webinar') }}';
        var courseNotCapacityStatusToastTitleLang = '{{ trans('public.request_failed') }}';
        var courseNotCapacityStatusToastMsgLang = '{{ trans('cart.course_not_capacity') }}';
        var courseHasStartedStatusToastTitleLang = '{{ trans('cart.fail_purchase') }}';
        var courseHasStartedStatusToastMsgLang = '{{ trans('update.class_has_started') }}';
        var joinCourseWaitlistLang = '{{ trans('update.join_course_waitlist') }}';
        var joinCourseWaitlistModalHintLang = "{{ trans('update.join_course_waitlist_modal_hint') }}";
        var joinLang = '{{ trans('footer.join') }}';
        var nameLang = '{{ trans('auth.name') }}';
        var emailLang = '{{ trans('auth.email') }}';
        var phoneLang = '{{ trans('public.phone') }}';
        var captchaLang = '{{ trans('site.captcha') }}';
    </script>

    <script src="/assets/default/js/parts/comment.min.js"></script>
    <script src="/assets/default/js/parts/video_player_helpers.min.js"></script>
    <script src="/assets/default/js/parts/webinar_show.min.js"></script>


    @if(!empty($course->creator) and !empty($course->creator->live_chat_js_code) and !empty(getFeaturesSettings('show_live_chat_widget')))
        <script>
            (function () {
                "use strict"

                {!! $course->creator->live_chat_js_code !!}
            })(jQuery)
        </script>
    @endif
@endpush
</body>
</html>
