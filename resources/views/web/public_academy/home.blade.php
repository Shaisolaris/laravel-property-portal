@extends('web.public_academy.layout.default')
@section('content')
    <section class="heroSection">
        <div class="container">
            <div
                class="row align-items-lg-center justify-content-lg-between justify-content-center"
            >
                <div class="col-lg-5 col-md-12 px-lg-0">
                    <div class="bannerContent">
                        <div class="heading">
                            <h1>
                                {{ $heroSectionData['title'] }}
                                {{--                            <span class="position-relative"--}}
                                {{--                            >{{ explode($heroSectionData['title'], " ")[1] ?? '' }}<img--}}
                                {{--                                    src="design/img/starsIcon/pinkLargeLine.svg"--}}
                                {{--                                    alt="inoura"--}}
                                {{--                                    class="underlineImg"--}}
                                {{--                                /></span>--}}
                                {{--                            from best platform.--}}
                            </h1>
                            <div class="leftColumnMobView">
                                <img
                                    src="design/img/heroSection/bannerImg.png"
                                    alt="inoura"
                                    class="img-fluid"
                                />
                            </div>
                            <p>
                                {!! nl2br($heroSectionData['description']) !!}
                            </p>
                        </div>
                        <form action='/search' method="get" >
                        <div class="input-group mb-3 heroSectionInput align-items-center">
                       
                            <div class="searchBtn">
                                <img src="/design/img/heroSection/search.svg" alt="search"/>
                            </div>
                          
                            <input
                                type="text"
                                class="form-control"
                                placeholder="What do you want to learn?"
                                aria-label="What do you want to learn?"
                                aria-describedby="button-addon2"
                                name="search"
                            />
                            <div class="input-group-append">
                                <button class="btn" type="submit" id="button-addon2">
                                    Search
                                </button>
                            </div>

                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 pr-lg-0">
                    <div class="leftColumn">
                        <img
                            src="design/img/heroSection/bannerImg.png"
                            alt="inoura"
                            class="img-fluid"
                        />
                    </div>
                </div>
            </div>
        </div>
        <div class="counter">
            <div class="container">
                <div class="row justify-content-sm-between justify-content-center">
                    <div class="counterContent">
                        <h3>2000+</h3>
                        <p>happy students</p>
                    </div>
                    <div class="counterContent">
                        <h3>100+</h3>
                        <p>experienced instructors</p>
                    </div>
                    <div class="counterContent">
                        <h3>2000+</h3>
                        <p>happy students</p>
                    </div>
                    <div class="counterContent">
                        <h3>100+</h3>
                        <p>experienced instructors</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="colorTheory">
        <div class="containerWrapper">
            <img
                src="design/img/starsIcon/yellowLargeStar.svg"
                alt="inoura"
                class="colorYellowStar position-absolute"
            />
            <img
                src="design/img/starsIcon/pinkSmallStar.svg"
                alt="inoura"
                class="colorPinkStar position-absolute"
            />
            <img
                src="design/img/starsIcon/rightCurveArrow.svg"
                alt="inoura"
                class="rightCurveArrow position-absolute"
            />
            <div class="colorTheorySlider">
                @foreach($upcomingCourses as $upcomingCourse)
                    <div
                        class="d-flex align-items-center justify-content-between tabContentColumn"
                    >
                        <div class="headingWrapper">
                            <div class="upComingCourse">
                                <h6>Upcoming courses</h6>
                                <div class="counter">#1/{{ count($upcomingCourses) }}</div>
                            </div>
                            <h3>
                <span class="underLineHeading"
                >{{ $upcomingCourse->title }}
                  <img
                      src="design/img/starsIcon/yellowLargeLine.svg"
                      alt="inoura"
                      class="underlineImg"
                  /></span>
                                for Designers
                            </h3>
                            <div class="d-lg-none d-flex">
                                <img
                                    src="design/img/colortheroy/tabImg.png"
                                    alt="inoura"
                                    class="img-fluid sliderImg"
                                />
                            </div>
                            <p>
                                {{ substr(strip_tags($upcomingCourse->getDescriptionAttribute()), 0, 200) }}
                            </p>
                        </div>
                        <div class="d-lg-flex d-none justify-content-end">
                            <img
                                src="{{ $upcomingCourse->getImage() }}"
                                alt="{{ $upcomingCourse->title }}"
                                class="img-fluid sliderImg"
                            />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="TopCourses">
        <div class="container position-relative">
            <img
                src="design/img/starsIcon/yellowSmallStar.svg"
                alt="inoura"
                class="yellowSmallStar position-absolute"
            />
            <img
                src="design/img/starsIcon/pinkLargeStar.svg"
                alt="inoura"
                class="pinkLargeStar position-absolute"
            />
            <div class="headingWrapper">
                <div class="heading">
                    <h2>
              <span class="position-relative"
              >Top<img
                      src="design/img/starsIcon/blueSmallLine.svg"
                      alt="inoura"
                      class="underlineImg"
                  /></span>
                        courses
                    </h2>
                    <p>
                        {{ trans('home.best_rates_hint') }}
                    </p>
                </div>
                <a href="{{ url('/academy/all-courses-list') }}">
                    <div class="allCourseCta">
                        <p>
                            All courses
                            <img
                                src="design/img/topCourses/rightArrow.svg"
                                alt="Inoura"
                                class="ml-2"
                            />
                        </p>
                    </div>
                </a>
            </div>
            <div class="row justify-content-lg-between justify-content-center">
                @foreach($bestRateWebinars as $webinar)
                    <div class="card courseCard">
                        <img
                            src="{{ $webinar->getImage() }}"
                            alt="{{ $webinar->title }}"
                            class="card-img-top cardImg"
                        />
                        <div class="card-body">
                            <div class="cardData">
                                <p class="tag">Intermediate</p>
                                <a href="{{ url('/academy/course-details/' . $webinar->slug) }}">
                                    <h3 class="card-title">
                                        {{ clean($webinar->title,'title') }}
                                    </h3>
                                </a>
                                <p class="card-text">
                                    {{ substr(strip_tags($webinar->getDescriptionAttribute()), 0, 200) }}
                                </p>
                            </div>
                            <div class="ratingContent">
                                <div class="rating">
                                    <p class="rate">{{ $webinar->getRate() }}</p>
                                    <img src="design/img/topCourses/starFill.svg" alt="starFill"/>
                                    <p class="reviews">{{ count($webinar->reviews) }} Reviews</p>
                                </div>
                                <div>
                                    <a href="#">
                                        <img src="design/img/topCourses/cardBtn.svg" alt="btn inoura"/>
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
                                    <img src="design/img/topCourses/clock.svg" alt="icon"/>
                                    <p class="time mb-0">{{ convertMinutesToHourAndMinute($webinar->duration) }} {{ trans('home.hours') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="topCategories">
        <div class="headingWrapper text-center">
            <div class="heading">
                <h2>
            <span class="position-relative"
            >Top<img
                    src="design/img/starsIcon/pinkSmallLine.svg"
                    alt="inoura"
                    class="underlineImg"
                /></span>
                    categories
                </h2>
                <p>
                    These are the most popular courses among listen courses learners
                    worldwide
                </p>
            </div>
        </div>
        <div class="container position-relative">
            <img
                src="design/img/starsIcon/yellowLargeStar.svg"
                alt="inoura"
                class="yellowLagreStar position-absolute"
            />
            <img
                src="design/img/starsIcon/blueSmallStar.svg"
                alt="inoura"
                class="blueSmallStar position-absolute"
            />
            <div class="row justify-content-center">
                @foreach($trendCategories as $trend)
                    <div class="card cardWrapper">
                        <div class="card-body cardContent">
                            <img src="design/img/topCategory/html.svg" alt="html" class="cardImg"/>
                            <h3 class="card-title">{{ $trend->category->title }}</h3>
                            <p class="card-subtitle">{{ $trend->category->webinars_count }} {{ trans('product.course') }}</p>
                        </div>
                        <div class="cardBtn d-flex justify-content-end">
                            <img src="design/img/topCategory/arrow.svg" alt="inoura" class="arrow"/>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="TopLatestCourses">
        <div class="container position-relative">
            <img
                src="design/img/starsIcon/pinkLargeStar.svg"
                alt="inoura"
                class="pinkStar position-absolute"
            />
            <img
                src="design/img/starsIcon/yellowLargeStar.svg"
                alt="inoura"
                class="yellowStar position-absolute"
            />
            <div
                class="headingWrapper d-flex justify-content-lg-between justify-content-center align-items-center text-lg-left text-center flex-lg-row flex-column"
            >
                <div class="heading">
                    <h2>
              <span class="position-relative"
              >Top 10<img
                      src="design/img/starsIcon/blueMediumLine.svg"
                      alt="inoura"
                      class="underlineImg"
                  /></span>
                        Latest courses
                    </h2>
                    <p>
                        These are the most popular courses among listen courses learners
                        worldwide
                    </p>
                </div>
                <a href="{{ url('/academy/all-courses-list') }}">
                <div class="allCourseCta">
                    <p>
                        All courses
                        <img
                            src="design/img/topCourses/rightArrow.svg"
                            alt="Inoura"
                            class="ml-2"
                        />
                    </p>
                </div>
                </a>
            </div>
        </div>
        <div class="rowWrapper">
            <div class="topLatest">
                @foreach($bestSaleWebinars as $bestSaleWebinar)
                    <div class="" style="width: 18rem">
                        <div class="card courseCard">
                            <img
                                src="{{ $bestSaleWebinar->getImage() }}"
                                alt="{{ $bestSaleWebinar->title }}"
                                class="card-img-top cardImg"
                            />
                            <div class="card-body">
                                <div class="cardData">
                                    <p class="tag">Intermediate</p>
                                    <a href="{{ url('/academy/course-details/' . $webinar->slug) }}">
                                        <h3 class="card-title">
                                            {{ clean($bestSaleWebinar->title,'title') }}
                                        </h3>
                                    </a>
                                    <p class="card-text">
                                        {{ substr(strip_tags($bestSaleWebinar->getDescriptionAttribute()), 0, 200) }}
                                    </p>
                                </div>
                                <div class="ratingContent">
                                    <div class="rating">
                                        <p class="rate">{{ $bestSaleWebinar->getRate() }}</p>
                                        <img src="design/img/topCourses/starFill.svg" alt="starFill"/>
                                        <p class="reviews">{{ count($bestSaleWebinar->reviews) }}</p>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <img src="design/img/topCourses/cardBtn.svg" alt="btn inoura"/>
                                        </a>
                                    </div>
                                </div>
                                <hr class="line"/>
                                <div class="pricingContent">
                                    <div class="pricing">
                                        @if(!empty($isRewardCourses) and !empty($bestSaleWebinar->points))
                                            <p class="price">{{ $bestSaleWebinar->points }} {{ trans('update.points') }}</p>
                                        @elseif(!empty($bestSaleWebinar->price) and $bestSaleWebinar->price > 0)
                                            @if($bestSaleWebinar->bestTicket() < $bestSaleWebinar->price)
                                                <p class="price">{{ handlePrice($bestSaleWebinar->bestTicket(), true, true, false, null, true) }}</p>
                                                <p class="oldPrice">{{ handlePrice($bestSaleWebinar->price, true, true, false, null, true) }}</p>
                                            @else
                                                <p class="price">{{ handlePrice($bestSaleWebinar->price, true, true, false, null, true) }}</p>
                                            @endif
                                        @else
                                            <p class="price">{{ trans('public.free') }}</p>
                                        @endif
                                    </div>
                                    <div class="timeWrapper">
                                        <img src="design/img/topCourses/clock.svg" alt="icon"/>
                                        <p class="time mb-0">{{ convertMinutesToHourAndMinute($bestSaleWebinar ->duration) }} {{ trans('home.hours') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="TopInstructors">
        <div class="headingWrapper text-center">
            <div class="heading">
                <h2>
            <span class="position-relative"
            >Top<img
                    src="design/img/starsIcon/yellowSmallLine.svg"
                    alt="inoura"
                    class="underlineImg"
                /></span>
                    Instructors
                </h2>
                <p>
                    These are the most popular courses among listen courses learners
                    worldwide
                </p>
            </div>
        </div>
        <div class="container position-relative">
            <img
                src="design/img/starsIcon/blueSmallStar.svg"
                alt="inoura"
                class="blueStar position-absolute"
            />
            <img
                src="design/img/starsIcon/yellowLargeStar.svg"
                alt="inoura"
                class="yellowStar position-absolute"
            />
            <div class="row justify-content-md-between justify-content-center">
                <div class="card cardContent bg-transparent border-0 text-center">
                    <img
                        src="design/img/topInstructor/img1.png"
                        class="cardImg"
                        alt="inoura"
                    />
                    <h3>Mathew Anderson</h3>
                </div>
                <div class="card cardContent bg-transparent border-0 text-center">
                    <img
                        src="design/img/topInstructor/img2.png"
                        class="cardImg"
                        alt="inoura"
                    />
                    <h3>Mathew Anderson</h3>
                </div>
                <div class="card cardContent bg-transparent border-0 text-center">
                    <img
                        src="design/img/topInstructor/img3.png"
                        class="cardImg"
                        alt="inoura"
                    />
                    <h3>Mathew Anderson</h3>
                </div>
                <div class="card cardContent bg-transparent border-0 text-center">
                    <img
                        src="design/img/topInstructor/img4.png"
                        class="cardImg"
                        alt="inoura"
                    />
                    <h3>Mathew Anderson</h3>
                </div>
            </div>
            <div class="allInstructorsCta text-center">
                <p>
                    All instructors
                    <img
                        src="design/img/topCourses/rightArrow.svg"
                        alt="Inoura"
                        class="ml-2"
                    />
                </p>
            </div>
        </div>
    </section>
    <section class="innerChampion">
        <div class="container px-0 position-relative">
            <img
                src="design/img/starsIcon/msgIcon.svg"
                alt="inoura"
                class="msgIcon position-absolute"
            />
            <div class="innerChampionSlider">
                <div>
                    <div
                        class="row align-items-center justify-content-between tabContentColumn"
                    >
                        <div class="col-lg-6 px-lg-0">
                            <div class="championImg d-none d-lg-block">
                                <img
                                    src="design/img/innerChampion/img1.png"
                                    alt="inoura"
                                    class="img-fluid"
                                />
                            </div>
                        </div>
                        <div class="col-lg-6 px-lg-0 headingWrapper">
                            <h3 class="position-relative innerHeading">
                                <img
                                    src="design/img/starsIcon/yellowMediumLine.svg"
                                    alt="inoura"
                                    class="underlineImg"
                                />Unleashing Your Inner Champion
                            </h3>
                            <div class="championImg d-lg-none d-block mb-4">
                                <img
                                    src="design/img/innerChampion/img1.png"
                                    alt="inoura"
                                    class="img-fluid"
                                />
                            </div>
                            <p>
                                Embrace your untapped potential, push your limits, and unlock
                                the champion within you. This motivational title encourages
                                you to tap into your inner strength, overcome obstacles, and
                                strive for excellence in all areas of your life.
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="row align-items-center justify-content-between tabContentColumn"
                    >
                        <div class="col-lg-6 px-lg-0">
                            <div class="championImg d-none d-lg-block">
                                <img
                                    src="design/img/innerChampion/img1.png"
                                    alt="inoura"
                                    class="img-fluid"
                                />
                            </div>
                        </div>
                        <div class="col-lg-6 px-lg-0 headingWrapper">
                            <h3 class="position-relative innerHeading">
                                <img
                                    src="design/img/starsIcon/yellowMediumLine.svg"
                                    alt="inoura"
                                    class="underlineImg"
                                />Unleashing Your Inner Champion
                            </h3>
                            <div class="championImg d-lg-none d-block mb-4">
                                <img
                                    src="design/img/innerChampion/img1.png"
                                    alt="inoura"
                                    class="img-fluid"
                                />
                            </div>
                            <p>
                                Embrace your untapped potential, push your limits, and unlock
                                the champion within you. This motivational title encourages
                                you to tap into your inner strength, overcome obstacles, and
                                strive for excellence in all areas of your life.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faqs">
        <div class="heading">
            <h2>
                Frequently
                <span class="position-relative"
                >asked questions<img
                        src="design/img/starsIcon/yellowLargeLine.svg"
                        alt="inoura"
                        class="underlineImg"
                    /></span>
            </h2>
            <p>
                Have something to know? Check here if you have any questions about us.
            </p>
        </div>
        <div class="container position-relative">
            <img
                src="design/img/starsIcon/yellowLargeStar.svg"
                alt="inoura"
                class="yellowStar position-absolute"
            />
            <div class="accordion" id="faqsAccordion">
                <div class="accordionContent">
                    <button
                        class="btn accordionBtn d-flex justify-content-between"
                        type="button"
                        data-toggle="collapse"
                        data-target="#collapseOne"
                        aria-expanded="true"
                        aria-controls="collapseOne"
                    >
                        <h2>What is a Learning Management System (LMS)?</h2>
                        <img src="design/img/faqs/plusIcon.svg"/>
                    </button>

                    <div
                        id="collapseOne"
                        class="collapse"
                        aria-labelledby="headingOne"
                        data-parent="#faqsAccordion"
                    >
                        <div class="accordionBody">
                            <p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                non cupidatat skateboard dolor brunch. Food truck quinoa
                                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                aliqua put a bird on it squid single-origin coffee nulla
                                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                beer labore wes anderson cred nesciunt sapiente ea proident.
                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                beer farm-to-table, raw denim aesthetic synth nesciunt you
                                probably haven't heard of them accusamus labore sustainable
                                VHS.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordionContent">
                    <button
                        class="btn accordionBtn d-flex justify-content-between"
                        type="button"
                        data-toggle="collapse"
                        data-target="#collapseTwo"
                        aria-expanded="true"
                        aria-controls="collapseTwo"
                    >
                        <h2>
                            How can an LMS benefit educational institutions and
                            organizations?
                        </h2>
                        <img src="design/img/faqs/plusIcon.svg"/>
                    </button>

                    <div
                        id="collapseTwo"
                        class="collapse"
                        aria-labelledby="headingTwo"
                        data-parent="#faqsAccordion"
                    >
                        <div class="accordionBody">
                            <p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                non cupidatat skateboard dolor brunch. Food truck quinoa
                                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                aliqua put a bird on it squid single-origin coffee nulla
                                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                beer labore wes anderson cred nesciunt sapiente ea proident.
                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                beer farm-to-table, raw denim aesthetic synth nesciunt you
                                probably haven't heard of them accusamus labore sustainable
                                VHS.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="allQuestionsCta text-center">
                <p>
                    All questions
                    <img
                        src="design/img/topCourses/rightArrow.svg"
                        alt="Inoura"
                        class="ml-2"
                    />
                </p>
            </div>
        </div>
    </section>
    <section class="latestBlog">
        <div class="heading">
            <h2 class="latestBlogHeading">
                Visit our latest
                <span class="position-relative"
                >Blogs<img
                        src="design/img/starsIcon/yellowMediumLine.svg"
                        alt="inoura"
                        class="underlineImg"
                    /></span>
            </h2>
            <p>Visit our valuable articles to get more information.</p>
        </div>
        <div class="container position-relative">
            <img
                src="design/img/starsIcon/yellowLargeStar.svg"
                alt="inoura"
                class="yellowStar position-absolute"
            />
            <img
                src="design/img/starsIcon/blueSmallStar.svg"
                alt="inoura"
                class="blueStar position-absolute"
            />
            <div class="row justify-content-center">
                @foreach($blog as $post)
                    <div class="card blogCard">
                        <img
                            src="{{ $post->image }}"
                            alt="{{ $post->title }}"
                            class="card-img-top cardImg"
                        />
                        <a href="{{ url('/blog/' . $post->slug) }}">
                            <div class="imgOverlay">
                                <div class="d-flex justify-content-center align-items-center h-100">
                                    <p class="d-flex col_gap_8 mb-0">
                                        Open
                                        <img
                                            src="design/img/starsIcon/rightArrow.svg"
                                            alt="inoura"
                                            class="arrowImg"
                                        />
                                    </p>
                                </div>
                            </div>
                        </a>
                        <div class="card-body">
                            <div class="cardData">
                                <div class="tag">
                                    <a href="#">Education</a>
                                </div>
                                <a href="{{ url('/blog/' . $post->slug) }}">
                                    <h3 class="card-title">
                                        {{ $post->title }}
                                    </h3>
                                </a>
                                <p class="card-text">
                                    {!! truncate(strip_tags($post->description), 160) !!}
                                </p>
                            </div>
                            <hr class="line"/>
                            <div class="pricingContent">
                                <div class="profileDetail">
                                    @if(!empty($post->author->full_name))
                                        <span class="ml-5"></span>
                                        <img src="design/img/latestBlog/profileImg.png" alt="inoura"/>
                                        <h6 class="profileName">{{ $post->author->full_name }}</h6>
                                    @endif
                                </div>
                                <div class="dateWrapper">
                                    <p class="mb-0">{{ dateTimeFormat($post->created_at, 'j M Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="startLearning">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content">
                        <h3>Join now to start learning</h3>
                        <img
                            src="design/img/startLearning/img1.png"
                            alt="inoura"
                            class="img-fluid"
                        />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content">
                        <h3 class="d-lg-none d-block">Or Become a new instructor</h3>
                        <img
                            src="design/img/startLearning/img2.png"
                            alt="inoura"
                            class="img-fluid"
                        />
                        <h3 class="d-none d-lg-block">Or Become a new instructor</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
