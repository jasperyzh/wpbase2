<?php
/**
 * add nav classes
 * for adding bootstrap-nav-classes to wp_nav_menu
 * https://stackoverflow.com/questions/26180688/how-to-add-class-to-link-in-wp-nav-menu
 */
function add_menu_link_class($atts, $item, $args)
{
    if (property_exists($args, 'wpbase2_link_class')) {
        $atts['class'] = $args->wpbase2_link_class;
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 10, 3);


function add_menu_list_item_class($classes, $item, $args)
{
    if (property_exists($args, 'wpbase2_list_item_class')) {
        $classes[] = $args->wpbase2_list_item_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 10, 3);
