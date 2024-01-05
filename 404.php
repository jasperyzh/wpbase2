<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _s
 */

get_header();

do_action('wpbase_do_before_content');

?>

<main id="main" class="site-main">

    <div class="container" style="margin-top: 12rem">
        <div class="row my-5">
            <div class="col-md-8">
                <div class="shadow rounded glass p-5">
                    <h1 class="h5">404: Not Found</h1>
                    <h2>We seem to be missing some content here. Let's try again!</h2>
                    <p>It looks like nothing was found at this location.</p>
                    <a href="<?= get_site_url() ?>" class="btn btn-primary">Back to Homepage</a>
                </div>
            </div>
        </div>
    </div>

    <?php
    /* <section class="error-404 not-found">
        <div class="container">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', '_s'); ?></h1>
            </header>

            <div class="page-content">
                <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', '_s'); ?></p>

                <?php
                get_search_form();

                the_widget('WP_Widget_Recent_Posts');
                ?>

                <div class="widget widget_categories">
                    <h2 class="widget-title"><?php esc_html_e('Most Used Categories', '_s'); ?></h2>
                    <ul>
                        <?php
                        wp_list_categories(
                            array(
                                'orderby'    => 'count',
                                'order'      => 'DESC',
                                'show_count' => 1,
                                'title_li'   => '',
                                'number'     => 10,
                            )
                        );
                        ?>
                    </ul>
                </div>

                <?php
                $_s_archive_content = '<p>' . sprintf(esc_html__('Try looking in the monthly archives. %1$s', '_s'), convert_smilies(':)')) . '</p>';
                the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$_s_archive_content");

                the_widget('WP_Widget_Tag_Cloud');
                ?>

            </div>
        </div>
    </section> */
    ?>

</main>

<?php

do_action('wpbase_do_after_content');

get_footer();
