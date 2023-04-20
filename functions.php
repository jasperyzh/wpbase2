<?php

// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;

/**
 * wpbase2 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wpbase2
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

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
        'footer' => esc_html__('Footer', 'wpbase'),
    ]);
}
add_action('after_setup_theme', 'wpbase2_setup');


function wpbase2_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'wpbase2'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'wpbase2'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'wpbase2_widgets_init');

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
 * custom_blocks
 */
include "inc/inc.blocks.php";
$customBlockBootstrap = new CustomBlockBootstrap();

/**
 * enqueue
 */
function enqueue_bootstrap()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/lib/bootstrap.min.css', [], "5.2.3", "all");
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/lib/bootstrap.bundle.min.js', array('jquery'));
}
add_action("wp_enqueue_scripts", "enqueue_bootstrap");

function enqueue_bootstrap_icons()
{
    wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/lib/bootstrap-icons-1.10.4/font/bootstrap-icons.css', [], "1.10.4", "all");
}
add_action("wp_enqueue_scripts", "enqueue_bootstrap_icons");


/**
 * wpbase_inc
 */
require get_template_directory() . '/inc/wp-reset_wp.php';
require get_template_directory() . '/inc/wp-disable_comment.php';
require get_template_directory() . '/inc/wp-nav_menu.php';
