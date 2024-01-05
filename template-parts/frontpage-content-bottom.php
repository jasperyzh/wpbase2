<section id="promotion" class="spacing-lg" style="margin-top: 12rem">
    <div class="container">
        <div class="row text-center position-relative">
            <h2 class="display-2"><span class="decor__blob" style="--transform-origin: 42% 50%; --scale: 3.6">Limited</span> Time Attractions</h2>
            <p class="col-lg-8 mx-auto lead">
                Our passion for bringing science to life in many exciting and
                extraordinary ways has, helped us gain both local and international
                recognition, thank you for your continuous support!
            </p>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-2 my-4 justify-content-center">

            <?php
            $args = array(
                'category_name'  => 'promotion', // Replace with your category slug
                'posts_per_page' => 4,           // Number of posts to display
            );

            $promotions = new WP_Query($args);

            if ($promotions->have_posts()) :
                while ($promotions->have_posts()) : $promotions->the_post();
                    // Check for post thumbnail (featured image), else use default
                    $img_url = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : '/assets/images/petrosains_2015-201502151130-2.jpg'; // Replace with your default image path
            ?>
                    <div class="col">
                        <div class="card card__post">
                            <a class="card-img-link" href="<?php the_permalink(); ?>">
                                <img class="card-img" src="<?= esc_url($img_url); ?>" width="400" height="300" alt="<?= the_title_attribute(); ?>" />
                            </a>
                            <div class="card-body">
                                <h3 class="card-title">
                                    <a href="<?= the_permalink(); ?>" class="text-white"><?php the_title(); ?></a>
                                </h3>
                                <p class="card-text">
                                    <?= get_the_excerpt(); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="stretched-link"></a>
                            </div>
                            <!-- Optionally add footer here -->
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
            // No posts found in this category
            endif;
            ?>
        </div>
    </div>
</section>

<section id="tickets" class="spacing-lg">
    <div class="tickets__top-decor">
        <img src="/assets/images/homepage/tickets-life_amplified.jpg" alt="Life Amplified" class="masked-image">
        <svg width="1439" height="85" viewBox="0 0 1439 85" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 85V16.1254L204.5 74.3408L1242 0L1439 53.8424V85H0Z" fill="#00A99D"></path>
        </svg>
    </div>
    <div class="text-bg-success">
        <div class="container ">
            <div class="row text-center">
                <h2 class="display-1">Tickets</h2>
                <p class="lead">
                    We have both MyKad or non- MyKad tickets for sale, see you there!
                </p>
            </div>
            <div class="ticket-info col-md-10 mx-auto py-4">
                <ul class="nav nav-pills justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-pill active" id="mykadholder-tab" data-bs-toggle="tab" data-bs-target="#mykadholder-tab-pane" type="button" role="tab" aria-controls="mykadholder-tab-pane" aria-selected="true">MyKad Holder</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-pill" id="nonmykad-tab" data-bs-toggle="tab" data-bs-target="#nonmykad-tab-pane" type="button" role="tab" aria-controls="nonmykad-tab-pane" aria-selected="false">Non-MyKad</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="mykadholder-tab-pane" role="tabpanel" aria-labelledby="mykadholder-tab" tabindex="0">
                        <div class="table-responsive">
                            <table class="table text-center text-white my-5 fs-4">
                                <thead>
                                    <tr class="border-bottom border-white">
                                        <th scope="col" class="text-center">
                                            Infant
                                            <p class="fs-6 fw-normal">0 - 2 years old</p>
                                        </th>
                                        <th scope="col" class="text-center">
                                            Child
                                            <p class="fs-6 fw-normal">3 to 12 years old</p>
                                        </th>
                                        <th scope="col" class="text-center">
                                            Adult
                                            <p class="fs-6 fw-normal">13 to 60 years old</p>
                                        </th>
                                        <th scope="col" class="text-center">
                                            Senior
                                            <p class="fs-6 fw-normal">61 years old and above</p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan="2" style="vertical-align: middle">
                                            <div class="price">Free</div>
                                            <!-- <div class="day">Weekdays, Weekends & Holidays*</div> -->
                                        </td>
                                        <td>
                                            <div class="price">RM 10</div>
                                            <div class="day">Weekdays</div>
                                        </td>
                                        <td>
                                            <div class="price">RM 22</div>
                                            <div class="day">Weekdays</div>
                                        </td>
                                        <td>
                                            <div class="price">RM 10</div>
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
                                        <td>
                                            <div class="price">RM 12</div>
                                            <div class="day">Weekends & Holidays*</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nonmykad-tab-pane" role="tabpanel" aria-labelledby="nonmykad-tab" tabindex="0">
                        <table class="table table-success text-center text-white my-5 fs-4">
                            <thead>
                                <tr class="border-bottom border-white">
                                    <th scope="col" class="text-center">
                                        Infant
                                        <p class="fs-6 fw-normal">0 - 2 years old</p>
                                    </th>
                                    <th scope="col" class="text-center">
                                        Child
                                        <p class="fs-6 fw-normal">3 to 12 years old</p>
                                    </th>
                                    <th scope="col" class="text-center">
                                        Adult
                                        <p class="fs-6 fw-normal">13 to 60 years old</p>
                                    </th>
                                    <th scope="col" class="text-center">
                                        Senior
                                        <p class="fs-6 fw-normal">61 years old and above</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="2" style="vertical-align: middle">
                                        <div class="price">Free</div>
                                        <!-- <div class="day">Weekdays, Weekends & Holidays*</div> -->
                                    </td>
                                    <td>
                                        <div class="price">RM 20</div>
                                        <div class="day">Weekdays</div>
                                    </td>
                                    <td>
                                        <div class="price">RM 35</div>
                                        <div class="day">Weekdays</div>
                                    </td>
                                    <td>
                                        <div class="price">RM 20</div>
                                        <div class="day">Weekdays</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="price">RM 25</div>
                                        <div class="day">Weekends & Holidays*</div>
                                    </td>
                                    <td>
                                        <div class="price">RM 40</div>
                                        <div class="day">Weekends & Holidays*</div>
                                    </td>
                                    <td>
                                        <div class="price">RM 20</div>
                                        <div class="day">Weekends & Holidays*</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center pb-4 text-center">
                <div class="col-md-8">
                    <p>Unlimited access all year long, Join us as member!</p>
                    <a href="/visit/the-discoverers-league/" target="_blank" class="btn btn-secondary rounded-pill text-white">Become a member</a>
                </div>
            </div>
        </div>
    </div>
    <svg width="1439" height="85" viewBox="0 0 1439 85" fill="none" xmlns="http://www.w3.org/2000/svg" style="rotate: 180deg; margin-top: -2px">
        <path d="M0 85V16.1254L204.5 74.3408L1242 0L1439 53.8424V85H0Z" fill="#00A99D"></path>
    </svg>
