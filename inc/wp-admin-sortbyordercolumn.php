<?php

// 230627 - show page order columns
add_filter('manage_pages_columns', 'add_order_column_to_pages');
function add_order_column_to_pages($columns)
{
    $columns['menu_order'] = 'Order';
    return $columns;
}

add_action('manage_pages_custom_column', 'show_order_column_values', 10, 2);
function show_order_column_values($column_name, $post_id)
{
    if ($column_name == 'menu_order') {
        $post = get_post($post_id);
        $order = $post->menu_order;
        echo $order;
    }
}

add_filter('manage_edit-page_sortable_columns', 'make_order_column_sortable');
function make_order_column_sortable($sortable_columns)
{
    $sortable_columns['menu_order'] = 'menu_order';
    return $sortable_columns;
}
