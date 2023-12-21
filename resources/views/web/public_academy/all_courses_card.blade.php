<!DOCTYPE html>
<html lang="en">
<head>
    @include('web.public_academy.layout.head')
</head>
<body>
<div class="CourseListWrapper">
    @include('web.public_academy.layout.nav')
    <div class="breadCrumbWrap">
        <div class="container px-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-3 row_gap_20">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item">
                        <a href="">Academy of Inoura</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Categories</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Courses
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="courseSection">
        <div class="container px-lg-0">
            <div class="heading align-items-center">
                <img src="{{ asset('design/img/courseList/img.svg') }}" alt="inoura Course"/>
                <h2>Courses</h2>
            </div>
            <div class="d-inline-flex mb-4 sideMenuButton" id="sideMenuButton">
                <div class="btn btn-light">
                    <img src="{{ asset('design/img/starsIcon/menusidebar.svg') }}" alt="inoura"/>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="courseListSideBar courseCardSideBar" id="sidebar">
                    <nav>
                        <div
                            class="d-flex justify-content-end mb-2 closeBtn"
                            id="closeBtn"
                        >
                            <div class="btn btn-light">
                                <img src="{{ asset('design/img/categoriesPage/close.svg') }}" alt="inoura"/>
                            </div>
                        </div>
                        <div class="accordion" id="sidebardropdown">
                            <div class="sideBarContent">
                                <button
                                    class="btn accordionBtn d-flex justify-content-between"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseOne"
                                    aria-expanded="true"
                                    aria-controls="collapseOne"
                                >
                                    <h6>Categories</h6>
                                    <img src="{{ asset('design/img/courseList/downIcon.svg') }}"/>
                                </button>

                                <div
                                    id="collapseOne"
                                    class="collapse show"
                                    aria-labelledby="headingOne"
                                    data-parent="#sidebardropdown"
                                >
                                    <div class="accordionBody">
                                        <div class="checkList">
                                            <div class="checkWrapper">
                                                <div class="form-check form-check-inline mr-0">
                                                    <div class="checkboxWrap">
                                                        <input
                                                            class="form-check-input m-0"
                                                            type="checkbox"
                                                            id="allCategory"
                                                            value="option1"
                                                        />
                                                    </div>
                                                    <label class="form-check-label" for="allCategory"
                                                    >All category</label
                                                    >
                                                </div>
                                                <p class="cousreItem">5</p>
                                            </div>
                                        </div>
                                        <div class="checkList">
                                            <div class="checkWrapper">
                                                <div class="form-check form-check-inline mr-0">
                                                    <div class="checkboxWrap">
                                                        <input
                                                            class="form-check-input m-0"
                                                            type="checkbox"
                                                            id="allCategory2"
                                                            value="option1"
                                                        />
                                                    </div>
                                                    <label class="form-check-label" for="allCategory2"
                                                    >Web Design</label
                                                    >
                                                </div>
                                                <p class="cousreItem">5</p>
                                            </div>
                                            <ul class="subCheckboxList">
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList1"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList1"
                                                            >Responsive Design</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList2"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList2"
                                                            >WordPress Theme</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList3"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList3"
                                                            >Bootstrap</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList4"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList4"
                                                            >HTML & CSS</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sideBarContent">
                                <button
                                    class="btn accordionBtn d-flex justify-content-between"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseTwo"
                                    aria-expanded="true"
                                    aria-controls="collapseOne"
                                >
                                    <h6>Categories</h6>
                                    <img src="{{ asset('design/img/courseList/downIcon.svg') }}"/>
                                </button>

                                <div
                                    id="collapseTwo"
                                    class="collapse show"
                                    aria-labelledby="headingOne"
                                    data-parent="#sidebardropdown"
                                >
                                    <div class="accordionBody">
                                        <div class="checkList">
                                            <div class="checkWrapper">
                                                <div class="form-check form-check-inline mr-0">
                                                    <div class="checkboxWrap">
                                                        <input
                                                            class="form-check-input m-0"
                                                            type="checkbox"
                                                            id="allCategory"
                                                            value="option1"
                                                        />
                                                    </div>
                                                    <label class="form-check-label" for="allCategory"
                                                    >All category</label
                                                    >
                                                </div>
                                                <p class="cousreItem">5</p>
                                            </div>
                                        </div>
                                        <div class="checkList">
                                            <div class="checkWrapper">
                                                <div class="form-check form-check-inline mr-0">
                                                    <div class="checkboxWrap">
                                                        <input
                                                            class="form-check-input m-0"
                                                            type="checkbox"
                                                            id="allCategory2"
                                                            value="option1"
                                                        />
                                                    </div>
                                                    <label class="form-check-label" for="allCategory2"
                                                    >Web Design</label
                                                    >
                                                </div>
                                                <p class="cousreItem">5</p>
                                            </div>
                                            <ul class="subCheckboxList">
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList1"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList1"
                                                            >Responsive Design</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList2"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList2"
                                                            >WordPress Theme</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList3"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList3"
                                                            >Bootstrap</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList4"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList4"
                                                            >HTML & CSS</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sideBarContent">
                                <button
                                    class="btn accordionBtn d-flex justify-content-between"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseFour"
                                    aria-expanded="true"
                                    aria-controls="collapseFour"
                                >
                                    <h6>Categories</h6>
                                    <img src="{{ asset('design/img/courseList/downIcon.svg') }}"/>
                                </button>

                                <div
                                    id="collapseFour"
                                    class="collapse show"
                                    aria-labelledby="headingOne"
                                    data-parent="#sidebardropdown"
                                >
                                    <div class="accordionBody">
                                        <div class="checkList">
                                            <div class="checkWrapper">
                                                <div class="form-check form-check-inline mr-0">
                                                    <div class="checkboxWrap">
                                                        <input
                                                            class="form-check-input m-0"
                                                            type="checkbox"
                                                            id="allCategory"
                                                            value="option1"
                                                        />
                                                    </div>
                                                    <label class="form-check-label" for="allCategory"
                                                    >All category</label
                                                    >
                                                </div>
                                                <p class="cousreItem">5</p>
                                            </div>
                                        </div>
                                        <div class="checkList">
                                            <div class="checkWrapper">
                                                <div class="form-check form-check-inline mr-0">
                                                    <div class="checkboxWrap">
                                                        <input
                                                            class="form-check-input m-0"
                                                            type="checkbox"
                                                            id="allCategory2"
                                                            value="option1"
                                                        />
                                                    </div>
                                                    <label class="form-check-label" for="allCategory2"
                                                    >Web Design</label
                                                    >
                                                </div>
                                                <p class="cousreItem">5</p>
                                            </div>
                                            <ul class="subCheckboxList">
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList1"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList1"
                                                            >Responsive Design</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList2"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList2"
                                                            >WordPress Theme</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList3"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList3"
                                                            >Bootstrap</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList4"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList4"
                                                            >HTML & CSS</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sideBarContent">
                                <button
                                    class="btn accordionBtn d-flex justify-content-between"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseThree"
                                    aria-expanded="true"
                                    aria-controls="collapseThree"
                                >
                                    <h6>Categories</h6>
                                    <img src="{{ asset('design/img/courseList/downIcon.svg') }}"/>
                                </button>

                                <div
                                    id="collapseThree"
                                    class="collapse show"
                                    aria-labelledby="headingOne"
                                    data-parent="#sidebardropdown"
                                >
                                    <div class="accordionBody">
                                        <div class="checkList">
                                            <div class="checkWrapper">
                                                <div class="form-check form-check-inline mr-0">
                                                    <div class="checkboxWrap">
                                                        <input
                                                            class="form-check-input m-0"
                                                            type="checkbox"
                                                            id="allCategory"
                                                            value="option1"
                                                        />
                                                    </div>
                                                    <label class="form-check-label" for="allCategory"
                                                    >All category</label
                                                    >
                                                </div>
                                                <p class="cousreItem">5</p>
                                            </div>
                                        </div>
                                        <div class="checkList">
                                            <div class="checkWrapper">
                                                <div class="form-check form-check-inline mr-0">
                                                    <div class="checkboxWrap">
                                                        <input
                                                            class="form-check-input m-0"
                                                            type="checkbox"
                                                            id="allCategory2"
                                                            value="option1"
                                                        />
                                                    </div>
                                                    <label class="form-check-label" for="allCategory2"
                                                    >Web Design</label
                                                    >
                                                </div>
                                                <p class="cousreItem">5</p>
                                            </div>
                                            <ul class="subCheckboxList">
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList1"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList1"
                                                            >Responsive Design</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList2"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList2"
                                                            >WordPress Theme</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList3"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList3"
                                                            >Bootstrap</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkWrapper">
                                                        <div class="form-check form-check-inline mr-0">
                                                            <div class="checkboxWrap">
                                                                <input
                                                                    class="form-check-input m-0"
                                                                    type="checkbox"
                                                                    id="subList4"
                                                                    value="option1"
                                                                />
                                                            </div>
                                                            <label class="form-check-label" for="subList4"
                                                            >HTML & CSS</label
                                                            >
                                                        </div>
                                                        <p class="cousreItem">5</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="coursesCardGrid coursesCardList">
                    <div class="changeCategories">
                        <div class="listTabing">
                            <a href="{{ url('/academy/all-courses-list') }}">
                                <div class="listing">
                                    <img src="{{ asset('design/img/courseList/list.svg') }}"/>
                                </div>
                            </a>
                            <a href="{{ url('/academy/all-courses-grid') }}">
                                <div class="categoriesGrid">
                                    <img src="{{ asset('design/img/courseList/grid.svg') }}"/>
                                </div>
                            </a>
                        </div>
                        <div class="listTabing">
                            <div class="search">
                                <img src="{{ asset('design/img/courseList/search.svg') }}"/>
                            </div>
                            <div class="newlyPublished">
                                <div class="dropdown">
                                    <a
                                        class="btn dropdown-toggle"
                                        type="button"
                                        id="dropdownMenuButton"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Newly published
                                    </a>
                                    <div
                                        class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="dropdownMenuButton"
                                    >
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#"
                                        >Something else here</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div
                            class="row row_gap_20 justify-content-center justify-content-lg-start"
                        >
                            @foreach($webinars as $webinar)
                                <div class="card courseCard">
                                    <div class="cardImgWrap">
                                        <button class="btn tag">Intermediate</button>
                                        <div class="favourite">
                                            <img src="{{ asset('design/img/courseList/heart.svg') }}"/>
                                        </div>
                                        <img
                                            src="{{ $webinar->getImage() }}"
                                            alt="{{ $webinar->title }}"
                                            class="card-img-top cardImg"
                                        />
                                    </div>
                                    <div class="card-body">
                                        <div class="cardData">
                                            <a href="{{ url('/academy/course-details/' . $webinar->slug) }}">
                                                <h3 class="card-title">
                                                    {{ $webinar->title }}
                                                </h3>
                                            </a>
                                            <p class="card-text">
                                                {{ (strip_tags($webinar->getDescriptionAttribute())) }}
                                            </p>
                                        </div>
                                        <div class="ratingContent">
                                            <div class="rating">
                                                <p class="rate">{{ $webinar->getRate() }}</p>
                                                <img src="{{ asset('design/img/topCourses/starFill.svg') }}" alt="starFill"
                                                />
                                                <p class="reviews">{{ count($webinar->reviews) }}</p>
                                            </div>
                                            <div>
                                                <a href="#">
                                                    <img src="{{ asset('design/img/topCourses/cardBtn.svg') }}" alt="btn inoura"
                                                    />
                                                </a>
                                            </div>
                                        </div>
                                        <hr class="line"/>
                                        <div class="pricingContent">
                                            <div class="pricing">
                                                @if(!empty($isRewardCourses) and !empty($webinar->points))
                                                    <p class="price">{{ $webinar->points }} {{ trans('update.points') }}</p>
                                                @elseif(!empty($webinar->price) and $webinar->price > 0)
                                                    @if($webinar->bestTicket() < $webinar->price)
                                                        <p class="price">{{ handlePrice($webinar->bestTicket(), true, true, false, null, true) }}</p>
                                                        <p class="oldPrice">{{ handlePrice($webinar->price, true, true, false, null, true) }}</p>
                                                    @else
                                                        <p class="price">{{ handlePrice($webinar->price, true, true, false, null, true) }}</p>
                                                    @endif
                                                @else
                                                    <p class="price">{{ trans('public.free') }}</p>
                                                @endif
                                            </div>
                                            <div class="timeWrapper">
                                                <img src="{{ asset('design/img/topCourses/clock.svg') }}" alt="icon"/>
                                                <p class="time mb-0">{{ convertMinutesToHourAndMinute($webinar->duration) }} {{ trans('home.hours') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="paginationWrap mt-4">
                {{ $webinars->appends(request()->input())->links('vendor.pagination.panel') }}
            </div>
        </div>
    </div>
</div>
@include('web.public_academy.layout.script')
</body>
</html>
