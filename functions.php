<?php

/**
 * @version 0.9.0
 */

// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;

/**
 * functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wpbase2
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

// define('DEFAULT_FEATURED_IMAGE', '<svg class="bd-placeholder-img" width="400" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em" text-anchor="middle" dominant-baseline="middle">Featured Image</text></svg>');
define('DEFAULT_FEATURED_IMAGE', '<img src="https://images.pexels.com/photos/1478442/pexels-photo-1478442.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&dpr=1" class="object-fit-cover w-100" width="400" height="300">');

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wpbase2_setup()
{
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    add_theme_support(
        'custom-background',
        apply_filters('wpbase2_custom_background_args', [
            'default-color' => 'ffffff',
            'default-image' => '',
        ])
    );

    add_theme_support('customize-selective-refresh-widgets');

    add_theme_support('custom-logo', [
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ]);

    register_nav_menus([
        'primary' => esc_html__('Primary', 'wpbase'),
        'secondary' => esc_html__('Secondary', 'wpbase'),
        'footer' => esc_html__('Footer', 'wpbase'),
    ]);


    /**
     * Implement the Custom Header feature.
     */
    require get_template_directory() . '/inc/custom-header.php';

    /**
     * Custom template tags for this theme.
     */
    require get_template_directory() . '/inc/template-tags.php';

    /**
     * Functions which enhance the theme by hooking into WordPress.
     */
    require get_template_directory() . '/inc/template-functions.php';

    /**
     * Customizer additions.
     */
    require get_template_directory() . '/inc/customizer.php';

    /**
     * Register Custom Navigation Walker
     */
    require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

    /**
     * wpbase_inc
     */
    require get_template_directory() . '/inc/wp-reset_wp.php';
    require get_template_directory() . '/inc/wp-reset_image_sizes.php';
    require get_template_directory() . '/inc/wp-disable_comment.php';
    require get_template_directory() . '/inc/wp-nav_menu.php';
    require get_template_directory() . '/inc/wp-admin-sortbyordercolumn.php';
    require get_template_directory() . '/inc/wpbase2-entry-functions.php';
}
add_action('after_setup_theme', 'wpbase2_setup');

/**
 * widgets
 */
