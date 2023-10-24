<?php

/**
 * page
 *
 * @link https--
 *
 * @package wpbase2
 */

get_header();

do_action('wpbase_do_before_content');

?>

<main id="main" class="site-main">


    <!-- <PageBanner title="Page Title" description="Lorem Ipsum" /> -->

    <?php do_action('wpbase_do_content'); ?>


    <div class="container my-5">
        <div class="row g-0">
            <div class="col-lg-6">
                <img class="object-fit-cover w-100" src="/images/Maker Studio-ZH_02013.jpg" alt="--image" style="aspect-ratio: 1/1" />
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center glass p-4">
                <div>
                    <p class="pb-2 text-muted mb-0 h6">Robotic</p>

                    <h2 class="fw-bold text-body-emphasis">
                        Future Innovators: Robotics and AI
                    </h2>
                </div>
                <div>
                    <p>
                        Step into the future with "Future Innovators," an interactive
                        exhibition exploring the cutting-edge world of robotics and
                        artificial intelligence. Engage with real-life robots, learn about
                        machine learning, and discover how AI is shaping our world.
                        Suitable for all ages, this exhibition offers hands-on experiences
                        and thought-provoking insights into the technology of tomorrow.
                    </p>

                    <div class="d-flex">
                        <a href="#" class="btn btn-outline-secondary">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container my-5 col--reverse">
        <div class="row g-0">
            <div class="col-lg-6">
                <img class="object-fit-cover w-100" src="/images/petrosains_2015-201502151250-12.jpg" alt="--image" style="aspect-ratio: 1/1" />
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center glass p-4">
                <div>
                    <p class="pb-2 text-muted mb-0 h6">Space</p>

                    <h2 class="fw-bold text-body-emphasis">
                        Cosmic Wonders: A Journey Through the Universe
                    </h2>
                </div>
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, praesentium corporis? Laboriosam inventore reprehenderit unde, voluptate culpa, aperiam magni commodi facilis architecto beatae consectetur voluptates nemo.
                    </p>

                    <div class="d-flex">
                        <a href="#" class="btn btn-outline-secondary">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="divider"></div>

    <div class="container my-5">
        <div class="row g-0">
            <div class="col-lg-6">
                <img class="object-fit-cover w-100" src="/placeholder/pexels-photo-7001709.jpg" alt="--image" style="aspect-ratio: 1/1" />
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center glass p-4">
                <div>
                    <p class="pb-2 text-muted mb-0 h6">Ocean</p>

                    <h2 class="fw-bold text-body-emphasis">
                        Eco Explorers: Understanding Our Planet
                    </h2>
                </div>
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, praesentium corporis? Laboriosam inventore reprehenderit unde, voluptate culpa, aperiam magni commodi facilis architecto beatae consectetur voluptates nemo, cumque vel rem velit porro laborum esse nobis ad molestias.
                    </p>

                    <div class="d-flex">
                        <a href="#" class="btn btn-outline-secondary">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container my-5 col--reverse">
        <div class="row g-0">
            <div class="col-lg-6">
                <img class="object-fit-cover w-100" src="/images/Sorang Sorang (Ticket)-ZH_01325.jpg" alt="--image" style="aspect-ratio: 1/1" />
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center glass p-4">
                <div>
                    <p class="pb-2 text-muted mb-0 h6">Science</p>

                    <h2 class="fw-bold text-body-emphasis">
                        Inventive Minds: A Tribute to Great Inventors
                    </h2>
                </div>
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, praesentium corporis? Laboriosam inventore reprehenderit unde, voluptate culpa, aperiam magni commodi facilis architecto beatae.
                    </p>

                    <div class="d-flex">
                        <a href="#" class="btn btn-outline-secondary">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="divider"></div>

    <style>
        .col--reverse>.row>.col-lg-6:nth-child(1) {
            order: 2;
        }

        .col--reverse>.row>.col-lg-6:nth-child(2) {
            order: 1;
        }
    </style>



    <?php do_action('wpbase_do_sidebar'); ?>

</main>

<?php

do_action('wpbase_do_after_content');

get_footer();