</section>

<!-- promotions -->
<!-- <section id="promotion" class="spacing-lg">
    <div class="container">
        <div class="row row-cols-1 row-cols-xl-3 g-2">
            <div class="col">
                <h2 class="display-2" style="text-wrap: balance">Click to buy your tickets today</h2>
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
                        <a href="#" class="btn btn-secondary rounded-pill btn-sm">Claim Now</a>
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
                        <a href="#" class="btn btn-secondary rounded-pill btn-sm">Claim Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- <section id="excellence-services" class="spacing-lg">
    <div class="container my-5">
        <div class="row  justify-content-center">
            <div class="col-md-6 order-lg-2 p-0">
                <div class="card card__cta card--16x9 shadow-sm">
                    <img width="400" height="300" src="/assets/images/PlaySmart Kuantan-ZH_08552-16x9.jpg" class="card-img">
                    <div class="card-img-overlay">
                        <h3 class="card-title">Learning Beyond at PlaySmart™ satellite centre</h3>
                        <p class="card-text">
                            <a href="/playsmart" class="btn btn-outline-light btn-sm">Find out more</a>
                        </p>
                        <img class="card-img-overlay__bg" style="scale:2" src="http://stagingpetrosains.fishermen-analytics.com/assets/blob-card.svg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- 
<section id="social" class="spacing-lg">
    <div class="text-center">
        <h2 class="display-2">Petrosains in the wild</h2>
        <p class="lead col-md-8 mx-auto">
            Let’s be friends! Connect with us on our instagram and submit your
            best selfie yet.
        </p>
    </div>

    <div class="container popup-gallery">
        <div class="row row-cols-2 row-cols-md-4 g-2">
            <a href="/assets/images/Maker Studio-ZH_02051.jpg">
                <img class="aspect--1x1" src="/assets/images/Maker Studio-ZH_02051.jpg" />
            </a>
            <a href="/assets/images/Maker Studio-ZH_02108.jpg">
                <img class="aspect--1x1" src="/assets/images/Maker Studio-ZH_02108.jpg" />
            </a>
            <a href="/assets/images/Sorang Sorang (Ticket)-ZH_01153.jpg">
                <img class="aspect--1x1" src="/assets/images/Sorang Sorang (Ticket)-ZH_01153.jpg" />
            </a>
            <a href="/assets/images/Sorang Sorang (Ticket)-ZH_01185.jpg">
                <img class="aspect--1x1" src="/assets/images/Sorang Sorang (Ticket)-ZH_01185.jpg" />
            </a>
            <a href="/assets/images/Sorang Sorang (Ticket)-ZH_01325.jpg">
                <img class="aspect--1x1" src="/assets/images/Sorang Sorang (Ticket)-ZH_01325.jpg" />
            </a>
            <a href="/assets/images/Depan Sparkz-ZH_01803.jpg">
                <img class="aspect--1x1" src="/assets/images/Depan Sparkz-ZH_01803.jpg" />
            </a>
            <a href="/assets/images/Maker Studio-ZH_02006.jpg">
                <img class="aspect--1x1" src="/assets/images/Maker Studio-ZH_02006.jpg" />
            </a>
            <a href="/assets/images/playsmart_2017-201711181153-2high.jpg">
                <img class="aspect--1x1" src="/assets/images/playsmart_2017-201711181153-2high.jpg" />
            </a>
        </div>
    </div>
</section>

<section id="cta" class="spacing-lg">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-2 g-0">
            <div class="col">
                <div class="card card__cta card--16x9 rounded-0">
                    <img width="400" height="300" src="/assets/images/playsmart_2017-201711171351-14high.jpg" class="card-img">
                    <div class="card-img-overlay">
                        <h3 class="card-title">Beyond Petrosains at Suria KLCC</h3>
                        <p class="card-text">
                            <a href="/playsmart" class="btn btn-outline-light btn-sm">Find out more</a>
                        </p>
                        <img class="card-img-overlay__bg" style="scale:2" src="http://stagingpetrosains.fishermen-analytics.com/assets/blob-card.svg">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card__cta card--16x9 rounded-0">
                    <img width="400" height="300" src="/assets/images/playsmart_2017-201711180931-17high.jpg" class="card-img">
                    <div class="card-img-overlay">
                        <h3 class="card-title">Bringing a slice of science home</h3>
                        <p class="card-text">
                            <a href="/playsmart" class="btn btn-outline-light btn-sm">Find out more</a>
                        </p>
                        <img class="card-img-overlay__bg" style="scale:2; filter: brightness(0.6) hue-rotate(91deg) saturate(180%)" src="http://stagingpetrosains.fishermen-analytics.com/assets/blob-card.svg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->