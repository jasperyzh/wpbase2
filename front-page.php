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

    <?php get_template_part('template-parts/frontpage', 'content-hero'); ?>
    <?php //get_template_part('template-parts/frontpage', 'content-top'); 
    ?>

    <?php do_action('wpbase_do_content'); ?>

    <?php //get_template_part('template-parts/frontpage', 'content-bottom'); 
    ?>

    <?php the_content(); ?>

    <div class="container">
        <div class="row">
            <?= do_shortcode('[instagram-feed feed=1]'); ?>

        </div>
    </div>

    <?php
    //do_action('wpbase_do_sidebar'); 
    ?>

</main>

<?php

do_action('wpbase_do_after_content');

get_footer();
