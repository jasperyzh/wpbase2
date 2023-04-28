<?php
/* 
Template Name: Full-width
Template Post Type: post, page
*/

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
