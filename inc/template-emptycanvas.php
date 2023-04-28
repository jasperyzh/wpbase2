<?php
/* 
Template Name: Empty Canvas
Template Post Type: post, page
*/

remove_all_actions("wpbase_do_header");
remove_all_actions("wpbase_do_footer");

get_header();

?>
<main id="primary" class="site-main">

    <?php
    while (have_posts()) :
        the_post();

        // get_template_part('template-parts/content', 'page');
    ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php //do_action('wpbase_do_entry_header'); 
            ?>

            <?php //wpbase2_post_thumbnail(); 
            ?>

            <div class="entry-content">
                <?php
                the_content();

                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'wpbase2'),
                        'after'  => '</div>',
                    )
                );
                ?>
            </div><!-- .entry-content -->

            <?php if (get_edit_post_link()) : ?>
                <footer class="entry-footer">
                    <?php
                    edit_post_link(
                        sprintf(
                            wp_kses(
                                /* translators: %s: Name of current post. Only visible to screen readers */
                                __('Edit <span class="screen-reader-text">%s</span>', 'wpbase2'),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            wp_kses_post(get_the_title())
                        ),
                        '<span class="edit-link">',
                        '</span>'
                    );
                    ?>
                </footer><!-- .entry-footer -->
            <?php endif; ?>
        </article><!-- #post-<?php the_ID(); ?> -->

    <?php

    // If comments are open or we have at least one comment, load up the comment template.
    // if (comments_open() || get_comments_number()) :
    //     comments_template();
    // endif;

    endwhile; // End of the loop.
    ?>

</main><!-- #main -->

<?php
// do_action('wpbase_do_after_content');

// get_sidebar();

get_footer();



// full_width_layout
// remove_filter('body_class', 'wp_body_classes_layout', 1);
// add_filter('body_class', function ($classes) {
//     $classes[] = 'layout_full_width_content';
//     return $classes;
// });

// // remove main_yayasan_header_footer
// remove_action('wpbase_do_header', 'yayasan_do_header');
// remove_action('wpbase_do_footer', 'yayasan_do_footer');

// insert content_annual_report_2020 into page

/* get_header();

// remove page_banner
// do_action('wpbase_do_before_content');
// remove_action('wpbase_do_before_content', 'yayasan_page_banner', 15);

?>

<main id="primary" class="site-main">

    <?php the_content(); ?>
    <!-- get_template_part('template-yayasan/content', 'annual-report-2020'); -->

</main><!-- #main -->

<?php
do_action('wpbase_do_after_content');

get_footer();

 */