<?php

/**
 * @version 1.1.240201
 */

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.1.240201');
}


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function petrosains_setup()
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
        'primary1' => esc_html__('Primary #1', 'wpbase'),
        'primary2' => esc_html__('Primary #2', 'wpbase'),
        'primary3' => esc_html__('Primary #3', 'wpbase'),
        'footer1' => esc_html__('Footer #1', 'wpbase'),
        'footer2' => esc_html__('Footer #2', 'wpbase'),
        'footer3' => esc_html__('Footer #3', 'wpbase'),
        'socialmedia' => esc_html__('Social Media', 'wpbase'),
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

    // vite - wp_config_php: IS_VITE_DEVELOPMENT
    require get_template_directory() . '/inc/inc.vite.php';

    // petrosains require displayOperationHours
    require_once "functions-displayOperationHours.php";
}
add_action('after_setup_theme', 'petrosains_setup');


// templates
function petrosains_template_insertion()
{
    if (is_page() && !is_front_page() && !is_home()) {
        add_action("wpbase_do_content", function () {

            // Check if the current page is using any custom template
            $template_slug = get_page_template_slug(get_queried_object_id());

            // If a custom template is in use, check if it is one of the templates that should not display the_content()
            if ('template-article-fullwidth.php' === $template_slug || 'template-page-slim.php' === $template_slug) {
                // Output custom template content or nothing
                // ...
            } else {
                while (have_posts()) :
                    the_post();
?>
                    <div class="container">
                        <?php get_template_part('template-parts/content', 'page'); ?>
                    </div>
<?php
                endwhile;
            }
        });
    }

    // page_banner
    add_action("wpbase_do_content", function () {
        if (!is_front_page() && is_home() || is_single() || !is_front_page() && is_page() || is_archive() || is_search()) :
            get_template_part('template-parts/page', "banner");
        endif;
    }, 2);
}
add_action("template_redirect", "petrosains_template_insertion");


/**
 * add yoast_seo breadcrumbs
 * move to wpbase2/inc
 * check on this: https://yoast.com/help/add-theme-support-for-yoast-seo-breadcrumbs/
 * add_theme_support( 'yoast-seo-breadcrumbs' );
 */
function add_breadcrumb()
{
    if (function_exists('yoast_breadcrumb')) {
        if (!is_front_page() && (is_single() || is_page() || is_archive())) {
            yoast_breadcrumb('<p id="breadcrumbs" class="my-3">', '</p>');
        }
    }
}

/**
 * enqueues
 */
function enqueue_petrosains_scripts()
{
    wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/lib/bootstrap-icons-1.10.5/font/bootstrap-icons.css', [], "1.10.5", "all");
}
add_action("wp_enqueue_scripts", "enqueue_petrosains_scripts");


// widget
function petrosains_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Primary Navigation: CTA Section', 'petrosains'),
            'id'            => 'primary-menu-cta-section',
            'description'   => esc_html__('CTA Section: Currently for Opening Time and CTA button.', 'petrosains'),
            // 'before_widget' => '<section id="%1$s" class="widget %2$s">',
            // 'before_widget' => '',
            // 'after_widget'  => '',
            // 'before_title'  => '',
            // 'after_title'   => '',
        )
    );


    register_sidebar(
        array(
            'name'          => esc_html__('Footer: Copy Section', 'petrosains'),
            'id'            => 'footer-copy-section',
            'description'   => esc_html__('Add Footer Copy Section.', 'petrosains'),
            'before_widget' => '',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );
}
add_action('widgets_init', 'petrosains_widgets_init');


// AFC to body class
function page_custom_body_classes($classes)
{
    // Only do this on the front-end
    if (!is_admin()) {
        // Get the current page ID
        $page_id = get_queried_object_id();

        // Get the custom field value
        $custom_classes = get_field('page_body_classes', $page_id);

        // If the field has a value, add it to the body class array
        if ($custom_classes) {
            // If there are multiple classes, split them into an array
            $custom_classes_array = explode(' ', $custom_classes);
            $classes = array_merge($classes, $custom_classes_array);
        }
    }

    return $classes;
}
add_filter('body_class', 'page_custom_body_classes');


// shortcode for using get_template_part on cms
function get_template_shortcode($atts)
{
    ob_start(); // Start output buffering

    // Extract attributes and set default template
    $atts = shortcode_atts(array(
        'slug' => 'default', // default slug
        'name' => ''         // default name (optional)
    ), $atts);

    // Load the template part
    get_template_part($atts['slug'], $atts['name']);

    return ob_get_clean(); // Return the buffered output
}

add_shortcode('get_template_shortcode', 'get_template_shortcode');
