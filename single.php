<?php

/**
 * single
 *
 * @link https--
 *
 * @package wpbase2
 */

get_header();

do_action('wpbase_do_before_content');

?>

<main id="main" class="site-main">

    <!-- page_banner -->
    <!-- class:page-single -->

    <?php do_action('wpbase_do_content'); ?>

    <div class="container">
        <div class="row justify-content-center g-5">
            <div class="col-md-8 glass py-4">
                <article class="blog-post">
                    <h2 class="display-5 link-body-emphasis mb-1">
                        All fun week-long at Petrosains!
                    </h2>
                    <!-- <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p> -->

                    <p>
                        Experience the wonders of the cosmos at Petrosains Observatory's
                        exclusive stargazing event. Guided by professional astronomers,
                        you'll explore planets, stars, and galaxies through powerful
                        telescopes. A magical night for astronomy enthusiasts and curious
                        minds alike.
                    </p>

                    <img src="/images/Maker Studio-ZH_01970.jpg" alt="image of event" />

                    <p>
                        Introducing the Petrosains Family Adventure Package, a specially
                        curated experience for families to explore science and technology
                        together. Enjoy interactive exhibits, engaging workshops, and
                        exclusive guided tours that spark curiosity and creativity in
                        children and adults alike.
                    </p>

                    <ul>
                        <li>Leverage agile frameworksLeverage agile frameworks</li>
                        <li>Bring to the table win-win</li>
                        <li>Capitalize on low hanging fruit</li>
                        <li>Override the digital divide with additional</li>
                    </ul>

                    <p>
                        Join us for the Petrosains Science Festival 2023, where science
                        comes to life! Engage in hands-on workshops, interactive exhibits,
                        and live demonstrations. Suitable for all ages, this festival
                        promises a week of learning, exploration, and excitement.
                    </p>
                    <p>
                        Book the Family Adventure Package and receive a 15% discount on
                        Petrosains eShop merchandise. Offer valid for a limited time only.
                        Create lasting memories with Petrosains today!
                    </p>

                    <hr />

                    <span class="badge rounded-pill text-bg-primary">Petrosains PlaySmart</span>,
                    <span class="badge rounded-pill text-bg-primary">Workshop</span>

                    <nav class="blog-pagination mt-4 d-flex justify-content-between" aria-label="Pagination">
                        <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Newer</a>
                        <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
                    </nav>
                </article>
            </div>
        </div>
    </div>

    <?php do_action('wpbase_do_sidebar'); ?>

</main>

<?php

do_action('wpbase_do_after_content');

get_footer();