function wpbase2_widgets_setup()
{
    register_sidebar([
        'name'          => esc_html__('Sidebar', 'wpbase2'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'wpbase2'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ]);
}
add_action('widgets_init', 'wpbase2_widgets_setup');

/**
 * enqueues
 */
function wpbase2_enqueue()
{
    // wp_enqueue_style('bootstrap', get_template_directory_uri() . '/lib/bootstrap-5.3.0/css/bootstrap.min.css', [], "5.3.0", "all");

    // wp_enqueue_script('bootstrap', get_template_directory_uri() . '/lib/bootstrap-5.3.0//js/bootstrap.bundle.min.js', array('jquery'), "5.3.0");

    wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/lib/bootstrap-icons-1.10.5/font/bootstrap-icons.css', [], "1.10.5", "all");
}
add_action("wp_enqueue_scripts", "wpbase2_enqueue");


/**
 FILTERS
 */
// function add_search_form_class($form)
// {
//     /**
//     BOOTSTRAP IT
//      */
//     $form = str_replace('class="search-form"', 'd-flex mt-3 mt-lg-0" role="search"', $form);
//     return $form;

//     // <form class="d-flex mt-3 mt-lg-0" role="search">
//                         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
//                         <button class="btn btn-outline-success" type="submit">Search</button>
//                     // </form>
// }
// add_filter('get_search_form', 'add_search_form_class');

function bootstrap_search_form($form)
{
    $form = '
    <form role="search" method="get" class="d-flex mt-3 mt-lg-0" action="' . home_url('/') . '">
        <input class="form-control me-2" type="search" placeholder="Search" value="' . get_search_query() . '" name="s" id="s" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" id="searchsubmit">Search</button>
    </form>';
    return $form;
}
add_filter('get_search_form', 'bootstrap_search_form');

/**
 TEMPLATES
 * check with
 * /inc/wpbase2-templates-functions.php
 */
function wpbase2_template_insertion()
{
    // global template
    // add_action("wpbase_do_header", function () {
    //     get_template_part("template-parts/bootstrap", "header");
    // });
    // add_action("wpbase_do_header", function () {
    //     get_template_part("template-parts/bootstrap", "menu-secondary");
    // });

    /* add_action('wpbase_do_content', function () {
?>
        <div class="container">
            <?php add_breadcrumb() ?>
        </div>

        <?php

        the_content();
    }); */

    add_action("wpbase_do_entry_header", "wpbase2_post_thumbnail");

    add_action("wpbase_do_entry_header", "wpbase_default_entry_header", 8);
    add_action("wpbase_do_entry_header", "wpbase_default_entry_meta");

    add_action("wpbase_do_footer", function () {
        get_template_part("template-parts/bootstrap", "footer");
    });

    // page template

    if (is_single()) {

        add_action("wpbase_do_content", function () {
        ?>
            <div class="container">
                <div class="row g-5">
                    <div class="col-md-8">
                        <?php get_template_part("template-parts/bootstrap", "single-article") ?>

                        <?php wpbase_single_content_meta() ?>
                    </div>

                    <div class="col-md-4">
                        <?php get_template_part("template-parts/bootstrap", "single-sidebar") ?>
                    </div>
                </div>
            </div>
            <?php
        });
    }
    if (is_page() && !is_front_page() && !is_home()) {
        add_action("wpbase_do_content", function () {
            while (have_posts()) :
                the_post();
            ?>
                <div class="container">
                    <?php
                    get_template_part('template-parts/content', 'page');

                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    ?>
                </div>
            <?php
            endwhile; // End of the loop.
        });
    }
    /* if (is_archive()) {

        add_action("wpbase_do_content", function () {
            ?>
            <div class="container">
                <?php get_template_part('template-parts/bootstrap', "archive-content"); ?>
            </div>
        <?php
        });
    } */
    /* if (is_search()) {
        // add_action("wpbase_do_entry_header", "wpbase2_post_thumbnail", 12);
        remove_action("wpbase_do_entry_header", "wpbase_default_entry_header", 8);
        remove_action("wpbase_do_entry_header", "wpbase_default_entry_meta");
        remove_action("wpbase_do_entry_footer", "wpbase2_entry_footer", 8);

        add_action("wpbase_do_entry_header", function () {
            // content_search_entry_header
            the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
        });

        add_action("wpbase_do_content", function () {
        ?>
            <div class="container">
                <?php get_template_part('template-parts/bootstrap', "search-content"); ?>
            </div>
        <?php
        });
    } */
    /* if (is_404()) {
        add_action("wpbase_do_content", function () {
        ?>
            <div class="container">
                <?php get_template_part('template-parts/bootstrap', "404-content"); ?>
            </div>
        <?php
        });
    } */

    /* if (is_front_page() && is_home()) {
        // Default homepage (i.e., displays the latest posts)
        // add_action("wpbase_do_content", "bootstrap_example_frontpage");

        add_action("wpbase_do_content", function () {
        ?>
            <div class="container">
                <?php get_template_part('template-parts/bootstrap', "frontpage-content"); ?>
            </div>
            <?php
        });

        add_action("wpbase_do_content", function () {
            if (have_posts()) :
            ?>
                <div class='container'>
                    <div class='row row-cols-1 row-cols-lg-2 g-4'>
                        <?php
                        while (have_posts()) :
                            the_post();
                        ?>
                            <div class="col">
                                <?php
                                get_template_part('template-parts/bootstrap', "card-article");
                                ?>
                            </div>
                        <?php
                        endwhile;
                        ?>
                    </div>
                </div>
            <?php
            else :
                echo '<p>Sorry, no content available.</p>';
            endif;
        });
    } elseif (is_front_page()) {
        add_action("wpbase_do_content", function () {
            ?>
            <div class="container">
                <?php get_template_part('template-parts/bootstrap', "frontpage-content"); ?>
            </div>
            <?php
        });
    } elseif (is_home()) {

        add_action("wpbase_do_content", function () {
            if (have_posts()) :
            ?>
                <div class='container'>
                    <div class='row row-cols-1 row-cols-lg-2 g-4'>
                        <?php
                        while (have_posts()) :
                            the_post();
                        ?>
                            <div class="col">
                                <?php
                                get_template_part('template-parts/bootstrap', "card-article");

                                ?>
                            </div>
                        <?php
                        endwhile;

                        wpbase_bootstrap_pagination();

                        ?>
                    </div>
                </div>
            <?php
            else :
                echo '<p>Sorry, no content available.</p>';
            endif;
        });
    } */


    // page_banner
    /* if (!is_front_page() && is_home() || is_single() || !is_front_page() && is_page() || is_archive()) {
        add_action("wpbase_do_content", function () {
            ?>
            <div class="container-fluid mb-4 px-0">
                <?php get_template_part('template-parts/bootstrap', "page-banner"); ?>
            </div>
<?php
        }, 2);
    } */
}
add_action("template_redirect", "wpbase2_template_insertion");



/**
 * add yoast_seo breadcrumbs
	move to wpbase2/inc
	check on this: https://yoast.com/help/add-theme-support-for-yoast-seo-breadcrumbs/
	add_theme_support( 'yoast-seo-breadcrumbs' );
 */
function add_breadcrumb()
{
    if (function_exists('yoast_breadcrumb')) {
        if (!is_front_page() && (is_single() || is_page() || is_archive())) {
            yoast_breadcrumb('<p id="breadcrumbs" class="py-4">', '</p>');
        }
    }
}


// wpbase2_petrosains setup_vite

// add_action('after_setup_theme', 'petrosains_setup', 12);

// remove_action("wp_enqueue_scripts", "wpbase2_enqueue", 12);

// vite
// wp_config_php: IS_VITE_DEVELOPMENT
define('VITE_SERVER', 'http://localhost:3030');
define('VITE_ENTRY_POINT', '/src/main.js');
require get_template_directory() . '/inc/inc.vite.php';


/**
 * functions_petrosains
 */
// define("PETROSAINS_ASSETS_PATH", get_stylesheet_directory_uri() . "/assets");
// define("PETROSAINS_DEFAULT_THUMBNAIL", PETROSAINS_ASSETS_PATH . '/petrosains-thumbnail-default.jpg');
// define("PETROSAINS_DEFAULT_BANNER", PETROSAINS_ASSETS_PATH . '/petrosains-banner-default.jpg');
