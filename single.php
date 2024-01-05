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

    <?php do_action('wpbase_do_content'); ?>

    <div class="container">
        <div class="row justify-content-center g-5">
            <div class="col-md-8">
                <article class="blog-post glass p-3 ">

                    <?php the_content(); ?>

                    <hr />

                    <div class="meta">
                        <div class="d-flex flex-wrap gap-1">
                            <?php
                            $categories = get_the_category();
                            $separator = ' ';
                            $output = '';
                            if (!empty($categories)) {
                                foreach ($categories as $category) {
                                    $output .= '<span class="badge bg-primary">' . esc_html($category->name) . '</span>' . $separator;
                                }
                                echo trim($output, $separator);
                            }

                            $tags = get_the_tags();
                            $output = '';
                            if (!empty($tags)) {
                                foreach ($tags as $tag) {
                                    $output .= '<span class="badge bg-secondary">' . esc_html($tag->name) . '</span>' . $separator;
                                }
                                echo trim($output, $separator);
                            }
                            ?>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <?php do_action('wpbase_do_sidebar'); ?>

</main>

<?php

do_action('wpbase_do_after_content');

get_footer();
