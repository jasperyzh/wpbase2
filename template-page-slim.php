<?php

/**
 * Template Name: Slim Page
 * Description: A page template with a slimmer design for text-heavy pages.
 */

get_header();

do_action('wpbase_do_before_content');

?>

<main id="main" class="site-main">

    <?php do_action('wpbase_do_content'); ?>

    <div class="container">
        <div class="row justify-content-center g-5">
            <div class="col-md-8 glass py-4">
                <article class="custom-template-post">

                    <?php the_content(); ?>

                </article>
            </div>
        </div>
    </div>

    <?php do_action('wpbase_do_sidebar'); ?>

</main>

<?php

do_action('wpbase_do_after_content');

get_footer();
