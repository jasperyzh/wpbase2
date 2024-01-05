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

    <?php get_template_part("template-parts/petrosains", "exhibition_sample"); ?>
    
    <?php get_template_part("template-parts/petrosains", "components"); ?>

    <?php get_template_part("template-parts/petrosains", "cheatsheet"); ?>

    <?php do_action('wpbase_do_sidebar'); ?>



</main>

<?php

do_action('wpbase_do_after_content');

get_footer();
