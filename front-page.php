<?php

/**
 * frontpage
 * 
 * @link https--
 *
 * @package wpbase2
 */

get_header();

do_action('wpbase_do_before_content');

?>

<main id="main" class="site-main">

    <?php do_action('wpbase_do_content'); ?>

    <!-- <Hero /> -->
    <div id="hero" class="hero py-5 position-relative d-flex align-items-center">
        <div class="container d-flex align-items-center position-relative z-1">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="display-1 text-white fw-bold">
                        Unlock the Wonders of Science at Petrosains
                    </h1>
                    <p class="text-white my-4">
                        Perfect for School Holidays and More. Don't miss out on the
                        opportunity to enrich your family's lives with the joy of science. Get
                        your tickets now!
                    </p>

                    <div class="d-flex gap-2">
                        <a href="#" class="btn rounded-pill text-white btn-secondary">Buy Tickets</a>
                        <a href="#" class="btn rounded-pill btn-outline-light">View Promotions</a>
                    </div>
                </div>
                <div class="col-lg-6 mx-auto d-flex align-items-center">
                    <img class="my-3 rounded" src="/images/homepage/201502151646-4 1.jpg" alt="" />
                </div>
            </div>
        </div>
        <img class="hero__bg" src="/images/homepage/bg-masthead-wave.svg" alt="" />
    </div>

    <!-- intro -->
    <section class="spacing-lg">
        <div class="container-fluid py-lg-4 text-center">
            <h2 class="display-2">
                Exciting Adventures <span class="decor-blob"><span class="decor-blob-after tweenbox"></span>Ahead!</span>
            </h2>
            <p class="col-lg-7 mx-auto lead">
                Explore our blockbuster exhibits and showcases, constantly updated to
                make sure your visit to PETROSAINS is a happy adventure for all.
            </p>
        </div>
    </section>

    <!-- <Exhibition /> -->
    <section class="exhibitions my-4 container">
        <div class="grid-container">
            <div class="content-block content-block-title">
                <div class="content">
                    <h2>Laugh & Play at PETROSAINS KLCC</h2>
                    <p>
                        Interactive, experiential, and hands-on, Petrosains, The Discovery
                        Centre is everything a science centre should be! With exciting
                        exhibits and intriguing activities we make learning STEM (science,
                        technology, engineering and mathematics) fun while nurturing you to
                        further explore science and technology!
                    </p>
                </div>
            </div>
            <div class="content-block">
                <a href="#">
                    <h2 class="h4">Tech Lab</h2>
                </a>
                <img src="/images/homepage/Maker Studio-ZH_02127 1.jpg" alt="Tech Lab" />
            </div>
            <div class="content-block">
                <a href="#">
                    <h2 class="h4">Workshop</h2>
                </a>
                <img src="/images/homepage/Maker Studio-ZH_02158 1.jpg" alt="Tech Lab" />
            </div>
            <div class="content-block">
                <a href="#">
                    <h2 class="h4">Space Lab</h2>
                </a>
                <img src="/images/homepage/petrosains-board-5.jpg" alt="Tech Lab" />
            </div>
            <div class="content-block">
                <a href="#">
                    <h2 class="h4">PlaySmart Kuching</h2>
                </a>
                <img src="/images/homepage/PlaySmart Kuching-ZH_01578 1.jpg" alt="Tech Lab" />
            </div>
            <div class="content-block">
                <a href="#">
                    <h2 class="h4">Learn by Play</h2>
                </a>
                <img src="/images/homepage/playsmart_2017-201711171104-19high 1.jpg" alt="Tech Lab" />
            </div>
            <div class="content-block">
                <a href="#">
                    <h2 class="h4">Experiences Physic</h2>
                </a>
                <img src="/images/homepage/playsmart_2017-201711181058-3high 1.jpg" alt="Tech Lab" />
            </div>
            <div class="content-block">
                <img src="/images/homepage/Rectangle 104.jpg" alt="Tech Lab" />
            </div>
            <div class="content-block">
                <img src="/images/homepage/Screenshot 2023-03-28 at 1.02 3.jpg" alt="Tech Lab" />
            </div>
        </div>
    </section>

    <!-- swiper -->
    <section id="carousel" class="text-bg-primary spacing-lg">
        <div class="container text-white text-center rounded-3">
            <h2 class="display-2 text-white">Let’s Experiment</h2>
            <p class="lead col-md-8 mx-auto">
                There’s so much to do and explore in PETROSIANS KLCC, come and join in
                the fun and play with our multisensory exhibits, updated to assist
                young minds explore.
            </p>
        </div>
        <div class="container-fluid p-0">
            <!-- <Swiper /> -->
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/images/petrosains_2015-201502151501.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/playsmart_2017-201711171546high.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/playsmart_2017-201711171124-5high.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/Sorang Sorang (Ticket)-ZH_01167.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/petrosains_2015-201502151613-11.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/PlaySmart Kuching-ZH_01598.jpg" />
                    </div>
                </div>
                <div class="swiper-pagination"></div>

                <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
                <script is:inline src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> -->

            </div>
        </div>
    </section>


    <section class="spacing-lg">
        <div class="container">
            <div class="row text-center">
                <h2 class="display-2">Limited Time Attractions</h2>
                <p class="lead col-md-8 mx-auto">
                    Our passion for bringing science to life in many exciting and
                    extraordinary ways has, helped us gain both local and international
                    recognition, thank you for your continuous support!
                </p>
            </div>

            <div class="row row-cols-3">
                <Card title="Petrosains Online Learning" description="We believe that discovering and learning can take place at any time and anywhere. Our team has put together some unique and fun activities you and your loved ones can do side-by-side. Go on – try it out!" imgsrc="/images/PETROSAINS Multi 1-ZH_02611.jpg" />
                <Card title="Discovery, Now Even Closer to You" description="Petrosains brings exciting scientific discovery and inspiring activities closer to you with Petrosains PlaySmart, now at a town near you." imgsrc="/images/Sorang Sorang (Ticket)-ZH_01172.jpg" />
                <Card title="Science As It Should Be" description="Learning in the classroom is all well and good, but nothing sparks curiosity, interest and inspiration like truly hands-on scientific discovery – which is exactly what our workshops, shows and activities are here for!" imgsrc="/images/PlaySmart Kuantan-ZH_08559.jpg" />
            </div>
        </div>
    </section>

    <!-- <Ticket /> -->
    <svg width="1439" height="85" viewBox="0 0 1439 85" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 85V16.1254L204.5 74.3408L1242 0L1439 53.8424V85H0Z" fill="#00A99D"></path>
    </svg>

    <section id="tickets" class="text-bg-primary pb-5">
        <div class="container">
            <div class="row text-center">
                <h2 class="display-1 text-white">Tickets</h2>
                <p class="lead">
                    We have both MyKad or non- MyKad tickets for sale, see you there!
                </p>
            </div>
            <div class="ticket-info col-md-10 mx-auto my-5">
                <ul class="nav nav-pills justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="mykadholder-tab" data-bs-toggle="tab" data-bs-target="#mykadholder-tab-pane" type="button" role="tab" aria-controls="mykadholder-tab-pane" aria-selected="true">MyKad Holder</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nonmykad-tab" data-bs-toggle="tab" data-bs-target="#nonmykad-tab-pane" type="button" role="tab" aria-controls="nonmykad-tab-pane" aria-selected="false">Non-MyKad</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="mykadholder-tab-pane" role="tabpanel" aria-labelledby="mykadholder-tab" tabindex="0">
                        <table class="table table-success text-center text-white my-5 fs-4" style="table-layout: fixed">
                            <thead>
                                <tr class="border-bottom border-white">
                                    <th scope="col" class="text-center">Infant</th>
                                    <th scope="col" class="text-center">Child / Senior</th>
                                    <th scope="col" class="text-center">Adult</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="2" style="vertical-align: middle">
                                        <div class="price">Free</div>
                                        <div class="day">Weekdays, Weekends & Holidays*</div>
                                    </td>
                                    <td>
                                        <div class="price">RM 10</div>
                                        <div class="day">Weekdays</div>
                                    </td>
                                    <td>
                                        <div class="price">RM 22</div>
                                        <div class="day">Weekdays</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="price">RM 12</div>
                                        <div class="day">Weekends & Holidays*</div>
                                    </td>
                                    <td>
                                        <div class="price">RM 25</div>
                                        <div class="day">Weekends & Holidays*</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nonmykad-tab-pane" role="tabpanel" aria-labelledby="nonmykad-tab" tabindex="0">
                        <table class="table table-success text-center text-white my-5 fs-4" style="table-layout: fixed">
                            <thead>
                                <tr class="border-bottom border-white">
                                    <th scope="col" class="text-center">Infant</th>
                                    <th scope="col" class="text-center">Child / Senior</th>
                                    <th scope="col" class="text-center">Adult</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="2" style="vertical-align: middle">
                                        <div class="price">Free</div>
                                        <div class="day">Weekdays, Weekends & Holidays*</div>
                                    </td>
                                    <td>
                                        <div class="price">RM 20</div>
                                        <div class="day">Weekdays</div>
                                    </td>
                                    <td>
                                        <div class="price">RM 35</div>
                                        <div class="day">Weekdays</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="price">RM 40</div>
                                        <div class="day">Weekends & Holidays*</div>
                                    </td>
                                    <td>
                                        <div class="price">RM 25</div>
                                        <div class="day">Weekends & Holidays*</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg width="1439" height="85" viewBox="0 0 1439 85" fill="none" xmlns="http://www.w3.org/2000/svg" style="rotate: 180deg">
        <path d="M0 85V16.1254L204.5 74.3408L1242 0L1439 53.8424V85H0Z" fill="#00A99D"></path>
    </svg>

    <!-- promotions -->
    <section id="promotion-claim" class="spacing-lg">
        <div class="container">
            <div class="row row-cols-1 row-cols-xl-3">
                <div class="col">
                    <h2 class="display-2">Click to buy your tickets today</h2>
                </div>
                <div class="col">
                    <div class="card text-bg-purple h-100">
                        <div class="card-body">
                            <h5 class="card-title display-3">
                                Marker Studio Tickets
                                <div class="d-block">
                                    <s>RM5</s>
                                    <span class="text-success">RM3</span>
                                </div>
                            </h5>
                            <p class="card-text">
                                Buidling blocks and Science, come make your project a reality!
                            </p>
                            <a href="#" class="btn btn-secondary btn-sm">Claim Now</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-bg-primary h-100">
                        <div class="card-body">
                            <h5 class="card-title display-3">
                                Energy Capsule Tickets
                                <div class="d-block">
                                    <s>RM9</s>
                                    <span class="text-success">RM3</span>
                                </div>
                            </h5>
                            <p class="card-text">
                                Fondly known as the Dark Ride - Experience it today!
                            </p>
                            <a href="#" class="btn btn-secondary btn-sm">Claim Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="excellence-services" class="spacing-lg">
        <div class="container my-5">
            <div class="row shadow-sm">
                <div class="col-md-6 order-lg-2 p-0">
                    <img class="object-fit-cover h-100 aspect-video" src="/images/PlaySmart Kuantan-ZH_08552-16x9.jpg" alt="" />
                </div>
                <div class="col-md-6 order-lg-1 p-5 d-inline-flex align-items-start justify-content-center flex-column glass_only">
                    <h2 class="h3">Service Excellence</h2>
                    <p>
                        Our passion for bringing science to life in many exciting and
                        extraordinary ways has, helped us gain both local and
                        international recognition, thank you for your continuous support!
                    </p>
                    <a href="#" class="btn btn-outline-primary btn-sm">View Promotions</a>
                </div>
            </div>
        </div>
    </section>

    <section id="social" class="spacing-lg">
        <div class="text-center">
            <h2 class="display-2">PETROSAINS in the wild</h2>
            <p class="lead col-md-8 mx-auto">
                Let’s be friends! Connect with us on our instagram and submit your
                best selfie yet.
            </p>
        </div>

        <div class="container popup-gallery">
            <div class="row row-cols-2 row-cols-md-4 g-1">
                <a href="/images/Maker Studio-ZH_02051.jpg">
                    <img class="aspect--1x1" src="/images/Maker Studio-ZH_02051.jpg" />
                </a>
                <a href="/images/Maker Studio-ZH_02108.jpg">
                    <img class="aspect--1x1" src="/images/Maker Studio-ZH_02108.jpg" />
                </a>
                <a href="/images/Sorang Sorang (Ticket)-ZH_01153.jpg">
                    <img class="aspect--1x1" src="/images/Sorang Sorang (Ticket)-ZH_01153.jpg" />
                </a>
                <a href="/images/Sorang Sorang (Ticket)-ZH_01185.jpg">
                    <img class="aspect--1x1" src="/images/Sorang Sorang (Ticket)-ZH_01185.jpg" />
                </a>
                <a href="/images/Sorang Sorang (Ticket)-ZH_01325.jpg">
                    <img class="aspect--1x1" src="/images/Sorang Sorang (Ticket)-ZH_01325.jpg" />
                </a>
                <a href="/images/Depan Sparkz-ZH_01803.jpg">
                    <img class="aspect--1x1" src="/images/Depan Sparkz-ZH_01803.jpg" />
                </a>
                <a href="/images/Maker Studio-ZH_02006.jpg">
                    <img class="aspect--1x1" src="/images/Maker Studio-ZH_02006.jpg" />
                </a>
                <a href="/images/playsmart_2017-201711181153-2high.jpg">
                    <img class="aspect--1x1" src="/images/playsmart_2017-201711181153-2high.jpg" />
                </a>
            </div>
        </div>
    </section>

    <section id="cta" class="spacing-lg">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 g-0">
                <div class="col">
                    <div class="card card-cta text-bg-dark border-0 aspect-video">
                        <img width="400" height="300" src="/images/playsmart_2017-201711171351-14high.jpg" class="card-img object-fit-cover h-100" />
                        <img class="card-blob position-absolute" style="bottom: 0" src="/blob-card.svg" />
                        <div class="card-img-filter d-flex flex-column justify-content-end align-items-start">
                            <h3 class="card-title">Beyond Petrosains at Suria KLCC</h3>
                            <p class="card-text">
                                This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit
                                longer.
                            </p>
                            <a href="#" class="btn btn-outline-light btn-sm">Find Out More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-cta text-bg-dark border-0 aspect-video">
                        <img width="400" height="300" src="/images/playsmart_2017-201711180931-17high.jpg" class="card-img object-fit-cover h-100" />
                        <img class="card-blob position-absolute" style="bottom: 0" src="/blob-card-purple.svg" />
                        <div class="card-img-filter d-flex flex-column justify-content-end align-items-start">
                            <h3 class="card-title">Bringing a slice of science home</h3>
                            <p class="card-text">
                                This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit
                                longer.
                            </p>
                            <a href="#" class="btn btn-outline-light btn-sm">Find Out More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    //do_action('wpbase_do_sidebar'); 
    ?>

</main>

<?php

do_action('wpbase_do_after_content');

get_footer();
