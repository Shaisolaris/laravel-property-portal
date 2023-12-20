<?php $__env->startPush('styles_top'); ?>
    <link rel="stylesheet" href="/assets/default/vendors/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/default/css/slick.css">
    <link rel="stylesheet" href="/assets/default/css/slick_slick-theme.css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <section class="banner">
        <div class="banner-wrapper">
            <div class="row banner-row">
                <div class="col-md-6 banner-col">
                    <div class="banner-text">
                        <h1>Start <span>learning</span> from best platform.</h1>
                        <p>Study any topic, anytime. explore thousands of courses for the lowest price ever!</p>
                        <form class="banner-search form-inline  my-lg-0">
                            <img src="/assets/default/img/home/search.svg" alt="">
                            <input class="form-control " type="search" placeholder="What do you want to learn?" aria-label="Search">
                            <button class="btn btn-outline-success my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 banner-col">
                    <div class="banner-image">
                        <img src="/assets/default/img/home/banner-image.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <section class="home-counter">
        <div class="container">
            <div class="counter-card-wrapper">
                <div class="row">
                    <div class="col-md-3 counter-card" >
                        <h3><span class="counter"><?php echo e($homeDefaultStatistics['studentsCount']); ?></span>+</h3>
                        <p>happy <br> students</p>
                    </div> 
                    <div class="col-md-3 counter-card">
                        <h3><span class="counter"><?php echo e($homeDefaultStatistics['skillfulTeachersCount']); ?></span>+</h3>
                        <p>experienced<br> instructors</p>
                    </div>
                    <div class="col-md-3 counter-card">
                        <h3><span class="counter"><?php echo e($homeDefaultStatistics['liveClassCount']); ?></span>+</h3>
                        <p>Live<br> Classes</p>
                    </div>
                    <div class="col-md-3 counter-card">
                        <h3><span class="counter"><?php echo e($homeDefaultStatistics['offlineCourseCount']); ?></span>+</h3>
                        <p>Video<br> Courses</p>
                    </div>
                </div>
            </div>
        </div>
    </section>    

    
    <?php if(!empty($upcomingCourses) and !$upcomingCourses->isEmpty()): ?>
    <section class="upcoming">
        <div class="">
            <div class="upcoming-slider-wrapper">
                <div class="upcoming-slider">
                <?php $__currentLoopData = $upcomingCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upcomingCourse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="upcoming-card">
                        <div class="row upcoming-row">
                            <div class="col-md-7 upcoming-col">
                                <div class="upcoming-text">
                                    <span class="slider-number">#1/5</span>
                                    <h6>Upcoming courses</h6>
                                    <h2><?php echo e(clean($upcomingCourse->title,'title')); ?></h2>
                                    <p>Discover a world of learning opportunities through our upcoming courses, where industry experts and thought leaders will guide you in acquiring new expertise, expanding your horizons, and reaching your full potential.</p>
                                </div>
                            </div>
                            <div class="col-md-5 upcoming-col">
                                <div class="upcoming-image">
                                     <img src="<?php echo e($upcomingCourse->getImage()); ?>" class="img-cover" alt="<?php echo e($upcomingCourse->title); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <section class="top-courses">
        <div class="container">
            <div class="title-wrapper">
                <div class="main-title">
                    <h2>Top courses</h2>
                    <p>These are the most popular courses among listen <br> courses learners worldwide</p>
                </div>
                <a href="#" class="sol-link">All courses <img src="/assets/default/img/home/link-arrow.svg" alt=""></a>
            </div>

            <div class="row top-courses-row">
                <div class="top-courses-col col-md-3">
                    <div class="top-courses-card">
                        <div class="top-courses-card-image">
                            <img src="/assets/default/img/home/top-image1.png" alt="">
                        </div>
                        <div class="top-courses-card-text">
                            <h6>Intermediate</h6>
                            <h3>WordPress Theme Development with Bootstrap</h3>
                            <p>Discover a world of learning opportunities through our upcoming courses, where industry experts and thought leaders will guide you in acquiring new expertise, expanding your horizons, and reaching your full potential.</p>
                            <div class="rating-repeat">
                                <div class="rating">
                                    <h6>4</h6>
                                    <img src="/assets/default/img/home/star-fill.png" alt="">
                                    <p>268 Reviews</p>
                                </div>
                                <div class="repeat">
                                    <img src="/assets/default/img/home/repeat.png" alt="">
                                </div>
                            </div>
                            <div class="price-time">
                                <div class="price">
                                    <h5>$10 <span>$11.99</span></h6>
                                </div>
                                <div class="time">
                                    <img src="/assets/default/img/home/clock.png" alt="">
                                    <p>24:12:22</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-courses-col col-md-3">
                    <div class="top-courses-card">
                        <div class="top-courses-card-image">
                            <img src="/assets/default/img/home/top-image2.png" alt="">
                        </div>
                        <div class="top-courses-card-text">
                            <h6>Intermediate</h6>
                            <h3>WordPress Theme Development with Bootstrap</h3>
                            <p>Discover a world of learning opportunities through our upcoming courses, where industry experts and thought leaders will guide you in acquiring new expertise, expanding your horizons, and reaching your full potential.</p>
                            <div class="rating-repeat">
                                <div class="rating">
                                    <h6>4</h6>
                                    <img src="/assets/default/img/home/star-fill.png" alt="">
                                    <p>268 Reviews</p>
                                </div>
                                <div class="repeat">
                                    <img src="/assets/default/img/home/repeat.png" alt="">
                                </div>
                            </div>
                            <div class="price-time">
                                <div class="price">
                                    <h5>$10 <span>$11.99</span></h6>
                                </div>
                                <div class="time">
                                    <img src="/assets/default/img/home/clock.png" alt="">
                                    <p>24:12:22</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-courses-col col-md-3">
                    <div class="top-courses-card">
                        <div class="top-courses-card-image">
                            <img src="/assets/default/img/home/top-image3.png" alt="">
                        </div>
                        <div class="top-courses-card-text">
                            <h6>Intermediate</h6>
                            <h3>WordPress Theme Development with Bootstrap</h3>
                            <p>Discover a world of learning opportunities through our upcoming courses, where industry experts and thought leaders will guide you in acquiring new expertise, expanding your horizons, and reaching your full potential.</p>
                            <div class="rating-repeat">
                                <div class="rating">
                                    <h6>4</h6>
                                    <img src="/assets/default/img/home/star-fill.png" alt="">
                                    <p>268 Reviews</p>
                                </div>
                                <div class="repeat">
                                    <img src="/assets/default/img/home/repeat.png" alt="">
                                </div>
                            </div>
                            <div class="price-time">
                                <div class="price">
                                    <h5>$10 <span>$11.99</span></h6>
                                </div>
                                <div class="time">
                                    <img src="/assets/default/img/home/clock.png" alt="">
                                    <p>24:12:22</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-courses-col col-md-3">
                    <div class="top-courses-card">
                        <div class="top-courses-card-image">
                            <img src="/assets/default/img/home/top-image4.png" alt="">
                        </div>
                        <div class="top-courses-card-text">
                            <h6>Intermediate</h6>
                            <h3>WordPress Theme Development with Bootstrap</h3>
                            <p>Discover a world of learning opportunities through our upcoming courses, where industry experts and thought leaders will guide you in acquiring new expertise, expanding your horizons, and reaching your full potential.</p>
                            <div class="rating-repeat">
                                <div class="rating">
                                    <h6>4</h6>
                                    <img src="/assets/default/img/home/star-fill.png" alt="">
                                    <p>268 Reviews</p>
                                </div>
                                <div class="repeat">
                                    <img src="/assets/default/img/home/repeat.png" alt="">
                                </div>
                            </div>
                            <div class="price-time">
                                <div class="price">
                                    <h5>$10 <span>$11.99</span></h6>
                                </div>
                                <div class="time">
                                    <img src="/assets/default/img/home/clock.png" alt="">
                                    <p>24:12:22</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="top-categories">
        <div class="container">
            <div class="main-title title-center">
                <h2>Top categories</h2>
                <p>These are the most popular courses among listen courses learners worldwide</p>
            </div>

            <div class="top-categories-wrapper">
                <div class="top-categories-row row" >
                    <div class="top-categories-col col-md-3">
                        <div class="top-categories-card">
                            <div class="top-categories-image">
                                <img src="/assets/default/img/home/top-cat-i1.png" alt="">
                            </div>
                            <div class="top-categories-text">
                                <h3>HTML & CSS</h3>
                                <p>3 Courses</p>
                            </div>
                            <a class="top-categories-arrow" href="#"><img src="/assets/default/img/home/top-cat-arrow.png" alt=""></a>
                        </div>
                    </div>
                    <div class="top-categories-col col-md-3">
                        <div class="top-categories-card">
                            <div class="top-categories-image">
                                <img src="/assets/default/img/home/top-cat-i1.png" alt="">
                            </div>
                            <div class="top-categories-text">
                                <h3>HTML & CSS</h3>
                                <p>3 Courses</p>
                            </div>
                            <a class="top-categories-arrow" href="#"><img src="/assets/default/img/home/top-cat-arrow.png" alt=""></a>
                        </div>
                    </div>
                    <div class="top-categories-col col-md-3">
                        <div class="top-categories-card">
                            <div class="top-categories-image">
                                <img src="/assets/default/img/home/top-cat-i1.png" alt="">
                            </div>
                            <div class="top-categories-text">
                                <h3>HTML & CSS</h3>
                                <p>3 Courses</p>
                            </div>
                            <a class="top-categories-arrow" href="#"><img src="/assets/default/img/home/top-cat-arrow.png" alt=""></a>
                        </div>
                    </div>
                    <div class="top-categories-col col-md-3">
                        <div class="top-categories-card">
                            <div class="top-categories-image">
                                <img src="/assets/default/img/home/top-cat-i1.png" alt="">
                            </div>
                            <div class="top-categories-text">
                                <h3>HTML & CSS</h3>
                                <p>3 Courses</p>
                            </div>
                            <a class="top-categories-arrow" href="#"><img src="/assets/default/img/home/top-cat-arrow.png" alt=""></a>
                        </div>
                    </div>
                    <div class="top-categories-col col-md-3">
                        <div class="top-categories-card">
                            <div class="top-categories-image">
                                <img src="/assets/default/img/home/top-cat-i1.png" alt="">
                            </div>
                            <div class="top-categories-text">
                                <h3>HTML & CSS</h3>
                                <p>3 Courses</p>
                            </div>
                            <a class="top-categories-arrow" href="#"><img src="/assets/default/img/home/top-cat-arrow.png" alt=""></a>
                        </div>
                    </div>
                    <div class="top-categories-col col-md-3">
                        <div class="top-categories-card">
                            <div class="top-categories-image">
                                <img src="/assets/default/img/home/top-cat-i1.png" alt="">
                            </div>
                            <div class="top-categories-text">
                                <h3>HTML & CSS</h3>
                                <p>3 Courses</p>
                            </div>
                            <a class="top-categories-arrow" href="#"><img src="/assets/default/img/home/top-cat-arrow.png" alt=""></a>
                        </div>
                    </div>
                    <div class="top-categories-col col-md-3">
                        <div class="top-categories-card">
                            <div class="top-categories-image">
                                <img src="/assets/default/img/home/top-cat-i1.png" alt="">
                            </div>
                            <div class="top-categories-text">
                                <h3>HTML & CSS</h3>
                                <p>3 Courses</p>
                            </div>
                            <a class="top-categories-arrow" href="#"><img src="/assets/default/img/home/top-cat-arrow.png" alt=""></a>
                        </div>
                    </div>
                    <div class="top-categories-col col-md-3">
                        <div class="top-categories-card">
                            <div class="top-categories-image">
                                <img src="/assets/default/img/home/top-cat-i1.png" alt="">
                            </div>
                            <div class="top-categories-text">
                                <h3>HTML & CSS</h3>
                                <p>3 Courses</p>
                            </div>
                            <a class="top-categories-arrow" href="#"><img src="/assets/default/img/home/top-cat-arrow.png" alt=""></a>
                        </div>
                    </div>
                    <div class="top-categories-col col-md-3">
                        <div class="top-categories-card">
                            <div class="top-categories-image">
                                <img src="/assets/default/img/home/top-cat-i1.png" alt="">
                            </div>
                            <div class="top-categories-text">
                                <h3>HTML & CSS</h3>
                                <p>3 Courses</p>
                            </div>
                            <a class="top-categories-arrow" href="#"><img src="/assets/default/img/home/top-cat-arrow.png" alt=""></a>
                        </div>
                    </div>
                    <div class="top-categories-col col-md-3">
                        <div class="top-categories-card">
                            <div class="top-categories-image">
                                <img src="/assets/default/img/home/top-cat-i1.png" alt="">
                            </div>
                            <div class="top-categories-text">
                                <h3>HTML & CSS</h3>
                                <p>3 Courses</p>
                            </div>
                            <a class="top-categories-arrow" href="#"><img src="/assets/default/img/home/top-cat-arrow.png" alt=""></a>
                        </div>
                    </div>
                    <div class="top-categories-col col-md-3">
                        <div class="top-categories-card">
                            <div class="top-categories-image">
                                <img src="/assets/default/img/home/top-cat-i1.png" alt="">
                            </div>
                            <div class="top-categories-text">
                                <h3>HTML & CSS</h3>
                                <p>3 Courses</p>
                            </div>
                            <a class="top-categories-arrow" href="#"><img src="/assets/default/img/home/top-cat-arrow.png" alt=""></a>
                        </div>
                    </div>
                    <div class="top-categories-col col-md-3">
                        <div class="top-categories-card">
                            <div class="top-categories-image">
                                <img src="/assets/default/img/home/top-cat-i1.png" alt="">
                            </div>
                            <div class="top-categories-text">
                                <h3>HTML & CSS</h3>
                                <p>3 Courses</p>
                            </div>
                            <a class="top-categories-arrow" href="#"><img src="/assets/default/img/home/top-cat-arrow.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="top-ten">
        <div class="container">
            <div class="title-wrapper">
                <div class="main-title">
                    <h2>Top 10 Latest <br> courses</h2>
                    <p>These are the most latest courses among listen <br> courses learners worldwide</p>
                </div>
                <a href="#" class="sol-link">All courses <img src="/assets/default/img/home/link-arrow.svg" alt=""></a>
            </div>  
        </div>
        <div class="top-ten-slider-wrapper">
            <div class="top-ten-slider">

        
            <div class="top-courses-card">
                <div class="top-courses-card-image">
                    <img src="/assets/default/img/home/top-image4.png" alt="">
                </div>
                <div class="top-courses-card-text">
                    <h6>Intermediate</h6>
                    <h3>WordPress Theme Development with Bootstrap</h3>
                    <p>Discover a world of learning opportunities through our upcoming courses, where industry experts and thought leaders will guide you in acquiring new expertise, expanding your horizons, and reaching your full potential.</p>
                    <div class="rating-repeat">
                        <div class="rating">
                            <h6>4</h6>
                            <img src="/assets/default/img/home/star-fill.png" alt="">
                            <p>268 Reviews</p>
                        </div>
                        <div class="repeat">
                            <img src="/assets/default/img/home/repeat.png" alt="">
                        </div>
                    </div>
                    <div class="price-time">
                        <div class="price">
                            <h5>
                            $10 <span>$11.99</span></h6>
                        </div>
                        <div class="time">
                            <img src="/assets/default/img/home/clock.png" alt="">
                            <p>24:12:22</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-courses-card">
                <div class="top-courses-card-image">
                    <img src="/assets/default/img/home/top-image4.png" alt="">
                </div>
                <div class="top-courses-card-text">
                    <h6>Intermediate</h6>
                    <h3>WordPress Theme Development with Bootstrap</h3>
                    <p>Discover a world of learning opportunities through our upcoming courses, where industry experts and thought leaders will guide you in acquiring new expertise, expanding your horizons, and reaching your full potential.</p>
                    <div class="rating-repeat">
                        <div class="rating">
                            <h6>4</h6>
                            <img src="/assets/default/img/home/star-fill.png" alt="">
                            <p>268 Reviews</p>
                        </div>
                        <div class="repeat">
                            <img src="/assets/default/img/home/repeat.png" alt="">
                        </div>
                    </div>
                    <div class="price-time">
                        <div class="price">
                            <h5>
                            $10 <span>$11.99</span></h6>
                        </div>
                        <div class="time">
                            <img src="/assets/default/img/home/clock.png" alt="">
                            <p>24:12:22</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-courses-card">
                <div class="top-courses-card-image">
                    <img src="/assets/default/img/home/top-image4.png" alt="">
                </div>
                <div class="top-courses-card-text">
                    <h6>Intermediate</h6>
                    <h3>WordPress Theme Development with Bootstrap</h3>
                    <p>Discover a world of learning opportunities through our upcoming courses, where industry experts and thought leaders will guide you in acquiring new expertise, expanding your horizons, and reaching your full potential.</p>
                    <div class="rating-repeat">
                        <div class="rating">
                            <h6>4</h6>
                            <img src="/assets/default/img/home/star-fill.png" alt="">
                            <p>268 Reviews</p>
                        </div>
                        <div class="repeat">
                            <img src="/assets/default/img/home/repeat.png" alt="">
                        </div>
                    </div>
                    <div class="price-time">
                        <div class="price">
                            <h5>
                            $10 <span>$11.99</span></h6>
                        </div>
                        <div class="time">
                            <img src="/assets/default/img/home/clock.png" alt="">
                            <p>24:12:22</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-courses-card">
                <div class="top-courses-card-image">
                    <img src="/assets/default/img/home/top-image4.png" alt="">
                </div>
                <div class="top-courses-card-text">
                    <h6>Intermediate</h6>
                    <h3>WordPress Theme Development with Bootstrap</h3>
                    <p>Discover a world of learning opportunities through our upcoming courses, where industry experts and thought leaders will guide you in acquiring new expertise, expanding your horizons, and reaching your full potential.</p>
                    <div class="rating-repeat">
                        <div class="rating">
                            <h6>4</h6>
                            <img src="/assets/default/img/home/star-fill.png" alt="">
                            <p>268 Reviews</p>
                        </div>
                        <div class="repeat">
                            <img src="/assets/default/img/home/repeat.png" alt="">
                        </div>
                    </div>
                    <div class="price-time">
                        <div class="price">
                            <h5>
                            $10 <span>$11.99</span></h6>
                        </div>
                        <div class="time">
                            <img src="/assets/default/img/home/clock.png" alt="">
                            <p>24:12:22</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-courses-card">
                <div class="top-courses-card-image">
                    <img src="/assets/default/img/home/top-image4.png" alt="">
                </div>
                <div class="top-courses-card-text">
                    <h6>Intermediate</h6>
                    <h3>WordPress Theme Development with Bootstrap</h3>
                    <p>Discover a world of learning opportunities through our upcoming courses, where industry experts and thought leaders will guide you in acquiring new expertise, expanding your horizons, and reaching your full potential.</p>
                    <div class="rating-repeat">
                        <div class="rating">
                            <h6>4</h6>
                            <img src="/assets/default/img/home/star-fill.png" alt="">
                            <p>268 Reviews</p>
                        </div>
                        <div class="repeat">
                            <img src="/assets/default/img/home/repeat.png" alt="">
                        </div>
                    </div>
                    <div class="price-time">
                        <div class="price">
                            <h5>
                            $10 <span>$11.99</span></h6>
                        </div>
                        <div class="time">
                            <img src="/assets/default/img/home/clock.png" alt="">
                            <p>24:12:22</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-courses-card">
                <div class="top-courses-card-image">
                    <img src="/assets/default/img/home/top-image4.png" alt="">
                </div>
                <div class="top-courses-card-text">
                    <h6>Intermediate</h6>
                    <h3>WordPress Theme Development with Bootstrap</h3>
                    <p>Discover a world of learning opportunities through our upcoming courses, where industry experts and thought leaders will guide you in acquiring new expertise, expanding your horizons, and reaching your full potential.</p>
                    <div class="rating-repeat">
                        <div class="rating">
                            <h6>4</h6>
                            <img src="/assets/default/img/home/star-fill.png" alt="">
                            <p>268 Reviews</p>
                        </div>
                        <div class="repeat">
                            <img src="/assets/default/img/home/repeat.png" alt="">
                        </div>
                    </div>
                    <div class="price-time">
                        <div class="price">
                            <h5>
                            $10 <span>$11.99</span></h6>
                        </div>
                        <div class="time">
                            <img src="/assets/default/img/home/clock.png" alt="">
                            <p>24:12:22</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-courses-card">
                <div class="top-courses-card-image">
                    <img src="/assets/default/img/home/top-image4.png" alt="">
                </div>
                <div class="top-courses-card-text">
                    <h6>Intermediate</h6>
                    <h3>WordPress Theme Development with Bootstrap</h3>
                    <p>Discover a world of learning opportunities through our upcoming courses, where industry experts and thought leaders will guide you in acquiring new expertise, expanding your horizons, and reaching your full potential.</p>
                    <div class="rating-repeat">
                        <div class="rating">
                            <h6>4</h6>
                            <img src="/assets/default/img/home/star-fill.png" alt="">
                            <p>268 Reviews</p>
                        </div>
                        <div class="repeat">
                            <img src="/assets/default/img/home/repeat.png" alt="">
                        </div>
                    </div>
                    <div class="price-time">
                        <div class="price">
                            <h5>
                            $10 <span>$11.99</span></h6>
                        </div>
                        <div class="time">
                            <img src="/assets/default/img/home/clock.png" alt="">
                            <p>24:12:22</p>
                        </div>
                    </div>
                </div>
            </div>








            </div>
        </div>
    </section>


    <section class="top-instructors">
        <div class="container">
            <div class="main-title title-center">
                <h2>Top courses</h2>
                <p>These are the most popular courses among listen <br> courses learners worldwide</p>
            </div>

            <div class="top-instructors-wrapper">
                <div class="top-instructors-row row">
                    <div class="top-instructors-col col-md-3">

                        <div class="top-instructors-card">
                            <div class="top-instructors-image">
                                <img src="/assets/default/img/home/instructors1.png" alt="">
                            </div>
                            <div class="top-instructors-text">
                                <h3>Mathew Anderson</h3>
                                <img src="/assets/default/img/home/instructors-line1.svg" alt="">
                            </div>
                        </div>
                        
                    </div>
                    <div class="top-instructors-col col-md-3">

                        <div class="top-instructors-card">
                            <div class="top-instructors-image">
                                <img src="/assets/default/img/home/instructors2.png" alt="">
                            </div>
                            <div class="top-instructors-text">
                                <h3>Mathew Anderson</h3>
                                <img src="/assets/default/img/home/instructors-line2.svg" alt="">
                            </div>
                        </div>

                    </div>
                    <div class="top-instructors-col col-md-3">

                        <div class="top-instructors-card">
                            <div class="top-instructors-image">
                                <img src="/assets/default/img/home/instructors3.png" alt="">
                            </div>
                            <div class="top-instructors-text">
                                <h3>Mathew Anderson</h3>
                                <img src="/assets/default/img/home/instructors-line3.svg" alt="">
                            </div>
                        </div>

                    </div>
                    <div class="top-instructors-col col-md-3">

                        <div class="top-instructors-card">
                            <div class="top-instructors-image">
                                <img src="/assets/default/img/home/instructors4.png" alt="">
                            </div>
                            <div class="top-instructors-text">
                                <h3>Mathew Anderson</h3>
                                <img src="/assets/default/img/home/instructors-line4.svg" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="instructors-link">
                <a href="#" class="sol-link">All instructors <img src="/assets/default/img/home/link-arrow.svg" alt=""></a>
            </div>
        </div>
    </section>

    <section class="champion">
        <div class="container">
            <div class="champion-slider-wrapper">
                <div class="champion-slider">
                    <div class="champion-slider-card">
                        <div class="champion-row row">
                            <div class="champion-col col-md-6">
                                <div class="champion-image">
                                    <img src="/assets/default/img/home/champion.png" alt="">
                                </div>
                            </div>
                            <div class="champion-col col-md-6">
                                <div class="champion-text">
                                    <h2>Unleashing Your Inner Champion</h2>
                                    <p>Embrace your untapped potential, push your limits, and unlock the champion within you. This motivational title encourages you to tap into your inner strength, overcome obstacles, and strive for excellence in all areas of your life.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="champion-slider-card">
                        <div class="champion-row row">
                            <div class="champion-col col-md-6">
                                <div class="champion-image">
                                    <img src="/assets/default/img/home/champion.png" alt="">
                                </div>
                            </div>
                            <div class="champion-col col-md-6">
                                <div class="champion-text">
                                    <h2>Unleashing Your Inner Champion</h2>
                                    <p>Embrace your untapped potential, push your limits, and unlock the champion within you. This motivational title encourages you to tap into your inner strength, overcome obstacles, and strive for excellence in all areas of your life.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="champion-slider-card">
                        <div class="champion-row row">
                            <div class="champion-col col-md-6">
                                <div class="champion-image">
                                    <img src="/assets/default/img/home/champion.png" alt="">
                                </div>
                            </div>
                            <div class="champion-col col-md-6">
                                <div class="champion-text">
                                    <h2>Unleashing Your Inner Champion</h2>
                                    <p>Embrace your untapped potential, push your limits, and unlock the champion within you. This motivational title encourages you to tap into your inner strength, overcome obstacles, and strive for excellence in all areas of your life.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="faq">
        <div class="container">

            <div class="main-title title-center">
                <h2>Frequently <span>asked questions</span></h2>
                <p>Have something to know? Check here if you have any questions about us.</p>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What is a Learning Management System (LMS)?
                        </button>
                    </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What are the key features of an LMS?
                        </button>
                    </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        Some placeholder content for the second accordion panel. This panel is hidden by default.
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How can an LMS benefit educational institutions and organizations?
                        </button>
                    </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Is an LMS suitable for both academic and corporate settings?
                        </button>
                    </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                        And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
                    </div>
                    </div>
                </div>
            </div>
            <div class="instructors-link">
                <a href="#" class="sol-link">All questions <img src="/assets/default/img/home/link-arrow.svg" alt=""></a>
            </div>
        </div>
    </section>


    <section class="blog">
        <div class="container">
            <div class="main-title title-center">
                <h2>Visit our latest blogs</h2>
                <p>Visit our valuable articles to get more information.</p>
            </div>
            <div class="blog-wrapper">
                <div class="blog-row row">

                    <div class="blog-col col-md-4">
                        <div class="blog-card">
                            <div class="blog-image">
                                <img src="/assets/default/img/home/blog-1.png" alt="">
                            </div>
                            <div class="blog-text-wrapper">
                                <div class="blog-text">
                                    <h6>Education</h6>
                                    <h3>Parent Power: Will We Choose Pitchforks or Partnerships?</h3>
                                    <p>After two tumultuous years of intermittent school closures, parents and caregivers…</p>
                                </div>
                                <div class="author-date">
                                    <div class="author">
                                        <img src="/assets/default/img/home/a-1.png" alt="">
                                        <h5>John D.</h5>
                                    </div>
                                    <div class="date">
                                        <p>Thu, 23 Dec 2020</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-col col-md-4">
                        <div class="blog-card">
                            <div class="blog-image">
                                <img src="/assets/default/img/home/blog-1.png" alt="">
                            </div>
                            <div class="blog-text-wrapper">
                                <div class="blog-text">
                                    <h6>Education</h6>
                                    <h3>Parent Power: Will We Choose Pitchforks or Partnerships?</h3>
                                    <p>After two tumultuous years of intermittent school closures, parents and caregivers…</p>
                                </div>
                                <div class="author-date">
                                    <div class="author">
                                        <img src="/assets/default/img/home/a-1.png" alt="">
                                        <h5>John D.</h5>
                                    </div>
                                    <div class="date">
                                        <p>Thu, 23 Dec 2020</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-col col-md-4">
                        <div class="blog-card">
                            <div class="blog-image">
                                <img src="/assets/default/img/home/blog-1.png" alt="">
                            </div>
                            <div class="blog-text-wrapper">
                                <div class="blog-text">
                                    <h6>Education</h6>
                                    <h3>Parent Power: Will We Choose Pitchforks or Partnerships?</h3>
                                    <p>After two tumultuous years of intermittent school closures, parents and caregivers…</p>
                                </div>
                                <div class="author-date">
                                    <div class="author">
                                        <img src="/assets/default/img/home/a-1.png" alt="">
                                        <h5>John D.</h5>
                                    </div>
                                    <div class="date">
                                        <p>Thu, 23 Dec 2020</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts_bottom'); ?>

    <script src="/assets/default/js/jquery.min.js"></script>
    <script src="/assets/default/js/jquery.counterup.min.js"></script>
    <script src="/assets/default/js/waypoints.min.js"></script>
    <script src="/assets/default/js/slick.min.js"></script>
    <script src="/assets/default/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/default/vendors/owl-carousel2/owl.carousel.min.js"></script>
    <script src="/assets/default/vendors/parallax/parallax.min.js"></script>
    <script src="/assets/default/js/parts/home.min.js"></script>
    <script>
        $('.counter').counterUp({
        delay: 10,
        time: 2000
        });
        $('.counter').addClass('animated fadeInDownBig');
        $('h3').addClass('animated fadeIn');


        // upcoming slider
            $('.upcoming-slider').slick({
                infinite: true,
                dots: true,
                fade: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            });
        // upcoming slider

        // upcoming slider
            $('.top-ten-slider').slick({
                 slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            });
        // upcoming slider

        // upcoming slider
            $('.champion-slider').slick({
                infinite: true,
                dots: true,
                fade: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            });
        // upcoming slider

        
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(getTemplate().'.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/web/default/pages/home2.blade.php ENDPATH**/ ?>