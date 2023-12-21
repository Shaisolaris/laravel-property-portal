<!DOCTYPE html>
<html lang="en">
<head>
    @include('web.public_academy.layout.head')
    <title>Courses</title>
</head>

<body>
<div class="myCoursesDashboard">
    @include('web.public_academy.layout.nav')
    <div class="courseSection">
        <div class="container px-lg-0">
            <div class="row">
                @include('web.public_academy.layout.academySidebar')
                <div class="col-xl-9 col-lg-12">
                    <h2>Courses</h2>
                    <div
                        class="d-flex justify-content-between row_gap_20 flex-sm-row flex-column-reverse align-items-center w-100"
                    >
                        <div class="tabbingWrapper">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">
                                        All
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-activeCard-tab" data-toggle="pill" href="#pills-activeCard" role="tab" aria-controls="pills-activeCard"
                                       aria-selected="false">
                                        Active
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-courseCompleted-tab" data-toggle="pill" href="#pills-courseCompleted" role="tab"
                                       aria-controls="pills-courseCompleted" aria-selected="false">
                                        Completed
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="listTabing d-flex">
                            <a href="{{ url('/academy/dashboard/courses') }}">
                                <div class="listing">
                                    <img src="/design/img/courseList/list.svg"/>
                                </div>
                            </a>
                            <a href="{{ url('/academy/dashboard/courses') }}">
                                <div class="categoriesGrid">
                                    <img src="/design/img/courseList/grid.svg"/>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="courseDetail">
                        <div class="courseOverview">
                            <div class="tabContentWrapper">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                                        <div class="tabOverview">
                                            @if(!empty($sales) and !$sales->isEmpty())
                                                @foreach($sales as $sale)
                                                    @php
                                                        $item = !empty($sale->webinar) ? $sale->webinar : $sale->bundle;

                                                        $lastSession = !empty($sale->webinar) ? $sale->webinar->lastSession() : null;
                                                        $nextSession = !empty($sale->webinar) ? $sale->webinar->nextSession() : null;
                                                        $isProgressing = false;

                                                        if(!empty($sale->webinar) and $sale->webinar->start_date <= time() and !empty($lastSession) and $lastSession->date > time()) {
                                                            $isProgressing = true;
                                                        }

                                                        $percent = $item->getProgress();

                                                        if($item->isWebinar()){
                                                            if($item->isProgressing()) {
                                                                $progressTitle = trans('public.course_learning_passed',['percent' => $percent]);
                                                            } else {
                                                                $progressTitle = $item->sales_count .'/'. $item->capacity .' '. trans('quiz.students');
                                                            }
                                                        } else {
                                                               $progressTitle = trans('public.course_learning_passed',['percent' => $percent]);
                                                        }
                                                    @endphp
                                                    @if(!empty($item))
                                                        <div class="card courseListCard">
                                                            <div class="cardImgWrap">
                                                                <img src="{{ $item->getImage() }}" alt="{{ $item->title }}" class="card-img-top cardImg"/>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="cardData">
                                                                    <a href="{{ url('/academy/dashboard/courses/details/' . $item->slug) }}">
                                                                        <h3 class="card-title">{{ $item->title }}</h3>
                                                                    </a>
                                                                    <div class="profile d-flex align-items-center">
                                                                        <img src="{{ $item->teacher->getAvatar() }}" alt="{{ $item->teacher->full_name }}" class="profilePic"/>
                                                                        <p class="profileName mb-0">by {{ $item->teacher->full_name }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="durationContent">
                                                                    <p class="startDate dateStyles">Starts: 09 Oct 2023</p>
                                                                    <p class="endDate dateStyles">Ends: 28 Oct 2023</p>
                                                                </div>
                                                                <div class="progress myCoureseProgressBar">
                                                                    <div class="progress-bar" style="width: {{ $percent }}%" role="progressbar" aria-valuenow="{{ $percent }}%"
                                                                         aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <div class="d-flex tagWrapper">
                                                                    <div class="tags enrollment d-flex align-items-center">
                                                                        <img src="/design/img/courseDetail/star.svg" alt="inoura"/>
                                                                        <div>{{ $percent }}% Done</div>
                                                                    </div>
                                                                    <div class="tags enrollmen d-flex align-items-centert">
                                                                        <img src="/design/img/courseDetail/collection.svg" alt="inoura"/>
                                                                        <div>1/6 sections</div>
                                                                    </div>
                                                                    <div class="tags duration d-flex align-items-center">
                                                                        <img src="/design/img/courseDetail/playBtn.svg" alt="inoura"/>
                                                                        <div class="time">8/24 lectures</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-activeCard" role="tabpanel" aria-labelledby="pills-activeCard-tab">
                                        <div class="tabOverview">
                                            @if(!empty($sales) and !$sales->isEmpty())
                                                @foreach($sales as $sale)
                                                    @php
                                                        $item = !empty($sale->webinar) ? $sale->webinar : $sale->bundle;

                                                        $lastSession = !empty($sale->webinar) ? $sale->webinar->lastSession() : null;
                                                        $nextSession = !empty($sale->webinar) ? $sale->webinar->nextSession() : null;
                                                        $isProgressing = false;

                                                        if(!empty($sale->webinar) and $sale->webinar->start_date <= time() and !empty($lastSession) and $lastSession->date > time()) {
                                                            $isProgressing = true;
                                                        }

                                                        $percent = $item->getProgress();

                                                        if($item->isWebinar()){
                                                            if($item->isProgressing()) {
                                                                $progressTitle = trans('public.course_learning_passed',['percent' => $percent]);
                                                            } else {
                                                                $progressTitle = $item->sales_count .'/'. $item->capacity .' '. trans('quiz.students');
                                                            }
                                                        } else {
                                                               $progressTitle = trans('public.course_learning_passed',['percent' => $percent]);
                                                        }
                                                    @endphp
                                                    @if(!empty($item) && $percent > 0 && $percent < 100)
                                                        <div class="card courseListCard">
                                                            <div class="cardImgWrap">
                                                                <img src="{{ $item->getImage() }}" alt="{{ $item->title }}" class="card-img-top cardImg"/>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="cardData">
                                                                    <a href="{{ url('/academy/dashboard/courses/details/' . $item->slug) }}">
                                                                        <h3 class="card-title">{{ $item->title }}</h3>
                                                                    </a>
                                                                    <div class="profile d-flex align-items-center">
                                                                        <img src="{{ $item->teacher->getAvatar() }}" alt="{{ $item->teacher->full_name }}" class="profilePic"/>
                                                                        <p class="profileName mb-0">by {{ $item->teacher->full_name }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="durationContent">
                                                                    <p class="startDate dateStyles">Starts: 09 Oct 2023</p>
                                                                    <p class="endDate mb-0 dateStyles">Ends: 28 Oct 2023</p>
                                                                </div>
                                                                <div class="progress myCoureseProgressBar">
                                                                    <div class="progress-bar" style="width: {{ $percent }}%" role="progressbar" aria-valuenow="{{ $percent }}%"
                                                                         aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <div class="d-flex tagWrapper">
                                                                    <div class="tags enrollment d-flex align-items-center">
                                                                        <img src="/design/img/courseDetail/star.svg" alt="inoura"/>
                                                                        <div>{{ $percent }}% done</div>
                                                                    </div>
                                                                    <div class="tags enrollmen d-flex align-items-centert">
                                                                        <img src="/design/img/courseDetail/collection.svg" alt="inoura"/>
                                                                        <div>1/6 sections</div>
                                                                    </div>
                                                                    <div class="tags duration d-flex align-items-center">
                                                                        <img src="/design/img/courseDetail/playBtn.svg" alt="inoura"/>
                                                                        <div class="time">8/24 lectures</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>

                                    @if(!empty($sales) and !$sales->isEmpty())
                                        @foreach($sales as $sale)
                                            @php
                                                $item = !empty($sale->webinar) ? $sale->webinar : $sale->bundle;

                                                $lastSession = !empty($sale->webinar) ? $sale->webinar->lastSession() : null;
                                                $nextSession = !empty($sale->webinar) ? $sale->webinar->nextSession() : null;
                                                $isProgressing = false;

                                                if(!empty($sale->webinar) and $sale->webinar->start_date <= time() and !empty($lastSession) and $lastSession->date > time()) {
                                                    $isProgressing = true;
                                                }

                                                $percent = $item->getProgress();

                                                if($item->isWebinar()){
                                                    if($item->isProgressing()) {
                                                        $progressTitle = trans('public.course_learning_passed',['percent' => $percent]);
                                                    } else {
                                                        $progressTitle = $item->sales_count .'/'. $item->capacity .' '. trans('quiz.students');
                                                    }
                                                } else {
                                                       $progressTitle = trans('public.course_learning_passed',['percent' => $percent]);
                                                }
                                            @endphp
                                            @if(!empty($item) && $percent == 100)
                                                <div class="tab-pane fade" id="pills-courseCompleted" role="tabpanel" aria-labelledby="pills-courseCompleted-tab">
                                                    <div class="tabOverview">
                                                        <div class="card courseListCard">
                                                            <div class="cardImgWrap">
                                                                <img src="{{ $item->getImage() }}" alt="{{ $item->title }}" class="card-img-top cardImg"/>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="cardData">
                                                                    <a href="{{ url('/academy/dashboard/courses/details/' . $item->slug) }}">
                                                                        <h3 class="card-title">{{ $item->title }}</h3>
                                                                    </a>
                                                                    <div class="profile d-flex align-items-center">
                                                                        <img src="{{ $item->teacher->getAvatar() }}" alt="{{ $item->teacher->full_name }}" class="profilePic"/>
                                                                        <p class="profileName mb-0">by {{ $item->teacher->full_name }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="durationContent">
                                                                    <p class="startDate dateStyles">Starts: 09 Oct 2023</p>
                                                                    <p class="endDate mb-0 dateStyles">Ends: 28 Oct 2023</p>
                                                                </div>
                                                                <div class="progress myCoureseProgressBar">
                                                                    <div class="progress-bar" style="width: {{ $percent }}%" role="progressbar" aria-valuenow="{{ $percent }}%"
                                                                         aria-valuemin="0"
                                                                         aria-valuemax="100"></div>
                                                                </div>
                                                                <div class="d-flex tagWrapper">
                                                                    <div class="tags enrollment d-flex align-items-center">
                                                                        <img src="/design/img/courseDetail/star.svg" alt="inoura"/>
                                                                        <div>{{ $percent }}% Done</div>
                                                                    </div>
                                                                    <div class="tags enrollmen d-flex align-items-centert">
                                                                        <img src="/design/img/courseDetail/collection.svg" alt="inoura"/>
                                                                        <div>1/6 sections</div>
                                                                    </div>
                                                                    <div class="tags duration d-flex align-items-center">
                                                                        <img src="/design/img/courseDetail/playBtn.svg" alt="inoura"/>
                                                                        <div class="time">8/24 lectures</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
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
